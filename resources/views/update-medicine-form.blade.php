<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Medicine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="h1">Edit Obat</h1>
        <a href="/medicines-dashboard" class="btn btn-success">Back to Medicine Dashboard</a>
        <form method="POST" action="{{ url('/medicines/update-medicine-process/' . $data['id']) }}">
            @csrf
            <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{ $data['code'] }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Obat</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $data['name'] }}">
            </div>
            <div class="mb-3">
                <label for="informasi" class="form-label">Informasi</label>
                <input type="text" class="form-control" id="informasi" name="informasi"
                    value="{{ $data['information'] }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
