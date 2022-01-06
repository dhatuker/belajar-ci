<?= $this->extend('layout/template');?>

<?= $this->section('content'); ?>

<div>
    <div class="mx-5 my-5">
        <label for="exampleFormControlInput1" class="form-label">Judul</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"><?php echo $note['judul']?></textarea>
    </div>
    <div class="mx-5 my-5">
        <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $note['isi']?></textarea>
    </div>
    <div class = "d-flex justify-content-end mx-5">
        <a href="" class="btn btn-primary">Edit</a>
    </div>
</div>

<?= $this->endSection(); ?>