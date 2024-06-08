@extends('Layouts.app') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Bahan Material</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Data Bahan Material</li>
        <li class="breadcrumb-item active">Tambah Data Bahan Material</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertbahanmaterial') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="jenis" name="kategori" placeholder="Masukkan kategori" required>
          </div>
          <div class="col-12">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah" required>
          </div>
          <div class="col-12">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="width: 20%;">Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection
