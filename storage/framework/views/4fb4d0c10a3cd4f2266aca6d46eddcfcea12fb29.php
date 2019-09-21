<?php $__env->startSection('content'); ?>
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/<?php echo e($project->id); ?>">

        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>

        <div class="control">
            <input type="text" class="input" name="title" value="<?php echo e($project->title); ?>">
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>
        
            <div class="control">
                <textarea name="description" class="textarea" cols="30" rows="10"><?php echo e($project->description); ?></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button">Update Project</button>
            </div>
        </div>  
    </form>

    <form method="POST" action="/projects/<?php echo e($project->id); ?>">
        
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
        
        <div class="field">
            <div class="control">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Programacion\code\project\resources\views/projects/edit.blade.php ENDPATH**/ ?>