@extends('layout.ceria')

@section('title', 'DATA PENDAPATAN')

@section('isikonten')

@section('judulhalaman', 'EDIT PENDAPATAN')

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
        <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
            <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Edit Pendapatan</h3>
        </div>
        <input type="hidden" name="ID" value="{{ $p->ID }}">
        <div class="row">
            <div class="col-lg-2">
                    <label for="IDPegawai"> Nama Pegawai :</label>
            </div>
            <div class="col-lg-8">
                    <select id="IDPegawai" name="nama" required="required" class="form-control">
                        @foreach($pegawai as $peg)
                        <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Bulan">Bulan :</label>
            </div>
            <div class="col-lg-8">
                <input type="number" id="Bulan" name="bulan" required="required" value="{{$p->Bulan}}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Tahun">Tahun :</label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="Tahun" name="tahun" required="required" value="{{$p->Tahun}}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Gaji">Gaji :</label>
            </div>
            <div class="col-lg-8">
                <input type="number" id="Gaji" name="gaji" required="required" value="{{$p->Gaji}}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Tunjangan">Tunjangan :</label>
            </div>
            <div class="col-lg-8">
                <input type="number" id="Tunjangan" name="tunjangan" required="required" value="{{$p->Tunjangan}}" class="form-control">
            </div>
        </div><br>
        <a href="/pendapatan" class="btn btn-primary">Kembali</a>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach

@endsection
