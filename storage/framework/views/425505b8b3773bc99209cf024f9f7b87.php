<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['posts']));

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

foreach (array_filter((['posts']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal56bbd863d478c0feb5881842483265dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56bbd863d478c0feb5881842483265dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-featured-card','data' => ['post' => $posts[0]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('post-featured-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($posts[0])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal56bbd863d478c0feb5881842483265dd)): ?>
<?php $attributes = $__attributesOriginal56bbd863d478c0feb5881842483265dd; ?>
<?php unset($__attributesOriginal56bbd863d478c0feb5881842483265dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal56bbd863d478c0feb5881842483265dd)): ?>
<?php $component = $__componentOriginal56bbd863d478c0feb5881842483265dd; ?>
<?php unset($__componentOriginal56bbd863d478c0feb5881842483265dd); ?>
<?php endif; ?>

<?php if($posts->count() >1): ?>
    <div class="lg:grid lg:grid-cols-6">
      <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if (isset($component)) { $__componentOriginal14b498b52c33a1421ff8895e4557790f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal14b498b52c33a1421ff8895e4557790f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.post-card','data' => ['post' => $post,'class' => ''.e($loop->iteration < 3 ?'col-span-3' : 'col-span-2').'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post),'class' => ''.e($loop->iteration < 3 ?'col-span-3' : 'col-span-2').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal14b498b52c33a1421ff8895e4557790f)): ?>
<?php $attributes = $__attributesOriginal14b498b52c33a1421ff8895e4557790f; ?>
<?php unset($__attributesOriginal14b498b52c33a1421ff8895e4557790f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal14b498b52c33a1421ff8895e4557790f)): ?>
<?php $component = $__componentOriginal14b498b52c33a1421ff8895e4557790f; ?>
<?php unset($__componentOriginal14b498b52c33a1421ff8895e4557790f); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\Laravel8\Laravel8\resources\views/components/posts-grid.blade.php ENDPATH**/ ?>