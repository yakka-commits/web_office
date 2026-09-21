@extends('layouts.frontend')

@section('title', 'Beranda')

@section('content')

    <!-- 1. Hero Section -->
    @include('frontend.home.hero')

    <!-- 2. Profil Singkat -->
    @include('frontend.home.about')

    <!-- 3. Layanan & Target Pengguna -->
    @include('frontend.home.services')

    <!-- 4. Tujuan Klinik PKP -->
    @include('frontend.home.tujuan')

    <!-- REVISI GITTAA: Infografis Disembunyikan Sementara -->
    {{-- @include('frontend.home.infografis') --}}

    <!-- 5. Berita & Publikasi -->
    @include('frontend.home.news')

    <!-- 6. Banner Penutup (Call to Action) -->
    @include('frontend.home.cta')

@endsection