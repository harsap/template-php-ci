<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
 
  <script src="<?php echo base_url(); ?>static/vendor/datatables/media/js/dataTables.bootstrap.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>static/appjs/auth/listpengguna.js"></script> 
<ul class="breadcrumb">
    <li><a href="<?php echo base_url(); ?>">Home</a></li> 
    <li><a href="#">Daftar Pengguna</a></li> 
</ul>
<?php if (!empty($message)) { ?> 
    <div class="alert alert-danger alert-normal-danger" hidden="hidden">
        <button type="button" class="close">×</button>
        <?php echo $message; ?>
    </div>
    r<?php } ?>
<h5 class="text-center">Daftar Target Tahunan</h5><br/>

<br/>
<hr/>
<div class="row">
    <table id="daftarUser" class="table table-hover table-bordered table-condensed table-responsive table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>email</th> 
                <th>Nama Depan</th> 
                <th>Nama Belakang</th> 
                <th>Hapus</th>
                <th>Ubah</th> 
            </tr>
        </thead>
        <tbody  >
        </tbody>
    </table> 
</div> 