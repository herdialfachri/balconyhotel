<!-- booking.php -->
<?= $this->extend('template/template') ?>

<?= $this->section('title') ?>Booking<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Form Section Begin -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6">
            <div class="booking-form">
                <h3>Booking Your Hotel</h3>
                <form action="/booking/save" method="post">
                    <div class="form-group">
                        <label for="first-name">Nama Depan:</label>
                        <input type="text" id="first-name" name="nama_depan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Nama Belakang:</label>
                        <input type="text" id="last-name" name="nama_belakang" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">No Telp:</label>
                        <input type="tel" id="phone" name="no_telp" class="form-control" required>
                    </div>
                    <div class="check-date">
                        <label for="date-in">Check In:</label>
                        <input type="date" class="date-input" id="date-in" name="tanggal_pesan" required>
                    </div>
                    <div class="check-date">
                        <label for="date-out">Check Out:</label>
                        <input type="date" class="date-input" id="date-out" name="tanggal_keluar" required>
                    </div>
                    <input type="hidden" name="id_kamar" value="<?= $_GET['id'] ?>">
                    <button type="submit" class="btn btn-primary">RSVP Now</button>
                </form>
            </div>
        </div>
        <div class="col-xl-5 col-lg-6">
            <div class="card" style="margin: 40px;">
                <div class="card-header">
                    <h3>Booking Details</h3>
                </div>
                <div class="card-body">
                    <?php
                    // Mendapatkan parameter dari URL
                    $id = $_GET['id'] ?? '';
                    $nama_kamar = $_GET['nama_kamar'] ?? '';
                    $harga = $_GET['harga'] ?? '';
                    $kapasitas = $_GET['kapasitas'] ?? '';
                    $tipe_kasur = $_GET['tipe_kasur'] ?? '';
                    $fasilitas = $_GET['fasilitas'] ?? '';
                    ?>
                    <div class="form-group">
                        <label for="nama_kamar">Nama Kamar: </label>
                        <input type="text" id="nama_kamar" name="nama_kamar" value="<?= htmlspecialchars($nama_kamar) ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga: </label>
                        <input type="text" id="harga" name="harga" value="<?= htmlspecialchars($harga) ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas: </label>
                        <input type="text" id="kapasitas" name="kapasitas" value="<?= htmlspecialchars($kapasitas) ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tipe_kasur">Tipe Kasur: </label>
                        <input type="text" id="tipe_kasur" name="tipe_kasur" value="<?= htmlspecialchars($tipe_kasur) ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fasilitas">Fasilitas: </label>
                        <input type="text" id="fasilitas" name="fasilitas" value="<?= htmlspecialchars($fasilitas) ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form Section End -->

<?= $this->endSection() ?>