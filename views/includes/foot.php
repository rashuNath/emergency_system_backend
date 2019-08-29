
<?php
$ressourceRoot = dirname($_SERVER['PHP_SELF']);
$ressourceRoot = explode('/',$ressourceRoot);

$ressourceRoot = $ressourceRoot[1];
//echo $ressourceRoot;
?>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
    </div>
    <<strong>Copyright &copy; 2019 <a href="javascript:;">Emergency Service</a>.</strong> All rights
    reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/raphael/raphael.min.js"></script>
<script src="/<?php echo $ressourceRoot?>/resources/plugins/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/<?php echo $ressourceRoot?>/resources/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/moment/min/moment.min.js"></script>
<script src="/<?php echo $ressourceRoot?>/resources/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/<?php echo $ressourceRoot?>/resources/plugins/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/<?php echo $ressourceRoot?>/resources/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/<?php echo $ressourceRoot?>/resources/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/<?php echo $ressourceRoot?>/resources/js/demo.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAoCreJSTSKMSraR3BTeIV8TBxoyI4OWA"></script>
<script src="/<?php echo $ressourceRoot?>/resources/js/gmaps.js"></script>
<script src="/<?php echo $ressourceRoot?>/resources/plugins/jquery-latitude-longitude-picker-gmaps/js/jquery-gmaps-latlon-picker.js"></script>
</body>
</html>
