<?php $__env->startSection('content'); ?>
<h1 class="title">Create a New Project</h1>

<form method="POST" action="/projects">
    <?php echo csrf_field(); ?>

    <div class="field">
        <label class="label" for="title">Project Title</label>

        <div class="control">
            <input type="text" name="title" class="input <?php echo e($errors->has('title') ? 'is-danger' : ''); ?>" value="<?php echo e(old('title')); ?>">
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Project Description</label>

        <div class="control">
            <textarea class="textarea <?php echo e($errors->has('description') ? 'is-danger' : ''); ?>" name="description" value="<?php echo e(old('description')); ?>"></textarea>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button">Create Project</button>
        </div>
    </div>

    <div class="<?php echo e($errors->has('title') || $errors->has('description') ? 'notification is-danger' : ''); ?>">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Programacion\code\project\resources\views/create.blade.php ENDPATH**/ ?>