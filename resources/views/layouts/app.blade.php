<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Dashboard - Buku Online')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- Google Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-poppins antialiased bg-gray-50">
  <div class="min-h-screen flex">
    
    <!-- Sidebar -->
    <aside class="w-64 bg-gradient-to-b from-gray-800 to-gray-900 shadow-xl transform transition-transform duration-300 fixed h-full">
      <div class="p-6">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
          <svg class="w-8 h-8 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
          </svg>
          <span class="text-2xl font-bold text-white">BukuOnline</span>
        </a>
      </div>
      
      <nav class="mt-6 px-4 space-y-1">
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg transition-all group">
          <i class="fas fa-home w-5 text-center group-hover:text-indigo-400"></i>
          Dashboard
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg transition-all group">
          <i class="fas fa-users w-5 text-center group-hover:text-indigo-400"></i>
          Pengguna
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg transition-all group">
          <i class="fas fa-book w-5 text-center group-hover:text-indigo-400"></i>
          Buku
        </a>
        <a href="#" class="flex items-center gap-3 px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg transition-all group">
          <i class="fas fa-chart-bar w-5 text-center group-hover:text-indigo-400"></i>
          Statistik
        </a>
        <form method="POST" action="{{ route('logout') }}" class="mt-10">
          @csrf
          <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 text-gray-300 hover:bg-gray-700 rounded-lg transition-all group">
            <i class="fas fa-sign-out-alt w-5 text-center group-hover:text-red-400"></i>
            Keluar
          </button>
        </form>
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 ml-64 transition-all duration-300">
      <!-- Header -->
      <header class="bg-white shadow-sm sticky top-0 z-10">
        <div class="flex justify-between items-center px-8 py-4">
          <div class="flex items-center gap-4">
            <button id="sidebarToggle" class="lg:hidden text-gray-600 hover:text-gray-800">
              <i class="fas fa-bars text-lg"></i>
            </button>

          </div>
          
          <div class="flex items-center gap-6">
            <div class="relative">
              <button class="text-gray-500 hover:text-gray-700 relative">
                <i class="fas fa-bell text-xl"></i>
                <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center">3</span>
              </button>
            </div>
            
            <div class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="flex items-center gap-3">
                <img src="{{ asset('images/avatar.png') }}" alt="Profil" class="w-10 h-10 rounded-full border-2 border-indigo-100">
                <span class="text-gray-700 font-medium hidden md:inline">Admin</span>
                <i class="fas fa-chevron-down text-gray-500 text-sm"></i>
              </button>
              
              <div x-show="open" @click.away="open = false" class="absolute right-0 mt-3 w-48 bg-white shadow-lg rounded-lg py-2 border border-gray-100">
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">
                  <i class="fas fa-user mr-3"></i>Profil
                </a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-50">
                  <i class="fas fa-cog mr-3"></i>Pengaturan
                </a>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- Main -->
      <main class="p-8 bg-gray-50 min-h-[calc(100vh-120px)]">
        @yield('content')
      </main>

      <!-- Footer -->
      <footer class="bg-white border-t py-4 px-8">
        <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
          <p>&copy; {{ date('Y') }} BukuOnline. All rights reserved.</p>
          <div class="mt-2 md:mt-0 flex gap-4">
            <a href="#" class="hover:text-indigo-600">Kebijakan Privasi</a>
            <a href="#" class="hover:text-indigo-600">Syarat & Ketentuan</a>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <script>
    // Sidebar Toggle for Mobile
    document.getElementById('sidebarToggle').addEventListener('click', function() {
      document.querySelector('aside').classList.toggle('-translate-x-full');
      document.querySelector('.ml-64').classList.toggle('ml-0');
    });
  </script>
</body>
</html>