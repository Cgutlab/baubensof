

	<div class="slider hide-on-med-and-down">
		<ul class="slides">
			@forelse($sliders as $s)
			<li>
				<img src="{{ asset('images/sliders/'.$s->file_image) }}" class="img-responsive"> 
				<div class="caption center-align " id="caption-slider">
					<div class="valid-wraper" >
						<p>{{ $s->titulo }}</p>
					</div>
					<div class="divider" id="divider-slider"></div>
				</div>
			</li>
			@empty
			@endforelse
		</ul>
	</div>