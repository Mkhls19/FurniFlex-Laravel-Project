<!DOCTYPE html>
<html>
<head>
<style>
#material {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#material td, #material th {
  border: 1px solid #ddd;
  padding: 8px;
}

#material tr:nth-child(even){background-color: #f2f2f2;}

#material tr:hover {background-color: #ddd;}

#material th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #1d528a;
  color: white;
}
</style>
</head>
<body>
<center>
<h3>Data Bahan Material</h3>
</center>
<table id="material">
    <tr><th>No</th>
        <th>Id Material</th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Harga</th>
      </tr>
      @foreach ($dtCetakMaterial as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->Id_Material }}</td>
        <td>{{ $item->Kategori }}</td>
        <td>{{ $item->Jumlah }}</td>
        <td>{{ $item->Harga }}</td>
      </tr>
      @endforeach
</table>

</body>
</html>
