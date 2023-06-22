<!DOCTYPE html>
<html>
<head>
	<title>Praktikum CRUD Pemograman Framework</title>
</head>
<body>
 
	<h3>Data KRS Mahasiswa</h3>
 
	<a href="/praktikum/tambah"> + Tambah Matkul Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Mahasiswa</th>
			<th>Dosen</th>
			<th>Makul</th>
		</tr>
		@foreach($praktikum as $p)
		<tr>
			<td>{{ $p->praktikum_mahasiswa }}</td>
			<td>{{ $p->praktikum_dosen }}</td>
			<td>{{ $p->praktikum_makul }}</td>
			<td>
				<a href="/praktikum/edit/{{ $p->praktikum_id }}">Edit</a>
				|
				<a href="/praktikum/hapus/{{ $p->praktikum_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>