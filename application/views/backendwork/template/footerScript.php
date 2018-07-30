<?php // js scripts and custom.js ?>

<!-- jQuery -->
<script src="<?= base_url()?>assets/backendwork/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url()?>assets/backendwork/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url()?>assets/backendwork/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url()?>assets/backendwork/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?= base_url()?>assets/backendwork/vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?= base_url()?>assets/backendwork/vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?= base_url()?>assets/backendwork/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?= base_url()?>assets/backendwork/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?= base_url()?>assets/backendwork/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?= base_url()?>assets/backendwork/vendors/Flot/jquery.flot.js"></script>
<script src="<?= base_url()?>assets/backendwork/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?= base_url()?>assets/backendwork/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?= base_url()?>assets/backendwork/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?= base_url()?>assets/backendwork/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?= base_url()?>assets/backendwork/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?= base_url()?>assets/backendwork/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?= base_url()?>assets/backendwork/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?= base_url()?>assets/backendwork/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?= base_url()?>assets/backendwork/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?= base_url()?>assets/backendwork/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= base_url()?>assets/backendwork/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= base_url()?>assets/backendwork/vendors/moment/min/moment.min.js"></script>
<script src="<?= base_url()?>assets/backendwork/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= base_url()?>assets/backendwork/build/js/custom.min.js"></script>


<script type="text/javascript">

    function ajaxModel(url, title, width) {
        if (typeof(width) === 'undefined') {
            width = 'modal-lg';
        }
        if (url) {
            $.ajax({
                url: SITE_URL + url,
                dataType: 'html',
                success: function (responce) {
                    $('#feedback_admin_modal .modal-title').html(title);
                    $('#feedback_admin_modal .modal-body').html(responce);
                    $('#feedback_admin_modal .modal-dialog').addClass(width);

                    if (!$('#feedback_admin_modal').hasClass('show')) {
                        $('#feedback_admin_modal').modal('show');
                    }

                }
            });
        }
    }
    jQuery(document).ready(function (){

    });
</script>