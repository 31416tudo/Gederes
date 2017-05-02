

    <!-- Main container -->
    <div class="page-container">
        <!-- bloc-17 -->
        <div class="bloc l-bloc " id="bloc-17">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-rd">
                            <div class="panel-heading">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h3 class="mg-clear">Ingresar Nuevo Ingrediente</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <form method="post" action="{{route('ingredienteactualizado')}}" id="form_46627" novalidate>
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }} 
                                           <div class="form-group">
                                                    <label>Nombre del ingrediente a modificar<br></label>
                                                    @include('templates/showIngredientes', ['ingredientes'=>$ingredientes])
                                                </div>
                                            <div class="form-group"><label>Nueva Cantidad<br></label><input name="cantidad" class="form-control" id="input_2643" /></div>
                                            <div class="panel-footer"><button type="submit" class="btn btn-wire btn-rd btn-xl wire-btn-light-salmon">Actualizar</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
        </div>
        <!-- bloc-17 END -->
    </div>
    <!-- Main container END -->

