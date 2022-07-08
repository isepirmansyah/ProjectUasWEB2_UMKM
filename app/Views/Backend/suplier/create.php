<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">Dashboard</h3>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Suplier</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('suplier') ?>" class="btn btn-success mb-4"><i
                        class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <form action="<?= base_url("suplier/new"); ?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama</label>
                            <input type="text" name="namasup" value="<?= old('namasup') ?>"
                                class="form-control <?= ($validation->hasError('namasup')) ? 'is-invalid' : '' ?>"
                                id="inputEmail4">
                            <div class="invalid-feedback">
                                <?= $validation->getError('namasup'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Kota</label>
                            <input type="text" name="kota" value="<?= old('kota') ?>"
                                class="form-control <?= ($validation->hasError('kota')) ? 'is-invalid' : '' ?>"
                                id="inputPassword4">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kota'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Kontak</label>
                            <input type="text" name="kontak" value="<?= old('kontak') ?>"
                                class="form-control <?= ($validation->hasError('kontak')) ? 'is-invalid' : '' ?>"
                                id="inputEmail4">
                            <div class="invalid-feedback">
                                <?= $validation->getError('kontak'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Alamat</label>
                            <input type="text" name="alamat" value="<?= old('alamat') ?>"
                                class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>"
                                id="inputPassword4">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Telepon</label>
                            <input type="text" name="telpon" value="<?= old('telpon') ?>"
                                class="form-control <?= ($validation->hasError('telpon')) ? 'is-invalid' : '' ?>"
                                id="inputEmail4">
                            <div class="invalid-feedback">
                                <?= $validation->getError('telpon'); ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<!-- Main row -->
<div class="row">

</div>

<?= $this->endSection() ?>