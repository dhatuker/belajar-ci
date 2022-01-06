<?= $this->extend('layout/template');?>

<?= $this->section('content'); ?>

<?php if (isset($note['judul']) && isset($note['isi'])){?>
    <form action="/note/edit/<?= $note['id']?>" method="post">
<?php }else{ ?>
    <form action="/note/save" method="post">
<?php } ?>

    <div class="mx-5 my-5">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" id="judul-note" name="judul-note" value="<?php if (isset($note['judul'])){echo $note['judul'];};?>">
    </div>
    <div class="mx-5 my-5">
        <label for="isi" class="form-label">Isi</label>
        <input type="text" class="form-control" id="isi-note" name="isi-note" value="<?php if (isset($note['isi'])) { echo $note['isi'];};?>">
    </div>
    <div class = "d-flex justify-content-end mx-5">
        <button type="submit" class="btn btn-primary"><?=$btn?></button>
    </div>
</form>

<?= $this->endSection(); ?>