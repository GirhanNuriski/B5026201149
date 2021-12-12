@extends('layout.ceria')

@section('title', 'DATABASE PENGGARIS')

@section('isikonten')

@section('judulhalaman', 'TAMBAH PENGGARIS')

	<form action="/penggaris/store" method="post">
		{{ csrf_field() }}
        <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
            <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Tambah Penggaris</h3>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="merk"> Merk Penggaris :</label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="merk" required="required" name="merk" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="stock"> Stok Penggaris :</label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="stock" required="required" name="stock" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="tersedia"> Tersedia (Y/N):</label>
            </div>
            <div class="col-lg-8">
                <div class="row" style="margin: 5px">
                    <input type="radio" id="ada" name="tersedia" value="Y">
                    <label for="ada">Tersedia</label>
                    <input type="radio" id="tidak" name="tersedia" value="N">
                    <label for="tidak">Tidak Tersedia</label><br>
                </div>
            </div>
        </div><br>
        <a href="/penggaris" class="btn btn-primary"> Kembali</a>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
