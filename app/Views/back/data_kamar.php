<!-- booking.php -->
<?= $this->extend('template/admin_template') ?>

<?= $this->section('title') ?>Kamar<?= $this->endSection() ?>

<?= $this->section('sidebar') ?>

<li class="nav-item">
    <a href="/admin">
        <i class="fas fa-home"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-section">
    <span class="sidebar-mini-icon">
        <i class="fa fa-ellipsis-h"></i>
    </span>
    <h4 class="text-section">Fitur</h4>
</li>
<li class="nav-item">
    <a href="/reservasi">
        <i class="fas fa-layer-group"></i>
        <p>Data Reservasi</p>
    </a>
</li>
<li class="nav-item active">
    <a href="/kamar">
        <i class="fas fa-th-list"></i>
        <p>Data Kamar</p>
    </a>
</li>
<li class="nav-item">
    <a data-bs-toggle="collapse" href="#forms">
        <i class="fas fa-pen-square"></i>
        <p>Transaksi Berhasil</p>
    </a>
</li>
<li class="nav-item">
    <a data-bs-toggle="collapse" href="#tables">
        <i class="fas fa-table"></i>
        <p>Transaksi Batal</p>
    </a>
</li>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12">
        <div class="card card-round">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">Data Kamar</div>
                    <div class="card-tools">
                        <a href="/datakamar/create" class="btn btn-label-success btn-round btn-sm me-2">
                            <span class="btn-label">
                                <i class="fas fa-plus"></i>
                            </span>
                            Tambah Data
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Kamar</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Kapasitas</th>
                                <th>Kasur</th>
                                <th>Fasilitas</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_kamar as $kamar): ?>
                                <tr>
                                    <td><?= $kamar['id'] ?></td>
                                    <td><?= $kamar['nama_kamar'] ?></td>
                                    <td><img src="<?= $kamar['gambar'] ?>" alt="Gambar Kamar" width="100"></td>
                                    <td><?= $kamar['deskripsi'] ?></td>
                                    <td><?= $kamar['harga'] ?></td>
                                    <td><?= $kamar['kapasitas'] ?></td>
                                    <td><?= $kamar['tipe_kasur'] ?></td>
                                    <td><?= $kamar['fasilitas'] ?></td>
                                    <td>
                                        <a href="/datakamar/edit/<?= $kamar['id'] ?>" class="btn btn-label-primary btn-round btn-sm">
                                            <i class="fas fa-edit"></i></a>
                                        <form action="/datakamar/delete/<?= $kamar['id'] ?>" method="post" style="display:inline;">
                                            <button type="submit" class="btn btn-label-danger btn-round btn-sm">
                                                <i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>