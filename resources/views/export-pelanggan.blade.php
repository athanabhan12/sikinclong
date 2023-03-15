<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
        }
    </style>
</head>

<body>

    <h1 style="text-align: center; font-family: Arial, Helvetica, sans-serif">Data Pelanggan</h1>

    <table id="customers" width="300px" border="2">
        <thead>
            <tr>
                <th style="text-align: center">No</th>
                <th style="text-align: center">Nama</th>
                <th style="text-align: center">Alamat</th>
                <th style="text-align: center">Jenis Kelamin</th>
                <th style="text-align: center">No.Telepon</th>
                <th style="text-align: center">No.Telepon Darurat</th>
                <th style="text-align: center">Umur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pelanggan as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->nama_pelanggan }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->no_telp }}</td>
                    <td>{{ $data->no_telp_darurat }}</td>
                    <td>{{ $data->umur }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

</body>

</html>
