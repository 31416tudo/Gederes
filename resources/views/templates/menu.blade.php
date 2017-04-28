{{ csrf_field() }}
    @foreach($platillos as $platillo)
    <div class="col-sm-6 MenuTemplate">
        <div>
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="mg-md  mg-sm-sm text-left-sm titulos tc-dark-red">{{$platillo->nombrePlatillo}}</h4>
                    <p>{{$platillo->descripcion}}</p>
                </div>
                <div class="col-sm-6"><img src="{{$platillo->imagen}}" class="img-rd-lg mg-sm img-responsive center-block" height="166" width="238" />
                    <div>
                        <div class="row">
                            <div class="col-sm-6">
                                <h6 class="mg-md text-right "><strong>$ {{$platillo->precio}}</strong></h6>
                            </div>
                            <div class="col-sm-6">
                                <div class="radio-inline"><label><input type="radio" name="radioSetne" value="option1" />Ordenar</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

