<!-- booking.php -->
<?= $this->extend('template/admin_template') ?>

<?= $this->section('title') ?>Reservasi<?= $this->endSection() ?>

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
<li class="nav-item active">
    <a href="/reservasi">
        <i class="fas fa-layer-group"></i>
        <p>Data Reservasi</p>
    </a>
</li>
<li class="nav-item">
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
                    <div class="card-title">Data Reservasi</div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Depan</th>
                                <th>Nama Belakang</th>
                                <th>Email</th>
                                <th>No Telp</th>
                                <th>Harga</th>
                                <th>ID Kamar</th>
                                <th>ID Pengguna</th>
                                <th>Tanggal Pesan</th>
                                <th>Tanggal Keluar</th>
                            </tr>
                        </thead>
                        <tbody> <?php if (!empty($data_reservasi)): ?> <?php foreach ($data_reservasi as $reservasi): ?> <tr>
                                        <td><?= esc($reservasi['id']) ?></td>
                                        <td><?= esc($reservasi['nama_depan']) ?></td>
                                        <td><?= esc($reservasi['nama_belakang']) ?></td>
                                        <td><?= esc($reservasi['email']) ?></td>
                                        <td><?= esc($reservasi['no_telp']) ?></td>
                                        <td><?= esc($reservasi['harga']) ?></td>
                                        <td><?= esc($reservasi['id_kamar']) ?></td>
                                        <td><?= esc($reservasi['id_pengguna']) ?></td>
                                        <td><?= esc($reservasi['tanggal_pesan']) ?></td>
                                        <td><?= esc($reservasi['tanggal_keluar']) ?></td>
                                    </tr> <?php endforeach; ?> <?php else: ?> <tr>
                                    <td colspan="10" class="text-center">No data available</td>
                                </tr> <?php endif; ?> </tbody>
                    </table>
                </div> <?= $pager->links() ?> <!-- Tambahkan pagination links -->
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>