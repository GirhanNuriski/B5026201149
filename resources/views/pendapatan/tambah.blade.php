@extends('layout.ceria')

@section('title', 'DATA PENDAPATAN')

@section('isikonten')

@section('judulhalaman', 'TAMBAH PENDAPATAN')

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
        <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
            <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Tambah Pendapatan</h3>
        </div>
        <input type="hidden" name="ID">
        <div class="row">
            <div class="col-lg-2">
                    <label for="IDPegawai"> Nama Pegawai :</label>
            </div>
            <div class="col-lg-8">
                    <select id="IDPegawai" name="nama" required="required" class="form-control">
                        @foreach($pegawai as $p)
                            <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Bulan">Bulan :</label>
            </div>
            <div class="col-lg-8">
                <input type="number" id="Bulan" name="bulan" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Tahun">Tahun :</label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="Tahun" name="tahun" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Gaji">Gaji :</label>
            </div>
            <div class="col-lg-8">
                <input type="number" id="Gaji" name="gaji" required="required" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Tunjangan">Tunjangan :</label>
            </div>
            <div class="col-lg-8">
                <input type="number" id="Tunjangan" name="tunjangan" required="required" class="form-control">
            </div>
        </div><br>
        <a href="/pendapatan" class="btn btn-primary">Kembali</a>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
