<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
</head>
<body>

<h2>CONTOH FORMULIR PENDAFTARAN</h2>

<form action="/pendaftaran" method="POST">
@csrf

<table>
<tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type="text" name="nama_lengkap"></td>
</tr>

<tr>
    <td>Jenis Kelamin</td>
    <td>:</td>
    <td>
        <input type="radio" name="jenis_kelamin" value="Pria"> Pria
        <input type="radio" name="jenis_kelamin" value="Wanita"> Wanita
    </td>
</tr>

<tr>
    <td>Agama</td>
    <td>:</td>
    <td>
        <select name="agama">
            <option>Silahkan Pilih</option>
            <option>Islam</option>
            <option>Kristen</option>
            <option>Hindu</option>
            <option>Buddha</option>
        </select>
    </td>
</tr>

<tr>
    <td>Hoby</td>
    <td>:</td>
    <td>
        <input type="checkbox" name="hobi[]" value="Sepakbola"> Sepakbola
        <input type="checkbox" name="hobi[]" value="Bola Voli"> Bola Voli
        <input type="checkbox" name="hobi[]" value="Badminton"> Badminton
    </td>
</tr>

<tr>
    <td>Komentar</td>
    <td>:</td>
    <td>
        <textarea name="komentar" cols="30" rows="5"></textarea>
    </td>
</tr>

<tr>
    <td>Password</td>
    <td>:</td>
    <td>
        <input type="password" name="password">
    </td>
</tr>

<tr>
    <td colspan="3">
        <button type="reset">Batal</button>
        <button type="submit">Kirim</button>
    </td>
</tr>
</table>

<p><i>*Catatan : Form ini belum bisa diproses karena membutuhkan script server side seperti PHP</i></p>

</form>

</body>
</html>
