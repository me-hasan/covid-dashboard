<?php

namespace App\Http\Controllers\Iedcr;

use DB;
use App\Http\Controllers\Controller;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Http\Request;

class ConformanceController extends Controller
{
    public function conformance_analysis(Request $request) {
        $getConformanceData = $this->getAllConformanceData($request);
        // dd($getConformanceData);
        return view('iedcr.conformance-analysis-new',compact('getConformanceData'));
    }

    private function getAllConformanceData($request){
        $cameraDetailsInfo = [];
        $totalMask = 0;
        $totalNonMask = 0;

        if ($request->from_date && $request->to_date){
            $from_date = $request->from_date;
            $to_date   = $request->to_date;

            $getAllCameraData = $this->curlGetRequest('find-all-camera');
            if($getAllCameraData['error'] == false){
                $getData =$getAllCameraData['data'];
                
                if(sizeof($getData) > 0){
                    $i=0;
                    foreach ($getData as $key => $camera) {
                        $perCameraMask = 0;
                        $perCameraNonMask = 0;

                        $getCameraData = $this->curlPostRequest('mask-data-by-date',['cameraId' => $camera['camera_id'], 'fromDate' => $from_date, 'toDate' => $to_date]);
                        if($getCameraData->error == false){
                            $perCameraMask += $getCameraData->data->masked;
                            $perCameraNonMask += $getCameraData->data->nonMasked;
                        }
                        $totalMask += $perCameraMask;
                        $totalNonMask += $perCameraNonMask;

                        $cameraDetailsInfo[$i]['camera_id'] = $camera['camera_id'];
                        $cameraDetailsInfo[$i]['mask_count'] = $perCameraMask;
                        $cameraDetailsInfo[$i]['non_mask_count'] = $perCameraNonMask;

                        $i++;
                    }
                }
            }
            
        }elseif($request->from_date || $request->to_date){
            $sdate = $request->from_date != '' ? $request->from_date : $request->to_date;

            $getCameraData = $this->curlPostRequest('camera-data-by-date',['date' => $sdate]);
            if($getCameraData->error == false){
                if(sizeof($getCameraData->data) > 0){
                    $i=0;
                    foreach ($getCameraData->data as $key => $cam) {
                        if($cam->cameraId != ''){
                            $totalMask += $cam->masked;
                            $totalNonMask += $cam->non_masked;

                            $cameraDetailsInfo[$i]['camera_id'] = $cam->cameraId;
                            $cameraDetailsInfo[$i]['mask_count'] = $cam->masked;
                            $cameraDetailsInfo[$i]['non_mask_count'] = $cam->non_masked;

                            $i++;
                        }
                    }
                }
            }
        }else{
            $getAllCameraData = $this->curlGetRequest('find-all-camera');
            if($getAllCameraData['error'] == false){
                $getData =$getAllCameraData['data'];
                
                if(sizeof($getData) > 0){
                    $i=0;
                    foreach ($getData as $key => $camera) {
                        $perCameraMask = 0;
                        $perCameraNonMask = 0;

                        // array_push($cameraIds, $camera['camera_id']);

                        $getCameraData = $this->curlPostRequest('mask-data-by-camera',['cameraId' => $camera['camera_id']]);
                        if($getCameraData->error == false){
                            if(sizeof($getCameraData->data) > 0){
                                foreach ($getCameraData->data as $key => $cam) {
                                    $perCameraMask += $cam->masked;
                                    $perCameraNonMask += $cam->non_masked;
                                }
                            }
                        }
                        $totalMask += $perCameraMask;
                        $totalNonMask += $perCameraNonMask;

                        $cameraDetailsInfo[$i]['camera_id'] = $camera['camera_id'];
                        $cameraDetailsInfo[$i]['mask_count'] = $perCameraMask;
                        $cameraDetailsInfo[$i]['non_mask_count'] = $perCameraNonMask;

                        $i++;
                    }
                }
            }
        }
        return $this->generateConformanceData($totalMask,$totalNonMask,$cameraDetailsInfo);
    }

    private function generateConformanceData($totalMask,$totalNonMask,$cameraDetailsInfo){
        $cameraIds = [];
        $cameraMaskData = [];

        usort($cameraDetailsInfo, function($a, $b)
        {
            return strcmp($a['camera_id'], $b['camera_id']);
        });

        foreach ($cameraDetailsInfo as $key => $cam) {
            array_push($cameraIds, $cam['camera_id']);

            $mask_count = $cam['mask_count'];
            $non_mask_count = $cam['non_mask_count'];
            $total_count = $mask_count + $non_mask_count;
            $get_camera_masked_percentage = ($mask_count / $total_count) * 100;
            $camera_masked_percentage = number_format($get_camera_masked_percentage, 2, '.', '');
            array_push($cameraMaskData, $camera_masked_percentage);
        }

        // dd($cameraIds);

        $data['camera_ids'] = $cameraIds;
        $data['camera_mask_data'] = $cameraMaskData;
        $data['total_detection'] = $totalDetection = $totalMask + $totalNonMask;
        $data['total_masked_face'] = $totalMask;
        $data['total_non_masked_face'] = $totalNonMask;
        $masked_percentage = ($totalMask / $totalDetection) * 100;
        $data['masked_percentage'] = number_format($masked_percentage, 2, '.', '');

        return $data;

    }

    public function generateConformanceSummaryExcel(Request $request){
        $getConformanceData = $this->getAllConformanceData($request);

        $list = collect([
          [
          'Total Face' => $getConformanceData['total_detection'],
          'No of Masked Face' => $getConformanceData['total_masked_face'],
          'No of Non-Masked Face' => $getConformanceData['total_non_masked_face'],
          'percentage of Wearing Mask' => $getConformanceData['masked_percentage'].'%'
        ]
      ]);

      return (new FastExcel($list))->download('conformance_summary.xlsx');
    }

    public function generateCameraWiseDataExcel(Request $request){
        $getConformanceData = $this->getAllConformanceData($request);

        $i=0;
        $data = [];
        if(sizeof($getConformanceData['camera_ids']) > 0){
          foreach ($getConformanceData['camera_ids'] as $key => $cam) {
              $data[$i]['Camera Id'] =  $cam;
              $data[$i]['percentage of Wearing Mask'] =  $getConformanceData['camera_mask_data'][$i].'%';
              $i++;
          }
        }
        $list = collect($data);

      return (new FastExcel($list))->download('camera_wise_conformance_summary.xlsx');
    }

    public function curlGetRequest($endPoint)
    {
        $url = 'http://ec2-15-206-174-242.ap-south-1.compute.amazonaws.com:4000/api/'.$endPoint;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $response = json_decode($response, true);
        curl_close($ch);

        return $response;
    }

    public function curlPostRequest($endPoint, $formParams)
    {
        $url = 'http://ec2-15-206-174-242.ap-south-1.compute.amazonaws.com:4000/api/'.$endPoint;
        $formParams = json_encode($formParams);        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);  
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $formParams);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Accept: application/json'));

        $response = json_decode(curl_exec($ch));
        curl_close ($ch);

        return $response;
    }

}
