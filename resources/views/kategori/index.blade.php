@extends('layout.app')
@section('conten')
<div class="container" style="max-width:700px;">
    <table class="table mt-4">
        <h3 class="text-center mt-5 mb-4">Data Kategori</h3>
        <span>

    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Tambah Kategori
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Masukan Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url("/tambahkategori") }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kategori</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
  <thead>
    <tr class="p-3 mb-2 bg-success-subtle text-emphasis-success">
      <th scope="col-2">No</th>
      <th scope="col-5">Nama</th>
      <th scope="col-5">Action</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($kategori as $kat)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $kat->name}}</td>
      <td>
        <a href="/delete/kategori/{{ $kat->id }}">
            <button class="btn btn-danger col-4 btn-sm mt-4" type="button"><i class="bi bi-trash"></i></button>
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection