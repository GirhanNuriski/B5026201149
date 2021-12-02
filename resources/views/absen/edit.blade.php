@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT ABSEN')

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
        <div class="row">
            <div class="col-lg-2">
                    <label for="IDPegawai"> Nama Pegawai :</label>
            </div>
            <div class="col-lg-8">
                    <select id="IDPegawai" name="IDPegawai" required="required" class="form-control">
                        @foreach($pegawai as $peg)
                            <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
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
                        <input type='text' class="form-control" name="tanggal" value="{{ $p->Tanggal }}" />
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
                    <input type="radio" id="hadir" name="status" value="H" @if ($p->Status === "H") checked="checked" @endif>
                    <label for="hadir">HADIR</label>
                    <input type="radio" id="tidak" name="status" value="T" @if ($p->Status === "T") checked="checked" @endif>
                    <label for="tidak">TIDAK HADIR</label><br>
                </div>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach


    @endsection
