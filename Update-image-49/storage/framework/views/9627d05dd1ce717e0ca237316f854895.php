<div>
   <h1>Upload Image</h1>
   <form action="upload" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input type="file" name="file">
    <button>Upload</button>
   </form>
</div>
<?php /**PATH C:\laravel-10\Update-image-49\resources\views\upload.blade.php ENDPATH**/ ?>