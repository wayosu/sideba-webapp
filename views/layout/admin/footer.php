 <!-- Main Footer -->
 <footer class="main-footer">
     <!-- To the right -->
     <div class="float-right d-none d-sm-inline">
         Anything you want
     </div>
     <!-- Default to the left -->
     <strong>Copyright &copy; 2021 <a href="#" class="text-teal">SIDEBA</a>.</strong> All rights reserved.
 </footer>
 </div>
 <!-- ./wrapper -->

 <!-- REQUIRED SCRIPTS -->

 <!-- jQuery -->
 <script src="<?= $base_url; ?>assets/bootstrap/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="<?= $base_url; ?>assets/bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables -->
 <script src="<?= $base_url; ?>assets/bootstrap/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= $base_url; ?>assets/bootstrap/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?= $base_url; ?>assets/bootstrap/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="<?= $base_url; ?>assets/bootstrap/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <!-- Select2 -->
 <script src="<?= $base_url; ?>assets/bootstrap/plugins/select2/js/select2.full.min.js"></script>
 <!-- Bootstrap Switch -->
 <script src="<?= $base_url; ?>assets/bootstrap/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= $base_url; ?>assets/bootstrap/dist/js/adminlte.min.js"></script>
 <!-- page script -->
 <script>
     $("#example1").DataTable({
         "responsive": true,
         "autoWidth": false,
     });

     //Initialize Select2 Elements
     $('.select2').select2()

     function fetch_select(val) {
         $.ajax({
             type: 'post',
             url: '<?= $base_url; ?>app/function/admin/getData.php',
             data: {
                 get_option: val
             },
             success: function(response) {
                 if (val == '') {
                     alert('Mohon pilih data dengan benar !');
                     $("#infoData").html("");
                     $("#btnForSubmit").html("");
                 } else {
                     const btnForSubmit = `<div class="form-group">
                                                <button type="submit" name="simpan" class="btn btn-sm btn-primary font-weight-bold shadow">Simpan</button>
                                            </div>`;
                     $("#infoData").html(response);
                     $("#btnForSubmit").html(btnForSubmit);
                 }
             }
         });
     }
 </script>
 </body>

 </html>