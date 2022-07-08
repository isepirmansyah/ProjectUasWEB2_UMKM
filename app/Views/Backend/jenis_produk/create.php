<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">Dashboard</h3>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard v1</li>
    </ol>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Jenis Produk</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('jenis_produk') ?>" class="btn btn-success mb-4"><i
                        class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <form action="<?= base_url("jenis_produk/new"); ?>" method="post">

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Nama</label>
                            <input type="text" name="nama"
                                class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>"
                                id="inputEmail4" value="<?= old('nama') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
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