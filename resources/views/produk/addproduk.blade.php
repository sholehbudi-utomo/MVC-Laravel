@extends('layout.app')
@section('conten')
<div class="container mt-5" style="max-width:700px;">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif

<form action="{{ url("/tambahproduk") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nama Produk</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      @error('name')
      <div class="invalid-feedback">
        Nama harus di Isi!!
      </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="description" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="description" name="description">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Harga Produk</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror " id="price" name="price">
        @error('price')
        <div class="invalid-feedback">
          Harga harus di Isi!!
        </div>
        @enderror
      </div>
      <select class="form-select  @error('kategori_id') is-invalid @enderror" aria-label="Default select example" name="kategori_id">
        <option selected>Pilih Kategori</option>
        @foreach($data as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
      </select>
      @error('kategori_id')
        <div class="invalid-feedback">
          Harus Pilih salah Satu!!
        </div>
        @enderror
      {{-- <div class="mb-3">
        <label for="price" class="form-label">Kategori</label>
        <input type="number" class="form-control" id="kategori_id" name="kategori_id">
      </div> --}}

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </form>
</div>

@endsection