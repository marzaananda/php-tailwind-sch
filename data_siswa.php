<!-- data_siswa.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Siswa - Absensi Sekolah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex">

  <!-- Sidebar -->
  <?php include 'sidebar.php'; ?>
  <?php include 'logout_modal.php'; ?>

  <!-- Konten Utama -->
  <main class="flex-1 p-8 bg-gray-100 min-h-screen">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Data Siswa</h1>
    <!-- Filter -->
<div class="bg-white p-6 rounded-lg shadow mb-6">
  <form action="data_siswa.php" method="GET" class="grid grid-cols-1 md:grid-cols-4 gap-4">
    <!-- Filter Kelas -->
    <div>
      <label for="filter_kelas" class="block text-sm font-medium text-gray-700 mb-1">Kelas</label>
      <select name="kelas" id="filter_kelas"
        class="w-full border-b-2 border-blue-400 bg-transparent py-2 text-gray-800 focus:outline-none focus:border-blue-600">
        <option value="">Semua Kelas</option>
        <option value="X IPA 1">X IPA 1</option>
        <option value="XI IPA 2">XI IPA 2</option>
        <option value="XII RPL">XII RPL</option>
      </select>
    </div>

    <!-- Filter Jurusan -->
    <div>
      <label for="filter_jurusan" class="block text-sm font-medium text-gray-700 mb-1">Jurusan</label>
      <select name="jurusan" id="filter_jurusan"
        class="w-full border-b-2 border-blue-400 bg-transparent py-2 text-gray-800 focus:outline-none focus:border-blue-600">
        <option value="">Semua Jurusan</option>
        <option value="IPA">IPA</option>
        <option value="IPS">IPS</option>
        <option value="TKJ">TKJ</option>
        <option value="RPL">RPL</option>
      </select>
    </div>

    <!-- Filter Angkatan -->
    <div>
      <label for="filter_angkatan" class="block text-sm font-medium text-gray-700 mb-1">Angkatan</label>
      <select name="angkatan" id="filter_angkatan"
        class="w-full border-b-2 border-blue-400 bg-transparent py-2 text-gray-800 focus:outline-none focus:border-blue-600">
        <option value="">Semua Angkatan</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
      </select>
    </div>

    <!-- Tombol Filter -->
    <div class="flex items-end">
      <button type="submit"
        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-lg transition">
        Terapkan Filter
      </button>
    </div>
  </form>
</div>


    <!-- Tabel Siswa -->
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white rounded-lg shadow">
        <thead class="bg-blue-600 text-white text-left text-sm uppercase tracking-wider">
          <tr>
            <th class="px-6 py-3">No</th>
            <th class="px-6 py-3">Nama</th>
            <th class="px-6 py-3">NIS</th>
            <th class="px-6 py-3">Kelas</th>
            <th class="px-6 py-3">Jurusan</th>
            <th class="px-6 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-gray-700 text-sm divide-y divide-gray-200">
          <!-- Contoh data statis, nanti bisa diganti dengan PHP MySQL -->
          <tr>
            <td class="px-6 py-4">1</td>
            <td class="px-6 py-4">Ahmad Putra</td>
            <td class="px-6 py-4">123456</td>
            <td class="px-6 py-4">XII IPA 1</td>
            <td class="px-6 py-4">IPA</td>
            <td class="px-6 py-4">
              <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-xs mr-2">Edit</button>
              <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">Hapus</button>
            </td>
          </tr>
          <!-- Tambah baris lain jika perlu -->
        </tbody>
      </table>
    </div>

    <!-- Tombol Tambah -->
    <div class="mt-6">
      <a href="tambah_siswa.php" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg text-sm">
        + Tambah Siswa
      </a>
    </div>
  </main>

</body>
</html>
