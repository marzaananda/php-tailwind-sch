<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Siswa - Absensi Sekolah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-200 min-h-screen flex">

  <!-- SIDEBAR / NAVBAR -->
  <?php include 'sidebar.php'; ?>

  <!-- KONTEN UTAMA -->
  <main class="ml-64 flex-1 p-10">
    <h1 class="text-4xl font-bold text-blue-600 mb-12 text-center">Form Tambah Siswa</h1>

    <form action="#" method="POST" class="max-w-2xl mx-auto space-y-10">
      <!-- Nama -->
      <div>
        <label for="nama" class="block text-lg font-medium text-gray-700 mb-1">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" required
          class="w-full bg-transparent border-b-2 border-blue-400 text-gray-800 py-2 focus:outline-none focus:border-blue-600 placeholder-gray-400"
          placeholder="Masukkan nama siswa">
      </div>

      <!-- NIS -->
      <div>
        <label for="nis" class="block text-lg font-medium text-gray-700 mb-1">NIS</label>
        <input type="text" id="nis" name="nis" required
          class="w-full bg-transparent border-b-2 border-blue-400 text-gray-800 py-2 focus:outline-none focus:border-blue-600 placeholder-gray-400"
          placeholder="Masukkan NIS">
      </div>

      <!-- Kelas -->
<!-- Kelas -->
        <div>
        <label for="kelas" class="block text-lg font-medium text-gray-700 mb-1">Kelas</label>
        <select id="kelas" name="kelas"
            class="w-full bg-transparent border-b-2 border-blue-400 text-gray-800 py-2 focus:outline-none focus:border-blue-600">
            <option value="" disabled selected>Pilih Kelas</option>
            <option value="X IPA 1">X IPA 1</option>
            <option value="XI IPA 2">XI IPA 2</option>
            <option value="XII RPL">XII RPL</option>
        </select>
        </div>


      <!-- Jurusan -->
        <div>
        <label for="jurusan" class="block text-lg font-medium text-gray-700 mb-1">Jurusan</label>
        <select id="jurusan" name="jurusan"
            class="w-full bg-transparent border-b-2 border-blue-400 text-gray-800 py-2 focus:outline-none focus:border-blue-600">
            <option value="" disabled selected>Pilih Jurusan</option>
            <option value="IPA">IPA</option>
            <option value="IPS">IPS</option>
            <option value="TKJ">TKJ</option>
            <option value="RPL">RPL</option>
        </select>
        </div>


      <!-- Tombol -->
      <div class="pt-4">
        <button type="submit"
          class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 rounded-lg transition">
          Simpan Siswa
        </button>
      </div>

      <div class="text-center">
        <a href="data_siswa.php" class="text-blue-600 hover:underline text-sm">← Kembali ke Data Siswa</a>
      </div>
    </form>
  </main>

</body>
</html>
