<div class="content-wrapper">

    <section class="content-header">
        <?php echo $this->session->flashdata('message'); ?>
        <h1>
            List Pangkat Golongan
        </h1>
    </section>


    <section class="content">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-add">Tambah Pangkat Golongan</a>
        <br />
        <br />
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Golongan</th>
                                    <th>Pangkat</th>

                                    <th>Administrator</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($result->result() as $value) {
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $value->pangkat_golongan_nama ?></td>
                                        <td><?= $value->pangkat_golongan_pangkat ?></td>

                                        <td>
                                            <a href="#" class="btn btn-warning btn-sm" type="button" onclick="edit('<?= $value->pangkat_golongan_id ?>','<?= $value->pangkat_golongan_nama ?>','<?= $value->pangkat_golongan_pangkat ?>')" data-toggle="modal" data-target="#modal-update"><i class="fa fa-edit"></i></a>
                                            <a href="<?= site_url('referensi/Pangkat/delete/' . $value->pangkat_golongan_id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data.?')"><i class="fa fa-trash-o fa-fw"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal fade" id="modal-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="<?= site_url('referensi/Pangkat/add') ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Pangkat Golongan</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label>Nama Golongan</label>
                        <input class="form-control" value="" name="nama" required="true" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Nama Pangkat</label>
                        <input class="form-control" value="" name="pangkat" required="true" autocomplete="off">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="modal fade" id="modal-update">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" action="<?= site_url('referensi/Pangkat/update') ?>" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Pangkat Golongan</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" value="" name="id" id="edit_id">
                    <div class="form-group">
                        <label>Nama Golongan</label>
                        <input class="form-control" value="" name="nama" id="edit_nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label>Nama Pangkat</label>
                        <input class="form-control" value="" name="pangkat" id="edit_pangkat" required="true" autocomplete="off">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    function edit(id, nama, pangkat) {
        $('#edit_id').val(id);
        $('#edit_nama').val(nama);
        $('#edit_pangkat').val(pangkat);
    }
</script>