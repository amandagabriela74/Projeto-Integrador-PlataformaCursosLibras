<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bg-sky-400 min-h-screen">
        <header class="flex justify-between items-center bg-white p-5 h-[100px]">
            <h1 class="text-sky-400 text-3xl ml-10 font-bold">Logo</h1>  
            <?php if(Route::has('login')): ?>
                <nav class="mr-10 p font-semibold">
                    <?php if(auth()->guard()->check()): ?>
                        <?php else: ?>
                        <a class="text-white m-2 px-3 py-2 bg-sky-400 rounded-xl hover:bg-sky-500" href="<?php echo e(route('login')); ?>">Entrar</a>
                        <?php if(Route::has('register')): ?>
                        <a class="text-white m-2 px-3 py-2 bg-sky-400 rounded-xl hover:bg-sky-500" href="<?php echo e(route('register')); ?>">Cadastre-se</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </nav>
            <?php endif; ?>
        </header>

        <main>
            <div class="max-w-screen-xl h-[500px] mx-auto sm:px-6 lg:px-20 flex justify-center items-center">
                <div>
                    <h2 class="text-5xl text-white w-1/2 font-semibold">Torne-se um apaixonado por linguagem de sinais</h2>
                    
                    <a class="inline-block mt-5 rounded-xl text-white bg-[#21DF40] p-2 px-14 hover:bg-emerald-600 font-semibold" href="">Embarque</a>
                </div>
                <div class="bg-slate-100 w-80 h-60 rounded-xl">AQUI TERA UM CARD</div>
            </div>
        </main>

        <section>
            <div class="max-w-full bg-sky-500 h-[600px] mx-auto sm:px-6 lg:px-20">
                <h2 class="text-center font-bold text-white text-4xl py-[65px] ">Nossa missão é transformar vidas   </h2>

                <div class="flex gap-24 justify-center text-2xl text-white text-center">
                    <article>
                        <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-900 font-bold text-5xl">+200 mil</h2>
                        <p>de vidas impactadas</p>
                    </article>
                    <article>
                        <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-900 font-bold font-bold text-5xl">+97 mil</h2>
                        <p>contas criadas</p>
                    </article>
                    <article>
                        <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-900 font-bold font-bold text-5xl">+200</h2>
                        <p>cursos lançados</p>
                    </article>
                    <article>
                        <h2 class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-900 font-bold font-bold text-5xl">+8 mil</h2>
                        <p>aulas gravadas</p>
                    </article>
                </div>

                <div class="flex justify-center mt-20">
                <iframe class="rounded-xl" width="734" height="413" src="https://www.youtube.com/embed/01ABxOZg8HA" title="Illustrator  (LIBRAS)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <section>
            <div class="max-w-full h-[500px] bg-sky-700"></div>
        </section>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?><?php /**PATH /home/amanda/Downloads/Projeto-Integrador-PlataformaCursosLibras/resources/views/index.blade.php ENDPATH**/ ?>