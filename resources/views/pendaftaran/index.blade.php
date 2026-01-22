<!DOCTYPE html>
<html>
<head>
    <title>Data Pendaftaran</title>
</head>
<body>

<h2>DATA PENDAFTARAN</h2>

<table border="1" cellpadding="5">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Hobi</th>
    <th>Aksi</th>
</tr>

@foreach($data as $d)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $d->nama_lengkap }}</td>
    <td>{{ $d->jenis_kelamin }}</td>
    <td>{{ $d->agama }}</td>
    <td>{{ $d->hobi }}</td>
    <td>
        <a href="/pendaftaran/{{ $d->id }}/edit">Edit</a>
        <form action="/pendaftaran/{{ $d->id }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
        </form>
    </td>
</tr>
@endforeach

</table>

<br>
<a href="/pendaftaran/create">Tambah Data</a>

</body>
</html>
