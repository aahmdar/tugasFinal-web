<?= $this->extend('admin//layout//template'); ?>


<?= $this->section('content'); ?>


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Welcome</h1>
        <p class="lead fw-normal">Pages Admin adalah tempat untuk mengedit dan menambah daftar komik di Komik.id</p>
        <a class="btn btn-success" href="/admin/komik">Daftar Komik</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<?= $this->endSection(); ?>