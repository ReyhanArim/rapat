<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Meeting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
      
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="/pegawai/store" method="post">
                            @csrf

                            <h1>Input Data</h1>

                            <div class="form-group">
                                <label for="nama">Nama</label><br>
                                <input type="text" name="nama" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Nama">
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="noTelp">Nomor Telepon</label><br>
                                <input type="text" name="noTelp" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Nomor Telepon">
                            
                                <!-- error message untuk title -->
                                @error('noTelp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="jabatan">Jabatan</label><br>
                                <input type="text" name="jabatan" class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Jabatan">
                            
                                <!-- error message untuk title -->
                                @error('jabatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="Dept">Departemen</label><br>
                                <input type="text" name="Dept"class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Departemen">
                            
                                <!-- error message untuk title -->
                                @error('Dept')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label><br>
                                <input type="text" name="alamat"class="form-control @error('title') is-invalid @enderror" placeholder="Masukkan Alamat">
                            
                                <!-- error message untuk title -->
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="Simpan Data" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>