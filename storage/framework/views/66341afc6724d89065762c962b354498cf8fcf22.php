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

                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <a href="meeting/input" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>IDpegawai</th>
                                <th>Nama</th>
                                <th>Nomor Telepon</th>
                                <th>Jabatan</th>
                                <th>Departemen</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                              </tr>
                            </thead>
                            <tbody>
								<?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($p->IDpegawai); ?></td>
                                    <td><?php echo e($p->nama); ?></td>
                                    <td><?php echo e($p->noTelp); ?></td>
                                    <td><?php echo e($p->jabatan); ?></td>
                                    <td><?php echo e($p->Dept); ?></td>
                                    <td><?php echo e($p->alamat); ?></td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST">
                                            <a href="/pegawai/edit/<?php echo e($p->IDpegawai); ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <?php if(session()->has('success')): ?>
        
            toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!'); 

        <?php elseif(session()->has('error')): ?>

            toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!'); 
            
        <?php endif; ?>
    </script>

</body>
</html><?php /**PATH C:\xampp\htdocs\Kuliah\Workshop\Projek Akhir\rapat\resources\views/index.blade.php ENDPATH**/ ?>