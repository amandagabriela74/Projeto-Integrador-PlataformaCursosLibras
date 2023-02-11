<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
Tela quiz index
 <?php $__env->slot('header', null, []); ?> 

    <div>
      <a href="<?php echo e(route('course-create')); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded cursor-pointer w-32 "> Adicionar novo curso</a>
    </div>  
     <?php $__env->endSlot(); ?>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  <h1 class="text-2x1 font-semibold leading-tigh py-2">Listagem dos cursos</h1>
                  <div class="w-full divide-y divide-gray-200">
                  <table class="w-full divide-y divide-gray-200">
                      <thead class="bg-gray-200">
                        <tr>
                              <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider">Módulo</th>
                              <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider">Título Quiz</th>
                              <th class="px-6 py-3 text-left text-xs font-medium text-grady-500 uppercase tracking-wider"">Descrição</th>
                        </tr>
                      </thead>


                      <tbody class="bg-white divide-y divide-gray-200 ">
                          <?php $__currentLoopData = \App\Models\Module::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="">
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"><?php echo e($module->module_id); ?></th>
                              <?php $__currentLoopData = $module->quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap "><?php echo e($quiz->title); ?></th>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap"></th>
                              <th class="px-6 py-4 text-sm font-medium text-gray-900 whitespace-nowrap">
                                  
                                <a class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-4 rounded" href="">Editar</a>  
                                <form action="" method="POST">
                                  <?php echo csrf_field(); ?>
                                  <?php echo method_field('delete'); ?>
                                  <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Deletar</button>
                                </form>
                              </th>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH /home/amanda/Downloads/Projeto-Integrador-PlataformaCursosLibras/resources/views/quiz/quiz/index.blade.php ENDPATH**/ ?>