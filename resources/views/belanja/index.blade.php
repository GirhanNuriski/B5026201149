@extends('layout.ceria')

@section('title','KERANJANG BELANJA')

@section('isikonten')

@section('judulhalaman', 'LIST BELANJA')

<div class="jumbotron" style="background-color: rgb(39, 39, 39)">
    <h3 class="text text-center" style="color:white; font-style:'Libre Franklin'";>List Belanja</h3>
</div>
<div class="row">
    <div class="col-lg-4">
        <a href="/belanja/tambah" class="btn btn-primary" style="margin-bottom: 28px"> Beli Barang</a>
    </div>
</div>

<table class="table table-success table-striped table-bordered table-hover">
    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah</th>
        <th>Harga Per Item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>
    @foreach($keranjangbelanja as $p)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->KodeBarang }}</td>
        <td>{{ $p->Jumlah }}</td>
        <td>{{ $p->Harga }}</td>
        <td>{{ number_format($p->Jumlah * $p->Harga, 0, ',', '.') }}</td>
        <td>
            <a href="/belanja/hapus/{{ $p->KodeBarang }}" class="btn btn-danger">Batal</a>
        </td>
    </tr>
    @endforeach
</table>
{{ $keranjangbelanja->links() }}
@endsection
