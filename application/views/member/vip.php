<div class="container">
    <div class="row">
        <div class="col-md-12 mb-5">
            <h2 class="main-head">subscription Pricing Tables</h2>
        </div>
        <!-- Purple Table -->
        <div class="col-md-4">
            <div class="pricing-table purple">
                <!-- Table Head -->
                <div class="pricing-label">Fixed Price</div>
                <h2><?php echo $vip['0']->nama_vip ?></h2>
                <h5>Made for starters</h5>
                <!-- Features -->

                <!-- Price -->
                <div class="price-tag">
                    <span class="amount"><?php echo $vip['0']->harga_vip ?></span>
                    <span class="after">/<?php echo $vip['0']->bulan ?></span>
                </div>
                <!-- Button -->
                <a class="price-button" href="<?= base_url('index.php/member/checkout') ?>">Get Started</a>
            </div>
        </div>
        <!-- Turquoise Table -->
        <div class="col-md-4">
            <div class="pricing-table turquoise">
                <!-- Table Head -->
                <div class="pricing-label">Fixed Price</div>
                <h2><?php echo $vip['1']->nama_vip ?></h2>
                <h5>Made for experienced users</h5>
                <!-- Features -->

                <!-- Price -->
                <div class="price-tag">
                    <span class="amount"><?php echo $vip['1']->harga_vip ?></span>
                    <span class="after">/<?php echo $vip['1']->bulan ?></span>
                </div>
                <!-- Button -->
                <a class="price-button" href="<?= base_url('index.php/member/checkout1') ?>">Get Started</a>
            </div>
        </div>
        <!-- Red Table -->
        <div class="col-md-4">
            <div class="pricing-table red">
                <!-- Table Head -->
                <div class="pricing-label">Fixed Price</div>
                <h2><?php echo $vip['2']->nama_vip ?></h2>
                <h5>Made for YOU!</h5>
                <!-- Features -->
                <!-- Price -->
                <div class="price-tag">
                    <span class="amount"><?php echo $vip['2']->harga_vip ?></span>
                    <span class="after">/<?php echo $vip['2']->bulan ?></span>
                </div>
                <!-- Button -->
                <a class="price-button" href="<?= base_url('index.php/member/checkout2') ?>">Get Started</a>
            </div>
        </div>
    </div>
</div>