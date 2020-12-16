<?= $this->extend('layout//template'); ?>


<?= $this->section('content'); ?>


<div class="album py-4">
    <div class="container">
        <div class="row row-cols-3 row-cols-sm-3 row-cols-md-3 g-3">
            <?php foreach ($komik as $k) : ?>
                <div class=" col mt-4">
                    <div class="card shadow-sm">
                        <a href="/komik/<?= $k['slug']; ?>">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="<?= $k['sampul']; ?>">
                        </a>

                        <div class="card-body">
                            <h4 class="card-text"><b><?= $k['judul']; ?></b></h4>
                            <p class="card-text"><b>Genre: </b><?= $k['genre']; ?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="/komik/<?= $k['slug']; ?>" class="btn btn-sm btn-success">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div><!-- /.container -->
<?= $this->endSection(); ?>