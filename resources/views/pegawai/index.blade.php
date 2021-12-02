@extends('layout.ceria')

@section('title','DATABASE PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DATABASE PEGAWAI')

    <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
        <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Data Pegawai</h3>
    </div>

	<table class="table table-success table-striped table-bordered table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
@endsection
