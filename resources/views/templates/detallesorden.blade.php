{{ csrf_field() }}
    @foreach($detallesorden as $detallesorden)

        <ul class="list-unstyled">
            <li>
                <h3 class="mg-md">{{$detallesorden->platillo}}</h3>
            </li>
        </ul>
    @endforeach 