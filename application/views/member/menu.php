<section class="latest-albums-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading style-2">
                    <p>See what’s new</p>
                    <h2>Lets Take a Look</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center mb-70">
                    <p> Project Web programming 2 ! ! ! . <br> Proyecto de programación web 2 ! ! ! . <br> Projet Web
                        programmation 2 ! ! ! .</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Featured Album</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($album as $album) { ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                <div class="single-album-area wow fadeInUp" data-wow-delay="100ms">
                    <div class="album-thumb">
                        <img src="<?= base_url('assets/img/artwork/') . $album->artworkpath; ?>" alt="">
                        <!-- Album Price -->
                        <!-- Play Icon -->
                        <div class="play-icon">
                            <a href="#" class="video--play--btn"><span class="icon-play-button"></span></a>
                        </div>
                    </div>
                    <div class="album-info">
                        <a href="<?= base_url('member/album') ?>" title="">
                            <h5><?php echo $album->nama_album ?></h5>
                        </a>
                        <p><?php echo $album->musisi ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
</div>
</div>
<section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed"
    style="background-image: url(img/bg-img/bg-4.jpg);">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-md-5 col-lg-4">
                <div class="featured-artist-thumb">
                    <img src="<?= base_url('assets/img/artwork/') . $album->artworkpath; ?>" alt="">
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-8">
                <div class="featured-artist-content">
                    <!-- Section Heading -->
                    <div class="section-heading white text-left mb-30">
                        <p>See what’s new</p>
                        <h2>Buy What’s New</h2>
                    </div>
                    <p>One of Best Song from Via Vallen</p>
                    <div class="song-play-area">
                        <div class="song-name">
                            <p><?php echo $lagu['9']->nama_lagu; ?></p>
                        </div>
                        <audio preload="auto" controls>
                            <source src="<?= base_url('assets\lagu\Kukatakan_Dengan_Indah.mp3'); ?>">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="miscellaneous-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- ***** Weeks Top ***** -->
            <div class="col-12 col-lg-4">
                <div class="weeks-top-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>This week’s top</h2>
                    </div>
                    <?php foreach ($lagu as $a) { ?>
                    <div class="single-top-item d-flex wow fadeInUp" data-wow-delay="100ms">
                        <div class="thumbnail">
                            <img src="img/bg-img/wt1.jpg" alt="">
                        </div>
                        <div class="content-">
                            <h6><?php echo $a->nama_lagu ?></h6>
                            <p><?php echo $a->musisi ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="popular-artists-area mb-100">
                    <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                        <p>See what’s new</p>
                        <h2>Popular Artist</h2>
                    </div>
                    <?php foreach ($musisi as $m) { ?>
                    <div class="single-artists d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                        <div class="thumbnail">
                            <img src="<?= base_url('assets/img/dead.jpeg') ?>" alt="">
                        </div>
                        <div class="content-">
                            <p><?php echo $m->musisi ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
</section>