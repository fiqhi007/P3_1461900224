<!DOCTYPE html>
<html>
<body>

<h2>Tambah Pasien</h2>

<form action="{{route('simpan-pasien')}}" method="post">
{{ csrf_field() }}
  <label for="nama">Nama :</label><br><p>
  <input type="text" id="fname" name="nama" value=""><br><p>
  <label for="alamat">Alamat :</label><br><p>
  <input type="text" id="lname" name="alamat" value=""><br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>
