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
								<?php $__currentLoopData = $meeting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($p->IDmeating); ?></td>
                                    <td><?php echo e($p->IDruang); ?></td>
                                    <td><?php echo e($p->judulM); ?></td>
                                    <td><?php echo e($p->keterangan); ?></td>
                                    <td><?php echo e($p->tgl); ?></td>
                                    <td><?php echo e($p->waktu_mulai); ?></td>
                                    <td><?php echo e($p->waktu_berakhir); ?></td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" method="POST">
                                            <a href="/meating/edit/<?php echo e($p->IDmeating); ?>" class="btn btn-sm btn-primary">EDIT</a>
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
</html><?php /**PATH C:\xampp\htdocs\Kuliah\Workshop\Projek Akhir\rapat\resources\views/meeting.blade.php ENDPATH**/ ?>