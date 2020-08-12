<!--jQuery--> 
<script src="{{ asset('superadmin/assets/vendors/jquery/jquery.min.js') }}"></script> 
<!-- plugins:js --> 
<script src="{{ asset('superadmin/assets/vendors/js/vendor.bundle.base.js') }}"></script> 
<!-- endinject --> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
<!-- Plugin js for this page --> 
<script src="{{ asset('superadmin/assets/vendors/chart.js/Chart.min.js') }}"></script> 
<!-- End plugin js for this page --> 
<!-- inject:js --> 
<script src="{{ asset('superadmin/assets/js/off-canvas.js') }}"></script> 
<!--<script src="{{ asset('superadmin/assets/js/hoverable-collapse.js') }}"></script>--> 
<script src="{{ asset('superadmin/assets/js/misc.js') }}"></script> 
<!-- endinject --> 
<!-- Custom js for this page --> 
<!--<script src="{{ asset('superadmin/assets/js/dashboard.js') }}"></script>
<script src="{{ asset('superadmin/assets/js/todolist.js') }}"></script>--> 
<!-- End custom js for this page --> 

<!-- Fututionchart Integration --> 
<!-- Step 1 - Include the fusioncharts core library --> 
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script> 
<!-- Step 2 - Include the fusion theme --> 
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script> 
<!-- Fututionchart Integration --> 
<script src="https://code.highcharts.com/highcharts.js"></script> 
<script src="https://code.highcharts.com/modules/accessibility.js"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript">
		const dataSource = {
	  chart: {
		caption: "",
		subcaption: "",
		legendposition: "BOTTOM",
		entitytooltext: "$lname: <b>$datavalue </b>আক্রান্ত",
		legendcaption: "সংক্রমনের সংখ্যা ভিত্তিক তথ্য",
		entityfillhovercolor: "#FFCDD2",
		theme: "fusion"
	  },
	  colorrange: {
		gradient: "0",
		color: [{"maxvalue":50,"displayvalue":"\u09e7\u09e7-\u09eb\u09e6","code":"#F69475"},{"maxvalue":100,"displayvalue":"\u09eb\u09e7-\u09e7\u09e6\u09e6","code":"#F37366"},{"maxvalue":150,"displayvalue":"\u09e7\u09e6\u09e7-\u09e7\u09eb\u09e6","code":"#E5515D"},{"maxvalue":1000,"displayvalue":"\u09e7\u09eb\u09e7-\u09e7\u09e6\u09e6\u09e6","code":"#CD3E52"},{"maxvalue":101000,"displayvalue":"\u09e7\u09e6\u09e6\u09e6+","code":"#BC2B4C"}]	  },
	  data: [
		{
		  data: [{"id":"BD.DA","value":39886},{"id":"BD.CG","value":17152},{"id":"BD.RS","value":3313},{"id":"BD.SY","value":2556},{"id":"BD.MM","value":2330},{"id":"BD.BA","value":1711},{"id":"BD.KH","value":2092},{"id":"BD.RP","value":2074}]		}
	  ]
	};

	FusionCharts.ready(function() {
	  var myChart = new FusionCharts({
		type: 'maps/bangladesh',
		renderAt: "map-container",
		width: "320",
		height: "400",
		dataFormat: "json",
		dataSource
	  }).render();
	});
