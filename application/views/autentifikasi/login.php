<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
        <p>See what’s new</p>
        <h2>Login</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Login Area Start ##### -->
<section class="login-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="login-content">
                    <h3>Welcome Back</h3>
                    <?= $this->session->flashdata('pesan'); ?>
                    <!-- Login Form -->
                    <div class="login-form">
                        <form action="<?= base_url('index.php/autentifikasi'); ?>" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter E-mail" name="email"
                                    value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<div class="audun-warn" role="alert">', '</div>'); ?>
                                <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll
                                    never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password" name="password">
                                <?= form_error('password', '<div class="audun-warn" role="alert">', '</div>'); ?>
                            </div>
                            <button type="submit" class="btn oneMusic-btn mt-30">Sign In !</button>
                        </form>
                        <div class="text-center"><a href="<?= base_url('index.php/autentifikasi/register') ?>">Sign
                                up!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>