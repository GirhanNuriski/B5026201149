<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		ID <input type="number" name="ID" required="required"> <br/>
		Nama <input type="text" name="nama" required="required"> <br/>
		Bulan <input type="text" name="bulan" required="required"> <br/>
		Tahun <input type="text" name="tahun" required="required"> <br/>
        Gaji <input type="text" name="gaji" required="required"> <br/>
        Tunjangan <input type="text" name="tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
