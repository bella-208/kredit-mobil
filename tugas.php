<!DOCTYPE html>
<html>
 
<head>
 
    <title>Aplikasi Kredit Mobil</title>
 
    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
 
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 
</head>
 
<body>
 
<div class="container mt-3">
 
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary border">
 
        <div class="container-fluid">
 
            <a class="navbar-brand" href="#">
                <i class="bi bi-car-front-fill"></i>
                Auto Finance
            </a>
 
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">
 
                <span class="navbar-toggler-icon"></span>
 
            </button>
 
            <div class="collapse navbar-collapse" id="navbar">
 
                <ul class="navbar-nav ms-auto">
 
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Beranda
                        </a>
                    </li>
 
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">
                            Tentang Perusahaan
                        </a>
                    </li>
 
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">
                            Kontak
                        </a>
                    </li>
 
                </ul>
 
            </div>
 
        </div>
 
    </nav>
 
 
    <!-- SLIDER -->
    <div
        id="slider"
        class="carousel slide mt-2"
        data-bs-ride="carousel">
 
        <div class="carousel-inner">
 
            <!-- GAMBAR 1 -->
            <div class="carousel-item active">
 
                <img
                    src="mobil.jpg"
                    class="d-block w-100"
                    style="height: 400px; object-fit: cover;"
                    alt="Mobil Ferrari">
 
                <div class="carousel-caption d-none d-md-block">
 
                    <h3>Simulasi Kredit Mobil</h3>
 
                    <p>
                        Hitung cicilan mobil dengan mudah
                    </p>
 
                </div>
 
            </div>
 
 
            <!-- GAMBAR 2 -->
            <div class="carousel-item">
 
                <img
                    src="mobil2.jpg"
                    class="d-block w-100"
                    style="height: 400px; object-fit: cover;"
                    alt="Mobil Sport">
 
                <div class="carousel-caption d-none d-md-block">
 
                    <h3>Auto Finance</h3>
 
                    <p>
                        Mudah dan cepat menghitung kredit mobil
                    </p>
 
                </div>
 
            </div>
 
 
            <!-- GAMBAR 3 -->
            <div class="carousel-item">
 
                <img
                    src="mobil3.jpg"
                    class="d-block w-100"
                    style="height: 400px; object-fit: cover;"
                    alt="Mobil Mewah">
 
                <div class="carousel-caption d-none d-md-block">
 
                    <h3>Kredit Mobil Mudah</h3>
 
                    <p>
                        Pilih mobil dan tentukan cicilan sesuai kebutuhan
                    </p>
 
                </div>
 
            </div>
 
        </div>
 
 
        <!-- TOMBOL SEBELUMNYA -->
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#slider"
            data-bs-slide="prev">
 
            <span class="carousel-control-prev-icon"></span>
 
        </button>
 
 
        <!-- TOMBOL BERIKUTNYA -->
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#slider"
            data-bs-slide="next">
 
            <span class="carousel-control-next-icon"></span>
 
        </button>
 
    </div>
 
    <!-- TENTANG -->
    <div class="row mt-3" id="tentang">
 
        <div class="col-md-6">
 
            <div class="border p-4">
 
                <h4>Tentang Perusahaan</h4>
 
                <p>
                    Auto Finance adalah website sederhana
                    untuk melakukan simulasi kredit mobil.
                    Pengguna dapat memasukkan harga mobil,
                    memilih DP, dan menentukan tenor kredit.
                </p>
 
            </div>
 
        </div>
 
        <div class="col-md-6">
 
            <div class="border p-4 text-center">
 
                <i class="bi bi-car-front-fill fs-1"></i>
 
                <h5 class="mt-2">
                    Kredit Mobil
                </h5>
 
                <p>
                    Simulasi kredit mobil dengan mudah.
                </p>
 
            </div>
 
        </div>
 
    </div>
 
 
    <!-- APLIKASI KREDIT -->
    <h3 class="mt-4">
        Aplikasi Kredit Mobil
    </h3>
 
    <?php
    // Variabel untuk menyimpan nilai yang tadi diinput user (biar form tidak kosong lagi setelah submit)
    $nama = isset($_POST['harga']) ? htmlspecialchars($_POST['harga']) : '';
    $hargaLama = isset($_POST['harga']) ? htmlspecialchars($_POST['harga']) : '';
    $dpLama    = isset($_POST['dp']) ? htmlspecialchars($_POST['dp']) : '';
    $tenorLama = isset($_POST['tenor']) ? htmlspecialchars($_POST['tenor']) : '';
    ?>
 
    <form method="POST">
 
        <!-- HARGA MOBIL -->
        <div class="row mb-3">
            <label for="" class="col-md-3 col-form-label">
                Nama :
            </label>
             <div class="col-md-6">
 
                <input
                    type="text"
                    name="nama"
                    class="form-control"
                    placeholder="Masukkan Nama Anda"
                    value="<?php echo $hargaLama; ?>"
                    min="1"
                    required>
 
            </div>
        </div>
        <!-- EMAIL -->
<div class="row mb-3">

    <label for="email" class="col-md-3 col-form-label">
        Email :
    </label>

    <div class="col-md-6">

        <input
            type="email"
            name="email"
            id="email"
            class="form-control"
            placeholder="Masukkan Email Anda"
            value="<?php echo htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
            required>

    </div>

