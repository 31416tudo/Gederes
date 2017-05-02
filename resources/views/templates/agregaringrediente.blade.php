

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
                                        <form action="{{route('ingredienteinsertado')}}"method="post"id="form_46627" novalidate>
                                           {{ csrf_field() }} 
                                            <div class="form-group"><label>Nombre</label><input class="form-control" name="nombreIngrediente" id="input_2915" /></div>
                                            <div class="form-group"><label>Cantidad<br></label><input class="form-control" name="cantidad" id="input_2643" /></div>
                                            <div class="panel-footer"><button type="submit" class="btn btn-d btn-lg">OK</a></div>
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

