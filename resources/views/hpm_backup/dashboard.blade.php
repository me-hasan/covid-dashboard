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
                    <h6 class="modal-title b1"></h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="modalContent">
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')

  
    <script type="text/javascript">
        $(window).on('load',function(){
            var window_size = window.innerWidth;
            if(window_size > 768){
                $(".app-sidebar__toggle").trigger('click') //trigger its click
                setTimeout(()=>{
                  reflowHighChart();
                },500);
            }
        });

        $(".app-sidebar__toggle").on('click', function(){
            setTimeout(()=>{
                  reflowHighChart();
                },500);
        });

        function reflowHighChart(){
            $('#national_dialy_infected_trend').highcharts().reflow(); 
            $('#district_comparision').highcharts().reflow();
            $('#national_infected_trend').highcharts().reflow(); 
            $('#weekly_comparision_infected_death').highcharts().reflow(); 
            $('#test_positivity_rate_trend').highcharts().reflow(); 
            $('#age_wise_death_distribution').highcharts().reflow(); 
            $('#hospital_beds_trend').highcharts().reflow();
        }
    </script>

@endsection

