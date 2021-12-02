@extends('layout.ceria')

@section('title','DATA PENDAPATAN')

@section('isikonten')

@section('judulhalaman', 'DATABASE PENDAPATAN')

    <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
        <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Data Pendapatan</h3>
    </div>

	<table class="table table-success table-striped table-bordered table-hover">
		<tr>
			<th>ID</th>
			<th>ID Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
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
    <a href="/pendapatan/tambah" class="btn btn-primary"> + Tambah Pendapatan Baru</a>
@endsection
