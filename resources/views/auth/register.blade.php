<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
  </style>
</head>

<body>
  <div class="bg-black text-white flex min-h-screen flex-col items-center pt-16 sm:justify-center sm:pt-0">
    <a href="#">
      <div class="text-foreground font-semibold text-2xl tracking-tighter mx-auto flex items-center gap-2">
        <div>
          <img src="{{ asset('assets/buku-online.svg') }}" alt="logo buku online" class="max-w-[48px] mx-auto">
        </div>
        Buku Online
      </div>
    </a>
    <div class="relative mt-12 w-full max-w-lg sm:mt-10">
      <div class="relative -mb-px h-px w-full bg-gradient-to-r from-transparent via-sky-300 to-transparent"></div>
      <div
        class="mx-5 border dark:border-b-white/50 dark:border-t-white/50 border-b-white/20 sm:border-t-white/20 shadow-[20px_0_20px_20px] shadow-slate-500/10 dark:shadow-white/20 rounded-lg border-white/20 border-l-white/20 border-r-white/20 sm:shadow-sm lg:rounded-xl lg:shadow-none">
        <div class="flex flex-col p-6">
          <h3 class="text-xl font-semibold leading-6 tracking-tighter">Register</h3>
          <p class="mt-1.5 text-sm font-medium text-white/50">Selamat datang di halaman pendaftaran Buku Online</p>
        </div>
        <div class="p-6 pt-0">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Field Nama Lengkap -->
            <div class="mt-4">
              <div
                class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                <label
                  class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Nama
                  Lengkap</label>
                <input type="text" name="name" placeholder="Masukkan nama lengkap" autocomplete="name"
                  class="block w-full border-0 bg-transparent p-0 text-sm placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7 text-foreground">
              </div>
            </div>
            <!-- Field Username -->
            <div class="mt-4">
              <div
                class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                <label
                  class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Username</label>
                <input type="text" name="username" placeholder="Contoh: Anaqi123" autocomplete="username"
                  class="block w-full border-0 bg-transparent p-0 text-sm placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7 text-foreground">
              </div>
            </div>
            <!-- Field Email -->
            <div class="mt-4">
              <div
                class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                <label
                  class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Email</label>
                <input type="email" name="email" placeholder="Contoh: user@example.com" autocomplete="email"
                  class="block w-full border-0 bg-transparent p-0 text-sm placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7 text-foreground">
              </div>
            </div>
            <!-- Field Password -->
            <div class="mt-4">
              <div
                class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                <label
                  class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Password</label>
                <input type="password" name="password" placeholder="Masukkan password" autocomplete="new-password"
                  class="block w-full border-0 bg-transparent p-0 text-sm placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7 text-foreground">
              </div>
            </div>
            <!-- Field Konfirmasi Password -->
            <div class="mt-4">
              <div
                class="group relative rounded-lg border focus-within:border-sky-200 px-3 pb-1.5 pt-2.5 duration-200 focus-within:ring focus-within:ring-sky-300/30">
                <label
                  class="text-xs font-medium text-muted-foreground group-focus-within:text-white text-gray-400">Konfirmasi
                  Password</label>
                <input type="password" name="password_confirmation" placeholder="Ulangi password"
                  autocomplete="new-password"
                  class="block w-full border-0 bg-transparent p-0 text-sm placeholder:text-muted-foreground/90 focus:outline-none focus:ring-0 sm:leading-7 text-foreground">
              </div>
            </div>
            <!-- Tombol Register -->
            <div class="mt-4 flex items-center justify-end gap-x-2">
              <button
                class="font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2"
                type="submit">Register</button>
            </div>
            <!-- Link ke halaman Login -->
            <div class="mt-4 flex items-center justify-end gap-x-2">
              <a href="{{ route('login') }}"
                class="font-semibold hover:bg-black hover:text-white hover:ring hover:ring-white transition duration-300 inline-flex items-center justify-center rounded-md text-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-white text-black h-10 px-4 py-2">
                Login
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
