<?= $this->extend('layout//template'); ?>


<?= $this->section('content'); ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Welcome</h1>
        <p class="lead fw-normal">Komik.id adalah website yang menampilkan informasi tentang komik / manga kesukaan mu . Hehehe....</p>
        <a class="btn btn-success" href="/komik">Daftar Komik</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

<?= $this->endSection(); ?>