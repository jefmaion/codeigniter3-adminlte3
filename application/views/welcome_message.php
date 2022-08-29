 <!-- Content Header (Page header) -->
 <section class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
       <h1>Welcome to CodeIgniter with <b>AdminLTE</b>!</h1>
       </div>
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="#">Home</a></li>
           <li class="breadcrumb-item active">Welcome</li>
         </ol>
       </div>
     </div>
   </div><!-- /.container-fluid -->
 </section>

 <!-- Main content -->
 <section class="content">

   <!-- Default box -->
   <div class="card card-primary card-outline">
     
     <div class="card-body">

         <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
         

         <p>If you would like to edit this page you'll find it located at:</p>
         <code>application/views/welcome_message.php</code>

         <p>The corresponding controller for this page is found at:</p>
         <code>application/controllers/Welcome.php</code>

         <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="userguide3/">User Guide</a>.</p>
       </div>

     <!-- /.card-body -->
     <div class="card-footer">
     Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
     </div>
     <!-- /.card-footer-->
   </div>
   <!-- /.card -->

   

<?php $this->adminlte->load('plugins', ['datatable', 'select2']) ?>


<script>
//   $('.datatable').DataTable({
//     language: {
//         url: '//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
//     }
// });


// $('.select2').select2({
//     theme: 'bootstrap4',
//   });

</script>


