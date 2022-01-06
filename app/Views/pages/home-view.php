<?= $this->extend('layout/template');?>

<?= $this->section('content'); ?>
<div class="row my-5 mx-5">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Buat Catatan Harian Anda</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="<?= base_url('/create-list')?>" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Lihat Catatan Harian Anda</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="<?= base_url('/list') ?>" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>