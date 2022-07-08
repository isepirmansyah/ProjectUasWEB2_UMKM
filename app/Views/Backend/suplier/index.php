<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">Suplier</h3>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Suplier</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Suplier</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('suplier/add') ?>" class="btn btn-success mb-4"><i
                        class="fa fa-plus-circle"></i> Add
                    Produk</a>
                <div class="">
                    <table style="width: 100%;" class="table table-striped nowrap display" id="example">
                        <thead class="bg-success">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kota</th>
                                <th>Kontak</th>
                                <th>Alamat</th>
                                <th>Telpon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($suplier as $row):
                            ?>
                            <tr>
                                <th><?= $no; ?></th>
                                <td><?= $row->namasup; ?></td>
                                <td><?= $row->kota; ?></td>
                                <td><?= $row->kontak; ?></td>
                                <td><?= $row->alamat; ?></td>
                                <td><?= $row->telpon; ?></td>
                                <td>
                                    <a title="Edit" href="<?= base_url('suplier/'.$row->id.'/detail') ?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a title="Delete" href="<?= base_url('suplier/'.$row->id.'/delete') ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"><i
                                            class="fa fa-trash"></i></a>
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