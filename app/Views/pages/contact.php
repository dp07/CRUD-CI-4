<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Contact Me</h1>
            <?php foreach ($alamat as $a) : ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tipe</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Rumah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $a['tipe']; ?></td>
                            <td><?= $a['alamat']; ?></td>
                            <td><?= $a['kota']; ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>