</script>
<style type="text/css">
svg text[font-size="9px"]{display:none !important;} /* Remove Trail Version*/
.dataTables_length{display: none;}
</style>
<script type="text/javascript">
$(document).ready(function() {
	$('#division_list').change(function(){
		/*if($('#district_list').val() != null){
			$('#district_list').val("");
		}
		if($('#upazilla_list').val() != null){
			$('#upazilla_list').val("");
		}*/
		if($(this).val() == 'all'){
			$('.district-option').show();
		}else{
			//console.log($(this).val());
			$('.district-option').hide();
			$('option[rel="'+$(this).val()+'"]').show();
		}
	});
	
	$('#district_list').change(function(){
		console.log($(this).val());
		/*if($('#division_list').val() != null){
			$('#division_list').val("");
		}
		if($('#upazilla_list').val() != null){
			$('#upazilla_list').val("");
		}*/
		
		if($(this).val() == 'all'){
			$('.upazilla-option').show();
		}else{
			//console.log($(this).val());
			$('.upazilla-option').hide();
			$('option[rel="'+$(this).val()+'"]').show();
		}
	});
	
		
		
		    var districtDataTable = $('#district-infecteed').DataTable({
        data: [["\u09a2\u09be\u0995\u09be ","\u09a2\u09be\u0995\u09be ","\u09e8\u09ed,\u09e8\u09ec\u09ed","\u09e6.\u09ec\u09e8","\u09e9\u09e6","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u09eb,\u09eb\u09ee\u09eb","\u09e6.\u09ea\u09ea","\u09e8\u09ed","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-3.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u09a8\u09be\u09b0\u09be\u09af\u09bc\u09a3\u0997\u099e\u09cd\u099c ","\u09ea,\u09eb\u09e9\u09e6","\u09e6.\u09ef\u09ec","\u09e9\u09ef","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u0995\u0995\u09cd\u09b8\u09ac\u09be\u099c\u09be\u09b0","\u09e8,\u09ec\u09ee\u09ee","\u09e7.\u09e7\u09ed","\u09e7\u09ee","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u09ab\u09c7\u09a8\u09c0","\u09e8,\u09ec\u09ee\u09ee","\u09e6.\u09ef\u09e7","\u09e9\u09ed","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u0997\u09be\u099c\u09c0\u09aa\u09c1\u09b0 ","\u09e8,\u09eb\u09e7\u09e7","\u09e6.\u09eb\u09ec","\u09e9\u09e9","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u0995\u09c1\u09ae\u09bf\u09b2\u09cd\u09b2\u09be","\u09e8,\u09ea\u09ed\u09e7","\u09e6.\u09e7\u09e8","\u09e9\u09e8","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-3.png\"> <\/span>"],["\u09b0\u09be\u099c\u09b6\u09be\u09b9\u09c0 ","\u09ac\u0997\u09c1\u09a1\u09bc\u09be ","\u09e8,\u09e6\u09ee\u09eb","\u09e7.\u09e6\u09e9","\u09e7\u09ec","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09b8\u09bf\u09b2\u09c7\u099f","\u09b8\u09bf\u09b2\u09c7\u099f","\u09e7,\u09ed\u09ec\u09ee","\u09e7.\u09e6\u09eb","\u09e7\u09eb","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-3.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u09a8\u09cb\u09af\u09bc\u09be\u0996\u09be\u09b2\u09c0 ","\u09e7,\u09ed\u09e6\u09ed","\u09e6.\u09ea\u09ed","\u09ee\u09ed","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u09ae\u09df\u09ae\u09a8\u09b8\u09bf\u0982\u09b9","\u09ae\u09df\u09ae\u09a8\u09b8\u09bf\u0982\u09b9","\u09e7,\u09e9\u09e7\u09eb","\u09e6.\u09ee","\u09e7\u09e9","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09ac\u09b0\u09bf\u09b6\u09be\u09b2","\u09ac\u09b0\u09bf\u09b6\u09be\u09b2","\u09e7,\u09e7\u09e8\u09ef","\u09e6.\u09e8\u09eb","\u09eb\u09ea","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-3.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u09a8\u09b0\u09b8\u09bf\u0982\u09a6\u09c0","\u09e7,\u09e7\u09e6\u09ef","\u09e7.\u09e7\u09ec","\u09e7\u09ea","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u0995\u09bf\u09b6\u09cb\u09b0\u0997\u099e\u09cd\u099c","\u09e7,\u09e6\u09ee\u09e9","\u09e6.\u09eb\u09ec","\u09e9\u09e6","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u09ab\u09b0\u09bf\u09a6\u09aa\u09c1\u09b0","\u09e7,\u09e6\u09e8\u09e9","\u09e7.\u09e9\u09e9","\u09e7\u09e9","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u0996\u09c1\u09b2\u09a8\u09be ","\u0996\u09c1\u09b2\u09a8\u09be ","\u09ee\u09e6\u09e6","\u09e6.\u09ec\u09eb","\u09e7\u09e6","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09b8\u09bf\u09b2\u09c7\u099f","\u09b8\u09c1\u09a8\u09be\u09ae\u0997\u099e\u09cd\u099c ","\u09ed\u09ee\u09ee","\u09e6.\u09ec","\u09e8\u09e9","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-3.png\"> <\/span>"],["\u09b0\u0982\u09aa\u09c1\u09b0 ","\u09b0\u0982\u09aa\u09c1\u09b0 ","\u09ed\u09ec\u09eb","\u09e6.\u09ef\u09ee","\u09ea\u09ed","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u09b2\u0995\u09cd\u09b7\u09cd\u09ae\u09c0\u09aa\u09c1\u09b0 ","\u09eb\u09ef\u09eb","\u09e7.\u09e6\u09e8","\u09e9\u09ea","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-3.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u099a\u09be\u0981\u09a6\u09aa\u09c1\u09b0 ","\u09eb\u09ec\u09ea","\u09e7.\u09e8\u09eb","\u09e7\u09ec","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u09ac\u09cd\u09b0\u09be\u09b9\u09cd\u09ae\u09a3\u09ac\u09be\u09a1\u09bc\u09c0\u09af\u09bc\u09be ","\u09eb\u09e9\u09e9","\u09e6.\u09ec\u09e8","\u09e8\u09ea","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u09b0\u0982\u09aa\u09c1\u09b0 ","\u09a6\u09bf\u09a8\u09be\u099c\u09aa\u09c1\u09b0","\u09ea\u09ef\u09e8","\u09e7.\u09e6\u09e8","\u09e9\u09ef","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u09ae\u09be\u09a8\u09bf\u0995\u0997\u099e\u09cd\u099c ","\u09ea\u09ed\u09e8","\u09e6.\u09ea\u09ea","\u09e9\u09e8","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u09ae\u09be\u09a6\u09be\u09b0\u09c0\u09aa\u09c1\u09b0 ","\u09ea\u09ec\u09ee","\u09e6.\u09e9\u09eb","\u09e7\u09e8\u09ee","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u0997\u09cb\u09aa\u09be\u09b2\u0997\u099e\u09cd\u099c ","\u09ea\u09ec\u09e6","\u09e7.\u09e7\u09ef","\u09e7\u09ee","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-3.png\"> <\/span>"],["\u09ae\u09df\u09ae\u09a8\u09b8\u09bf\u0982\u09b9","\u099c\u09be\u09ae\u09be\u09b2\u09aa\u09c1\u09b0 ","\u09ea\u09ea\u09e6","\u09e7.\u09e6\u09ee","\u09e8\u09ee","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u099f\u09be\u0999\u09cd\u0997\u09be\u0987\u09b2 ","\u09e9\u09ed\u09ef","\u09e7.\u09e9\u09e8","\u09e7\u09e8","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u09b6\u09b0\u09c0\u09af\u09bc\u09a4\u09aa\u09c1\u09b0","\u09e9\u09ed\u09ee","\u09e7.\u09e6\u09e9","\u09e9\u09ec","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u09ae\u09df\u09ae\u09a8\u09b8\u09bf\u0982\u09b9","\u09a8\u09c7\u09a4\u09cd\u09b0\u0995\u09cb\u09a8\u09be","\u09e9\u09ec\u09ec","\u09e8.\u09e8\u09ef","\u09ef","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u0996\u09c1\u09b2\u09a8\u09be ","\u09af\u09b6\u09cb\u09b0 ","\u09e9\u09e7\u09ea","\u09e6.\u09ef\u09e7","\u09e7\u09e9","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u0996\u09c1\u09b2\u09a8\u09be ","\u0995\u09c1\u09b7\u09cd\u099f\u09bf\u09df\u09be","\u09e9\u09e6\u09ed","\u09e7.\u09e9\u09e9","\u09e7\u09e7","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u09b0\u0982\u09aa\u09c1\u09b0 ","\u09a8\u09c0\u09b2\u09ab\u09be\u09ae\u09be\u09b0\u09c0 ","\u09e8\u09ef\u09eb","\u09e7.\u09e6\u09ec","\u09e8\u09eb","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u09b0\u09be\u099c\u09b6\u09be\u09b9\u09c0 ","\u09aa\u09be\u09ac\u09a8\u09be ","\u09e8\u09ed\u09e6","\u09e7.\u09e9\u09eb","\u09e7\u09e7","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-3.png\"> <\/span>"],["\u09b0\u09be\u099c\u09b6\u09be\u09b9\u09c0 ","\u09b8\u09bf\u09b0\u09be\u099c\u0997\u099e\u09cd\u099c ","\u09e8\u09ec\u09e7","\u09e7.\u09e8","\u09e7\u09ea","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u09ac\u09b0\u09bf\u09b6\u09be\u09b2","\u09aa\u099f\u09c1\u09af\u09bc\u09be\u0996\u09be\u09b2\u09c0 ","\u09e8\u09ea\u09e7","\u09e6.\u09ea\u09ef","\u09ea\u09eb","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09b0\u09be\u099c\u09b6\u09be\u09b9\u09c0 ","\u09a8\u0993\u0997\u09be\u0981 ","\u09e8\u09e9\u09ef","\u09e6.\u09ee\u09ee","\u09ed\u09ef","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u09b0\u09be\u099c\u09b6\u09be\u09b9\u09c0 ","\u09b0\u09be\u099c\u09b6\u09be\u09b9\u09c0 ","\u09e8\u09e9\u09ed","\u09e7.\u09ec\u09e7","\u09eb","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-3.png\"> <\/span>"],["\u09ae\u09df\u09ae\u09a8\u09b8\u09bf\u0982\u09b9","\u09b6\u09c7\u09b0\u09aa\u09c1\u09b0","\u09e8\u09e6\u09ef","\u09e7.\u09e6\u09ea","\u09e8\u09ed","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u09b0\u0982\u09aa\u09c1\u09b0 ","\u0997\u09be\u0987\u09ac\u09be\u09a8\u09cd\u09a7\u09be ","\u09e8\u09e6\u09ed","\u09e7.\u09e6\u09e8","\u09e9\u09e6","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u09a2\u09be\u0995\u09be ","\u09b0\u09be\u099c\u09ac\u09be\u09a1\u09bc\u09c0 ","\u09e8\u09e6\u09ec","\u09e7.\u09e7\u09ea","\u09e7\u09ee","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u09ac\u09b0\u09bf\u09b6\u09be\u09b2","\u09ad\u09cb\u09b2\u09be ","\u09e7\u09ee\u09ed","\u09e6.\u09e9","\u09e7\u09e8\u09e7","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u0996\u09c1\u09b2\u09a8\u09be ","\u099a\u09c1\u09af\u09bc\u09be\u09a1\u09be\u0999\u09cd\u0997\u09be ","\u09e7\u09ec\u09ef","\u09e6.\u09eb\u09eb","\u09e7\u09ef","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09ac\u09b0\u09bf\u09b6\u09be\u09b2","\u09ac\u09b0\u0997\u09c1\u09a8\u09be ","\u09e7\u09eb\u09ea","\u09e7.\u09e6\u09e7","\u09e9\u09e7","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u09b0\u09be\u099c\u09b6\u09be\u09b9\u09c0 ","\u099c\u09af\u09bc\u09aa\u09c1\u09b0\u09b9\u09be\u099f","\u09e7\u09e9\u09eb","\u09e6.\u09ef\u09eb","\u09e8\u09ee","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u09b0\u0982\u09aa\u09c1\u09b0 ","\u09aa\u099e\u09cd\u099a\u0997\u09a1\u09bc ","\u09e7\u09e8\u09eb","\u09e6.\u09ee\u09e8","\u09ea\u09ea","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u0996\u09c1\u09b2\u09a8\u09be ","\u099d\u09bf\u09a8\u09be\u0987\u09a6\u09be\u09b9 ","\u09e7\u09e8\u09e9","\u09e7.\u09e6\u09ef","\u09e7\u09ea","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u09b0\u0982\u09aa\u09c1\u09b0 ","\u0995\u09c1\u09a1\u09bc\u0997\u09cd\u09b0\u09bf\u09be\u09ae ","\u09e7\u09e7\u09ef","\u09e6.\u09e7\u09e8","\u09e7\u09eb","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u09b0\u09be\u0999\u09cd\u0997\u09be\u09ae\u09be\u099f\u09bf ","\u09e7\u09e7\u09ec","\u09e6.\u09ec\u09e8","\u09e7\u09e6","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u09ac\u09be\u09a8\u09cd\u09a6\u09b0\u09ac\u09be\u09a8 ","\u09e7\u09e7\u09e7","\u09e7.\u09e6\u09ee","\u09ed","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u0996\u09c1\u09b2\u09a8\u09be ","\u09ac\u09be\u0997\u09c7\u09b0\u09b9\u09be\u099f ","\u09e7\u09e6\u09e8","\u09e7.\u09ea\u09e9","\u09ee","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u0996\u09c1\u09b2\u09a8\u09be ","\u09b8\u09be\u09a4\u0995\u09cd\u09b7\u09c0\u09b0\u09be ","\u09e7\u09e6\u09e6","\u09e6.\u09ef\u09eb","\u09e8\u09ed","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","\u0996\u09be\u0997\u09a1\u09bc\u09be\u099b\u09a1\u09bc\u09bf ","\u09ef\u09ea","\u09e7.\u09e9\u09e8","\u09e7\u09e6","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-3.png\"> <\/span>"],["\u09b0\u09be\u099c\u09b6\u09be\u09b9\u09c0 ","\u09a8\u09ac\u09be\u09ac\u0997\u099e\u09cd\u099c","\u09ee\u09ec","\u09e6.\u09ef\u09e9","\u09e7\u09ee","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u0996\u09c1\u09b2\u09a8\u09be ","\u09a8\u09a1\u09bc\u09be\u0987\u09b2 ","\u09ed\u09e9","\u09e7.\u09e8\u09e8","\u09e7\u09e6","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-4.png\"> <\/span>"],["\u09b0\u0982\u09aa\u09c1\u09b0 ","\u09b2\u09be\u09b2\u09ae\u09a8\u09b0\u09bf\u09b9\u09be\u099f ","\u09ed\u09e7","\u09e6.\u09ef\u09e9","\u09e7\u09ee","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-1.png\"> <\/span>"],["\u0996\u09c1\u09b2\u09a8\u09be ","\u09ae\u09be\u0997\u09c1\u09b0\u09be ","\u09ec\u09ea","\u09e7.\u09e8\u09e7","\u09ed","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"],["\u0996\u09c1\u09b2\u09a8\u09be ","\u09ae\u09b9\u09c7\u09b0\u09c7\u09aa\u09c1\u09b0 ","\u09ea\u09e6","\u09e7.\u09e8","\u09ea","<span class=\"line-chart-holder\"><img src=\"assets\/images\/line-chart-2.png\"> <\/span>"]],
        columns: [
			{ title: "বিভাগ" },
			{ title: "জেলা" },
			{ title: "আক্রান্ত" },
			{ title: "Rt সংখ্যা" },
			{ title: "ডাবলিং টাইম" },
			{ title: "দৈনিক পরিবর্তন (১৪ দিন)" }
		],
		//"ajax": "district-infected.php",
		//bPaginate: false,
		bFilter: false, 
		bInfo: false,
		"ordering": false
		//pagingType: "simple_numbers"
    });
	//$.fn.DataTable.ext.pager.numbers_length = 3;

});
	
