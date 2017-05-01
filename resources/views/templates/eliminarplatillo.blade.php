
    <!-- Main container -->
    <div class="page-container">
        <!-- bloc-15 -->
        <div class="bloc l-bloc" id="bloc-15">
            <div class=" bloc-md">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-rd">
                            <div class="panel-heading">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="mg-clear">Eliminar Platillo</h3>
                            </div>
                            <form action="{{route('eliminado')}}" method="post" id="form_18266" novalidate>
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}                                                    
                                    <div class="form-group">
                                        <label>Nombre del Platillo a eliminar<br></label>
                                        @include('templates/showPlatillo', ['platillos'=>$platillos])
                                    </div>                                            
                                        <div class="panel-footer text-center"><button type="submit" class="btn btn-wire btn-rd btn-xl wire-btn-light-salmon">Eliminar</button></div>
                            </form>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- bloc-15 END -->

