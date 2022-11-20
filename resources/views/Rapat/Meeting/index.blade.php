<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rapat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="meeting/tambah" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>IDmeeting</th>
                                <th>IDruang</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Tanggal</th>
                                <th>Waktu Mulai</th>
                                <th>Waktu Berakhir</th>
                                <th>Opsi</th>
                              </tr>
                            </thead>
                            <tbody>
								@foreach($meeting as $p)
								<tr>
									<td>{{ $p->IDmeating }}</td>
                                    <td>{{ $p->IDruang }}</td>
                                    <td>{{ $p->judulM }}</td>
                                    <td>{{ $p->keterangan }}</td>
                                    <td>{{ $p->tgl }}</td>
                                    <td>{{ $p->waktu_mulai }}</td>
                                    <td>{{ $p->waktu_berakhir }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST">
                                            <a href="/meating/edit/{{ $p->IDmeating }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            <a href="/meeting/hapus/{{ $p->IDmeating }}" class="btn btn-sm btn-danger">Hapus</a>
                                        </form>
                                    </td>
                                </tr>
                              	@endforeach
                            </tbody>
                        </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>