// Map Dropdown List
function districtAjaxCall(division_name){
	
	var divisionObj = {
		'all': 'maps/bangladesh',
		'MYMENSINGH': 'maps/mymensingh',
		'BARISAL': 'maps/barisal',
		'RANGPUR': 'maps/rangpur',
		'SYLHET': 'maps/sylhet',
		'CHATTOGRAM': 'maps/chittagong',
		'RAJSHAHI': 'maps/rajshahi',
		'DHAKA': 'maps/dhaka',
		'KHULNA': 'maps/khulna'
		
	};
	
	console.log(divisionObj[division_name]);
	
	divisionMap = divisionObj[division_name];
	
	/*Object.keys(divisionObj).forEach(function eachKey(key) {
		
		console.log(key); // alerts key 
		console.log(divisionObj[key]); // alerts value
	});*/
	
	//$('.submit-btn').html('LOADING...').attr('style','background-color:#3b3b3b');	
		 
	var formParams = "division_name="+division_name+"&map_date="+$('#map_date').val()+"&isAjax=true";
  
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	 var responseData = JSON.parse(this.responseText);
	 //alert(responseData.data);
	if(responseData.data){
		 
		 if(division_name == 'all'){
			responseData.division_group_color_data = [{"maxvalue":50,"displayvalue":"\u09e7\u09e7-\u09eb\u09e6","code":"#F69475"},{"maxvalue":100,"displayvalue":"\u09eb\u09e7-\u09e7\u09e6\u09e6","code":"#F37366"},{"maxvalue":150,"displayvalue":"\u09e7\u09e6\u09e7-\u09e7\u09eb\u09e6","code":"#E5515D"},{"maxvalue":1000,"displayvalue":"\u09e7\u09eb\u09e7-\u09e7\u09e6\u09e6\u09e6","code":"#CD3E52"},{"maxvalue":101000,"displayvalue":"\u09e7\u09e6\u09e6\u09e6+","code":"#BC2B4C"}];
			responseData.division_wise_inffacted_data = [{"id":"BD.DA","value":39886},{"id":"BD.CG","value":17152},{"id":"BD.RS","value":3313},{"id":"BD.SY","value":2556},{"id":"BD.MM","value":2330},{"id":"BD.BA","value":1711},{"id":"BD.KH","value":2092},{"id":"BD.RP","value":2074}];
		 }
		 
		//$('#district-infecteed_wrapper').hide();
		if ($.fn.dataTable.isDataTable( '#district-infecteed' ) ) {
			districtDataTable = $('#district-infecteed').DataTable();
			districtDataTable.destroy();
		}		
		districtDataTable = $('#district-infecteed').DataTable( {
			data: responseData.data,
			//bPaginate: false,
			bFilter: false, 
			bInfo: false,
			"ordering": false,
			columns: [
				{ title: "বিভাগ" },
				{ title: "জেলা" },
				{ title: "আক্রান্ত" },
				{ title: "Rt সংখ্যা" },
				{ title: "ডাবলিং টাইম" },
				{ title: "দৈনিক পরিবর্তন (১৪ দিন)" }
			]
		});
		
		//alert(responseData.division_group_color_data);
		const dataSource = {
		  chart: {
			caption: "",
			subcaption: "",
			legendposition: "BOTTOM",
			entitytooltext: "$lname: <b>$datavalue </b>আক্রান্ত",
			legendcaption: "সংক্রমনের সংখ্যা ভিত্তিক তথ্য",
			entityfillhovercolor: "#FFCDD2",
			theme: "fusion"
		  },
		  colorrange: {
			gradient: "0",
			color: responseData.division_group_color_data
		  },
		  data: [
			{
			  data: responseData.division_wise_inffacted_data
			}
		  ]
		};

		FusionCharts.ready(function() {
		  var myChart = new FusionCharts({
			type: divisionMap,
			renderAt: "map-container",
			width: "320",
			height: "400",
			dataFormat: "json",
			dataSource
		  }).render();
		});
	 }
	}
  };
  xhttp.open("POST", "district-infected.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");		  
  xhttp.send(formParams);
}
</script> 
<!-- Daily Infected & Forcast Graph --> 
<script type="text/javascript">

