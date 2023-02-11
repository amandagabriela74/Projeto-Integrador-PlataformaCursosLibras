<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <section x-data="{ open: <?php echo e($moduleCourses[0]->id ?? 'false'); ?> }" class="container-fluid flex flex-row">
        <div
            class="w-96 h-screen flex flex-col justify-start items-center pt-6 overflow-y-auto rounded text-neutral-50 bg-sky-500">
            <div class=" h-16 overflow-hidden shadow-sm ">
                <div class=" border-gray-200">
                    <a href="<?php echo e(route('dashboard')); ?>"
                        class="  inline-flex items-center px-3 w-64  mx-2 text-2xl font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-12 h-12 px-4  ml-2 -mr-1"
                            fill="currentColor">
                            <path
                                d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                        </svg>
                        Dashboard
                    </a>
                </div>
            </div>

            <ul class="">
                <?php $__currentLoopData = $moduleCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <div x-on:click="open = <?php echo e($courses->id); ?>"
                            class=" h-16  w-screen bg-black/20  hover:bg-blue-500 text-center rounded-md cursor-pointer border-b-2">
                            <h4 class="pt-4 text-2xl text-center font-bold dark:text-white"><?php echo e($courses->titulo); ?></h4>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
        <div class="h-screen w-full">
            <div class="w-full">

                
                <?php $__currentLoopData = $moduleCourses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $courses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div x-show="open == <?php echo e($courses->id); ?>"
                        class=" h-screen flex flex-row justify-center   bg-gray-50 ">
                        <div class=" flex flex-col spcace-y-4 items-center  w-full  pb-5">

                            <div class="flex flex-row w-full justify-between pl-8 ">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sub-title','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sub-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> Curso: <?php echo e($courses->titulo); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <form method="POST" action="" class="flex justify-end pt-4 pr-7">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="courseId" value="<?php echo e($courses->id); ?>">
                                    <button type="submit"
                                        class="w-28  h-12 inline-flex items-center px-3 py-2 mx-2 text-lg text-center font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Concluído
                                    </button>
                                </form>
                            </div>
                            <iframe class=" w-full aspect-video px-8 pb-6" src="<?php echo e($courses->embed); ?>"
                                title="<?php echo e($courses->titulo); ?>" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>


                        
                        <div class="w-2/6 bg-gray-100 pl-2 flex flex-col justify-between pb-28">
                            <ul class="">
                                <?php $__empty_1 = true; $__currentLoopData = $courses->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <li>
                                        <div class="bg-gray-100/50 border  rounded-sm">

                                            <div class="flex flex-row items-center border-b border-black/50 pb-2 ">
                                                
                                                <div
                                                    class="relative w-16 h-14 rounded-full overflow-hidden bg-gray-100  dark:bg-gray-600">

                                                    <?php if($comment->user): ?>
                                                        <img src="<?php echo e(url("storage/{$comment->user->image}")); ?>"
                                                            alt="<?php echo e($user->name); ?>"
                                                            class="absolute w-14 h-14 rounded-full text-gray-400 -left-1">
                                                    <?php else: ?>
                                                        <svg class="absolute w-12 h-12 rounded-full text-gray-400 -left-1"
                                                            fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    <?php endif; ?>


                                                </div>
                                                
                                                <div
                                                    class="flex flex-col font-light text-gray-500 dark:text-gray-400 p-2  w-10/12">
                                                    <p
                                                        class="font-semibold text-gray-900 dark:text-white decoration-indigo-500 ">
                                                        <?php echo e($comment->user->name); ?> </p> <?php echo e($comment->comment); ?>

                                                </div>

                                                
                                                <?php if($user->id === $comment->user->id || auth()->user()->is_admin == 1): ?>
                                                    <div class="pl-20 ">
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => ['align' => 'right','width' => '48']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['align' => 'right','width' => '48']); ?>
                                                             <?php $__env->slot('trigger', null, []); ?> 
                                                                <button
                                                                    class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                                    <div class="ml-1">
                                                                        <svg class="w-6 h-6" aria-hidden="true"
                                                                            fill="currentColor" viewBox="0 0 20 20"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z">
                                                                            </path>
                                                                        </svg>
                                                                    </div>
                                                                </button>
                                                             <?php $__env->endSlot(); ?>

                                                             <?php $__env->slot('content', null, []); ?> 
                                                                <form
                                                                    action="<?php echo e(route('comments.destroy', $comment->id)); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('delete'); ?>
                                                                    <button type="submit"
                                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded w-full">Editar</button><br>
                                                                    <button type="submit"
                                                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded w-full">Excluir</button>

                                                                </form>
                                                             <?php $__env->endSlot(); ?>
                                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <li>Nenhum comentário para esse curso</li>
                                <?php endif; ?>

                            </ul>
                            <div class="text-center">
                                <form action="<?php echo e(route('comments.store', $courses->id)); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="courseId" value="<?php echo e($courses->id); ?>">
                                    <p class=" mt-6 mb-2 texto-2xl text-left text-black dark:text-white">
                                        <?php echo e($courses->comments->count()); ?>

                                        Comentários</p>
                                    <textarea name="comment" rows="4"
                                        class="block p-2.5  w-full text-sm text-gray-900 bg-gray- rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Escreva seu comentário.."></textarea>

                                    <div class="flex justify-end px-3 py-2 ">
                                        <button type="submit"
                                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                            Publicar comentário
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH /home/amanda/Downloads/Projeto-Integrador-PlataformaCursosLibras/resources/views/course.blade.php ENDPATH**/ ?>