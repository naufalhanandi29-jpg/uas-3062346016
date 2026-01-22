<!DOCTYPE html>
<html>
<head>
    <title>Edit Pendaftaran</title>
</head>
<body>

<h2>EDIT DATA PENDAFTARAN</h2>

<form action="/pendaftaran/{{ $data->id }}" method="POST">
@csrf
@method('PUT')

Nama Lengkap :
<input type="text" name="nama_lengkap" value="{{ $data->nama_lengkap }}"><br><br>

Jenis Kelamin :
<input type="radio" name="jenis_kelamin" value="Pria" {{ $data->jenis_kelamin=='Pria'?'checked':'' }}> Pria
<input type="radio" name="jenis_kelamin" value="Wanita" {{ $data->jenis_kelamin=='Wanita'?'checked':'' }}> Wanita<br><br>

Agama :
<select name="agama">
    <option {{ $data->agama=='Islam'?'selected':'' }}>Islam</option>
    <option {{ $data->agama=='Kristen'?'selected':'' }}>Kristen</option>
    <option {{ $data->agama=='Hindu'?'selected':'' }}>Hindu</option>
    <option {{ $data->agama=='Buddha'?'selected':'' }}>Buddha</option>
</select><br><br>

@php $hobi = explode(',', $data->hobi); @endphp
Hobi :
<input type="checkbox" name="hobi[]" value="Sepakbola" {{ in_array('Sepakbola',$hobi)?'checked':'' }}> Sepakbola
<input type="checkbox" name="hobi[]" value="Bola Voli" {{ in_array('Bola Voli',$hobi)?'checked':'' }}> Bola Voli
<input type="checkbox" name="hobi[]" value="Badminton" {{ in_array('Badminton',$hobi)?'checked':'' }}> Badminton<br><br>

Komentar :
<textarea name="komentar">{{ $data->komentar }}</textarea><br><br>

<button type="submit">Update</button>
<a href="/pendaftaran">Kembali</a>

</form>

</body>
</html>
