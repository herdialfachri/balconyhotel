<?= $this->extend('template/template') ?>

<?= $this->section('title') ?>Booking<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Form Section Begin -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6">
            <div class="booking-form">
                <h3>Booking Your Hotel</h3>
                <form action="/room">
                    <div class="check-date">
                        <label for="date-in">Check In:</label>
                        <input type="text" class="date-input" id="date-in">
                        <i class="icon_calendar"></i>
                    </div>
                    <div class="check-date">
                        <label for="date-out">Check Out:</label>
                        <input type="text" class="date-input" id="date-out">
                        <i class="icon_calendar"></i>
                    </div>
                    <div class="select-option">
                        <label for="guest">Guests:</label>
                        <select id="guest">
                            <option value="">2 Adults</option>
                            <option value="">3 Adults</option>
                        </select>
                    </div>
                    <div class="select-option">
                        <label for="room">Room:</label>
                        <select id="room">
                            <option value="">1 Room</option>
                            <option value="">2 Room</option>
                        </select>
                    </div>
                    <button type="submit">RSVP Now</button>
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
                        <label for="nama_kamar">Nama Kamar:</label>
                        <input type="text" id="nama_kamar" name="nama_kamar" value="<?= htmlspecialchars($nama_kamar) ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga:</label>
                        <input type="text" id="harga" name="harga" value="<?= htmlspecialchars($harga) ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="kapasitas">Kapasitas:</label>
                        <input type="text" id="kapasitas" name="kapasitas" value="<?= htmlspecialchars($kapasitas) ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tipe_kasur">Tipe Kasur:</label>
                        <input type="text" id="tipe_kasur" name="tipe_kasur" value="<?= htmlspecialchars($tipe_kasur) ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fasilitas">Fasilitas:</label>
                        <input type="text" id="fasilitas" name="fasilitas" value="<?= htmlspecialchars($fasilitas) ?>" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Form Section End -->

<?= $this->endSection() ?>
