@extends('layout.ceria')

@section('title','ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DATABASE ABSEN PEGAWAI')

<div class="jumbotron" style="background-color: rgb(39, 39, 39)">
    <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Data Absen Pegawai</h3>
</div>
<form style="margin-bottom: 25px" action="/absen/cari" method="GET">
    <div class="row">
        <div class="col-lg-4">
            <input type="text" name="cari" placeholder="Cari nama pegawai ..." value="{{ old('cari') }}" class="form-control input-sm">
        </div>
        <div class="col-lg-1">
            <input class="btn btn-success" type="submit" value="CARI">
        </div>
        <div class="col-lg-4">
            <a href="/absen/tambah" class="btn btn-primary"> + Tambah Absen Pegawai Baru</a>
        </div>
    </div>
</form>

	<table class="table table-success table-striped table-bordered table-hover">
		<tr>
			<th>No</th>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Tanggal }}</td>
			<td>{{ $p->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->ID }}" class="btn btn-warning" >Edit</a>
				|
				<a href="/absen/hapus/{{ $p->ID }}" class="btn btn-danger" >Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links() }}<br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
