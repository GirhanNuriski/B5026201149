@extends('layout.ceria')

@section('title','DATABASE PENGGARIS')

@section('isikonten')

@section('judulhalaman', 'EDIT PENGGARIS')

	@foreach($penggaris as $p)
	<form action="/penggaris/update" method="post">
		{{ csrf_field() }}
        <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
            <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Edit Penggaris</h3>
        </div>
        <input type="hidden" name="id" value="{{ $p->kodepenggaris }}"> <br/>
        <div class="row">
            <div class="col-lg-2">
                    <label for="merk"> Merk Penggaris :</label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="merk" required="required" name="merk" value="{{ $p->merkpenggaris }}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="stock"> Stok Penggaris :</label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="stock" required="required" name="stock" value="{{ $p->stockpenggaris }}" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="tersedia"> Tersedia (Y/N):</label>
            </div>
            <div class="col-lg-8">
                <div class="row" style="margin: 5px">
                    <input type="radio" id="ada" name="tersedia" value="Y" @if ($p->tersedia === "Y") checked="checked" @endif>
                    <label for="ada">Tersedia</label>
                    <input type="radio" id="tidak" name="tersedia" value="N" @if ($p->tersedia === "N") checked="checked" @endif>
                    <label for="tidak">Tidak Tersedia</label><br>
                </div>
            </div>
        </div>
        <br>
        <a href="/penggaris" class="btn btn-primary"> Kembali</a>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach

@endsection
