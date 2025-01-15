<!-- booking.php -->
<?= $this->extend('template/admin_template') ?>

<?= $this->section('title') ?>Admin<?= $this->endSection() ?>

<?= $this->section('sidebar') ?>

<li class="nav-item active">
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
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-primary bubble-shadow-small">
              <i class="fas fa-users"></i>
            </div>
          </div>
          <div class="col col-stats ms-3 ms-sm-0">
            <div class="numbers">
              <p class="card-category">Total Users</p>
              <h4 class="card-title"><?= $total_users ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-info bubble-shadow-small">
              <i class="fas fa-user-check"></i>
            </div>
          </div>
          <div class="col col-stats ms-3 ms-sm-0">
            <div class="numbers">
              <p class="card-category">Total Rooms</p>
              <h4 class="card-title"><?= $total_rooms ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="card card-stats card-round">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col-icon">
            <div class="icon-big text-center icon-success bubble-shadow-small">
              <i class="fas fa-luggage-cart"></i>
            </div>
          </div>
          <div class="col col-stats ms-3 ms-sm-0">
            <div class="numbers">
              <p class="card-category">Total Reservations</p>
              <h4 class="card-title"><?= $total_reservations ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Line Chart -->
<div class="row mt-4">
  <div class="col-md-5">
    <div class="card">
      <div class="card-header">
        <div class="card-title">Reservasi per Bulan</div>
      </div>
      <div class="card-body">
        <div class="chart-container">
          <canvas id="mylinechart"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  // Ambil data dari PHP
  const monthlyReservations = <?= json_encode($monthly_reservations) ?>;

  // Array untuk nama bulan
  const monthNames = [
    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
  ];

  // Format data untuk Chart.js
  const labels = Object.keys(monthlyReservations).map(month => monthNames[parseInt(month) - 1]); // Ubah angka bulan menjadi nama bulan
  const data = Object.values(monthlyReservations);

  // Inisialisasi Chart.js dengan ID mylinechart
  const ctx = document.getElementById('mylinechart').getContext('2d');
  const myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: labels,
      datasets: [{
        label: 'Jumlah Reservasi',
        data: data,
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 2,
        fill: true,
        tension: 0.1
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: true,
          position: 'top'
        }
      },
      scales: {
        x: {
          title: {
            display: true,
            text: 'Bulan'
          }
        },
        y: {
          title: {
            display: true,
            text: 'Jumlah Reservasi'
          },
          beginAtZero: true
        }
      }
    }
  });
</script>


<?= $this->endSection() ?>