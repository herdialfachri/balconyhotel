<?= $this->extend('template/template') ?>

<?= $this->section('title') ?>Rooms<?= $this->endSection() ?>

<?= $this->section('mobile-menu') ?>

<li><a href="/">Home</a></li>
<li class="active"><a href="room">Rooms</a></li>
<li><a href="/about_us">About Us</a></li>
<li><a href="/contact">Contact</a></li>
<li><a href="/masuk">Login</a></li>

<?= $this->endSection() ?>

<?= $this->section('main-menu') ?>

<li><a href="/">Home</a></li>
<li class="active"><a href="room">Rooms</a></li>
<li><a href="/about_us">About Us</a></li>
<li><a href="/contact">Contact</a></li>
<li><a href="/masuk">Login</a></li>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Our Rooms</h2>
                    <div class="bt-option">
                        <a href="/">Home</a>
                        <span>Rooms</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Rooms Section Begin -->
<section class="rooms-section spad">
    <div class="container">
        <div class="row">
            <?php foreach ($data_kamar as $kamar): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                        <img src="<?= $kamar['gambar'] ?>" alt="Gambar Kamar">
                        <div class="ri-text">
                            <h4><?= $kamar['nama_kamar'] ?></h4>
                            <h3><?= $kamar['harga'] ?><span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max person <?= $kamar['kapasitas'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td><?= $kamar['tipe_kasur'] ?> Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td><?= $kamar['fasilitas'] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="/booking?id=<?= $kamar['id'] ?>&nama_kamar=<?= $kamar['nama_kamar'] ?>&harga=<?= $kamar['harga'] ?>&kapasitas=<?= $kamar['kapasitas'] ?>&tipe_kasur=<?= $kamar['tipe_kasur'] ?>&fasilitas=<?= $kamar['fasilitas'] ?>" class="primary-btn">Booking Now!</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Rooms Section End -->

<?= $this->endSection() ?>