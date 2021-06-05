<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h2>Data Pasien</h2>
<a href="{{url('create-pasien')}}" class="active">Tambah Pasien</a>

<p>

<table style="width:100%">
  <tr>
    <th>Nama</th>
    <th>Alamat</th> 
    <th>action</th>
  </tr>
  @foreach($dtPasien as Sistem)
  <tr>
    <td>{{sistem->nama}}</td>
    <td>{{sistem->alamat}}</td>
    <td></td>
  </tr>
  
</table>

</body>
</html>
