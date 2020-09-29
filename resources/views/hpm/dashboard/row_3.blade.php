<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title b1">জনসংখ্যায় প্রভাব</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- <div class="col-xl-6 col-md-12">
                        <div id="death_impact_bar"></div>
                        <div class="card-body">
                            <h5 class="card-title b1">বিশ্লেষণ</h5>
                            <p class="card-text">
                                Content will place here.
                            </p>
                        </div>
                    </div> -->
                    <div class="col-xl-4 col-md-12">
                    	<h5 class="card-title b1">১লা সেপ্টেম্বর - ২৯শে সেপ্টেম্বর</h5>
                        <div id="age_wise_death_distribution"></div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                    	<h5 class="card-title b1">১লা আগস্ট - ৩১শে আগস্ট</h5>
                        <div id="age_wise_death_distribution_1"></div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                    	<h5 class="card-title b1">৬ই মার্চ - ৩১শে জুলাই</h5>
                        <div id="age_wise_death_distribution_2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card-body">
                            <h5 class="card-title b1">বর্ণনা</h5>
                            <p class="card-text b1">
                                {{ $des_9->description_beng }}
                            </p>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card-body">
                            <h5 class="card-title b1">বিশ্লেষণ</h5>
                            <p class="card-text b1">{{ $des_9->insight_beng }}</p>
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
        use Illuminate\Support\Facades\DB;$getNationalInfectedAge = DB::select("select A.zero_to_ten/5 as '_0_10',
        A.elv_to_twenty/5 AS '_11_20',
        A.twentyone_to_thirty/5 as '_21_30',
        A.thirtyone_to_forty/5 as '_31_40',
        A.fortyone_to_fifty/5 as '_41_50',
        A.fiftyone_to_sixty/5 as '_51_60',
        A.sixtyone_to_hundred/5 as '_60_Plus', updt_date
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
    as A;");

        $_ageWiseInfectData = array();

        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_0_10) ? (int)$getNationalInfectedAge[0]->_0_10 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_11_20) ? (int)$getNationalInfectedAge[0]->_11_20 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_21_30) ? (int)$getNationalInfectedAge[0]->_21_30 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_31_40) ? (int)$getNationalInfectedAge[0]->_31_40 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_41_50) ? (int)$getNationalInfectedAge[0]->_41_50 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_51_60) ? (int)$getNationalInfectedAge[0]->_51_60 : 0;
        $_ageWiseInfectData[] = isset($getNationalInfectedAge[0]->_60_Plus) ? (int)$getNationalInfectedAge[0]->_60_Plus : 0;
        $_ageWiseInfectData  = implode(",", $_ageWiseInfectData);

        //Death section

        // $getAgeDeath = DB::table('deathnationalagedistribution')->groupby('ageRange')->get();
        // $totalDeath = $getAgeDeath->sum('TotalDeath');
        $getAgeDeath = DB::select("select date, ageRange, TotalDeath from deathnationalagedistribution where date = (select max(date) from deathnationalagedistribution )");
