<div class="row mb-5">
    <div class="col-md-12">
        <div class="p-3 p-lg-5 border">
            <table class="table site-block-order-table mb-5">
                <thead>
                    <th>Nama VIP</th>
                    <th>Harga VIP</th>
                </thead>
                <tbody>

                    <tr>
                        <td><?php echo $vip['2']->nama_vip ?><strong class="mx-2"></td>
                        <td><?php echo $vip['2']->harga_vip ?></td>
                    </tr>

                </tbody>
            </table>
            <div class="border p-3 mb-3">
                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                        aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                <div class="collapse" id="collapsebank">
                    <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as
                            the payment reference. Your order won’t be shipped until the funds have cleared in our
                            account.</p>
                    </div>
                </div>
            </div>

            <div class="border p-3 mb-3">
                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button"
                        aria-expanded="false" aria-controls="collapsecheque">Cheque Payment</a></h3>

                <div class="collapse" id="collapsecheque">
                    <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as
                            the payment reference. Your order won’t be shipped until the funds have cleared in our
                            account.</p>
                    </div>
                </div>
            </div>

            <div class="border p-3 mb-5">
                <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button"
                        aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                <div class="collapse" id="collapsepaypal">
                    <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as
                            the payment reference. Your order won’t be shipped until the funds have cleared in our
                            account.</p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <?php
                $id_user = $this->session->userdata('id_user'); ?>
                <button class="btn btn-primary btn-lg py-3 btn-block"><a
                        href="<?= base_url('index.php/member/thankyou') ?>" title=""> Place
                        Order</a> </button>
            </div>