<?php $__env->startSection('content'); ?>

<body>
    <h1 class="title">Projects</h1> 

    <?php $__currentLoopData = $allProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
        	<a href="/projects/<?php echo e($project->id); ?>">
        		<?php echo e($project->title); ?>        		
        	</a>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Programacion\code\project\resources\views/projects/index.blade.php ENDPATH**/ ?>