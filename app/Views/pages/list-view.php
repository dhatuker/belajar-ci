<?= $this->extend('layout/template');?>

<?= $this->section('content'); ?>

<?php $i=0 ;?>

<?php foreach ($note as $n) : ?>
<?php $i++?>

<div class="card text-dark bg-light mx-5 my-5">
  <div class="card-header"><?=$i?></div>
  <div class="card-body">
    <h5 class="card-title"><?=$n['judul']?></h5>
    <p class="card-text"><?=$n['isi']?></p>
    <div class="d-flex justify-content-end">
        <a href="<?=base_url()?>" class="btn btn-danger mx-2">Delete</a>
        <a href="<?=base_url("/create-list/$i")?>" class="btn btn-warning mx-2">Edit</a>
    </div>
  </div>
</div>

<?php endforeach?>

<?= $this->endSection(); ?>