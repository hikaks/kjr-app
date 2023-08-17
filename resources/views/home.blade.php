<!-- resources/views/home.blade.php -->

@extends('layouts.main') <!-- Meng-extend layout default Laravel -->

@section('content')

    <div class="section">
        @include('sections.section1') <!-- Menyisipkan konten dari section1.blade.php -->
    </div>

    <div class="section">
        @include('sections.section2') <!-- Menyisipkan konten dari section2.blade.php -->
    </div>

@endsection
