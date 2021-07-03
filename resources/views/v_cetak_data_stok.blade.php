<!DOCTYPE html>
<html>
<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Data Penjualan</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kode Jenis</th>
                <th>Harga</th>
                <th>Jumlah Stok</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($tb_stokbarang as $p)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $p->nama_barang}}</td>
                <td>{{ $p->kode_jenis}}</td>
                <td>{{ $p->harga}}</td>
                <td>{{ $p->jumlah_stok}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>