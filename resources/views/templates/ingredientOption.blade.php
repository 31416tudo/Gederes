{{ csrf_field() }}
	@foreach($ingredientes as $ingrediente)
	<div class="radio-inline">
		<label>
			<input type="checkbox" name="ingredientes[]" value="{{$ingrediente->nombreIngrediente}}"/>{{$ingrediente->nombreIngrediente}}
		</label>
	</div>
@endforeach