// Highcharts Infected and Forcast Chart
Highcharts.chart('division', {
	title: {
        text: 'দৈনিক পরিবর্তন ও পূর্বাভাস'
    },

    subtitle: {
        text: ''
    },
	
	legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },
	
	credits:{
		enabled:false
	},
	
	xAxis: {
		categories: ["\u09e6\u09ea\u09ae\u09be\u09b0","\u09e7\u09e7\u09ae\u09be\u09b0","\u09e7\u09ee\u09ae\u09be\u09b0","\u09e8\u09eb\u09ae\u09be\u09b0","\u09e6\u09e7\u098f\u09aa\u09cd\u09b0\u09bf","\u09e6\u09ee\u098f\u09aa\u09cd\u09b0\u09bf","\u09e7\u09eb\u098f\u09aa\u09cd\u09b0\u09bf","\u09e8\u09e8\u098f\u09aa\u09cd\u09b0\u09bf","\u09e8\u09ef\u098f\u09aa\u09cd\u09b0\u09bf","\u09e6\u09ec\u09ae\u09c7","\u09e7\u09e9\u09ae\u09c7","\u09e8\u09e6\u09ae\u09c7","\u09e8\u09ed\u09ae\u09c7","\u09e6\u09e9\u099c\u09c1\u09a8","\u09e7\u09e6\u099c\u09c1\u09a8","\u09e7\u09ed\u099c\u09c1\u09a8","\u09e8\u09ea\u099c\u09c1\u09a8","\u09e6\u09e7\u099c\u09c1\u09b2","\u09e6\u09ee\u099c\u09c1\u09b2","\u09e7\u09eb\u099c\u09c1\u09b2","\u09e7\u09ed\u099c\u09c1\u09b2","\u09e8\u09ea\u099c\u09c1\u09b2","\u09e9\u09e7\u099c\u09c1\u09b2"]    },
	
	yAxis: {
        title: {
            text: ''
        }/*,
		labels: {
			formatter: function() {
			   return this.value+"%";
			}
		},
		max: 15*/
    },
	
	plotOptions: {
        series: {
            fillOpacity:0/*,
			dataLabels:{
                enabled:true,
                color: 'black',
                formatter:function() {
                    //var pcnt = (this.y / dataSum) * 100;
                    return Highcharts.numberFormat(this.y) + '%';
                }
            }*/
        }
    },
	
	colors: ["#00008b", "#e08658"],
	series: [{
		name: 'সংক্রামিত',
		data: [0,3,8,39,54,218,1231,3772,7103,11719,17822,26738,38292,55140,74865,98489,122660,149258,172134,196323,null,null,null],
		type : 'area',
		marker:{symbol:'circle'}
		
		}, {
			name: 'ফোরকাস্ট',
			data: [null,null,null,null,null,null,null,null,null,16353,24383,32471,40660,48850,70373,107342,146700,186059,225417,264775,276020,315378,354737],
			type: 'area', 
			marker : {symbol : 'circle'},
			dashStyle: 'shortdot'
		}],
});

