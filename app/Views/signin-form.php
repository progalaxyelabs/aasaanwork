<?= $this->extend('default-layout') ?>


<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <form method="post" action="/access/signin_submit" id="form-content" class="form">
                <?= csrf_field() ?>

                <?php if (isset($signin_error) && ($signin_error != '')) : ?>
                    <div class="alert alert-warning" role="alert">
                        <?= $signin_error ?>
                    </div>
                <?php endif; ?>

                <label for="signinName">Username</label>
                <input id="signinName" class="form-control" type="text" name="signinname" placeholder="Enter Username" required>

                <label for="passwordInput">Password</label>
                <input id="passwordInput" class="form-control" type="password" name="password" placeholder="Enter Password" required>
                <div>
                    <label for="checkboxInput">Remember password</label>
                    <input id="checkboxInput" type="checkbox" class="form-check-input">
                </div>

                <div>
                    <a href="#">Forget password?</a>
                </div>

                <div>
                    <button class="btn btn-primary">Login</button>
                </div>

                <div>
                    <span>Create account? <a href="#">Sign Up?</a></span>
                </div>

            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>