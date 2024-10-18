@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="containerr">
        @if($user->foto)
        @else
        <p>Foto tidak tersedia</p>
        @endif
        <div class="card">
            <h5 class="card-title">{{ $user->nama }}</h5>
            <h5 class="card-title">{{ $user->npm }}</h5>
            <h5 class="card-title">{{ $nama_kelas ?? 'Kelas tidak ditemukan' }}</h5>
            <img src="{{ Storage::url($user->foto) }}" class="card-img-top" alt="Foto User" width="100">
            <hr>
            <a href="{{ route('user.list') }}" class="btn-kembali">Kembali ke List</a>
        </div>
    </div>
</div>
@endsection
