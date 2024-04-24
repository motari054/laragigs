<li><?php echo e($heading); ?></li> 
<?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h2>
    <a href="listings/<?php echo e($listing['id']); ?>"><?php echo e($listing['title']); ?> </a>
</h2>
<p><?php echo e($listing['description']); ?></p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(count($listings)==0): ?>
    <p>There are no listings</p>
<?php else: ?>
    <p>Above are the listings</p>
<?php endif; ?><?php /**PATH F:\Laravel\laragigs\resources\views/listings.blade.php ENDPATH**/ ?>