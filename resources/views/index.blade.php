       @extends('layout.app')
      @section('conten')
       <table class="table">
        <h3 class="text-center mb-4">Daftar Mahasiswa MSIB PT Git's Indonesia</h3>
        <span>
  <thead>
    <tr class="p-3 mb-2 bg-success-subtle text-emphasis-success">
      <th scope="col-2">No</th>
      <th scope="col-5">Nama</th>
      <th scope="col-5">Alamat Email</th>
    </tr>
  </thead>
  <tbody>
    @php
    $no = 1;
    @endphp
    @foreach ($user as $us)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $us->name }}</td>
      <td>{{ $us->email }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection