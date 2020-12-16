<?= $this->extend('admin//layout//template'); ?>


<?= $this->section('content'); ?>
<div class="container marketing mt-5">
    <h2 class="featurette-heading mb-3">Form Tambah Daftar Komik</h2>
    <form action="/admin/save" method="post" class="row g-3">
        <?= csrf_field(); ?>
        <div class="col-md-10 mb-2">
            <label for="judul" class="form-label">Judul Komik</label>
            <input type="text" class="form-control <?= ($validation->hasError('judul') ? 'is-invalid' : '');?>" id="judul" name="judul" value="<?= old('judul');?>" autofocus>
            <div id="validationServer05Feedback" class="invalid-feedback">
                <?= $validation-> getError('judul');?>
            </div>
        </div>
        <div class="col-md-10 mb-2">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control <?= ($validation->hasError('penulis') ? 'is-invalid' : '');?>" id="penulis" name="penulis" value="<?= old('penulis');?>">
            <div id="validationServer05Feedback" class="invalid-feedback">
                <?= $validation-> getError('penulis');?>
            </div>
        </div>
        <div class="col-md-10 mb-2">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control <?= ($validation->hasError('genre') ? 'is-invalid' : '');?>" id="genre" name="genre" value="<?= old('genre');?>">
            <div id="validationServer05Feedback" class="invalid-feedback">
                <?= $validation-> getError('genre');?>
            </div>
        </div>
        <div class="col-md-10 mb-2">
            <label for="image" class="form-label">Link Image</label>
            <input type="text" class="form-control <?= ($validation->hasError('image') ? 'is-invalid' : '');?>" id="image" name="image" value="<?= old('image');?>">
            <div id="validationServer05Feedback" class="invalid-feedback">
                <?= $validation-> getError('image');?>
            </div>
        </div>
        <div class="col-10 mb-2">
            <label for="sampul" class="form-label">Link Sampul</label>
            <input type="text" class="form-control <?= ($validation->hasError('sampul') ? 'is-invalid' : '');?>" id="sampul" name="sampul" value="<?= old('sampul');?>">
            <div id="validationServer05Feedback" class="invalid-feedback">
                <?= $validation-> getError('sampul');?>
            </div>
        </div>
        <div class="col-md-10 mb-2">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea class="form-control <?= ($validation->hasError('sinopsis') ? 'is-invalid' : '');?>" id="sinopsis" name="sinopsis" value="<?= old('sinopsis');?>" rows="5"><?= old('sinopsis');?></textarea>
            <div id="validationServer05Feedback" class="invalid-feedback">
                <?= $validation-> getError('sinopsis');?>
            </div>
        </div>
        <div class="mt-3 col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>