</script> 
<script type="text/javascript">

// Highcharts Infected and Forcast Chart
Highcharts.chart('redzone', {
	title: {
        text: 'সাপ্তাহিক রেড জোন',
		align: 'left'
    },

    subtitle: {
        text: ''
    },
	
	legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },
	
	credits:{
		enabled:false
	},
	
	xAxis: {
		categories: ["W1","W2","W3","W4"]    },
	
	yAxis: {
        title: {
            text: ''
        }/*,
		labels: {
			formatter: function() {
			   return this.value+"%";
			}
		}*/
    },
	
	plotOptions: {
        series: {
            //fillOpacity:0,
			dataLabels:{
                enabled:false
            }
        }
    },	
	colors: ['#ff0000'],
	series: [{
		name: 'রেড জোনের সংখ্যা',
		data: [20,30,45,70],
		marker:{symbol:'circle'}		
		}]
});

</script> 
<script type="text/javascript">
// Mobility In Chart
Highcharts.chart('division-in-continer', {
	title: {
        text: ''
    },

    subtitle: {
        text: ''
    },
	
	legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'top'
    },
	
	credits:{
		enabled:false
	},
	
	xAxis: {
		categories: ["WK1","WK2","WK3","WK4","WK5","WK6","WK7"]    },
	
	yAxis: {
        title: {
            text: ''
        },
		labels: {
			formatter: function() {
			   return this.value+"%";
			}
		},
		max: 15
    },
	
	plotOptions: {
        series: {
            fillOpacity:0,
			dataLabels:{
                enabled:true,
                color: 'black',
                formatter:function() {
                    //var pcnt = (this.y / dataSum) * 100;
                    return Highcharts.numberFormat(this.y) + '%';
                }
            }
        }
    },
	
	colors: ['#444a9f', '#843984', '#399de9', '#e08658', '#cbc434', '#7c6faf', '#843984', '#ca5aa9'],
	
    series: [{"type":"area","name":"\u09a2\u09be\u0995\u09be ","data":[10,12,9,11,8,13,14],"marker":{"symbol":"circle"}},{"type":"area","name":"\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","data":[3,4,3,2,4,2,2],"marker":{"symbol":"circle"}},{"type":"area","name":"\u0996\u09c1\u09b2\u09a8\u09be ","data":[8,4,2,5,7,4,3],"marker":{"symbol":"circle"}},{"type":"area","name":"\u09b0\u09be\u099c\u09b6\u09be\u09b9\u09c0 ","data":[5,3,5,3,2,4,5],"marker":{"symbol":"circle"}},{"type":"area","name":"\u09b8\u09bf\u09b2\u09c7\u099f","data":[4,4,3,4,2,4,3],"marker":{"symbol":"circle"}},{"type":"area","name":"\u09b0\u0982\u09aa\u09c1\u09b0 ","data":[2,3,3,3,3,3,2],"marker":{"symbol":"circle"}},{"type":"area","name":"\u09ae\u09df\u09ae\u09a8\u09b8\u09bf\u0982\u09b9","data":[2,2,3,2,3,3,4],"marker":{"symbol":"circle"}}]});
