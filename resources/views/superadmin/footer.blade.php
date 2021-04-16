
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
		<!-- select 2 -->
		<script src="{{ asset('assets/js/select2.full.min.js') }}"></script>
		<!-- Custom js-->
		<script src="{{ asset('assets/js/custom.js') }}"></script>

		<script>
            $(document).ready(function () {
                $(".select2").select2();
            });
        </script>

		<script src="{{asset('pm/js/jquery.dataTables.min.js')}}"></script>
    	<script src="{{asset('pm/js/dataTables.bootstrap4.min.js')}}"></script>
        <script>
            $('#bulletin-history').DataTable({
                paging: true,
                searching: true
            });
       </script>
        @stack('scripts')


	</body>
</html>