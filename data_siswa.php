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

  <!-- Konten Utama -->
  <main class="flex-1 p-8 bg-gray-100 min-h-screen">
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Data Siswa</h1>

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
      <a href="#" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg text-sm">
        + Tambah Siswa
      </a>
    </div>
  </main>

</body>
</html>
