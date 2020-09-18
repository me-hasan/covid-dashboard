<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">IMPACT IN POPULATION</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <div id="death_impact_bar"></div>
                        <div class="card-body">
                            <h5 class="card-title">Insight</h5>
                            <p class="card-text">
                                Content will place here.
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div id="age_wise_death_distribution"></div>
                        <div class="card-body">
                            <h5 class="card-title">Insight</h5>
                            <p class="card-text">
                                Content will place here.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@push('custom_script')
    <script>
        <?php
        use Illuminate\Support\Facades\DB;$getNationalInfectedAge = DB::select("select (A.zero_to_ten/A.Total)*100 as '_0_10',
        (A.elv_to_twenty/A.Total)*100 AS '_11_20',
        (A.twentyone_to_thirty/A.Total)*100 as '_21_30',
        (A.thirtyone_to_forty/A.Total)*100 as '_31_40',
        (A.fortyone_to_fifty/A.Total)*100 as '_41_50',
        (A.fiftyone_to_sixty/A.Total)*100 as '_51_60', (A.sixtyone_to_hundred/A.Total)*100 as '_60_Plus', updt_date
    from
    (SELECT
        max(date_of_test) as 'updt_date',
        SUM(IF(age < 10,1,0)) as 'zero_to_ten',
        SUM(IF(age BETWEEN 11 and 20,1,0)) as 'elv_to_twenty',
        SUM(IF(age BETWEEN 21 and 30,1,0)) as 'twentyone_to_thirty',
        SUM(IF(age BETWEEN 31 and 40,1,0)) as 'thirtyone_to_forty',
        SUM(IF(age BETWEEN 41 and 50,1,0)) as 'fortyone_to_fifty',
        SUM(IF(age BETWEEN 51 and 60,1,0)) as 'fiftyone_to_sixty',
        SUM(IF(age BETWEEN 61 and 100,1,0)) as 'sixtyone_to_hundred',
        SUM(IF(age BETWEEN 0 and 100,1,0)) as 'Total'
        FROM infected_person)
    as A");

        $_ageWiseInfectData = array();

        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_0_10) ? (float)$getNationalInfectedAge[0]->_0_10 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_11_20) ? (float)$getNationalInfectedAge[0]->_11_20 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_21_30) ? (float)$getNationalInfectedAge[0]->_21_30 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_31_40) ? (float)$getNationalInfectedAge[0]->_31_40 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_41_50) ? (float)$getNationalInfectedAge[0]->_41_50 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_51_60) ? (float)$getNationalInfectedAge[0]->_51_60 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_60_Plus) ? (float)$getNationalInfectedAge[0]->_60_Plus : 0;
        $_ageWiseInfectData  = implode(",", $_ageWiseInfectData);

        //Death section

        $getAgeDeath = DB::table('deathnationalagedistribution')->groupby('ageRange')->get();
        $totalDeath = $getAgeDeath->sum('TotalDeath');
        $deathAge = [];
        $i=0;
        foreach ($getAgeDeath as $key => $d) {
            if($i <= 6){
                $calcPercentage = ($d->TotalDeath / $totalDeath) * 100;
                array_push($deathAge, number_format($calcPercentage,2));
                $i++;
            }else{
                break;
            }
        }

        $deathAge  = implode(",", $deathAge);
        ?>

        // Death Impact Bar
        Highcharts.chart('death_impact_bar', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            credits:{
                enabled:false
            },
            legend:{
                enabled:true
            },
            yAxis: {
                title: {
                    text: ''
                },
                labels: {
                    formatter: function() {
                        return this.value;
                    }
                }
            },
            xAxis: {
                categories: ["Death:","Death:","Death:", "Death:"],
                labels: {
                    enabled: false
                }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                },
                series: {
                    pointWidth: 30
                }
            },
            colors: ['#c94b7d', '#7d5f9d', '#817376', '#b25b3f'],
            series: [{
                name: 'Doctor',
                data: [5000, null, null, null]

            }, {
                name: 'Police',
                data: [null, 4084, null]

            }, {
                name: 'Banker',
                data: [null, null, 2098, null]

            }, {
                name: 'Nurse',
                data: [null, null, null, 3500]

            }]
        });

        // Age Wise Death Distribution
        Highcharts.chart('age_wise_death_distribution', {
            chart: {
                type: 'bar'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            credits:{
                enabled:false
            },
            legend:{
                enabled:true
            },
            yAxis: {
                title: {
                    text: 'Age'
                },
                labels: {
                    formatter: function() {
                        return this.value;
                    }
                }
            },
            xAxis: {
                categories: ["0-10","11-20","21-30","31-40","41-50","51-60","61+"]
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>',
                /*valueSuffix: ' cm',
                shared: true*/
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            colors: ['#ef4b4b', '#38cb89'],
            series: [{
                name: 'Death',
                data: [<?php echo $deathAge;?>]

            }, {
                name: 'Infected Person',
                data: [<?php echo $_ageWiseInfectData;?>],

            }]
        });
    </script>
@endpush
