<?php $__env->startSection('title',"all"); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Student</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Birthday</th>
                            <th>Address</th>
                            <th>Create at</th>
                            <th>Update at</th>
                            <th>Tool</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($student->id); ?></td>
                                <td><?php echo e($student->fullname); ?></td>
                                <td><?php echo e($student->birthday); ?></td>
                                <td><?php echo e($student->address); ?></td>
                                <td><?php echo e($student->create_at); ?></td>
                                <td><?php echo e($student->update_at); ?></td>
                                <td>

                                    <a href="<?php echo e(route('student.edit', $student->id)); ?>" class="btn btn-warning">EDIT</a>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\nginx-1.23.1\html\th07\resources\views/student/index.blade.php ENDPATH**/ ?>