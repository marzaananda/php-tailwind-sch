<!-- laporan.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Laporan Absensi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-200">

  <!-- Sidebar -->
  <?php include 'sidebar.php'; ?>
  <?php include 'logout_modal.php'; ?>

  <!-- Konten Utama -->
  <main class="flex-1 p-6">
    <h1 class="text-xl font-semibold mb-6 text-center bg-white py-3 shadow rounded">Generate Laporan</h1>

    <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
      <h2 class="text-lg font-semibold mb-4">Laporan Absen Siswa</h2>

      <form method="GET" action="generate_laporan.php">
        <!-- Dropdown Bulan -->
        <div class="mb-4">
          <label for="bulan" class="block text-sm font-medium text-gray-700 mb-1">Bulan</label>
          <select name="bulan" id="bulan" class="w-full border px-3 py-2 rounded">
            <option value="">-- Pilih Bulan --</option>
            <option value="01">Januari</option>
            <option value="02">Februari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
          </select>
        </div>

        <!-- Dropdown Kelas -->
        <div class="mb-4">
          <label for="kelas" class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
          <select name="kelas" id="kelas" class="w-full border px-3 py-2 rounded">
            <!-- Data kelas bisa dimuat dari database -->
            <option value="">-- Pilih Kelas --</option>
          </select>
        </div>

        <!-- Tombol Generate -->
        <button type="submit" class="w-full bg-green-400 hover:bg-green-500 text-white font-semibold py-2 rounded transition">
          Generate Excel
        </button>
      </form>
    </div>
  </main>

</body>
</html>
