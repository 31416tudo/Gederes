{{ csrf_field() }}
	@foreach($ingredientes as $ingrediente)
	<tr>
	    <td width="150"><form><label name="nombreIngrediente" id="nombreIngrediente"> {{$ingrediente->nombreIngrediente}}</label></form> </td>
	    <td width="150"><form><label name="cantidad" id="cantidad"> {{$ingrediente->cantidad}}</label></form> </td>
	<tr>
@endforeach