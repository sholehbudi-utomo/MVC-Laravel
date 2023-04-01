@extends('layout.app')
@section('conten')
<div class="container mt-5" style="max-width:700px;">
  {{-- @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif --}}

<form action="/edit/produk/{{$producs->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="name" class="form-label">Nama Produk</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp" value="{{ $producs->name }}">
      @error('name')
      <div class="invalid-feedback">
        Nama harus di Isi!!
      </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="description" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="description" name="description" value="{{ $producs->description}}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Harga Produk</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror " id="price" name="price" value="{{ $producs->price }}">
        @error('price')
        <div class="invalid-feedback">
          Harga harus di Isi!!
        </div>
        @enderror
      </div>
      <select class="form-select  @error('kategori_id') is-invalid @enderror" aria-label="Default select example" name="kategori_id" >
        <option selected>Pilih Kategori</option>
        @foreach($categoris as $item)
        <option value="{{ $item->id }}">{{ $producs->kategori_id == $item->id ? 'selected' :'' }}
        {{ $item->name }}
        </option>
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

    <button type="submit" class="btn btn-primary mt-3">Update</button>
  </form>
</div>

@endsection