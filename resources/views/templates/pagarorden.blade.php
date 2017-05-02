{{ csrf_field() }}
    @foreach($orden as $orden)
        @if($orden->estatus == '2')
        <header>
            <form action="{{route('listo')}}" method="post">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="mg-clear">Mesa {{$orden->cliente}}</h3>
                        </div>
                        <div class="panel-body">
                                <ul class="list-unstyled">
                                @foreach($detallesorden as $detalleorden)
                                    @if($orden->id_orden == $detalleorden->id_orden)
                                        <li>
                                            <h3 class="mg-md">{{$detalleorden->platillo}}</h3>
                                            <h4 class="mg-clear"></h4>
                                        </li>
                                    @endif
                                @endforeach 
                                </ul>
                                <div class="panel">
                                        <div class="panel-heading">
                                            <h3 class="mg-clear">Monto</h3>
                                        </div>
                                        <div class="panel-body">
                                            <h4>{{$orden->monto}}</h4>
                                        </div>
                                        <div class="form-group" style="display: none">
                                            <input type="text" name="id_orden" class="form-control" id="id_orden" value="{{$orden->id_orden}}" />
                                            <input type="text" name="estatus" class="form-control" id="estatus" value="3" />
                                        </div>
                                        <div class="text-center"><button type="submit" class="btn btn-wire btn-rd btn-xl wire-btn-light-salmon">Orden pagada</button></div>

                                </div>
                        </div>
                    </div>
                </div>
            </form>
        </header>
        @endif
    @endforeach