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
                <th>Kode Barang</th>
                <th>Kode Pembeli</th>
                <th>Kode Jenis</th>
                <th>Jumlah Barang</th>
                <th>Total</th>
                <th>Bayar</th>
                <th>Kembalian</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($tb_datapenjualan as $p)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $p->kode_barang}}</td>
                <td>{{ $p->kode_pembeli}}</td>
                <td>{{ $p->kode_jenis}}</td>
                <td>{{ $p->jumlah_barang}}</td>
                <td>{{ $p->total}}</td>
                <td>{{ $p->bayar}}</td>
                <td>{{ $p->kembalian}}</td>
                <td>{{ $p->tanggal}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>