<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-3">
            <?php if (validation_errors()) { ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#kategoriBaruModal"><i
                    class="fas fa-file-alt"></i> Tambah Genre</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $a = 1;
                    foreach ($genre as $k) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $k['genre']; ?></td>
                        <td>
                            <a href="<?= base_url('lagu/ubahGenre/') . $k['id_genre']; ?>" class="badge badge-info"><i
                                    class="fas fa-edit"></i> Ubah</a>
                            <a href="<?= base_url('lagu/hapusGenre/') . $k['id_genre']; ?>"
                                onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $k['genre']; ?> ?');"
                                class="badge badge-danger"><i class="fas fa-trash"></i>Hapus</a>
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
<!-- Modal Tambah kategori baru-->
<div class="modal fade" id="kategoriBaruModal" tabindex="-1" role="dialog" aria-labelledby="kategoriBaruModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kategoriBaruModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('lagu/genre'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="genre" class="form-control form-control-user">
                            <option value="">Pilih Genre</option>
                            <?php
                            $k = ['Kpop', 'Jpop', 'Jazz'];
                            for ($i = 0; $i < 2; $i++) { ?>
                            <option value="<?= $k[$i]; ?>"><?= $k[$i]; ?></option>
                            <?php } ?>
                        </select>
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