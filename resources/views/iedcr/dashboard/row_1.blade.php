
<?php
$sd_1=$sd_2=$sd_3= $sd_4=$sd_5=$sd_6=$sd_7=$sd_8='';
$ss_1=$ss_2=$ss_3= $ss_4=$ss_5=$ss_6=$ss_7=$ss_8='';

foreach ($data_source_description as  $row) {
    if($row->component_name=='Nationwide Summary Data'){
        $sd_1=$row->description;
        $ss_1=$row->source;
    }elseif ($row->component_name=='Population Wise Infection rate'){
        $sd_2=$row->description;
        $ss_2=$row->source;
    }elseif ($row->component_name=='Confirmed Cases % by Age Group'){
        $sd_3=$row->description;
        $ss_3=$row->source;
    }elseif ($row->component_name=='Cases by Gender'){
        $sd_4=$row->description;
        $ss_4=$row->source;
    }elseif ($row->component_name=='Avarage Delay Time'){
        $sd_5=$row->description;
        $ss_5=$row->source;
    }elseif ($row->component_name=='Confirmed +ve Death % by Age Group'){
        $sd_6=$row->description;
        $ss_6=$row->source;
    }elseif ($row->component_name=='Death by Gender'){
        $sd_7=$row->description;
        $ss_7=$row->source;
    }elseif ($row->component_name=='Time Series'){
        $sd_8=$row->description;
        $ss_8=$row->source;
    }
}
?>

<div class="row top-cards">
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0" onClick="modalContent_1('Infected (Last 7 Days)', 'bar', 'Infected Number', 'Date');" data-target="#modaldemo2" data-toggle="modal">
            <div class="card-body">
                <p class=" mb-1 ">Infected (24 hours)</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->infected_24_hr) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-warning">{{ round($hda_card->infected_24_hr_change) }}%</span> </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0" onClick="modalContent_1('Total Infected', 'line', 'Total Infected Number', 'Date');" data-target="#modaldemo2" data-toggle="modal">
            <div class="card-body">
                <p class=" mb-1 ">Total Infected</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->intefted_total) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-warning">{{ round($hda_card->infected_total_change) }}%</span> </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1 ">Recoverd (24 hours)</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->recovered_24_hr) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-success">{{ round($hda_card->recovered_24_hr_change) }}%</span> </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1">Total Recoverd</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->recovered_total) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-success">{{ round($hda_card->recovered_total_change) }}%</span> </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1"><span class="fs-7">Active Cases (last 24 Hours)</span></p>
                <h4 class="mb-1 number-font">2,977</h4>
                <small class="fs-12 text-muted d-none d-xl-block"><span class="fs-7">Compared to Last Day</span></small> <span class="ratio bg-warning">15%</span> </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1">Total Active Cases</p>
                <h4 class="mb-1 number-font">105,827</h4>
                <small class="fs-12 text-muted d-none d-xl-block"><span class="fs-7">Compared to Last Day</span></small> <span class="ratio bg-warning">1%</span> </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1 ">Death (24 hours)</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->death_24_hr) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-danger">{{ round($hda_card->death_24_hr_change) }}%</span> </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1">Total Death</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->death_total) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-danger">{{ round($hda_card->death_total_change) }}%</span> </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1 ">Test (24 hours)</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->test_24_hr) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-info">{{ round($hda_card->test_24_hr_change) }}%</span> </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 col-xm-6">
        <div class="card overflow-hidden dash1-card border-0">
            <div class="card-body">
                <p class=" mb-1">Total Test</p>
                <h4 class="mb-1 number-font">{{ number_format($hda_card->test_total) }}</h4>
                <small class="fs-12 text-muted">Compared to Last Day</small> <span class="ratio bg-success">{{ round($hda_card->test_total_change) }}%</span> </div>
        </div>
    </div>
</div>


