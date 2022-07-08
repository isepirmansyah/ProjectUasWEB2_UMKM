<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">Jenis Produk</h3>
</div>
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Jenis Produk</li>
    </ol>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <?php if (session()->getFlashdata('message')) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil </strong> Data Berhasil Di Tambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php
        } ?>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data Jenis Produk</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('jenis_produk/add') ?>" class="btn btn-success mb-4"><i
                        class="fa fa-plus-circle"></i> Add
                    Jenis
                    Produk</a>
                <div>
                    <table style="width: 100%;" id="example" class="table table-striped nowrap display">
                        <thead class="bg-success">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                foreach ($jenisprod as $row):
                                ?>
                            <tr>
                                <th><?= $no; ?></th>
                                <td><?= $row->Nama; ?></td>
                                <td>
                                    <a title="Edit" href="<?= base_url('jenis_produk/'.$row->idJen.'/detail') ?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a title="Delete" href="<?= base_url('jenis_produk/'.$row->idJen.'/delete') ?>"
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