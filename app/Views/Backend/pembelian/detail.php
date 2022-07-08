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
                <h3 class="card-title">Edit Data Pembelian</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('pembelian') ?>" class="btn btn-success mb-4"><i
                        class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <form action="<?= base_url('pembelian/'.$pembelian->idPem.'/edit' ); ?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tanggal</label>
                            <input type="date" name="tgl" value="<?= $pembelian->tanggal; ?>" class="form-control"
                                id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Jumlah</label>
                            <input type="text" name="jumlah" value="<?= $pembelian->jumlah; ?>" class="form-control"
                                id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Harga</label>
                            <input type="text" name="harga" value="<?= $pembelian->harga; ?>" class="form-control"
                                id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Produk Id</label>
                            <select id="inputState" name="produk_id" class="form-control">
                                <option selected>Pilih Produk ..</option>
                                <?php foreach ($prod as $v):?>
                                <option value="<?=$v->id;?>" <?= $v->id == $pembelian->produk_id ? 'selected' : '' ?>>
                                    <?=$v->nama;?>
                                </option>';
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Suplier Id</label>
                            <select id="inputState" name="suplier_id" class="form-control">
                                <option selected>Pilih Suplier ...</option>
                                <?php foreach ($supl as $v):?>
                                <option value="<?=$v->id;?>" <?= $v->id == $pembelian->suplier_id ? 'selected' : '' ?>>
                                    <?=$v->namasup;?>
                                </option>';
                                <?php endforeach; ?>
                            </select>
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