<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show all data</title>
</head>
<body>
    <h1>Show All data</h1>
    <table>
            <tr>
                <td>id</td>
                <td>nama</td>
                <td>umur</td>
                <td>nomor WA</td>
            </tr>
            {{-- $peserta hasil passing dari controller dataShow menggunakan with --}}
            @foreach ($peserta as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->umur }}</td>
                <td>{{ $item->noWA }}</td>
            </tr>
            @endforeach
    </table>
</body>
</html>