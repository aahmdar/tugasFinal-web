<?= $this->extend('layout//template'); ?>


<?= $this->section('content'); ?>
<div class="container marketing">

    <img src="<?= $komik['sampul']; ?>" class="img-fluid d-block w-100" alt="...">
    <div class="row align-items-start">
        <div class="col-6 col-sm-3 mt-4">
            <img class="img-thumbnail" width="100%" height="100" src="<?= $komik['image']; ?>" alt="Generic placeholder image">
        </div>
        <div class="col-me-0 mt-4">
            <h2 class="featurette-heading"><?= $komik['judul']; ?></h2>
            <p class="lead"><b>Genre : </b><?= $komik['genre']; ?></p>
            <p class="lead"><b>Penulis : </b><?= $komik['penulis']; ?></p>
        </div>
    </div>
    <p class="lead mt-4"><?= $komik['sinopsis']; ?></p>
    <p class="float-right"><a href="/komik">Back to Daftar Komik</a></p>
</div>
<?= $this->endSection(); ?>