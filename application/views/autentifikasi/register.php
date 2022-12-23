<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p>See what’s new</p>
        <h2>Register</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Login Area Start ##### -->
<section class="login-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="login-content">
                    <h3>We Welcome You !</h3>
                    <!-- Login Form -->
                    <div class="login-form">
                        <form action="<?= base_url('index.php/autentifikasi/register'); ?>" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter Username" name="username"
                                    value="<?= set_value('username'); ?>">
                                <?= form_error('username', '<div class="audun-warn" role="alert">', '</div>'); ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter E-mail" name="email"
                                        value="<?= set_value('email'); ?>">
                                    <?= form_error('email', '<div class="audun-warn" role="alert">', '</div>'); ?>
                                    <small id="emailHelp" class="form-text text-muted"><i
                                            class="fa fa-lock mr-2"></i>We'll
                                        never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password" name="password1">
                                    <?= form_error('password1', '<div class="audun-warn" role="alert">', '</div>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> Repeat your Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Repeat your Password" name="password2">
                                    <button type="submit" class="btn oneMusic-btn mt-30">Sign Up !</button>
                        </form>
                        <div class="text-center"><a href="<?= base_url('index.php/autentifikasi') ?>">Sign
                                in!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>