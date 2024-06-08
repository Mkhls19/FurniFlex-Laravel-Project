@extends('Layouts.app') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Bahan Material</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"> Data Bahan Material</li>
        <li class="breadcrumb-item active">Ubah Data Bahan Material</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatebahanmaterial', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $data->jenis }}" required>
          </div>
          <div class="col-12">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $data->jumlah }}" required>
          </div>
          <div class="col-12">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $data->harga }}" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success float-left" style="width: 20%;">Update</button>
            <button type="reset" class="btn btn-secondary float-right" style="width: 20%;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection
