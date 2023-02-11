<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'module'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'module'
]); ?>
<?php foreach (array_filter(([
    'module'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="border-2 bg-white rounded-lg h-[300px] box-content h-auto w-48" x-data="{open:false}">
    <h1 class="flex justify-center pt-4 text-2xl font-extrabold"><?php echo e($module->title); ?></h1>

    <div class="flex flex-col justify-center gap-5 items-center h-5/6">

        
        <a href="<?php echo e(route('course-module', $module->id)); ?>" class="bg-sky-400 hover:bg-sky-500 text-white font-bold py-2 px-4 rounded-xl">
            Inscrever-se
        </a>

        <a  href="<?php echo e(route('test-module', $module->id)); ?>" class="bg-sky-400 hover:bg-sky-500  text-white font-bold py-2 px-11 rounded-xl">
            Quiz
        </a>
        
        <button @click="open = ! open"  class="bg-sky-400 hover:bg-sky-500 text-white font-bold py-2 px-7 rounded-xl">Histórico</button>

        <div x-show="open">
            <?php $__currentLoopData = Auth::user()->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($answer->quiz->module_id == $module->id): ?>
            <?php echo e($answer->created_at); ?>

            <?php echo e($answer->score); ?>

            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

</div><?php /**PATH /home/amanda/Downloads/Projeto-Integrador-PlataformaCursosLibras/resources/views/components/module.blade.php ENDPATH**/ ?>