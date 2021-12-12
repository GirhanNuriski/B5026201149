@extends('layout.ceria')

@section('title', 'DATABASE PENGGARIS')

@section('isikonten')

@section('judulhalaman', 'TAMBAH PENGGARIS')

	@foreach ($penggaris as $p)
        <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
            <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Detail Penggaris</h3>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="merk"> Merk Penggaris :</label>
            </div>
            <div class="col-lg-8">
                <input value="{{ $p->merkpenggaris }}" readonly type="text" id="merk" required="required" name="merk" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="stock"> Stock Penggaris :</label>
            </div>
            <div class="col-lg-8">
                <input value="{{ $p->stockpenggaris }}" readonly type="text" id="stock" required="required" name="stock" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="tersedia"> Tersedia (Y/N):</label>
            </div>
            <div class="col-lg-8">
                <input value="{{ $p->tersedia }}" readonly type="text" id="tersedia" required="required" name="tersedia" class="form-control">
            </div>
        </div><br>
        <a href="/penggaris" class="btn btn-primary"> Kembali</a>
    @endforeach

@endsection
