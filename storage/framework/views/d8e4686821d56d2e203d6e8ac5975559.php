<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>


    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
           <?php if (isset($component)) { $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__env->slot('trigger', null, []); ?> 
                   <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left inline-flex lg:inline-flex">
                       <?php echo e(isset($currentCategory)? ucwords($currentCategory->name):'Categories'); ?>

                       <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'down-arrow','class' => 'absolute pointer-events-none','style' => 'right:12px;']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'down-arrow','class' => 'absolute pointer-events-none','style' => 'right:12px;']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>

                   </button>



                <?php $__env->endSlot(); ?>

               <?php if (isset($component)) { $__componentOriginal6b1d0d55421798f4a1c7b596bea6c022 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6b1d0d55421798f4a1c7b596bea6c022 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-item','data' => ['href' => '/','active' => request()->routeIs('home')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('home'))]); ?>All <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6b1d0d55421798f4a1c7b596bea6c022)): ?>
<?php $attributes = $__attributesOriginal6b1d0d55421798f4a1c7b596bea6c022; ?>
<?php unset($__attributesOriginal6b1d0d55421798f4a1c7b596bea6c022); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6b1d0d55421798f4a1c7b596bea6c022)): ?>
<?php $component = $__componentOriginal6b1d0d55421798f4a1c7b596bea6c022; ?>
<?php unset($__componentOriginal6b1d0d55421798f4a1c7b596bea6c022); ?>
<?php endif; ?>

               <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <?php if (isset($component)) { $__componentOriginal6b1d0d55421798f4a1c7b596bea6c022 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6b1d0d55421798f4a1c7b596bea6c022 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.dropdown-item','data' => ['href' => '/?category='.e($category->slug).'','active' => request()->is("categories/.{$category->slug}")]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/?category='.e($category->slug).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is("categories/.{$category->slug}"))]); ?>
                       <?php echo e(ucwords($category->name)); ?>

                    <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6b1d0d55421798f4a1c7b596bea6c022)): ?>
<?php $attributes = $__attributesOriginal6b1d0d55421798f4a1c7b596bea6c022; ?>
<?php unset($__attributesOriginal6b1d0d55421798f4a1c7b596bea6c022); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6b1d0d55421798f4a1c7b596bea6c022)): ?>
<?php $component = $__componentOriginal6b1d0d55421798f4a1c7b596bea6c022; ?>
<?php unset($__componentOriginal6b1d0d55421798f4a1c7b596bea6c022); ?>
<?php endif; ?>


               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $attributes = $__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__attributesOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe)): ?>
<?php $component = $__componentOriginaldf8083d4a852c446488d8d384bbc7cbe; ?>
<?php unset($__componentOriginaldf8083d4a852c446488d8d384bbc7cbe); ?>
<?php endif; ?>
            </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="POST" action="/">
                <?php if(request('category')): ?>
                    <input type="hidden" name="category" value="<?php echo e(request('category')); ?>">


                <?php endif; ?>
                <input type="text"
                       name="search"
                       placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="<?php echo e(request('search')); ?>">
            </form>
        </div>
    </div>
</header>


<?php /**PATH C:\xampp\htdocs\Laravel8\Laravel8\resources\views/posts/_header.blade.php ENDPATH**/ ?>