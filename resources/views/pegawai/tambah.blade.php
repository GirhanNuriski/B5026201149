@extends('layout.ceria')

@section('title', 'DATABASE PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH PEGAWAI')

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
            <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Tambah Pegawai</h3>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="IDPegawai"> Nama Pegawai :</label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="IDPegawai" required="required" name="nama" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Jabatan"> Jabatan :</label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="Jabatan" required="required" name="jabatan" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Umur"> Umur :</label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="Umur" required="required" name="umur" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="Alamat">Alamat :</label>
            </div>
            <div class="col-lg-8">
                <textarea required="required" name="alamat" class="form-control"></textarea>
            </div>
        </div>
        <a href="/pegawai" class="btn btn-primary"> Kembali</a>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
