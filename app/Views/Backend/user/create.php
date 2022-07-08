<?= $this->extend('layout/app') ?>

<?= $this->section('atas') ?>
<div class="col-sm-6">
    <h3 class="m-0">User</h3>
</div><!-- /.col -->
<div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/user">User</a></li>
        <li class="breadcrumb-item active">Tambah</li>
    </ol>
</div><!-- /.col -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Tambah Data User</h3>
            </div>
            <div class="card-body">
                <a title="Add Produk" href="<?= base_url('user') ?>" class="btn btn-success mb-4"><i
                        class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                <form action="<?= base_url("user/new"); ?>" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Username</label>
                            <input type="text" name="username"
                                class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>"
                                id="inputEmail4" value="<?= old('username') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" name="email"
                                class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>"
                                id="inputPassword4" value="<?= old('email') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Password</label>
                            <input type="text" name="password"
                                class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>"
                                id="inputEmail4" value="<?= old('password') ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Status</label>
                            <div class="form-group clearfix">
                                <div class="icheck-primary d-inline">
                                    <input type="radio" id="radioPrimary1" value="1" name="status" checked>
                                    <label for="radioPrimary1">Aktif
                                    </label>
                                </div>
                                <div class="icheck-primary d-inline ml-3">
                                    <input type="radio" id="radioPrimary2" value="0" name="status">
                                    <label for="radioPrimary2">InAktif
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Role</label>
                            <div class="form-group clearfix">
                                <div class="icheck-danger d-inline">
                                    <input type="radio" id="radioDanger1" value="administrator" name="role" checked>
                                    <label for="radioDanger1">Administrator
                                    </label>
                                </div>
                                <div class="icheck-danger d-inline ml-3">
                                    <input type="radio" id="radioDanger2" value="public" name="role">
                                    <label for="radioDanger2">Public
                                    </label>
                                </div>
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