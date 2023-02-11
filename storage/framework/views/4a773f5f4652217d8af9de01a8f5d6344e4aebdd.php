<div class="card-body">
    <form action="<?php echo e(route('quiz.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="title"><?php echo e(__('title')); ?></label>
            <input type="text" class="form-control"  placeholder="<?php echo e(__('Digite um titulo')); ?>" name="title" />
        </div>
        <select name="module" >
            <?php $__currentLoopData = \App\Models\Module::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value=<?php echo e($item->id); ?>><?php echo e($item->title); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <button type="submit" class="btn btn-primary btn-block"><?php echo e(__('Save')); ?></button>
    </form>
</div>
<?php /**PATH /home/amanda/Downloads/Projeto-Integrador-PlataformaCursosLibras/resources/views/quiz/quiz/create.blade.php ENDPATH**/ ?>