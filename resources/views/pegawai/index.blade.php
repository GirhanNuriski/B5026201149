@extends('layout.ceria')

@section('title','DATABASE PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DATABASE PEGAWAI')

    <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
        <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Data Pegawai</h3>
    </div>
    <form style="margin-bottom: 25px" action="/pegawai/cari" method="GET">
        <div class="row">
            <div class="col-lg-4">
                <input type="text" name="cari" placeholder="Cari nama pegawai ..." value="{{ old('cari') }}" class="form-control input-sm">
            </div>
            <div class="col-lg-1">
                <input class="btn btn-success" type="submit" value="CARI">
            </div>
            <div class="col-lg-4">
                <a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
            </div>
        </div>
    </form>

	<table class="table table-success table-striped table-bordered table-hover">
		<tr>
            <th>No</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>
                <a class="btn btn-primary" href="/pegawai/detail/{{ $p->pegawai_id }}">Detail</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}
@endsection
