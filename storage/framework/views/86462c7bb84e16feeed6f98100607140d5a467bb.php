<?php echo $__env->make('media::admin.image_picker.single', [
    'title' => trans('product::products.form.base_image'),
    'inputName' => 'files[base_image]',
    'file' => $post->baseImage,
], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="media-picker-divider"></div>
<div style="display: none;">
    <?php echo $__env->make('media::admin.image_picker.multiple', [
        'title' => trans('product::products.form.additional_images'),
        'inputName' => 'files[additional_images][]',
        'files' => $post->additionalImages,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
