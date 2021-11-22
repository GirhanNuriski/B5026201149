<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="ID" required="required"> <br/>
		ID Pegawai <input type="number" name="nama" required="required" value="{{ $p->IDPegawai}}">  <br/>
		Bulan <input type="number" name="bulan" required="required" value="{{$p->Bulan}}"> <br/>
		Tahun <input type="text" name="tahun" required="required" value="{{$p->Tahun}}"> <br/>
        Gaji <input type="number" name="gaji" required="required" value="{{$p->Gaji}}"> <br/>
        Tunjangan <input type="number" name="tunjangan" required="required" value="{{$p->Tunjangan}}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
