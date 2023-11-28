<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Personal</title>

    <!-- link bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-4">
                <div class="card">
                    <div class="card-header">
                        <h1>Personal</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/update',$data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-2">
                                <label for="nama" class="form-label">Nama : </label>
                                <input type="text" class="form-control" name="nama" value="{{ $data->nama }}" required>
                            </div>

                            <div class="mb-2">
                                <label for="email" class="form-label">Email : </label>
                                <input type="text" class="form-control" name="email" id="email" value="{{ $data->email }}" required>
                            </div>

                            <div class="mb-2">
                                <label for="gambar" class="form-label">Change Image: </label>
                                <img src="{{ asset('storage/'. $data->file) }}" alt="" width="75px">
                                <input type="file" class="form-control" name="file" id="gambar"  required>
                            </div>

                            <div class="mb-2">
                                <button type="submit" class="btn btn-primary" name="submit">Ubah Data</button>
                            </div>
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>


</html>