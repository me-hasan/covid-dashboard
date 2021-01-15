<style>
    tspan{
        font-family: 'SolaimanLipi', 'Roboto', sans-serif;
        font-size: 11px;
        fill: #666666;
    }
</style>
<!-- Jquery js-->

<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>

<!-- Bootstrap4 js-->

<script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!--Othercharts js-->

<script src="{{ asset('assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

<!-- Circle-progress js-->

<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

<!-- Jquery-rating js-->

<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!--Sidemenu js-->

<script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- P-scroll js-->

<script src="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scrollbar/p-scroll.js') }}"></script>

<!--INTERNAL Peitychart js-->

<script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

<!--INTERNAL Apexchart js-->

<script src="{{ asset('assets/js/apexcharts.js') }}"></script>

<!--INTERNAL ECharts js-->

<script src="{{ asset('assets/plugins/echarts/echarts.js') }}"></script>

<!--INTERNAL Chart js -->

<script src="{{ asset('assets/plugins/chart/chart.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

<!-- INTERNAL Select2 js -->

<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>

<!--INTERNAL Moment js-->

<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

<!--INTERNAL Index js-->

<!--<script src="{{ asset('assets/js/index1.js') }}"></script>-->

<!-- Simplebar JS -->

<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>

<!-- INTERNAL Data tables -->

<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/js/datatables.js') }}"></script>

<!-- INTERNAL c3.js Charts js-->

<script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/charts-c3/c3-chart.js') }}"></script>

<!-- INTERNAL Highhcart -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!-- Custom js-->

<script src="{{ asset('assets/js/custom_iedcr.js?v=2') }}"></script>
<script src="{{ asset('assets/js/custom.js?v=2') }}"></script>

<!--
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/kelly.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
-->


