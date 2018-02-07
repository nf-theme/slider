<div class="vc-slider-container {{ $style }}">
	<div class="vc-slider-run vc-type-{{ $type }} {{ (str_slug($type) === 'owl') ? 'owl-theme' : '' }}" {!! (str_slug($type) == 'slick') ? "data-slick='" . $options . "'" : "" !!}>
		@foreach (json_decode($list_slider) as $item)
			<div class="item_slider">
				<img class="background-image" style="background-image: url({{ $item->url }});" src="{{ $size }}">
			</div>
		@endforeach
	</div>
</div>