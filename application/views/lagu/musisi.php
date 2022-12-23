<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#laguBaruModal"><i
                    class="fas fa-file-alt"></i>Tambah Musisi Baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Musisi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($musisi as $b) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $b['musisi']; ?></td>
                        <td>
                            <a href="<?= base_url('lagu/ubahAlbum/') . $b['id_musisi']; ?>" class="badge badge-info"><i
                                    class="fas fa-edit"></i> Ubah</a>
                            <a href="<?= base_url('lagu/hapusAlbum/') . $b['id_musisi']; ?>"
                                onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $b['musisi']; ?> ?');"
                                class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<!-- Modal Tambah lagu baru-->
<div class="modal fade" id="laguBaruModal" tabindex="-1" role="dialog" aria-labelledby="laguBaruModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="laguBaruModalLabel">Tambah Musisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('index.php/musisi'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="judul_lagu" name="musisi"
                            placeholder="Masukkan Nama Musisi">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                class="fas fa-ban"></i>Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>