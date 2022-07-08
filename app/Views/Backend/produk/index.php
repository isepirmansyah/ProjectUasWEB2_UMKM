<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">Produk</h3>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Produk</li>
    </ol>
</div><!-- /.col -->
<!-- <button onclick="swal.fire()">tes</button> -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Produk UMKM</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('produk/add') ?>" class="btn btn-success mb-4"><i
                        class="fa fa-plus-circle"></i> Add
                    Produk</a>
                <div class="">
                    <table id="example" style="width:100%" class="table table-striped nowrap display">
                        <thead class="bg-success">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Stok</th>
                                <th>Harga Beli</th>
                                <th>Harga Jual</th>
                                <th style="width: 40px;">Foto</th>
                                <th>Jenis Produk</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($produk as $row):
                            ?>
                            <tr>
                                <th><?= $no; ?></th>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->stok; ?></td>
                                <td><?= $row->harga_beli; ?></td>
                                <td><?= $row->harga_jual; ?></td>
                                <td>
                                    <img class="rounded-circle" width="100%"
                                        src="<?= base_url('img') ?>/<?= $row->foto; ?>" alt="">
                                </td>
                                <td><?= $row->Nama; ?></td>
                                <td><?= $row->deskripsi; ?></td>
                                <td>
                                    <a title="Edit" href="<?= base_url('produk/'.$row->id.'/detail') ?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                                    <a title="Delete" href="<?= base_url('produk/'.$row->id.'/delete') ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i
                                            class="fa fa-trash"></i> </a>
                                </td>
                            </tr>

                            <?php
                            $no++;
                            endforeach;
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<!-- Main row -->
<div class="row">

</div>
<?= $this->endSection() ?>