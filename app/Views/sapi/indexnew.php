<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

  <!-- Jumbotron -->
  <section class="jumbotron" id="datasapi"> 
    <div class="container ">
    <div class="text-center">
        <h1 class="display-4">Index New</h1>
        <hr class="my-4" /> 
          <h2>Daftar Sapi</h2><br>
          <div class="row">
        <div class="col-5">
          <!-- <form action="" method="post"> -->
          <!-- <div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Eartag Sapi  " name="keyword">
<div class="input-group-append">
  <button class="btn btn-primary" type="submit" name="submit">Cari</button> -->
</div>
</div>
<!-- </form> -->
        <!-- </div>
      </div> -->
      
      
      
        
 

   <!-- Table -->
  </thead>
    <thead>
    <table class="table table-sm table-bordered" id="tabelsapi">
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Ear Tag</th>
        <th scope="col">Nomor Hospital Pen</th>
        <th scope="col">Penyakit</th>
        <!-- <th scope="col">Detail</th> -->
      </tr>

      <tbody>
     <?php $i = 1; ?> 
    <?php foreach($sapi as $s) : ?>
  <tr>
    <th scope="row"><?= $i++; ?></th>
    <td><?= $s->eartag ?></td>
    <td><?= $s->id_hospital_pen ?></td>
    <td><?= $s->nama_penyakit ?></td>
   <td>
        <a href="/detail/<?= $s->eartag ?>" class="btn btn-primary">Detail Sapi</a>
        <a href="/kesehatan/<?= $s->eartag ?>" class="btn btn-success">Kesehatan</a>
    </td>
  </tr>
  <?php endforeach;  ?>
  
</tbody>
</table>

      </div>
  </div>
</div>
</section>
<?= $this->endSection(); ?>
<?= $this->section('custom-js'); ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script>
  $(document).ready( function () {
    $('#tabelsapi').DataTable();
} );
</script>
        <!-- <script>
            $(document).ready(function () {
                $('#datasapi').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/sapi/listData',
        order : [],
        columns : [
            {
                data : 'No',
                orderable : false
            },
            {
                data : 'eartag'
            },
            {
                data : 'id_hospital_pen'
            },
            {
                data : 'penyakit'
            },
        ]
    });
  }); 
        </script> -->
<?= $this->endSection(); ?>




  
 



