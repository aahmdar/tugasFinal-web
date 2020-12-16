<?= $this->extend('admin//layout//template'); ?>


<?= $this->section('content'); ?>

<div class="container marketing mt-3">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Daftar Komik</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <a href="/admin/komik/create" class="btn btn-primary mt-3">Tambah Komik</a>
            <table class="table">
                <thead class="table-light">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Penulis</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $k['judul']; ?></td>
                            <td><?= $k['penulis']; ?></td>
                            <td>
                                <a href="/admin/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>

                                <form action="/admin/komik/<?= $k['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Delete Komik <?= $k['judul']; ?> ?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>