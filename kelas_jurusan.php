<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Kelas dan Jurusan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex bg-gray-200">

  <!-- Sidebar -->
  <?php include 'sidebar.php'; ?>

  <!-- Konten Utama -->
  <main class="flex-1 p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <!-- Daftar Kelas -->
      <div class="bg-white rounded-lg shadow">
        <div class="flex justify-between items-center p-4 border-b">
          <div>
            <h2 class="font-semibold">Daftar Kelas</h2>
            <p class="text-xs text-gray-500">2024-2025</p>
          </div>
          <div class="flex gap-2">
            <button id="btnTambahKelas" class="text-xl">➕</button>
            <button id="btnRefreshKelas" class="text-xl">🔄</button>
          </div>
        </div>
        <div id="formTambahKelas" class="hidden p-4 border-b">
          <form id="formKelas" method="POST" action="proses_tambah_kelas.php">
            <input type="text" name="nama_kelas" placeholder="Nama Kelas" class="w-full px-3 py-2 border rounded mb-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
          </form>
        </div>
        <div id="listKelas" class="p-4 text-gray-600 text-sm">
          <!-- Daftar kelas akan dimuat di sini oleh backend -->
        </div>
      </div>

      <!-- Daftar Jurusan -->
      <div class="bg-white rounded-lg shadow">
        <div class="flex justify-between items-center p-4 border-b">
          <div>
            <h2 class="font-semibold">Daftar Jurusan</h2>
            <p class="text-xs text-gray-500">2024-2025</p>
          </div>
          <div class="flex gap-2">
            <button id="btnTambahJurusan" class="text-xl">➕</button>
            <button id="btnRefreshJurusan" class="text-xl">🔄</button>
          </div>
        </div>
        <div id="formTambahJurusan" class="hidden p-4 border-b">
          <form id="formJurusan" method="POST" action="proses_tambah_jurusan.php">
            <input type="text" name="nama_jurusan" placeholder="Nama Jurusan" class="w-full px-3 py-2 border rounded mb-2">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
          </form>
        </div>
        <div id="listJurusan" class="p-4 text-gray-600 text-sm">
          <!-- Daftar jurusan akan dimuat di sini oleh backend -->
        </div>
      </div>

    </div>
  </main>

  <script>
    // Toggle form tambah kelas
    document.getElementById("btnTambahKelas").addEventListener("click", () => {
      document.getElementById("formTambahKelas").classList.toggle("hidden");
    });

    // Toggle form tambah jurusan
    document.getElementById("btnTambahJurusan").addEventListener("click", () => {
      document.getElementById("formTambahJurusan").classList.toggle("hidden");
    });

    // Fungsi refresh bisa dihubungkan dengan AJAX oleh backend
    document.getElementById("btnRefreshKelas").addEventListener("click", () => {
      // tempatkan AJAX untuk load data kelas di sini
    });

    document.getElementById("btnRefreshJurusan").addEventListener("click", () => {
      // tempatkan AJAX untuk load data jurusan di sini
    });
  </script>

</body>
</html>
