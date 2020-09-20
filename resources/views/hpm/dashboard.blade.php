@extends('hpm.default')

@section('search_view')
    <div class="d-flex order-lg-2 ml-auto">
        <form action="{{ route('hpm.dashboard') }}" class="d-flex order-lg-12 ml-auto">
            @include('hpm.search_view')
        </form>
    </div>
@endsection

@section('content')
    <!--End Page header-->


    <!-- Start :: Disease Progression -->
    @include('hpm.dashboard.row_1')
    <!-- End :: Disease Progression -->

    <!-- Start :: TESTING SCENARIO -->
    @include('hpm.dashboard.row_2')
    <!-- End :: TESTING SCENARIO -->

    <!-- Start :: Risk Matrix -->
    @include('hpm.dashboard.row_6')
    <!-- End :: Risk Matrix -->

    <!-- Start :: IMPACT IN POPULATION -->
    @include('hpm.dashboard.row_3')
    <!-- End :: IMPACT IN POPULATION -->

    

    <!-- Start :: Hospital Condition -->
    @include('hpm.dashboard.row_4')
    <!-- End :: Hospital Condition -->

    <!-- Start :: Patient Care -->
    @include('hpm.dashboard.row_5')
    <!-- End :: Patient Care -->
    <!-- End app-content-->





    <div class="modal" id="modaldemo1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title"></h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="modalContent">
                </div>
            </div>
        </div>
    </div>

    <div class="d-none">
        <div id="hospital_popup_table_content" class="table-responsive">
            <table id="dtable_popup" class="table table-striped table-bordered text-nowrap">
                <thead>
                <tr>
                    <th class="border-bottom-0">Division</th>
                    <th class="border-bottom-0">District</th>
                    <th class="border-bottom-0">Total Infected</th>
                    <th class="border-bottom-0">Total Recovered</th>
                    <th class="border-bottom-0">Active Case</th>
                    <th class="border-bottom-0">Total Death</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Chittagong</td>
                    <td>Chittagong</td>
                    <td>14874</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rajshahi</td>
                    <td>Natore</td>
                    <td>6019</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Chittagong</td>
                    <td>Comilla</td>
                    <td>5727</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rajshahi</td>
                    <td>Bogra</td>
                    <td>5180</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Chittagong</td>
                    <td>Feni</td>
                    <td>5149</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Khulna</td>
                    <td>Khulna</td>
                    <td>4646</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Sylhet</td>
                    <td>Sylhet</td>
                    <td>4583</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Gazipur</td>
                    <td>4338</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Dhaka</td>
                    <td>4028</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rajshahi</td>
                    <td>Rajshahi</td>
                    <td>3532</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Chittagong</td>
                    <td>Cox's Bazar</td>
                    <td>3530</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Chittagong</td>
                    <td>Noakhali</td>
                    <td>3409</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Manikganj</td>
                    <td>3193</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Mymensingh</td>
                    <td>Mymensingh</td>
                    <td>2828</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Barisal</td>
                    <td>Barisal</td>
                    <td>2581</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Khulna</td>
                    <td>Jessore</td>
                    <td>2159</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Kishoreganj</td>
                    <td>2133</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Khulna</td>
                    <td>Kushtia</td>
                    <td>1970</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Chittagong</td>
                    <td>Brahmanbaria</td>
                    <td>1961</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Chittagong</td>
                    <td>Chandpur</td>
                    <td>1890</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Tangail</td>
                    <td>1835</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Gopalganj</td>
                    <td>1793</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rangpur</td>
                    <td>Dinajpur</td>
                    <td>1787</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Mymensingh</td>
                    <td>Netrakona (Netrokona)</td>
                    <td>1772</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rangpur</td>
                    <td>Rangpur</td>
                    <td>1736</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Sylhet</td>
                    <td>Sunamganj</td>
                    <td>1596</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Khulna</td>
                    <td>Satkhira</td>
                    <td>1569</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Chittagong</td>
                    <td>Lakshmipur</td>
                    <td>1501</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Rajbari</td>
                    <td>1438</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Faridpur</td>
                    <td>1384</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Sylhet</td>
                    <td>Habiganj</td>
                    <td>1249</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Khulna</td>
                    <td>Magura</td>
                    <td>1224</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Shariatpur</td>
                    <td>1139</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Barisal</td>
                    <td>Patuakhali</td>
                    <td>1081</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Barisal</td>
                    <td>Jhalakati (Jhalokati)</td>
                    <td>1075</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Sylhet</td>
                    <td>Maulvi Bazar (Moulvibazar)</td>
                    <td>1069</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rajshahi</td>
                    <td>Naogaon</td>
                    <td>990</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Mymensingh</td>
                    <td>Jamalpur</td>
                    <td>982</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Madaripur</td>
                    <td>919</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Khulna</td>
                    <td>Narail</td>
                    <td>898</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Barisal</td>
                    <td>Pirojpur</td>
                    <td>871</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Khulna</td>
                    <td>Chuadanga</td>
                    <td>816</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rajshahi</td>
                    <td>Jaipurhat (Joypurhat)</td>
                    <td>780</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rajshahi</td>
                    <td>Sirajganj</td>
                    <td>780</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rajshahi</td>
                    <td>Pabna</td>
                    <td>765</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Khulna</td>
                    <td>Bagerhat</td>
                    <td>694</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Narayanganj</td>
                    <td>693</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Barisal</td>
                    <td>Barguna</td>
                    <td>684</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Chittagong</td>
                    <td>Rangamati</td>
                    <td>677</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rangpur</td>
                    <td>Gaibandha</td>
                    <td>671</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rangpur</td>
                    <td>Nilphamari</td>
                    <td>647</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Narsingdi</td>
                    <td>628</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Chittagong</td>
                    <td>Bandarban</td>
                    <td>586</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Barisal</td>
                    <td>Bhola</td>
                    <td>564</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Khulna</td>
                    <td>Meherpur</td>
                    <td>562</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Chittagong</td>
                    <td>Khagrachhari</td>
                    <td>550</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rangpur</td>
                    <td>Kurigram</td>
                    <td>529</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rajshahi</td>
                    <td>Chapai Nawabganj</td>
                    <td>519</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Khulna</td>
                    <td>Jhenaidah (Jhenida)</td>
                    <td>509</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rangpur</td>
                    <td>Thakurgaon</td>
                    <td>427</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rangpur</td>
                    <td>Lalmonirhat</td>
                    <td>419</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Rangpur</td>
                    <td>Panchagarh</td>
                    <td>345</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Mymensingh</td>
                    <td>Sherpur</td>
                    <td>326</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Dhaka</td>
                    <td>Munshiganj</td>
                    <td>243</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('scripts')

    <script type="text/javascript">

    </script>

@endsection

