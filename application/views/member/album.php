<section class="album-catagory section-padding-100-0">
    <div class="container">

        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
            <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search" name="search">
            </form>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                    <a href="#" data-filter="*">Browse All</a>
                    <a href="#" data-filter=".a" class="active">A</a>
                    <a href="#" data-filter=".b">B</a>
                    <a href="#" data-filter=".c">C</a>
                    <a href="#" data-filter=".d">D</a>
                    <a href="#" data-filter=".e">E</a>
                    <a href="#" data-filter=".f">F</a>
                    <a href="#" data-filter=".g">G</a>
                    <a href="#" data-filter=".h">H</a>
                    <a href="#" data-filter=".i">I</a>
                    <a href="#" data-filter=".j">J</a>
                    <a href="#" data-filter=".k">K</a>
                    <a href="#" data-filter=".l">L</a>
                    <a href="#" data-filter=".m">M</a>
                    <a href="#" data-filter=".n">N</a>
                    <a href="#" data-filter=".o">O</a>
                    <a href="#" data-filter=".p">P</a>
                    <a href="#" data-filter=".q">Q</a>
                    <a href="#" data-filter=".r">R</a>
                    <a href="#" data-filter=".s">S</a>
                    <a href="#" data-filter=".t">T</a>
                    <a href="#" data-filter=".u">U</a>
                    <a href="#" data-filter=".v">V</a>
                    <a href="#" data-filter=".w">W</a>
                    <a href="#" data-filter=".x">X</a>
                    <a href="#" data-filter=".y">Y</a>
                    <a href="#" data-filter=".z">Z</a>
                    <a href="#" data-filter=".number">0-9</a>
                </div>
            </div>
        </div>

        <div class="row oneMusic-albums">
            <?php foreach ($album as $album) { ?>
            <!-- Single Album -->
            <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p">
                <div class="single-album">
                    <img src="<?= base_url('assets/img/artwork/') . $album->artworkpath; ?>" alt="">
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
</section>