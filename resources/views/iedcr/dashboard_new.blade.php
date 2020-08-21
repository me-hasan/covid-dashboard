@extends('iedcr.default')

@section('content')

<!-- Row-1 -->
@include('iedcr.dashboard.row_1')
<!-- End Row-1 -->

<!-- Row-2 -->
@include('iedcr.dashboard.row_2')
<!-- End Row-2 -->

<!-- Row-3 -->
@include('iedcr.dashboard.row_3')
<!-- End Row-3 -->

<!-- Row-4 -->
@include('iedcr.dashboard.row_4')
<!-- End Row-4 -->

<!-- Row-5 -->
@include('iedcr.dashboard.row_5')
<!-- End Row-5 -->

<!-- Row-6 -->
@include('iedcr.dashboard.row_6')
<!-- End Row-6 -->

<!-- Row-7 -->
@include('iedcr.dashboard.row_7')
<!-- End Row -7 -->







@endsection

@section('scripts')

    <script type="text/javascript">

        

        // Modal Content Function
        function modalContent_1(modalLabel, modalType, yAxisLabel, xAxisLabel){
            // Show Modal Lable
            $('.modal-title').html(modalLabel);

            if(modalType == 'bar'){

                var barChartDataSource = [{
                    name: 'Infected',
                    data: [ 
                        <?php 
                          foreach($hda_time_series as $row){
                            
                              $date_arr = date('d-M', strtotime($row->date));
                        ?>      
                              ["<?=$date_arr?>",<?=$row->infected?>],

                        <?php  } ?>
                            
                    ]
                }];
                var barModalContainer = 'modalContent2';

            }else if(modalType == 'line'){
                <?php 

                  $div_arr = $infected_arr =  array();

                  foreach($hda_population_wise_infected as $row){
                    
                      $div_arr[] = $row->division;
                      $infected_arr[] = $row->total_infected;
                  }
                    $infected = implode(",", $infected_arr);
                   
                ?>

                var lineChartDataSource = [<?php echo $infected;?>]//responseData.line_chart_data;
                var lineChartDataCategory = <?php echo json_encode($div_arr);?> ;
                var lineModalContainer = 'modalContent2';

            }else if(modalType == 'both'){

                var barChartDataSource = [{
                    name: 'Infected',
                    data: responseData.bar_chart
                }];
                var lineChartDataSource = responseData.line_chart_data;
                var lineChartDataCategory = responseData.line_chart_label;

                var barModalContainer = 'modalContentLeft';
                var lineModalContainer = 'modalContentRight';

                $('#modal-loading').remove();
            }

            //alert(responseData.bar_chart);
            if(modalType == 'bar' || modalType == 'both'){
                Highcharts.chart(barModalContainer, {
                    chart: {
                        type: 'column',
                        /*height: height,
                        width: width*/
                    },
                    title: {
                        text: ''
                    },
                    credits:{
                        enabled:false
                    },
                    subtitle: {
                        text: ''
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: '"SolaimanLipi", Arial, sans-serif'
                            }
                        },
                        title: {
                            text: xAxisLabel
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: yAxisLabel
                        }
                    },
                    colors: ["#858796"],
                    legend: {
                        enabled: false
                    },
                    series: barChartDataSource
                });
            }
            if(modalType == 'line' || modalType == 'both'){
                Highcharts.chart(lineModalContainer, {
                    title: {
                        text: ''
                    },
                    credits:{
                        enabled:false
                    },
                    subtitle: {
                        text: ''
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: '"SolaimanLipi", Arial, sans-serif'
                            }
                        },
                        title: {
                            text: xAxisLabel
                        },
                        categories: lineChartDataCategory
                    },
                    yAxis: {
                        //min: 0,
                        title: {
                            text: yAxisLabel
                        }
                    },
                    colors: ["#A5479B"],
                    legend: {
                        enabled: false
                    },
                    series: [{
                        name: yAxisLabel,
                        data: lineChartDataSource
                    }]
                });
            }
            /*}
          };
          xhttp.open("POST", "modal-data.php", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(formParams);*/
        }


        // Modal Content Function
        function modalContent(modalLabel, modalType, yAxisLabel, xAxisLabel){
            // Show Modal Lable
            $('.modal-title').html(modalLabel);

            //AJAX
            /*var formParams = "modal_type="+modalType+"&isAjax=true";

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
             var responseData = JSON.parse(this.responseText);*/


            if(modalType == 'bar'){

                var barChartDataSource = [{
                    name: 'Infected',
                    data: [["08Jul",3201],["08Jul",3489],["09Jul",3360],["10Jul",2949],["11Jul",2686],["12Jul",2666],["13Jul",3099],["14Jul",3163],["15Jul",3533],["16Jul",2733]]
                }];
                var barModalContainer = 'modalContent';

            }else if(modalType == 'line'){

                var lineChartDataSource = [3524,2736,3706,1862,1628,5580,4703,4910,1796,1940]//responseData.line_chart_data;
                var lineChartDataCategory = ["08Jul","08Jul","09Jul","10Jul","11Jul","12Jul","13Jul","14Jul","15Jul","16Jul"];
                var lineModalContainer = 'modalContent';

            }else if(modalType == 'both'){

                var barChartDataSource = [{
                    name: 'Infected',
                    data: responseData.bar_chart
                }];
                var lineChartDataSource = responseData.line_chart_data;
                var lineChartDataCategory = responseData.line_chart_label;

                var barModalContainer = 'modalContentLeft';
                var lineModalContainer = 'modalContentRight';

                $('#modal-loading').remove();
            }

            //alert(responseData.bar_chart);
            if(modalType == 'bar' || modalType == 'both'){
                Highcharts.chart(barModalContainer, {
                    chart: {
                        type: 'column',
                        /*height: height,
                        width: width*/
                    },
                    title: {
                        text: ''
                    },
                    credits:{
                        enabled:false
                    },
                    subtitle: {
                        text: ''
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: '"SolaimanLipi", Arial, sans-serif'
                            }
                        },
                        title: {
                            text: xAxisLabel
                        }
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: yAxisLabel
                        }
                    },
                    colors: ["#858796"],
                    legend: {
                        enabled: false
                    },
                    series: barChartDataSource
                });
            }
            if(modalType == 'line' || modalType == 'both'){
                Highcharts.chart(lineModalContainer, {
                    title: {
                        text: ''
                    },
                    credits:{
                        enabled:false
                    },
                    subtitle: {
                        text: ''
                    },
                    xAxis: {
                        type: 'category',
                        labels: {
                            rotation: -45,
                            style: {
                                fontSize: '13px',
                                fontFamily: '"SolaimanLipi", Arial, sans-serif'
                            }
                        },
                        title: {
                            text: xAxisLabel
                        },
                        categories: lineChartDataCategory
                    },
                    yAxis: {
                        //min: 0,
                        title: {
                            text: yAxisLabel
                        }
                    },
                    colors: ["#A5479B"],
                    legend: {
                        enabled: false
                    },
                    series: [{
                        name: yAxisLabel,
                        data: lineChartDataSource
                    }]
                });
            }
            /*}
          };
          xhttp.open("POST", "modal-data.php", true);
          xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhttp.send(formParams);*/
        }
        /*$('#case_analysis_dtable').DataTable( {
            responsive: true,
            "pageLength": 8,
            "order": [[ 2, "desc" ]],
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_',
            },
            columnDefs: [{
                className: "text-center",
                targets: "_all"
            }],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal( {
                        header: function ( row ) {
                            var data = row.data();
                            return 'Details for '+data[0]+' '+data[1];
                        }
                    } ),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                        tableClass: 'table border mb-0'
                    } )
                }
            }
        });*/
    </script>

@endsection
