<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Absensi Siswa</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function updateClock() {
      const now = new Date();
      const jam = now.toLocaleTimeString('id-ID', { hour12: false });
      const hari = now.toLocaleDateString('id-ID', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      });

      document.getElementById('clock').textContent = jam;
      document.getElementById('tanggal').textContent = hari;
    }
    setInterval(updateClock, 1000);
    window.onload = updateClock;
  </script>
</head>
<body class="bg-gray-200 min-h-screen flex items-center justify-center font-sans">

  <div class="flex flex-col md:flex-row items-center justify-center w-full max-w-screen-xl px-4 py-10 gap-14">

    <!-- Logo Besar -->
    <div class="w-64 h-64 rounded-xl overflow-hidden flex items-center justify-center">
      <img src="images-removebg-preview.png" alt="Logo Sekolah" class="w-full h-full object-contain">
    </div>

    <!-- Tengah -->
    <div class="text-center space-y-5">
      <h1 class="text-2xl font-semibold text-gray-800">absensi sekolah</h1>

      <div class="text-6xl font-bold text-gray-900" id="clock">00:00:00</div>
      <div class="text-lg text-gray-700" id="tanggal">Senin, 1 Januari 2025</div>

      <input type="text" placeholder="INSERT YOUR NIS"
        class="w-80 px-4 py-3 mt-4 rounded-lg border border-gray-300 text-center text-xl shadow-md focus:outline-none focus:ring-2 focus:ring-blue-400">

      <div>
        <a href="login.php"
           class="text-sm mt-2 inline-block px-5 py-2 text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300">
          kamu admin?
        </a>
      </div>
    </div>

    <!-- Histori Absen -->
    <div class="w-72 bg-white rounded-xl shadow-lg p-4">
      <h2 class="text-center font-semibold mb-3 text-lg">absen terbaru</h2>
      <div class="h-64 overflow-y-auto border-t pt-2">
        <p class="text-center text-sm text-gray-400">Belum ada data</p>
      </div>
    </div>

  </div>

</body>
</html>
