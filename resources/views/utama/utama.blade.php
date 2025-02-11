@extends('layouts.app') 

@section('title', 'Dashboard - Buku Online')

@section('header', 'Selamat Datang, Anaqi')

@section('content')
  <div class="p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-gray-500">Total Pengguna</h3>
        <p class="text-2xl font-bold">1,234</p>
      </div>
      
      <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-gray-500">Total Buku</h3>
        <p class="text-2xl font-bold">567</p>
      </div>
      
      <div class="bg-white shadow rounded-lg p-6">
        <h3 class="text-gray-500">Kunjungan Hari Ini</h3>
        <p class="text-2xl font-bold">89</p>
      </div>
    </div>
  </div>
@endsection
