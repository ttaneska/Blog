<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['post']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">

            

            <img src="/images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
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


                <div class="mt-4">
                    <h1 class="text-3xl">
                      <a href="/posts/<?php echo e($post->slug); ?>"  >
                       <?php echo e($post->title); ?>

                      </a>
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time><?php echo e($post->created_at->diffForHumans()); ?></time>
                                    </span>

                </div>
            </header>

            <div class="text-sm mt-2 space-y-4">

                   <?php echo $post->excerpt; ?>



            </div>

            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="<?php echo e(asset('storage/' .$post->thumbnail)); ?>" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a href="/?author=<?php echo e($post->author->name); ?>">
                                <?php echo e($post->author->name); ?></a>
                            </h5>

                    </div>
                </div>

                <div class="hidden lg:block">
                    <a href="/posts/<?php echo e($post->slug); ?>"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Read More</a>
                </div>
            </footer>
        </div>
    </div>
</article>
<?php /**PATH C:\xampp\htdocs\Laravel8\Laravel8\resources\views/components/post-featured-card.blade.php ENDPATH**/ ?>