@extends('layout.ceria')

@section('title', 'KERANJANG BELANJA')

@section('isikonten')

@section('judulhalaman', 'BELI BARANG')

	<form action="/belanja/store" method="post">
		{{ csrf_field() }}
        <div class="jumbotron" style="background-color: rgb(39, 39, 39)">
            <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>Beli Barang</h3>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="kodebarang"> Kode Barang : </label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="kodebarang" required="required" name="kodebarang" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="jumlah"> Jumlah : </label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="jumlah" required="required" name="jumlah" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <label for="harga"> Harga : </label>
            </div>
            <div class="col-lg-8">
                <input type="text" id="harga" required="required" name="harga" class="form-control">
            </div>
        </div>
        <a href="/belanja" class="btn btn-primary"> Kembali</a>
        <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>

@endsection
