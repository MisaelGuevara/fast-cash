
        </div>
    	<!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?= base_url() ?>plantilla/js/jquery.min.js"></script>
        <script src="<?= base_url() ?>plantilla/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>plantilla/js/waves.js"></script>
        <script src="<?= base_url() ?>plantilla/js/wow.min.js"></script>
        <script src="<?= base_url() ?>plantilla/js/datatables.js"></script>
        <script src="<?= base_url() ?>plantilla/js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>plantilla/js/jquery.scrollTo.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/chat/moment-2.2.1.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/jquery-detectmobile/detect.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/fastclick/fastclick.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/jquery-blockui/jquery.blockUI.js"></script>

        <!-- sweet alerts -->
        <script src="<?= base_url() ?>plantilla/assets/sweet-alert/sweet-alert.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/sweet-alert/sweet-alert.init.js"></script>

        <!-- flot Chart -->
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.time.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.resize.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.pie.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.selection.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.stack.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- Counter-up -->
        <script src="<?= base_url() ?>plantilla/assets/counterup/waypoints.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>plantilla/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>

        <!-- Modal-Effect -->
        <script src="<?= base_url() ?>plantilla/assets/modal-effect/js/classie.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/modal-effect/js/modalEffects.js"></script>

        <!-- Notifications -->
        <script src="<?= base_url() ?>plantilla/assets/notifications/notify.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/notifications/notify-metro.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/notifications/notifications.js"></script>
        
        <!-- CUSTOM JS -->
        <script src="<?= base_url() ?>plantilla/js/jquery.app.js"></script>

        <script src="<?= base_url() ?>plantilla/assets/timepicker/bootstrap-datepicker.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/select2/select2.min.js" type="text/javascript"></script>
        
        <script src="<?= base_url() ?>plantilla/assets/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <!--Dropzone-->
        <script src="<?= base_url() ?>plantilla/js/dropzone.js"></script>

        <!--form validation-->
        <script src="<?= base_url() ?>plantilla/assets/jquery.validate/jquery.validate.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/jquery.validate/form-validation-init.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/jquery.validate/parsley.min.js"></script>

        <!-- Data table -->
        <script src="<?= base_url() ?>plantilla/assets/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>plantilla/assets/datatables/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

        <script type="text/javascript">
            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        <script src="<?= base_url() ?>plantilla/js/tilt.jquery.min.js"></script>
		<script >
			$('.js-tilt').tilt({
				scale: 1.0
			})
		</script>

        <footer class="footer text-right">
           Copyright © <?php echo date('Y');?> <font color="#0080FF">JIREH</font>.
        </footer>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $(".validaTel").keypress( function (e){
          telefo = (document.all) ? e.keyCode : e.which;
          telefo = String.fromCharCode(telefo)
          return /^[0-9\()\-\+]+$/.test(telefo);
        });

        $(".validaDigit").keypress( function (e){
          digits = (document.all) ? e.keyCode : e.which;
          digits = String.fromCharCode(digits)
          return /^[0-9\.]+$/.test(digits);
        });
    });
</script>
<!-- SCRIPT CALENDARIO -->
<script type="text/javascript">
// $(document).ready(function () {
    //Initialize toolti
    //Wizard
//     $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
//         var $target = $(e.target);
//         if ($target.parent().hasClass('disabled')) {
//             return false;
//         }
//     });
//     $(".next-step").click(function (e) {
//         var $active = $('.wizard .nav-tabs li.active');
//         $active.next().removeClass('disabled');
//         nextTab($active);
//     });
//     $(".prev-step").click(function (e) {
//         var $active = $('.wizard .nav-tabs li.active');
//         prevTab($active);
//     });
// });

// function nextTab(elem) {
//     $(elem).next().find('a[data-toggle="tab"]').click();
// }
// function prevTab(elem) {
//     $(elem).prev().find('a[data-toggle="tab"]').click();
// }
</script>

<!-- SCRIPT CALENDARIO -->
<script>
    jQuery(document).ready(function() {
        !function(a){a.fn.datepicker.dates.es={
              days:["Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo"],
              daysShort:["Dom","Lun","Mar","Mie","Jue","Vie","Sab","Dom"],
              daysMin:["Do","Lu","Ma","Mi","Ju","Vi","Sa","Do"],
              months:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
              monthsShort:["Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"],
              today:"Hoy",
              clear:"Borrar",
              weekStart:1,
              format:"yyyy/mm/dd"
              }
        }(jQuery);

        // Date Picker
        jQuery('.DateTime').datepicker({
              format: 'yyyy/mm/dd',
              todayHighlight: true,
              autoclose: true,
              language: 'es'
        });

        // Select2
        jQuery(".select").select2({
            width: '100%'
        });
    });
</script>