//        dd($getAgeDeath);
        $deathAge = [];
        $i=0;
        foreach ($getAgeDeath as $key => $d) {
            if($i <= 6){
                //$calcPercentage = ($d->TotalDeath / $totalDeath) * 100;
                array_push($deathAge, $d->TotalDeath);
                $i++;
            }else{
                break;
            }
        }

        $deathAge  = implode(",", $deathAge);

        //Code by Robi
        $current_infecteds =
        DB::select("select A.zero_to_ten as 'infected_0_10', 
            A.elv_to_twenty as 'infected_11_20',
            A.twentyone_to_thirty as 'infected_21_30',
            A.thirtyone_to_forty as 'infected_31_40',
            A.fortyone_to_fifty as 'infected_41_50', 
            A.fiftyone_to_sixty as 'infected_51_60', 
            A.sixtyone_to_hundred as 'infected_60_plus'
            from
            (SELECT
                max(test_date) as 'updt_date',
                SUM(IF(age < 10,1,0)) as 'zero_to_ten',
                SUM(IF(age BETWEEN 11 and 20,1,0)) as 'elv_to_twenty',
                SUM(IF(age BETWEEN 21 and 30,1,0)) as 'twentyone_to_thirty',
                SUM(IF(age BETWEEN 31 and 40,1,0)) as 'thirtyone_to_forty',
                SUM(IF(age BETWEEN 41 and 50,1,0)) as 'fortyone_to_fifty',
                SUM(IF(age BETWEEN 51 and 60,1,0)) as 'fiftyone_to_sixty',
                SUM(IF(age BETWEEN 61 and 100,1,0)) as 'sixtyone_to_hundred',
                SUM(IF(age BETWEEN 0 and 100,1,0)) as 'Total'
                FROM infected_person
                where month(date_of_test) = month(curdate())
                and year(date_of_test) = year(curdate()))
            as A;");


        $current_deaths = DB::select("select * from death_national_age_hpm where month(date) = month(curdate()) and year(date) = year(curdate())");

        $cur_infected = $cur_death = [];
        foreach ($current_infecteds as $key => $current_infected) {
            array_push($cur_infected, $current_infected->infected_0_10);
            array_push($cur_infected, $current_infected->infected_11_20);
            array_push($cur_infected, $current_infected->infected_21_30);
            array_push($cur_infected, $current_infected->infected_31_40);
            array_push($cur_infected, $current_infected->infected_41_50);
            array_push($cur_infected, $current_infected->infected_51_60);
            array_push($cur_infected, $current_infected->infected_60_plus);
        }
        $cur_infected  = implode(",", $cur_infected);

        foreach ($current_deaths as $key => $current_death) {
            array_push($cur_death, $current_death->total_death);
        }
        $cur_death  = implode(",", $cur_death);


        $pre_month_infecteds = DB::select("
            select A.zero_to_ten as 'infected_0_10', 
            A.elv_to_twenty as 'infected_11_20',
            A.twentyone_to_thirty as 'infected_21_30',
            A.thirtyone_to_forty as 'infected_31_40',
            A.fortyone_to_fifty as 'infected_41_50', 
            A.fiftyone_to_sixty as 'infected_51_60', 
            A.sixtyone_to_hundred as 'infected_60_plus'
            from
            (SELECT
                max(test_date) as 'updt_date',
                SUM(IF(age < 10,1,0)) as 'zero_to_ten',
                SUM(IF(age BETWEEN 11 and 20,1,0)) as 'elv_to_twenty',
                SUM(IF(age BETWEEN 21 and 30,1,0)) as 'twentyone_to_thirty',
                SUM(IF(age BETWEEN 31 and 40,1,0)) as 'thirtyone_to_forty',
                SUM(IF(age BETWEEN 41 and 50,1,0)) as 'fortyone_to_fifty',
                SUM(IF(age BETWEEN 51 and 60,1,0)) as 'fiftyone_to_sixty',
                SUM(IF(age BETWEEN 61 and 100,1,0)) as 'sixtyone_to_hundred',
                SUM(IF(age BETWEEN 0 and 100,1,0)) as 'Total'
                FROM infected_person
                where month(date_of_test) = month(curdate()- INTERVAL 1 MONTH)
                and year(date_of_test) = year(curdate()- INTERVAL 1 MONTH))
            as A;");
        $pre_month_deaths = DB::select("select * from death_national_age_hpm where month(date) = month(curdate()- INTERVAL 1 MONTH) and year(date) = year(curdate()- INTERVAL 1 MONTH)");

        $previous_month__infected = $previous_month__death = [];
        foreach ($pre_month_infecteds as $key => $pre_month_infected) {
            array_push($previous_month__infected, $pre_month_infected->infected_0_10);
            array_push($previous_month__infected, $pre_month_infected->infected_11_20);
            array_push($previous_month__infected, $pre_month_infected->infected_21_30);
            array_push($previous_month__infected, $pre_month_infected->infected_31_40);
            array_push($previous_month__infected, $pre_month_infected->infected_41_50);
            array_push($previous_month__infected, $pre_month_infected->infected_51_60);
            array_push($previous_month__infected, $pre_month_infected->infected_60_plus);
        }
        $previous_month__infected  = implode(",", $previous_month__infected);

        foreach ($pre_month_deaths as $key => $pre_month_death) {
            array_push($previous_month__death, $pre_month_death->total_death);
        }
        $previous_month__death  = implode(",", $previous_month__death);

        $pre_pre_month_infecteds = DB::select(" 
            select A.zero_to_ten as 'infected_0_10', 
            A.elv_to_twenty as 'infected_11_20',
            A.twentyone_to_thirty as 'infected_21_30',
            A.thirtyone_to_forty as 'infected_31_40',
            A.fortyone_to_fifty as 'infected_41_50', 
            A.fiftyone_to_sixty as 'infected_51_60', 
            A.sixtyone_to_hundred as 'infected_60_plus'
            from
            (SELECT
                max(test_date) as 'updt_date',
                SUM(IF(age < 10,1,0)) as 'zero_to_ten',
                SUM(IF(age BETWEEN 11 and 20,1,0)) as 'elv_to_twenty',
                SUM(IF(age BETWEEN 21 and 30,1,0)) as 'twentyone_to_thirty',
                SUM(IF(age BETWEEN 31 and 40,1,0)) as 'thirtyone_to_forty',
                SUM(IF(age BETWEEN 41 and 50,1,0)) as 'fortyone_to_fifty',
                SUM(IF(age BETWEEN 51 and 60,1,0)) as 'fiftyone_to_sixty',
                SUM(IF(age BETWEEN 61 and 100,1,0)) as 'sixtyone_to_hundred',
                SUM(IF(age BETWEEN 0 and 100,1,0)) as 'Total'
                FROM infected_person
                where month(date_of_test) = month(curdate()- INTERVAL 2 MONTH)
                and year(date_of_test) = year(curdate()- INTERVAL 2 MONTH))
            as A;");
        $pre_pre_month_deaths = DB::select("select * from death_national_age_hpm where month(date) = month(curdate()- INTERVAL 2 MONTH) and year(date) = year(curdate()- INTERVAL 2 MONTH)");

        $previous_previous_month__infected = $previous_previous_month__death = [];
        foreach ($pre_pre_month_infecteds as $key => $pre_pre_month_infected) {
            array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_0_10);
            array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_11_20);
            array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_21_30);
            array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_31_40);
            array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_41_50);
            array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_51_60);
            array_push($previous_previous_month__infected, $pre_pre_month_infected->infected_60_plus);
        }
        $previous_previous_month__infected  = implode(",", $previous_previous_month__infected);

        foreach ($pre_pre_month_deaths as $key => $pre_pre_month_death) {
            array_push($previous_previous_month__death, $pre_pre_month_death->total_death);
        }
        $previous_previous_month__death  = implode(",", $previous_previous_month__death);

        ?>

        // Death Impact Bar
        // Highcharts.chart('death_impact_bar', {
        //     chart: {
        //         type: 'column'
        //     },
        //     title: {
        //         text: ''
        //     },
        //     subtitle: {
        //         text: ''
        //     },
        //     credits:{
        //         enabled:false
        //     },
        //     legend:{
        //         enabled:true
        //     },
        //     yAxis: {
        //         title: {
        //             text: ''
        //         },
        //         labels: {
        //             formatter: function() {
        //                 return this.value;
        //             }
        //         }
        //     },
        //     xAxis: {
        //         categories: ["Death:","Death:","Death:", "Death:"],
        //         labels: {
        //             enabled: false
        //         }
        //     },
        //     tooltip: {
        //         pointFormat: '{series.name}: <b>{point.y}</b>'
        //     },
        //     plotOptions: {
        //         column: {
        //             pointPadding: 0.2,
        //             borderWidth: 0
        //         },
        //         series: {
        //             pointWidth: 30
        //         }
        //     },
        //     colors: ['#38cb89', '#ffa600', '#ef4b4b'],
        //     series: [{
        //         name: 'Doctor',
        //         data: [5000, null, null, null]

        //     }, {
        //         name: 'Police',
        //         data: [null, 4084, null]

        //     }, {
        //         name: 'Banker',
        //         data: [null, null, 2098, null]

        //     }, {
        //         name: 'Nurse',
        //         data: [null, null, null, 3500]

        //     }]
        // });

        // Age Wise Death Distribution
        Highcharts.chart('age_wise_death_distribution', {
            chart: {
                type: 'bar',
				style: {
					fontFamily: 'SolaimanLipi'
				}
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
                enabled:true,
				itemStyle: {
					fontSize: "16px",
					fontWeight: "normal"
				}
            },
            yAxis: {
                title: {
                    text: ''
                },
                labels: {
                    formatter: function() {
                        return englishToBangla(this.value);
                    }
                }
            },
            xAxis: {
                categories: ["০-১০","১১-২০","২১-৩০","৩১-৪০","৪১-৫০","৫১-৬০","৬১+"],
				title: {
                    text: 'বয়স',
					style: {
						fontSize: 18,
						fontFamily: 'SolaimanLipi'
					}
                }
            },
            /*tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'

            },*/
            tooltip: {
                formatter: function() {
                    return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            colors: ['#ef4b4b', '#38cb89'],
            series: [{
                name: 'মৃত্যু',
                {{--data: [<?php echo $deathAge;?>]--}}
                data: [<?php echo $cur_death;?>]

            }, {
                name: 'আক্রান্ত',
                data: [<?php echo $cur_infected;?>],
                {{--data: [<?php echo $_ageWiseInfectData;?>],--}}

            }]
        });

        // Age Wise Death Distribution 1
        Highcharts.chart('age_wise_death_distribution_1', {
            chart: {
                type: 'bar',
				style: {
					fontFamily: 'SolaimanLipi'
				}
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
                enabled:true,
				itemStyle: {
					fontSize: "16px",
					fontWeight: "normal"
				}
            },
            yAxis: {
                title: {
                    text: ''
                },
                labels: {
                    formatter: function() {
                        return englishToBangla(this.value);
                    }
                }
            },
            xAxis: {
                categories: ["০-১০","১১-২০","২১-৩০","৩১-৪০","৪১-৫০","৫১-৬০","৬১+"],
				title: {
                    text: 'বয়স',
					style: {
						fontSize: 18,
						fontFamily: 'SolaimanLipi'
					}
                }
            },
            /*tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'

            },*/
            tooltip: {
                formatter: function() {
                    return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            colors: ['#ef4b4b', '#38cb89'],
            series: [{
                name: 'মৃত্যু',
                data: [<?php echo $previous_month__death;?>]
                {{--data: [<?php echo $deathAge;?>]--}}

            }, {
                name: 'আক্রান্ত',
                {{--data: [<?php echo $_ageWiseInfectData;?>],--}}
                data: [<?php echo $previous_month__infected;?>],

            }]
        });
        // Age Wise Death Distribution 2
        Highcharts.chart('age_wise_death_distribution_2', {
            chart: {
                type: 'bar',
				style: {
					fontFamily: 'SolaimanLipi'
				}
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
                enabled:true,
				itemStyle: {
					fontSize: "16px",
					fontWeight: "normal"
				}
            },
            yAxis: {
                title: {
                    text: ''
                },
                labels: {
                    formatter: function() {
                        return englishToBangla(this.value);
                    }
                }
            },
            xAxis: {
                categories: ["০-১০","১১-২০","২১-৩০","৩১-৪০","৪১-৫০","৫১-৬০","৬১+"],
				title: {
                    text: 'বয়স',
					style: {
						fontSize: 18,
						fontFamily: 'SolaimanLipi'
					}
                }
            },
            /*tooltip: {
                pointFormat: '{series.name}: <b>{point.y}</b>'

            },*/
            tooltip: {
                formatter: function() {
                    return `${this.series.name}: <b>${englishToBangla(this.y)}</b>`;
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            colors: ['#ef4b4b', '#38cb89'],
            series: [{
                name: 'মৃত্যু',
                data: [<?php echo $previous_previous_month__death;?>]
                {{--data: [<?php echo $deathAge;?>]--}}

            }, {
                name: 'আক্রান্ত',
                {{--data: [<?php echo $_ageWiseInfectData;?>],--}}
                data: [<?php echo $previous_previous_month__infected;?>],

            }]
        });
    </script>
@endpush
