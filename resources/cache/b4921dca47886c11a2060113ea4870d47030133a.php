<div class="vc-slider-container <?php echo e($style); ?>">
	<div class="vc-slider-run vc-type-<?php echo e($type); ?> <?php echo e((str_slug($type) === 'owl') ? 'owl-theme' : ''); ?>" <?php echo (str_slug($type) == 'slick') ? "data-slick='" . $options . "'" : ""; ?>>
		<?php $__currentLoopData = json_decode($list_slider); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="item_slider">
				<img class="background-image" style="background-image: url(<?php echo e($item->url); ?>);" src="<?php echo e($size); ?>">
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>