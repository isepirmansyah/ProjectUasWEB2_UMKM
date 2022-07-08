<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">Produk</h3>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
</div><!-- /.col -->
<!-- <button onclick="swal.fire()">tes</button> -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Data Produk</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('produk') ?>" class="btn btn-success mb-4"><i
                        class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <form action="<?= base_url('produk/'.$produk->id.'/edit'); ?>" method="post"
                    enctype="multipart/form-data">

                    <div class="form-row">
                        <input type="hidden" value="<?= $produk->foto; ?>" name="fotolama">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nama</label>
                            <input type="text" name="nama" value="<?= $produk->nama; ?>" class="form-control"
                                id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Stok</label>
                            <input type="text" name="stok" value="<?= $produk->stok; ?>" class="form-control"
                                id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Harga Beli</label>
                            <input type="text" name="harga_beli" value="<?= $produk->harga_beli; ?>"
                                class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Harga Jual</label>
                            <input type="text" name="harga_jual" value="<?= $produk->harga_jual; ?>"
                                class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Foto</label>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <img src="<?= base_url('img') ?>/<?= $produk->foto; ?>" alt=""
                                        class="img-thumbnail img-preview">
                                </div>
                                <div class="form-group col-md-8">
                                    <input id="in" class="form-control" name="foto" type="file">

                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Jenis Produk</label>
                            <select id="inputState" name="jenis_id" class="form-control">
                                <option selected>Pilih Jenis Produk...</option>
                                <?php foreach ($jenis_prod as $v):?>
                                <option value="<?=$v->idJen;?>" <?= $v->idJen == $produk->jenis_id ? 'selected' : '' ?>>
                                    <?=$v->Nama;?>
                                </option>';
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputCity">Deskripsi</label>
                            <input type="text" name="deskripsi" value="<?= $produk->deskripsi; ?>" class="form-control"
                                id="inputCity">
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