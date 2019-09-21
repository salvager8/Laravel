<div class="<?php echo e($errors->has('title') || $errors->has('description') ? 'notification is-danger' : ''); ?>">
	<ul>
	    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	        <li><?php echo e($error); ?></li>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div><?php /**PATH F:\Programacion\code\project\resources\views/errors.blade.php ENDPATH**/ ?>