@extends('layouts.gentemplate')

@section('css')

<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans')}}">

@endsection()

@section('Content')

<div class="page-title">
    <div class="title_left">
        <h3>Delimitación del tema</h3>
    </div>
    <div class="title_right">
        <div class="col-md-4 col-sm-4 col-xs-12 pull-right top_search">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Cuestionario de la idea</button>
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Cuestionario de la idea</h4>
                        </div>
                        <div class="modal-body">
                            <h4>¿Qué sucede?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cuándo sucede?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cómo sucede?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cuáles son las consecuencias de lo que sucede?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Hay antecedentes?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Quiénes son los involucrados?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Qué se espera como resultado?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cómo se relaciona la problematica con el contexto académico de investigación?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Qué me inquieta como investigador de la situación planteada?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cuáles son las contradicciones evidentes de la situación planteada?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Qué se ha estudiado anteriormente acerca de esto?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Qué aspectos no se han estudiado y/o aún no se tiene respuesta?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cuáles temáticas del contexto académico, industrial y/o organizacional se asocian a esta situación?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿A cuál contexto pertenece este tema?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Qué aspectos de este tema sobresalen en relación con la situación preocupante?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Cómo se relacionan estos aspectos entre sí?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Hay algún aspecto en particular que me interese más?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                            <h4>¿Hasta dónde se pueden investigar esos aspectos?</h4>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<div class="row">

    <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="x_panel">

            <div class="x_title">
                <h2>Determinemos el enunciado holopráxico</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form method="POST" action="/investigacion/store">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h4>Ingrese aquí el <b>título</b> del proyecto de investigación:</h4>
                                <textarea id="titulo" required="required" class="form-control" name="titulo" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                            </div>
                        </div>
                        <br />
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="ln_solid"></div>
                                <h4>Agregue las <b>preguntas</b> de la investigación. Recuerde luego señalar cuál de ellas es el <b>enunciado holopráxico</b>.</h4>
                                <div class="row">
                                    <div class="col-md-11 col-sm-11 col-xs-12">
                                        <textarea id="pregunta" class="form-control" name="pregunta" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-12">
                                        <button type="button" id="agregar-pregunta" class="btn btn-round btn-lg btn-info">+</button>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="accordion" id="lista-preguntas" role="tablist" aria-multiselectable="true">

                                <!-- Aqui se anexan las preguntas secundarias-->

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-round btn-lg btn-success pull-right">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')

<!-- bootstrap-daterangepicker -->
<script src="{{asset('moment/min/moment.min.js')}}"></script>
<script src="{{asset('bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap-datetimepicker -->
<script src="{{asset('bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>


<!-- Script Pregunta Secundaria -->
<script type="text/javascript">
    count_pregunta = 0;
    // all done btn
    $("#agregar-pregunta").click(function() {
        var pregunta = $("#pregunta").val();
        createpregunta(pregunta);
    });

    //create task
    function createpregunta(pregunta) {
        count_pregunta = count_pregunta + 1;
        var markup = '<div class="panel">' +
            '<a class="panel-heading" role="tab" id="pregunta' + count_pregunta + '" data-toggle="collapse" data-parent="#lista-preguntas" href="#collapse' + count_pregunta + '" aria-expanded="false" aria-controls="collapse' + count_pregunta + '">' +
            '<h4 class="panel-title">' + pregunta + '<i class="borrar-pregunta fa fa-close pull-right"></i></h4>' +
            '</a>' +
            '<div id="collapse' + count_pregunta + '" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="pregunta' + count_pregunta + '">' +
            '<div class="panel-body">' +
            '<div class="row">' +
            '<div class="form-group">' +
            '<div class="col-md-6 col-sm-6 col-xs-12">' +
            '<label>Temporalidad</label>' +
            '<fieldset>' +
            '<div class="control-group">' +
            '<div class="controls">' +
            '<div class="input-prepend input-group">' +
            '<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>' +
            '<input type="text" name="temporalidad' + count_pregunta + '" id="temporalidad' + count_pregunta + '" class="form-control" value="01/01/16 - 01/25/16" />' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</fieldset>' +
            '</div>' +
            '<div class="col-md-6 col-sm-6 col-xs-12">' +
            '<label>Contexto</label>' +
            '<input type="text" id="contexto' + count_pregunta + '" class="form-control" name="contexto' + count_pregunta + '" required />' +
            '</div>' +
            '<div class="col-md-6 col-sm-6 col-xs-12">' +
            '<label>Evento</label>' +
            '<input type="text" id="evento' + count_pregunta + '" class="form-control" name="evento' + count_pregunta + '" required />' +
            '</div>' +
            '<div class="col-md-6 col-sm-6 col-xs-12">' +
            '<label>Unidad de estudio</label>' +
            '<input type="text" id="unidad_estudio' + count_pregunta + '" class="form-control" name="unidad_estudio' + count_pregunta + '" required />' +
            '</div>' +
            '<div class="col-md-12 col-sm-12 col-xs-12">' +
            '<label>' +
                '<input type="radio" checked="" value="primaria" id="optionsRadios' + count_pregunta + '" name="optionsRadios"> Selecione esta opcion si esta pregunta es el enunciado holopráxico' +
            '</label>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '<br>' +
            '</div>' +
            '</div>' +
            '</div>';
        $('#lista-preguntas').append(markup);
        $('#pregunta').val('');
    }

    //delete done task from "already done"
    $('#lista-preguntas').on('click', '.borrar-pregunta', function() {
        removeItem(this);
    });

    //remove done task from list
    function removeItem(element) {
        $(element).parent().parent().parent().remove();
    }
</script>

@endsection()