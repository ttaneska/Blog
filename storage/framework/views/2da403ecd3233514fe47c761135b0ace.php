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
    <?php if (isset($component)) { $__componentOriginalf4dbe5c03e5252d506702b8e24b335a8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf4dbe5c03e5252d506702b8e24b335a8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.setting','data' => ['heading' => 'Manage Posts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('setting'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => 'Manage Posts']); ?>

        <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">

            <tbody class="bg-white divide-y divide-gray-200">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">

                            <div class="text-sm font-medium text-gray-900">
                                <a href="/posts/<?php echo e($post->slug); ?>">
                                <?php echo e($post->title); ?>

                                </a>
                            </div>
                        </div>
                    </td>


                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                        <a href="/admin/posts<?php echo e($post->id); ?>/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">

                        <form method="POST" action="/admin/posts/<?php echo e($post->id); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="text-xs text-gray-400">Delete</button>


                        </form>
                    </td>

                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf4dbe5c03e5252d506702b8e24b335a8)): ?>
<?php $attributes = $__attributesOriginalf4dbe5c03e5252d506702b8e24b335a8; ?>
<?php unset($__attributesOriginalf4dbe5c03e5252d506702b8e24b335a8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf4dbe5c03e5252d506702b8e24b335a8)): ?>
<?php $component = $__componentOriginalf4dbe5c03e5252d506702b8e24b335a8; ?>
<?php unset($__componentOriginalf4dbe5c03e5252d506702b8e24b335a8); ?>
<?php endif; ?>
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
<?php /**PATH C:\xampp\htdocs\Laravel8\Laravel8\resources\views/admin/posts/index.blade.php ENDPATH**/ ?>