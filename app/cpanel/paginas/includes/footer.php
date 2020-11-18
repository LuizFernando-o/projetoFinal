<footer class="main-footer">
  <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.1.0-pre
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="app/cpanel/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="app/cpanel/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="app/cpanel/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="app/cpanel/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="app/cpanel/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="app/cpanel/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="app/cpanel/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="app/cpanel/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="app/cpanel/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="app/cpanel/plugins/jszip/jszip.min.js"></script>
<script src="app/cpanel/plugins/pdfmake/pdfmake.min.js"></script>
<script src="app/cpanel/plugins/pdfmake/vfs_fonts.js"></script>
<script src="app/cpanel/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="app/cpanel/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="app/cpanel/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- ChartJS -->
<script src="app/cpanel/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="app/cpanel/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="app/cpanel/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="app/cpanel/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="app/cpanel/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="app/cpanel/plugins/moment/moment.min.js"></script>
<script src="app/cpanel/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="app/cpanel/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="app/cpanel/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="app/cpanel/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="app/cpanel/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="app/cpanel/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="app/cpanel/dist/js/pages/dashboard.js"></script>

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>

</html>