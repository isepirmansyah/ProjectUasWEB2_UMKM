<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">User</h3>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/user">User</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Edit Data User</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('user') ?>" class="btn btn-success mb-4"><i
                        class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <form action="<?= base_url('user/'.$user->id.'/edit' ); ?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Username</label>
                            <input type="text" name="username" value="<?= $user->username; ?>" class="form-control"
                                id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" name="email" value="<?= $user->email; ?>" class="form-control"
                                id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Status</label>
                            <input type="select" name="status" value="<?= $user->status; ?>" class="form-control"
                                id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Role</label>
                            <input type="select" name="role" value="<?= $user->role; ?>" class="form-control"
                                id="inputPassword4">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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