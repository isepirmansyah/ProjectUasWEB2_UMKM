<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">Pesanan</h3>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Pesanan</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('pesanan/add') ?>" class="btn btn-success mb-4"><i
                        class="fa fa-plus-circle"></i> Add
                    Pesanan</a>
                <div>
                    <table style="width: 100%;" class="table table-striped nowrap display" id="example">
                        <thead class="bg-success">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Jumlah</th>
                                <th>User</th>
                                <th>Produk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($pesanan as $row):
                                ?>
                            <tr>
                                <th><?= $no; ?></th>
                                <td><?= $row['tanggal']; ?></td>
                                <td><?= $row['jumlah']; ?></td>
                                <td><?= $row['username']; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td>
                                    <a title="Edit" href="<?= base_url('/pesanan/'.$row['id'].'/detail') ?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a title="Delete" href="<?= base_url('/pesanan/'.$row['id'].'/delete') ?>"
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