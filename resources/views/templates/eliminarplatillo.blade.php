<div class="page-container">
        <!-- bloc-15 -->
        <div class="bloc bgc-white l-bloc" id="bloc-15">
            <div class="container bloc-md">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form action="{{route('eliminado')}}" method="post" id="form_18266" novalidate>
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}                                                    
                                                    <div class="form-group">
                                                        <label>Nombre del Platillo a eliminar<br></label>
                                                        @include('templates/showPlatillo', ['platillos'=>$platillos])
                                                    </div>                                            
                                                        <div class="text-center"><button type="submit" class="btn btn-wire btn-rd btn-xl wire-btn-light-salmon">Eliminar</button></div>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>