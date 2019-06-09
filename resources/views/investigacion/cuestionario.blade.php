@extends('layouts.gentemplate')
@section('Content')
<!-- page content -->
<div class="page-title">
  <div class="title_left">
    <h3>Nueva investigación</h3>
  </div>
</div>
<div class="clearfix"></div>

<div class="row">

  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Definamos una idea <small>Temática de la investigación</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <!-- Smart Wizard -->
        <p>Responda las siguientes preguntas para identificar una condición temática y definir el problema:</p>
        <form action="/cuestionario/store" method="POST">
        @csrf

          <div id="wizard" class="form_wizard wizard_horizontal">
            <ul class="wizard_steps">
              <li>
                <a href="#step-1">
                  <span class="step_no">1</span>
                  <span class="step_descr">
                    Paso 1<br />
                    <small>Idea</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-2">
                  <span class="step_no">2</span>
                  <span class="step_descr">
                    Paso 2<br />
                    <small>Step 2 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-3">
                  <span class="step_no">3</span>
                  <span class="step_descr">
                    Paso 3<br />
                    <small>Step 3 description</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="#step-4">
                  <span class="step_no">4</span>
                  <span class="step_descr">
                    Paso 4<br />
                    <small>Step 4 description</small>
                  </span>
                </a>
              </li>
            </ul>
            <div id="step-1">
              <h2 class="StepTitle">Identifiquemos las condiciones</h2>
              <div class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué sucede?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p1" class="form-control" name="p1" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cuándo sucede?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p2" class="form-control" name="p2" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cómo sucede?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p3" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cuáles son las consecuencias de lo que sucede?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p4" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Hay antecedentes?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p5" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Quiénes son los involucrados?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p6" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué se espera como resultado?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p7" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cómo se relaciona la problematica con el contexto académico de investigación?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p8" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div id="step-2">
              <div class="form-horizontal form-label-left">

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué me inquieta como investigador de la situación planteada?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p9" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cuáles son las contradicciones evidentes de la situación planteada?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p10" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué se ha estudiado anteriormente acerca de esto?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p11" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué aspectos no se han estudiado y/o aún no se tiene respuesta?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p12" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cuáles temáticas del contexto académico, industrial y/o organizacional se asocian a esta situación?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p13" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿A cuál contexto pertenece este tema?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p14" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>

              </div>
            </div>
            <div id="step-3">
              <div class="form-horizontal form-label-left">
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué aspectos de este tema sobresalen en relación con la situación preocupante?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p15" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cómo se relacionan estos aspectos entre sí?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p16" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Hay algún aspecto en particular que me interese más?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p17" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Hasta dónde se pueden investigar esos aspectos?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p18" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div id="step-4">
              <h2 class="StepTitle">Elementos básicos del problema de investigación</h2>
              <div class="form-horizontal form-label-left">
                
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué se quiere hacer?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p19" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Sobre qué se quiere hacer?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p20" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Qué o quién manifiesta el evento?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p21" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Cuándo se manifiesta?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p22" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">¿Donde se manifiesta?</label>
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <textarea id="p23" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <!-- End SmartWizard Content -->

      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection

@section('js')
<!-- jQuery Smart Wizard -->
<script src="{{asset('jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
@endsection