</div>

        <div class="row mb-3">
 
            <label class="col-md-3 col-form-label">
                Harga Mobil :
            </label>
 
            <div class="col-md-6">
 
                <input
                    type="number"
                    name="hargamobil"
                    class="form-control"
                    placeholder="Masukkan harga mobil"
                    value="<?php echo $hargaLama; ?>"
                    min="1"
                    required>
 
            </div>
 
        </div>
 
 
        <!-- DP -->
        <div class="row mb-3">
 
            <label class="col-md-3 col-form-label">
                DP :
            </label>
 
            <div class="col-md-6">
 
                <select
                    name="dp"
                    class="form-select"
                    required>
 
                    <option value="">-- Pilih DP --</option>
                    <option value="10" <?php echo ($dpLama == '10') ? 'selected' : ''; ?>>10%</option>
                    <option value="20" <?php echo ($dpLama == '20') ? 'selected' : ''; ?>>20%</option>
                    <option value="30" <?php echo ($dpLama == '30') ? 'selected' : ''; ?>>30%</option>
                    <option value="40" <?php echo ($dpLama == '40') ? 'selected' : ''; ?>>40%</option>
                    <option value="50" <?php echo ($dpLama == '50') ? 'selected' : ''; ?>>50%</option>
                    <option value="60" <?php echo ($dpLama == '60') ? 'selected' : ''; ?>>60%</option>
 
                </select>
 
            </div>
 
        </div>
 
 
        <!-- TENOR (pakai radio, bukan checkbox, karena hanya boleh pilih 1) -->
        <div class="row mb-3">
 
            <label class="col-md-3 col-form-label">
                Tenor :
            </label>
 
            <div class="col-md-9">
 
                <?php
                $pilihanTenor = [1, 2, 3, 4, 5];
                foreach ($pilihanTenor as $t) {
                    $checked = ($tenorLama == $t) ? 'checked' : '';
                    echo "<div class='form-check form-check-inline'>";
                    echo "<input class='form-check-input' type='radio' name='tenor' id='tenor{$t}' value='{$t}' {$checked} required>";
                    echo "<label class='form-check-label' for='tenor{$t}'>{$t} Tahun</label>";
                    echo "</div>";
                }
                ?>
 
            </div>
 
        </div>
 
 
        <!-- BUTTON -->
        <div class="row">
 
            <div class="col-md-3"></div>
 
            <div class="col-md-6">
 
                <input
                    type="submit"
                    name="hitung"
                    value="Hitung"
                    class="btn btn-primary">
 
            </div>
 
        </div>
 
    </form>
 
 
    <!-- PHP -->
    <?php
     //var_dump ($_POST)
    if (isset($_POST["submit"])) {
    $nama = $_POST ['nama'];
    $email = $_POST ['email'];
    $hargamobil = $_POST ['hargamobil'];
    $tenor = $_POST ['tenor'];
    $dp = $_POST ['dp'];
    $hargadpmobil = $_POST ['hargadpmobil'];
    $bunga = 20;
    $jumlahangsuran = 0;
}

$hargamobil = 0; 
$nama = ""; 
$tenor = 0; 
$dp = 0; 
$hargadpmobil = 0; 
$lamaangsuran = 0; 
$bunga = 0; 
$jumlahangsuran = 0; 
$is_submitted = false; 
 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $is_submitted = true; 
 
    $hargamobil = $_POST['hargamobil']; 
    $nama = $_POST['nama']; 
    $tenor = $_POST['tenor']; 
    $dp = $_POST['dp']; 
    $hargadpmobil = 0; 
 
    if ($dp == 10) { 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } elseif ($dp == 20){ 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } elseif ($dp == 30){ 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } elseif ($dp == 40){ 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } elseif ($dp == 50){ 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } elseif ($dp == 60){ 
        $hargadpmobil = ($dp/100) * $hargamobil; 
    } 
 
    $lamaangsuran = 0; 

    if ($tenor == 1){ 
        $lamaangsuran = $tenor * 12; 
    } elseif ($tenor == 2){ 
        $lamaangsuran = $tenor * 12; 
    } elseif ($tenor == 3){ 
        $lamaangsuran = $tenor * 12; 
    } elseif ($tenor == 4){ 
        $lamaangsuran = $tenor * 12; 
    } elseif ($tenor == 5){ 
        $lamaangsuran = $tenor * 12; 
    } 
 
    $bunga = 20/100 * $hargamobil; 

    if ($lamaangsuran > 0){ 
        $jumlahangsuran = (($hargamobil + $bunga) - $hargadpmobil) / $lamaangsuran; 
           } 

    echo "<br>";
    echo "Nama = " . $nama . "<br>";
    echo "Harga mobil = " . $hargamobil . "<br>";
    echo "Tenor = " . $tenor . " Tahun<br>";
    echo "Lama angsuran = " . $lamaangsuran . " Bulan<br>";
    echo "DP = " . $dp . "%<br>";
    echo "Harga DP mobil = " . $hargadpmobil . "<br>";
    echo "Bunga = Rp" . $bunga . "<br><br>";
    echo "Angsuran = Rp" . $jumlahangsuran . "<br>";
} 
?>
</br>
 
 
    <!-- FOOTER -->
    <div
        class="border text-center p-3 mt-5"
        id="kontak">
 
        <i class="bi bi-car-front-fill"></i>
 
        <strong>
            Auto Finance
        </strong>
 
        <br>
 
        Layanan Simulasi Kredit Mobil
 
        <br>
 
        <small>
            © 2026 Auto Finance
        </small>
 
    </div>
 
</div>
 
 
<!-- Bootstrap JS -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>
 
</body>
 
</html>