// Mobility Out Chart
Highcharts.chart('division-out-continer', {
	title: {
        text: ''
    },

    subtitle: {
        text: ''
    },
	
	legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'top'
    },
	
	credits:{
		enabled:false
	},
	
	xAxis: {
		categories: ["WK1","WK2","WK3","WK4","WK5","WK6","WK7"]    },
	
	yAxis: {
        title: {
            text: ''
        },
		labels: {
			formatter: function() {
			   return this.value+"%";
			}
		},
		max: 15
    },
	
	plotOptions: {
        series: {
            fillOpacity:0,
			dataLabels:{
                enabled:true,
                color: 'black',
                formatter:function() {
                    //var pcnt = (this.y / dataSum) * 100;
                    return Highcharts.numberFormat(this.y) + '%';
                }
            }
        }
    },
	
	colors: ['#444a9f', '#843984', '#399de9', '#e08658', '#cbc434', '#7c6faf', '#843984', '#ca5aa9'],
	
    series: [{"type":"area","name":"\u09a2\u09be\u0995\u09be ","data":[6,6,13,8,10,14,12],"marker":{"symbol":"circle"}},{"type":"area","name":"\u099a\u099f\u09cd\u09b0\u0997\u09cd\u09b0\u09be\u09ae ","data":[5,4,5,5,4,3,3],"marker":{"symbol":"circle"}},{"type":"area","name":"\u0996\u09c1\u09b2\u09a8\u09be ","data":[5,2,4,2,5,2,2],"marker":{"symbol":"circle"}},{"type":"area","name":"\u09b0\u09be\u099c\u09b6\u09be\u09b9\u09c0 ","data":[1,2,3,2,3,1,1],"marker":{"symbol":"circle"}},{"type":"area","name":"\u09b8\u09bf\u09b2\u09c7\u099f","data":[3,1,3,3,3,2,3],"marker":{"symbol":"circle"}},{"type":"area","name":"\u09b0\u0982\u09aa\u09c1\u09b0 ","data":[1,3,3,3,2,3,3],"marker":{"symbol":"circle"}},{"type":"area","name":"\u09ae\u09df\u09ae\u09a8\u09b8\u09bf\u0982\u09b9","data":[4,5,3,5,5,4,3],"marker":{"symbol":"circle"}}]});
