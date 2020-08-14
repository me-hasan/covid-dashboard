@extends('iedcr.default')
@section('bread_crumb_active','Risk Zone Analysis')
@section('content')
   {{--
    <!-- Row-1 -->
<div class="row">
    <div class="col-xl-10 col-lg-6 col-md-6 col-xm-12">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Current Zone Status</h3>
                    <div class="card-options">
                        <i class="fa fa-table mr-2 text-success"></i>
                        <i class="fa fa-download text-danger"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row top-zone">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <!--<div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h4 class=" mb-1 ">Red Zone</h4>
                                    <h2 class="mb-1 number-font">10,500</h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-danger">76%</span>
                                </div>
                            </div>-->
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class="mb-1">Red Zone</h5>
                                    <h2 class="mb-1 number-font"><?php echo $_currentStatusData[count($_currentStatusData)-1][1];?></h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-danger"><?php echo number_format($_currentStatusData[count($_currentStatusData)-1][2], 0);?>%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class=" mb-1">Yellow Zone</h5>
                                    <h2 class="mb-1 number-font"><?php echo $_currentStatusData[count($_currentStatusData)-1][3];?></h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-warning"><?php echo number_format($_currentStatusData[count($_currentStatusData)-1][4], 0);?>%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class=" mb-1">Green Zone</h5>
                                    <h2 class="mb-1 number-font"><?php echo $_currentStatusData[count($_currentStatusData)-1][5];?></h2>
                                    <small class="fs-12 text-muted">Compared to Week Day</small>
                                    <span class="ratio bg-success"><?php echo number_format($_currentStatusData[count($_currentStatusData)-1][6], 0);?>%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Row -->
        <div class="row">
            <div class="col-xl-3 col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Last Zone Status</h3>
                        <div class="card-options">
                            <i class="fa fa-download text-danger"></i>
                        </div>
                    </div>
                    <div class="card-body last-zone-status">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-danger text-center">Red Zone</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Red Zone</h5>
                                        <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[1][0];?></h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-danger d-none">76%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                            <h6 class="text-warning text-center">Yellow Zone</h6>
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class=" mb-1">Yellow Zone</h5>
                                    <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[3][0];?></h2>
                                    <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                    <span class="ratio bg-warning d-none">35%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
                            <h6 class="text-success text-center">Green Zone</h6>
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <h5 class=" mb-1">Green Zone</h5>
                                    <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[5][0];?></h2>
                                    <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                    <span class="ratio bg-success d-none">62%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Change Status</h3>
                        <div class="card-options">
                            <i class="fa fa-table mr-2 text-success"></i>
                            <i class="fa fa-download text-danger"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row top-zone">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-danger text-center">Remain in Red zone</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Red Zone</h5>
                                        <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[1][1];?></h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-danger d-none">76%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-warning text-center">Converted into Yellow</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Yellow Zone</h5>
                                        <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[3][1];?></h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-warning d-none">35%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-success text-center">Converted into Green</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Green Zone</h5>
                                        <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[5][1];?></h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-success d-none">62%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row top-zone">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-danger text-center">Converted into Red</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Red Zone</h5>
                                        <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[1][2];?></h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-danger d-none d-none">76%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-warning text-center">Converted into Yellow</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Yellow Zone</h5>
                                        <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[3][2];?></h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-warning d-none">35%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-success text-center">Remain in Green zone</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Green Zone</h5>
                                        <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[5][2];?></h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-success d-none">62%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row top-zone">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-danger text-center">Converted into Red</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Red Zone</h5>
                                        <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[1][3];?></h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-danger d-none">76%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-warning text-center">Converted into Yellow</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Yellow Zone</h5>
                                        <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[3][3];?></h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-warning d-none">35%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                                <h6 class="text-success text-center">Remain in Green zone</h6>
                                <div class="card overflow-hidden dash1-card border-0">
                                    <div class="card-body">
                                        <h5 class=" mb-1">Green Zone</h5>
                                        <h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[5][3];?></h2>
                                        <small class="fs-12 text-muted d-none">Compared to Week Day</small>
                                        <span class="ratio bg-success d-none">62%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Row -->
    </div>
    <div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Source</h3>
            </div>
            <div class="card-body">
                <div class="mb-9 mt-9 pb-5 pt-5">Content is comming soon</div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Short Description</h3>
            </div>
            <div class="card-body">
                <div class="mb-9 mt-9 pb-6 pt-8">Content is comming soon</div>
            </div>
        </div>
    </div>
</div>
<!-- End Row-1 -->

<!-- Row-2 -->
<div class="row">
    <div class="col-xl-5 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Weekly Change</h3>
                <div class="card-options">
                    <i class="fa fa-download text-danger"></i>
                </div>
            </div>
            <div class="card-body">
                <div id="weekly_zone_change"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-7 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Zone Information​</h3>
                <div class="card-options">
                    <i class="fa fa-download text-danger"></i>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">
                        <thead>
                        <tr>
                            <?php foreach($_dataTableLabels as $_tableHead):?>
                            <th class="border-bottom-0"><?php echo $_tableHead; ?></th>
                            <?php endforeach;?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($_zoneInformationDataSet as $_rowKey => $_rowDataSet):?>
                        <?php if($_rowKey == 0) continue; ?>
                        <tr>
                            <?php foreach($_rowDataSet as $_columnData):?>
                            <td><?php echo ($_columnData == NULL)?"-":$_columnData; ?></td>
                            <?php endforeach;?>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row-2 -->--}}

<!-- Row-3 -->
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-body" id="iframe_riskdata"></div>
        </div>
    </div>
</div>
<!-- End Row-3 -->
@endsection

@section('scripts')

  <script type="text/javascript">


        $(document).ready(function(){
            $('#iframe_riskdata').html('<iframe id="rtIframeData" width="100%" height="800" src="https://arcg.is/ryTjT0" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
        });
    </script>

@endsection
