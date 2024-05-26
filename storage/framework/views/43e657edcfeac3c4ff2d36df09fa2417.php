<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <section class="px-6 py-8">


        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="<?php echo e(asset('storage/'. $post->thumbnail)); ?>}" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time><?php echo e($post->created_at->diffForHumans()); ?></time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                <a href="/?author=<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a>
                            </h5>

                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                           class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <?php if (isset($component)) { $__componentOriginal5bdb968b9533b5acb5d83bc126b0f613 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5bdb968b9533b5acb5d83bc126b0f613 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.categorry-button','data' => ['category' => $post->category]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('categorry-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['category' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->category)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5bdb968b9533b5acb5d83bc126b0f613)): ?>
<?php $attributes = $__attributesOriginal5bdb968b9533b5acb5d83bc126b0f613; ?>
<?php unset($__attributesOriginal5bdb968b9533b5acb5d83bc126b0f613); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5bdb968b9533b5acb5d83bc126b0f613)): ?>
<?php $component = $__componentOriginal5bdb968b9533b5acb5d83bc126b0f613; ?>
<?php unset($__componentOriginal5bdb968b9533b5acb5d83bc126b0f613); ?>
<?php endif; ?>

                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        <?php echo e($post->title); ?>

                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        <?php echo $post->body; ?>


                </div>
                </div>
                <section class="col-span-8 col-start-5 mt-10 space-y-6">

                   <?php echo $__env->make('posts._add-comment-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                    <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginalbd9557727013ab5c59290a3a681e973f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd9557727013ab5c59290a3a681e973f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-comment','data' => ['comment' => $comment]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('post-comment'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['comment' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($comment)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd9557727013ab5c59290a3a681e973f)): ?>
<?php $attributes = $__attributesOriginalbd9557727013ab5c59290a3a681e973f; ?>
<?php unset($__attributesOriginalbd9557727013ab5c59290a3a681e973f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd9557727013ab5c59290a3a681e973f)): ?>
<?php $component = $__componentOriginalbd9557727013ab5c59290a3a681e973f; ?>
<?php unset($__componentOriginalbd9557727013ab5c59290a3a681e973f); ?>
<?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </section>

            </article>

        </main>


    </section>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Laravel8\Laravel8\resources\views/posts/show.blade.php ENDPATH**/ ?>