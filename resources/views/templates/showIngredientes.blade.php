{{ csrf_field() }}
    <select class="form-control" id="select_775" name="nombreIngrediente">
	    @foreach($ingredientes as $ingrediente)
			<option value="{{$ingrediente->nombreIngrediente}}">{{$ingrediente->nombreIngrediente}}</option>
		@endforeach
	</select>