<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">User</h3>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">User</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Data User</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('user/add') ?>" class="btn btn-success mb-4"><i
                        class="fa fa-plus-circle"></i> Add User</a>
                <div class="table-responsive">
                    <table style="width: 100%;" class="table table-striped" id="example">
                        <thead class="bg-success">
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($user as $row):
                            ?>
                            <tr>
                                <th><?= $no; ?></th>
                                <td><?= $row->username; ?></td>
                                <td><?= $row->email; ?></td>
                                <td>
                                    <?php if ($row->status == 1) { ?>
                                    <span class="badge badge-success">Aktif</span>
                                    <?php } else { ?>
                                    <span class="badge badge-danger">InAktif</span>
                                    <?php } ?>

                                </td>
                                <td>
                                    <?php if ($row->role == 'administrator') { ?>
                                    <span class="badge badge-danger">Administrator</span>
                                    <?php } else { ?>
                                    <span class="badge badge-success">Public</span>
                                    <?php } ?>

                                </td>
                                <td>
                                    <a title="Edit" href="<?= base_url('user/'.$row->id.'/detail') ?>"
                                        class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                    <a title="Delete" href="<?= base_url('user/'.$row->id.'/delete') ?>"
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