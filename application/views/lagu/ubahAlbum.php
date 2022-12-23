<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) { ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>


            <!-- KOnten -->
            <form action="<?= base_url('lagu/ubahalbum'); ?>" method="post" enctype="multipart/form-data">
                <div class='row'>
                    <div class='col-sm-9'>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="judul_buku" name="album"
                                    placeholder="Masukkan Nama Album" value="<?= $album['nama_album']; ?>">
                            </div>
                            <div class="form-group">
                                <select name="musisi" class="form-control form-control-user">

                                    <?php foreach ($musisi as $m) { ?>
                                    <option value="<?= $m['id_musisi']; ?>"><?= $m['musisi']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control form-control-user" id="image" name="image">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="window.history.back(-1)"><i
                                    class="fas fa-ban"></i>Close</button>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i>
                                Update</button>
                        </div>
                    </div>
                </div>

            </form>


        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->