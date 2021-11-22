<!DOCTYPE html>
<html>
<head>
	<title>Database tabel pendapatan</title>
</head>
<body>

	<h2>Girhan Nuriski Lusandi</h2>
    <h2>5026201149</h2>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID :</th>
			<th>ID Pegawai :</th>
			<th>Bulan :</th>
			<th>Tahun :</th>
			<th>Gaji :</th>
            <th>Tunjangan :</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
