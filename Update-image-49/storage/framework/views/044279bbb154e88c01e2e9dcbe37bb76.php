<div>
    <h1>List Of images</h1>
    <a href="/upload">Upload mare img</a>
    <br>
    <?php $__currentLoopData = $imgData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        <img src="<?php echo e(Storage::url($img->path)); ?>" style="width: 300px; margin:10px" alt="">
        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\laravel-10\Update-image-49\resources\views/display.blade.php ENDPATH**/ ?>