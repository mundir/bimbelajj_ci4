<?= $this->extend('layoutView') ?>
<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Data Admin</h4>
                <!-- <p class="text-muted font-14 m-b-20">
                    For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.
                </p> -->
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="mb-2"><a href="<?= $baseUrl . 'tambah'; ?>" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Tambah Data</a></div>
                    </div>
                    <div class="col-sm-6">
                        <?= form_open($baseUrl . 'cari'); ?>
                        <div class="input-group">
                            <?php $class = ($validasi->hasError('keyword')) ? 'form-control is-invalid' : 'form-control'; ?>
                            <?= form_input('keyword', '', 'class="' . $class . '"',); ?>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fa fa-search mr-1"></i> Cari</button>
                            </div>
                            <div class="input-group-append">
                                <a href="<?= $baseUrl . 'reset_keyword'; ?>" class="btn btn-light waves-effect waves-light"><i class="fa fa-search mr-1"></i> Reset</a>
                            </div>
                            <div class="invalid-feedback">
                                <?= $validasi->getError('keyword');; ?>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Nomor HP</th>
                            <th>jabatan</th>
                            <th>Detail</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dts as $dt) : ?>
                            <tr>
                                <th scope="row"><?= $dt->id; ?></th>
                                <td><?= $dt->nama; ?></td>
                                <td><?= $dt->username; ?></td>
                                <td><?= $dt->nomor_hp; ?></td>
                                <td><?= $dt->jabatan; ?></td>
                                <td><a href="<?= $baseUrl . 'detail/' . $dt->id; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a></td>
                                <td><a href="<?= $baseUrl . 'edit/' . $dt->id; ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a></td>
                                <td><a onClick="return confirm('Yakin hapus data ini?')" href="<?= $baseUrl . 'hapus/' . $dt->id; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
                <hr>
                <?= $pager->links('group1', 'bstrap'); ?>
            </div>

        </div>


    </div>
</div>
<?= $this->endSection(); ?>