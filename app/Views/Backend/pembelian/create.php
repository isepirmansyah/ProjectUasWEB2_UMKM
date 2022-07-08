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
                <h3 class="card-title">Tambah Data Pembelian</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('pembelian') ?>" class="btn btn-success mb-4"><i
                        class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <form action="<?= base_url("pembelian/new"); ?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tanggal</label>
                            <input type="date" value="<?= old('tanggal') ?>" name="tanggal"
                                class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : '' ?>"
                                id="inputEmail4">
                            <div class="invalid-feedback">
                                <?= $validation->getError('tanggal'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Jumlah</label>
                            <input type="text" value="<?= old('jumlah') ?>" name="jumlah"
                                class="form-control <?= ($validation->hasError('jumlah')) ? 'is-invalid' : '' ?>"
                                id="inputPassword4">
                            <div class="invalid-feedback">
                                <?= $validation->getError('jumlah'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Harga</label>
                            <input type="text" value="<?= old('harga') ?>" name="harga"
                                class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : '' ?>"
                                id="inputEmail4">
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Produk Id</label>
                            <select class="form-select" id="inputState" name="produk_id"
                                class="form-control <?= ($validation->hasError('produk_id')) ? 'is-invalid' : '' ?>">
                                <option>Pilih Produk ...</option>
                                <?php foreach ($prod as $v):?>
                                <option value="<?=$v->id;?>"><?=$v->nama;?>
                                </option>';
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('produk_id'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Suplier Id</label>
                            <select class="form-select" id="inputState" name="suplier_id"
                                class="form-control <?= ($validation->hasError('suplier_id')) ? 'is-invalid' : '' ?>">
                                <option>Pilih Suplier ...</option>
                                <?php foreach ($supl as $v):?>
                                <option value="<?=$v->id;?>"><?=$v->namasup;?>
                                </option>';
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('suplier_id'); ?>
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