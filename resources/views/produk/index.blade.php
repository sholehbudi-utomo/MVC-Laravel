@extends('layout.app')
@section('conten')
<div class="container" style="max-width:700px;">
    <br/>
    <div class="container">
      {{-- @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> --}}
    </div>
    <a href="{{ url("/addproduk") }}">
    <div class="btn btn-primary mt-5" type="Button">Tambah Produk</div>
    </a>
    @foreach ($data as $produk)
    <div class="card text center shadow mt-3 mb-2">
        <div class="card-body">
            <div class="card-title">
            <h5> {{ $produk->name }}<h5>
            </div>
            <h6 class="card-subtitle mb-2 text-muted">{{ $produk->categoris->name }}</h6>
            <div class="card-text">{{ $produk->description }}</div>
            <div class="card-text">Wah Murah Bangett {{ $produk->price }}</div>
            
            <a href="/view/edit/produk/{{$produk->id}}">
                <button class="btn btn-warning btn-sm mt-4" type="button"><i class="bi bi-pencil-square"></i></button>
            </a>
            <a href="/delete/produk/{{$produk->categoris->id}}">
                <button class="btn btn-danger btn-sm mt-4" type="button"><i class="bi bi-trash"></i></button>
            </a>
        <p>
{{-- <a href="/addcart/{{$produk->id }}">
                <button class="btn btn-primary btn-sm mt-4 col-6" type="button">Tambah Keranjang</button>
            </a> --}}
        </p>
                                          
           
            <form action="/addcart" method="POST">
             @csrf
            <input type="hidden" value="{{ $produk->id }}" name="produc_id">
            <input type="submit" class="btn btn-primary" value="add to cart" >
            </form>
        </div>
    </div>
    @endforeach
</div>

@endsection