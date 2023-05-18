<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meeting Schedule Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <a href="/" class="btn btn-success mb-2">Back to Home Page</a>
        <a href="/add-meeting-schedule" class="btn btn-primary mb-2">Tambah Pertemuan</a>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pertemuan</h3>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $d)
                            <tr>
                                <th scope="row">{{ $index + 1 }}</th>
                                <td>{{ $d['schedule'] }}</td>
                                <td>{{ $d['information'] }}</td>
                                <td class="d-inline-flex">
                                    <a href="/update-meeting-schedule-form/{{ $d['id'] }}"
                                        class="btn btn-warning mx-3">Edit</a>
                                    <a href="/delete-meeting-process/{{ $d['id'] }}"
                                        class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
