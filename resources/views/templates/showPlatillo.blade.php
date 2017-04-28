{{ csrf_field() }}
    <select class="form-control" id="select_775" name="nombrePlatillo">
	    @foreach($platillos as $platillo)
			<option value="{{$platillo->nombrePlatillo}}">{{$platillo->nombrePlatillo}}</option>
		@endforeach
	</select>
 