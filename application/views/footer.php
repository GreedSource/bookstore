
            </div>

<!-- /.container-fluid -->
<footer class="footer text-center"> </footer>

</div><!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?=base_url()?>assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?=base_url()?>assets/html/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?=base_url()?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="<?=base_url()?>assets/html/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?=base_url()?>assets/html/js/waves.js"></script>
<!--Counter js -->
<script src="<?=base_url()?>assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?=base_url()?>assets/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!-- chartist chart -->
<script src="<?=base_url()?>assets/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="<?=base_url()?>assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="<?=base_url()?>assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="<?=base_url()?>assets/html/js/custom.min.js"></script>
<script src="<?=base_url()?>assets/html/js/dashboard1.js"></script>
<script src="<?=base_url()?>assets/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<!-- Starrr JavaScript -->
<script src="<?=base_url()?>assets/dist/starrr.js"></script>
<script src="<?=base_url()?>assets/js/jquery.redirect.js"></script>

<script>
    function addBook(){
        $.redirect('<?=base_url()?>nuevo/libro');
    }

    function logout(){
        $.redirect('<?=base_url()?>logout');
    }
</script>

</body>

</html>