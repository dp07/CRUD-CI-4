<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6">

            <div class="card mt-3" style="width: 18rem;">
                <img src="<?= base_url('img/') . "/" . $komik['sampul']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Judul: <?= $komik['judul']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Penulis: <?= $komik['penulis']; ?></h6>
                    <p class="card-text">Penerbit: <?= $komik['penerbit']; ?></p>
                    <a href="" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>

                    <br><br>
                    <a href="<?= base_url('komik'); ?>" class="card-link">Back</a>

                </div>
            </div>


        </div>
    </div>
</div>
<?= $this->endSection(); ?>