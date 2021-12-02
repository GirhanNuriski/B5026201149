@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH ABSEN PEGAWAI')

<div class="container">
	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        <h2>Tambah Absen</h2><br>
    </div>
    <div class="row">
        <div class="col-lg-2">
                <label for="IDPegawai"> Nama Pegawai :</label>
        </div>
        <div class="col-lg-8">
                <select id="IDPegawai" name="IDPegawai" required="required" class="form-control">
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="dtpickerdemo">Tanggal :</label>
        </div>
        <div class="col-lg-8">
                <div class='col-lg-4 input-group date ' id='dtpickerdemo'>
                    <input type='text' class="form-control" name="tanggal" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <script type="text/javascript">
                        $(function () {
                            $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                        });
                    </script>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label>Status :</label>
        </div>
        <div class="col-lg-8">
            <div class="row" style="margin: 5px">
                <input type="radio" id="hadir" name="status" value="H">
                <label for="hadir">HADIR</label>
                <input type="radio" id="tidak" name="status" value="T" checked="checked">
                <label for="tidak">TIDAK HADIR</label><br>
            </div>
        </div>
    </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</div>
@endsection
