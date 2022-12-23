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
                    class="fas fa-file-alt"></i> lagu Baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Lagu</th>
                        <th scope="col">Musisi</th>
                        <th scope="col">Album</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Durasi</th>
                        <th scope="col">Path</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($lagu as $b) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $b['nama_lagu']; ?></td>
                        <td><?= $b['musisi']; ?></td>
                        <td><?= $b['album']; ?></td>
                        <td><?= $b['id_genre']; ?></td>
                        <td><?= $b['durasi']; ?></td>
                        <td><?= $b['path']; ?></td>
                        <td>
                            <a href="<?= base_url('lagu/deleteLagu/') . $b['id_lagu']; ?>"
                                onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $b['nama_lagu']; ?> ?');"
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
                <h5 class="modal-title" id="laguBaruModalLabel">Tambah Lagu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('Lagu'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="judul_lagu" name="nama_lagu"
                            placeholder="Masukkan Judul Lagu">
                    </div>
                    <div class="form-group">
                        <select name="musisi" class="form-control form-control-user">
                            <option value="">Pilih Musisi</option>
                            <?php foreach ($musisi as $m) { ?>
                            <option value="<?= $m['id_musisi']; ?>"><?= $m['musisi']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="album" class="form-control form-control-user">
                            <option value="">Pilih Album</option>
                            <?php foreach ($album as $a) { ?>
                            <option value="<?= $a['id_album']; ?>"><?= $a['nama_album']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="id_genre" class="form-control form-control-user">
                            <option value="">Pilih Genre</option>
                            <?php foreach ($genre as $k) { ?>
                            <option value="<?= $k['id_genre']; ?>"><?= $k['genre']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="judul_lagu" name="durasi"
                            placeholder="Masukkan Durasi">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control form-control-user" id="image" name="musik">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                            class="fas fa-ban"></i>Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Mneu -->