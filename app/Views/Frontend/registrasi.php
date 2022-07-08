<?= $this->extend('layout/app3') ?>

<?= $this->section('content') ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('doc_tem2/fonts/icomoon/style.css'); ?>">
<link rel="stylesheet" href="<?= base_url('doc_tem2/css/owl.carousel.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('doc_tem2/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('doc_tem2/css/style.css'); ?>">

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="doc_tem2/images/logorounded.png" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6 contents">
                <div class="row justify-content-center">
                    <div class="col-md-8 shadow rounded bg-body p-4">
                        <div class="mb-4">
                            <h3>Sign Up</h3>
                            <p class="mb-4">We will not post on your behalf or share any information without your
                                consent.</p>
                        </div>
                        <form action="<?= base_url("/register/prosesreg"); ?>" method="post">
                            <div class="form-group first">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username">

                            </div>
                            <div class="form-group first mt-2">
                                <label for="Email">Email</label>
                                <input type="email" name="email" class="form-control" id="Email">

                            </div>
                            <div class="form-group last mb-4 mt-2">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">

                            </div>

                            <button type="submit" class="btn btn-block btn-danger">Sign Up</button>

                            <span class="d-block text-left my-4 text-muted">&mdash; or Sign Up with &mdash;</span>

                            <div class="social-login">
                                <a href="#" class="facebook">
                                    <span class="icon-facebook mr-3"></span>
                                </a>
                                <a href="#" class="twitter">
                                    <span class="icon-twitter mr-3"></span>
                                </a>
                                <a href="#" class="google">
                                    <span class="icon-google mr-3"></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<script src="<?= base_url('doc_tem2/js/jquery-3.3.1.min.js'); ?>"></script>
<script src="<?= base_url('doc_tem2/js/popper.min.js'); ?>"></script>
<script src="<?= base_url('doc_tem2/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('doc_tem2/js/main.js'); ?>"></script>
<?= $this->endSection() ?>