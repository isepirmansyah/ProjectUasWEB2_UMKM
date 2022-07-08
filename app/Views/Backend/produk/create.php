<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">Dashboard</h3>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Produk</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('produk') ?>" class="btn btn-success mb-4"><i
                        class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <form action="<?= base_url("produk/new"); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama</label>
                            <input type="text" name="nama"
                                class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>"
                                id="inputEmail4" value="<?= old('nama') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Stok</label>
                            <input type="text" name="stok"
                                class="form-control <?= ($validation->hasError('stok')) ? 'is-invalid' : '' ?>"
                                id="inputPassword4" value="<?= old('stok') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('stok'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Harga Beli</label>
                            <input type="text" name="harga_beli"
                                class="form-control <?= ($validation->hasError('harga_beli')) ? 'is-invalid' : '' ?>"
                                id="inputEmail4" value="<?= old('harga_beli') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga_beli'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Harga Jual</label>
                            <input type="text" name="harga_jual"
                                class="form-control <?= ($validation->hasError('harga_jual')) ? 'is-invalid' : '' ?>"
                                id="inputPassword4" value="<?= old('harga_jual') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga_jual'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Foto</label>

                            <input id="in"
                                class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : '' ?>"
                                name="foto" type="file" value="<?= old('foto') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>


                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Jenis Produk</label>
                            <select class="form-select" id="inputState" name="jenis_id"
                                class="form-control <?= ($validation->hasError('jenis_id')) ? 'is-invalid' : '' ?>">
                                <option hidden>Pilih Jenis Produk ..</option>
                                <?php foreach ($jenis_prod as $v):?>
                                <option value="<?=$v->idJen;?>"><?=$v->Nama;?>
                                </option>';
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('jenis_id'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Deskripsi</label>
                            <input type="text" name="deskripsi"
                                class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '' ?>"
                                id="inputCity" value="<?= old('deskripsi') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('deskripsi'); ?>
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