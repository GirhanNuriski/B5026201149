@extends('layout.ceria')

@section('title','DATA PENDAPATAN')

@section('isikonten')

@section('judulhalaman', 'DATABASE PENDAPATAN')

    <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
        <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Data Pendapatan</h3>
    </div>
    <form style="margin-bottom: 25px" action="/pendapatan/cari" method="GET">
        <div class="row">
            <div class="col-lg-4">
                <input type="text" name="cari" placeholder="Cari nama pegawai ..." value="{{ old('cari') }}" class="form-control input-sm">
            </div>
            <div class="col-lg-1">
                <input class="btn btn-success" type="submit" value="CARI">
            </div>
            <div class="col-lg-4">
                <a href="/pendapatan/tambah" class="btn btn-primary"> + Tambah Pendapatan Baru</a>
            </div>
        </div>
    </form>

	<table class="table table-success table-striped table-bordered table-hover">
		<tr>
			<th>No</th>
			<th>Nama Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pendapatan->links() }}
@endsection
