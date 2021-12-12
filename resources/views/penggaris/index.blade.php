@extends('layout.ceria')

@section('title','DATABASE PENGGARIS')

@section('isikonten')

@section('judulhalaman', 'DATABASE PENGGARIS')

    <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
        <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Data Penggaris</h3>
    </div>
    <form style="margin-bottom: 25px" action="/penggaris/cari" method="GET">
        <div class="row">
            <div class="col-lg-4">
                <input type="text" name="cari" placeholder="Cari merk penggaris ..." value="{{ old('cari') }}" class="form-control input-sm">
            </div>
            <div class="col-lg-1">
                <input class="btn btn-success" type="submit" value="CARI">
            </div>
            <div class="col-lg-4">
                <a href="/penggaris/tambah" class="btn btn-primary"> + Tambah Penggaris Baru</a>
            </div>
        </div>
    </form>

	<table class="table table-success table-striped table-bordered table-hover">
		<tr>
            <th>No</th>
			<th>Merk</th>
			<th>Opsi</th>
		</tr>
		@foreach($penggaris as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->merkpenggaris }}</td>
			<td>
                <a class="btn btn-primary" href="/penggaris/detail/{{ $p->kodepenggaris }}">Detail</a>
                |
				<a href="/penggaris/edit/{{ $p->kodepenggaris }}" class="btn btn-warning">Edit</a>
				|
				<a href="/penggaris/hapus/{{ $p->kodepenggaris }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $penggaris->links() }}
@endsection
