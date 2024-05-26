
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['trigger']));

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

foreach (array_filter((['trigger']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div x-data="{show: false}" @click.away="show=false" class="relative">

    

   <div @click="show=! show">
       <?php echo e($trigger); ?>

   </div>

    <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl
     w-full z-50 overflow-auto max-h-52" style="display: none">

       <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Laravel8\Laravel8\resources\views/components/dropdown.blade.php ENDPATH**/ ?>