</script> 
<script type="text/javascript">
Highcharts.chart('bedvsaddmitted', {
	title: {
        text: ''
    },

    subtitle: {
        text: ''
    },
	
	credits:{
		enabled:false
	},
	
	legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'top'
    },
    "chart": {
      "height": "450",
      "type": "bar"
    },
    "yAxis": {
      "title": {
        "text": ""
      }
    },

    "xAxis": {
       categories: ["ঢাকা", "চট্টগ্রাম", "রাজশাহী", "খুলনা", "বরিশাল", "সিলেট", "রংপুর", "ময়মনসিংহ"]
    },
	
	//colors: ['#444a9f', '#843984', '#399de9', '#e08658', '#cbc434', '#7c6faf', '#843984', '#ca5aa9'],

    "series": [{
	  "name": "সাধারণ বেড",
      "data": [2477, 1500,500,600, 650,800,900,1000],
      "stack": "0"
    }, {
	 "name": "আইসোলেশন বেড",
      "data": [300, 200,500,600, 650,800,900,1000],
      "stack": "1"
    }, {
	 "name": "আই সি ইউ বেড ",
      "data": [200, 20,50,60, 100,150,200,200],
      "stack": "2"
    }, {
	 "name": "হাই ফ্লো অক্সিজেন বেড",
      "data": [100, 200,500,600, 650,800,900,1000],
      "stack": "3"
    }, {
	 "name": "ভর্তি",
      "data": [1900, 250,100,150, 100,200,140,250],
      "stack": "0"
    }, {
	 "name": "আইসোলেশন বেড ভর্তি",
      "data": [100, 250,100,150, 100,200,140,250],
      "stack": "1"
    }],
    "plotOptions": {
      "bar": {
        "stacking": "normal"

      }
    }
  });
