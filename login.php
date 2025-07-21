<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login - Absensi Sekolah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center text-black space-y-8">

  <!-- Judul -->
  <h1 class="text-5xl font-bold text-black">Sistem Absensi Sekolah</h1>

  <!-- Logo -->
  <img src="images-removebg-preview.png" alt="Logo Sekolah" class="w-40 h-40 object-contain">

  <!-- Waktu -->
  <div class="text-6xl font-bold text-black" id="clock">00:00:00</div>
  <div class="text-xl text-black" id="tanggal">Senin, 21 Juli 2025</div>

  <!-- Form -->
  <form method="POST" action="#" class="w-full max-w-lg flex flex-col gap-6 px-8 mt-6">

    <input type="text" name="username" placeholder="Username"
      class="w-full px-6 py-4 text-xl text-gray-800 bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 shadow placeholder-gray-500">

    <input type="password" name="password" placeholder="Password"
      class="w-full px-6 py-4 text-xl text-gray-800 bg-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 shadow placeholder-gray-500">

    <button type="submit"
      class="w-full bg-blue-500 hover:bg-blue-600 text-white text-xl font-semibold py-4 rounded-lg transition">
      Login
    </button>
  </form>

</body>
</html>