<!-- start amcharts -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/ammap.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<script>
    function moveData(days, myFileList) {
        var n = Object.keys(myFileList).length;
        am4core.ready(function () {

            am4core.useTheme(am4themes_animated);
            var chart = am4core.create("iframe_country_wise_infected", am4charts.XYChart);

            chart.padding(40, 40, 40, 40);

            chart.numberFormatter.bigNumberPrefixes = [];

            var label = chart.plotContainer.createChild(am4core.Label);
            label.x = am4core.percent(97);
            label.y = am4core.percent(95);
            label.horizontalCenter = "right";
            label.verticalCenter = "middle";
            label.dx = -15;
            label.fontSize = 50;

            var playButton = chart.plotContainer.createChild(am4core.PlayButton);
            playButton.x = am4core.percent(97);
            playButton.y = am4core.percent(95);
            playButton.dy = -2;
            playButton.verticalCenter = "middle";
            playButton.events.on("toggled", function (event) {
                if (event.target.isActive) {
                    play();
                } else {
                    stop();
                }
            })

            var stepDuration = 100;

            var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.dataFields.category = "country";
            categoryAxis.renderer.minGridDistance = 1;
            categoryAxis.renderer.inversed = true;
            categoryAxis.renderer.grid.template.disabled = true;


            var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());
            valueAxis.min = 0;
            valueAxis.rangeChangeEasing = am4core.ease.linear;
            valueAxis.rangeChangeDuration = stepDuration;
            //valueAxis.extraMax = 0.1;

            var series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.categoryY = "country";
            series.dataFields.valueX = "count";
            series.tooltipText = "{valueX.value}"
            series.columns.template.strokeOpacity = 0;
            series.columns.template.column.cornerRadiusBottomRight = 5;
            series.columns.template.column.cornerRadiusTopRight = 5;
            series.interpolationDuration = stepDuration;
            series.interpolationEasing = am4core.ease.linear;

            var labelBullet = series.bullets.push(new am4charts.LabelBullet())
            labelBullet.label.horizontalCenter = "right";
            labelBullet.label.text = "{values.valueX.workingValue.formatNumber('#.0')}";
            labelBullet.label.textAlign = "end";
            labelBullet.label.dx = -10;

            chart.zoomOutButton.disabled = false;

            // as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
            series.columns.template.adapter.add("fill", function (fill, target) {
                return chart.colors.getIndex(target.dataItem.index);
            });

            var allDay = days;
            var dayNo = 0;

            label.text = allDay[dayNo];

            var interval;

            function play() {
                interval = setInterval(function () {
                    nextYear();
                }, stepDuration)
                nextYear();
            }

            function stop() {
                if (interval) {
                    clearInterval(interval);
                }
            }

            function nextYear() {
                dayNo++

                if (dayNo > n) {
                    dayNo = 0;
                    stop();
                }

                var newData = allData[allDay[dayNo]];
                var itemsWithNonZero = 0;
                for (var i = 0; i < chart.data.length; i++) {
                    chart.data[i].count = newData[i].count + 1;
                    if (chart.data[i].count > 0) {
                        itemsWithNonZero++;
                    }
                }

                if (dayNo == 0) {
                    series.interpolationDuration = stepDuration / 4;
                    valueAxis.rangeChangeDuration = stepDuration / 4;
                } else {
                    series.interpolationDuration = stepDuration;
                    valueAxis.rangeChangeDuration = stepDuration;
                }

                chart.invalidateRawData();
                label.text = allDay[dayNo];


                //categoryAxis.zoom({start: 0, end: itemsWithNonZero / categoryAxis.dataItems.length});
            }


            categoryAxis.sortBySeries = series;

            var allData = myFileList;

            //chart.data = JSON.parse(JSON.stringify(allData[allDay[dayNo]]));
            chart.data = allData[allDay[dayNo]];
            //categoryAxis.zoom({start: 0, end: 1 / chart.data.length});

            series.events.on("inited", function () {
                setTimeout(function () {
                    playButton.isActive = true; // this starts interval
                }, 2)
            })
        }); // end am4core.ready()
    }



    function asiaChart(data, date) {
        var chart = AmCharts.makeChart("iframe_country_wise_infected", {
            "type": "serial",
            "theme": "none",
            "categoryField": "country",
            "rotate": true,
            "startDuration": 1,
            "categoryAxis": {
                "gridPosition": "start",
                "position": "left",
                "fontSize": 15,
            },
            "trendLines": [],
            "graphs": [
                {
                    "balloonText": "Test:[[value]]",
                    "fillColorsField": "color",
                    "fillAlphas": 0.8,
                    "id": "AmGraph-1",
                    "lineAlpha": 0.2,
                    "title": "",
                    "type": "column",
                    "valueField": "count",
                    "balloonFunction": function (graphDataItem, graph) {
                        var value = graphDataItem.values.value;
                        var title = "প্রতি হাজারে পরীক্ষা(" + date + "):";
                        return "<b>" + title + "</b><br><span style='font-size:14px' class='g-v'> <b>" + value.toLocaleString('bn-BD') + "</b></span>";
                    },
                    "labelText": '[[balloonValue]]',
                },

            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
                    "position": "top",
                    "axisAlpha": 0,
                    "title": "প্রতি হাজারে পরীক্ষা(" + date + ")",
                    "minimum": 0,
                    "maximum": 100,
                    "labelFunction": function (value, valueText, valueAxis) {
                        return value.toLocaleString("bn-BD");
                    },
                }
            ],
            "allLabels": [],
            "balloon": {},
            "titles": [],
            "dataProvider": data,


        });

    }


    $.ajax({
        url: '{{url("/")}}/get-south-asia-data',
        type: 'GET',
        data: {},
        success: function (data) {

            var d = new Array();

            $.each(data.data, function (a, b) {

                if (b.count != 0) {
                    d.push(b);
                }
            });

            asiaChart(d, new Date(data.date).toLocaleDateString('bn-BD'));
            $('#last_date_2').html(" " + new Date(data.date).toLocaleDateString('bn', options));
        },
        error: function (error) {
            console.log(error);
        }
    });
</script>
@yield('scripts')
@stack('custom_script')