</script> 
<script type="text/javascript">
/*Highcharts.setOptions({
    colors: ['#01BAF2', '#71BF45', '#FAA74B']
});*/
Highcharts.chart('chartContainer', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'জনসংখ্যা সাপেক্ষে শতকরা আক্রান্ত',
      y:10
    },
	credits:{
		enabled:false
	},
	legend:{
		enabled:false
	},
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          formatter:function(){
            return this.key+ ': ' + this.y + '%';
          }
        },
        showInLegend: true
      }
    },
    series: [{
      name: 'আক্রান্ত',
      colorByPoint: true,
      innerSize: '70%',
      data: [
	  {name: 'ঢাকা', y: 30,}, 
	  { name: 'চট্টগ্রাম', y: 20 }, 
	  { name: 'রাজশাহী', y: 15 },
	  { name: "খুলনা", y: 13 },
	  { name: "বরিশাল ", y: 3 },
	  { name: "সিলেট ", y: 7},
	  { name: "রংপুর ", y: 17, },
	  { name: "ময়মনসিংহ ", y: 22 }
	]
    }]
  });

// Modal Content Function
function modalContent(modalLabel, modalType, yAxisLabel, xAxisLabel){
	// Show Modal Lable
	$('#modalLabel').html(modalLabel);
	
	var width = 600;
	var height = 450;
	
	//AJAX
	var formParams = "modal_type="+modalType+"&isAjax=true";
  
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	 var responseData = JSON.parse(this.responseText);
	 
	 	
	if(responseData.chart_type == 'bar'){
		
		var barChartDataSource = [{
			name: 'আক্রান্ত',
			data: responseData.bar_chart
		  }];
		var barModalContainer = 'modalContent';
		
	}else if(responseData.chart_type == 'line'){
		
		var lineChartDataSource = responseData.line_chart_data;
		var lineChartDataCategory = responseData.line_chart_label;
		var lineModalContainer = 'modalContent';
		
	}else if(responseData.chart_type == 'both'){
		
		var barChartDataSource = [{
			name: 'আক্রান্ত',
			data: responseData.bar_chart
		  }];
		var lineChartDataSource = responseData.line_chart_data;
		var lineChartDataCategory = responseData.line_chart_label;
		
		var barModalContainer = 'modalContentLeft';
		var lineModalContainer = 'modalContentRight';
		
		$('#modal-loading').remove();
	}
	
	 //alert(responseData.bar_chart);
	if(responseData.chart_type == 'bar' || responseData.chart_type == 'both'){
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
	 if(responseData.chart_type == 'line' || responseData.chart_type == 'both'){
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
	}
  };
  xhttp.open("POST", "modal-data.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");		  
  xhttp.send(formParams);
}

</script> 
<!-- Include Date Range Picker --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script> 
<script type="text/javascript">
$('input[name="from_date"]').datepicker({
  minDate: new Date('2020-03-08')
});
$('input[name="to_date"]').datepicker({
  maxDate: new Date('2020-08-12')
});
</script>
</body>
</html>