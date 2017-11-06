<div class="modal fade" id="cotizador">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">COTIZADOR</h4>
        </div>
        <div class="modal-body">
          {!! Form::label('modalidad', 'Modalidad:') !!}        
          <select id="status" onChange="mostrar(this.value);" class="form-control input-lg">
            @if(Auth::user()->hasRole(['administrador', 'director-general']))
            <option value="producto" class="selected">PRODUCTO</option>
            <option value="Diario">CrediDiario 25</option>
            <option value="Semanal">CrediSemana</option>
            <option value="CrediDiario4">CrediDiario 4</option>
            <option value="anterior">Diario</option>
          </select>
          <script>
            function mostrar(id) {
              if (id == "Diario") {
                $("#diario").show();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#credidiario4").hide();
              }
              if (id == "Semanal") {
                $("#diario").hide();
                $("#semanal").show();
                $("#credidiario4").hide();
                $("#credidiario4").hide();
              }
              if (id == "CrediDiario4") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").show();
                $("#anterior").hide();
              }
              if (id == "anterior") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#anterior").show();
              }
              if (id == "producto") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#anterior").hide();
              }
            }
          </script>
          <br>


          <div id="diario" style="display: none;">
            <h4>Plazo: <strong><span id="demomodalidad"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="1" max="25" value="25" class="slider" name="modalidadr" onChange="calcularr()" id="modalidadr">
            </div><br>
            <input type="hidden" id="tasar" name="tasar" value="0.25">
            <h4>Monto Solicitado: <strong>$<span id="demor"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="500" step="100" max="10000" value="5000" class="slider" name="capitalr" onChange="calcularr()" id="capitalr">
            </div>
            <br>
            <input type="hidden" id="interesr" name="interesr" value="Norway">
            {!! Form::label('totalr', 'Cuota:') !!}  
            {!! Form::text('totalr', 'null', ['class' => 'form-control input-lg', 'id' => 'totalnr', 'readonly' => 'readonly']) !!} 
            {!! Form::label('totalpayment', 'Total a Pagar:') !!}  
            {!! Form::text('totalpayment', null, ['class' => 'form-control input-lg', 'id' => 'totalpayment', 'readonly' => 'readonly']) !!}  
            <br>             
          </div>

          <div id="anterior" style="display: none;"> 
            <h4>Plazo: <strong><span id="demomodalidaddiario"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="1" max="25" value="25" class="slider" name="modalidaddiario" onChange="calculardiario()" id="modalidaddiario">
            </div><br>
            <input type="hidden" id="tasadiario" name="tasadiario" value="0.15">
            <h4>Monto Solicitado: <strong>$<span id="demordiario"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="500" step="100" max="10000" value="5000" class="slider" name="capitaldiario" onChange="calculardiario()" id="capitaldiario">
            </div>
            <br>
            <input type="hidden" id="interesdiario" name="interesdiario" value="Norway">
            {!! Form::label('totaldiario', 'Cuota:') !!}  
            {!! Form::text('totaldiario', 'null', ['class' => 'form-control input-lg', 'id' => 'totalndiario', 'readonly' => 'readonly']) !!} 
            {!! Form::label('totalpaymentdiario', 'Total a Pagar:') !!}  
            {!! Form::text('totalpaymentdiario', null, ['class' => 'form-control input-lg', 'id' => 'totalpaymentdiario', 'readonly' => 'readonly']) !!}   
          </div>

          <div id="semanal" style="display: none;"  ">
            <input type="hidden" name="modalidad" id="modalidad" value="1">
            <input type="hidden" id="tasa" name="tasa" value="0.15">
            <h4>Monto Solicitado: <strong>$<span id="demo"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " class="slidecontainer">
              <input type="range" min="200" step="100" max="5000" value="2500" class="slider" name="capital" onChange="calcular()" id="myRange">
            </div>
            <br>
            {!! Form::label('refrendo', 'Refrendo:') !!}  
            {!! Form::text('refrendo', null, ['class' => 'form-control input-lg', 'id' => 'refrendo', 'readonly' => 'readonly']) !!}
            <input type="hidden" id="interes" name="interes">
            {!! Form::label('total', 'Total a pagar:') !!}  
            {!! Form::text('total', null, ['class' => 'form-control input-lg', 'id' => 'totaln', 'readonly' => 'readonly']) !!}
          </div>

          <div id="credidiario4" style="display: none;"  ">
            <h4>Semanas: <strong><span id="democredi4"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " class="slidecontainer">
              <input type="range" min="1"  max="4" value="2" class="slider" name="modalidadfour" onChange="calcularcredi4()" id="modalidadfour">
            </div>
            <input type="hidden" id="tasafour" name="tasafour" value="0.28">
            <br>   
            <h4>Monto Solicitado: <strong>$<span id="democredi44"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " id="slidecontainer">
              <input type="range" min="500" step="100" max="10000" value="5000" class="slider" name="capitalfour" onChange="calcularcredi4()" id="capitalfour">
            </div>
            <br>
            {!! Form::label('refrendofour', 'Refrendo:') !!}  
            {!! Form::text('refrendofour', null, ['class' => 'form-control input-lg', 'id' => 'refrendofour', 'readonly' => 'readonly']) !!}
            <input type="hidden" id="interesfour" name="interesfour">
            {!! Form::label('totalfour', 'Total a pagar:') !!}  
            {!! Form::text('totalfour', null, ['class' => 'form-control input-lg', 'id' => 'totalnfour', 'readonly' => 'readonly']) !!}
          </div>
          @endif
          @role('ejecutivo-de-credito')
           <option value="producto" class="selected">PRODUCTO</option>
            <option value="Diario">CrediDiario 25</option>
            <option value="Semanal">CrediSemana</option>
            <option value="CrediDiario4">CrediDiario 4</option>
            <option value="anterior">Diario</option>
          </select>
          <script>
            function mostrar(id) {
              if (id == "Diario") {
                $("#diario").show();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#credidiario4").hide();
              }
              if (id == "Semanal") {
                $("#diario").hide();
                $("#semanal").show();
                $("#credidiario4").hide();
                $("#credidiario4").hide();
              }
              if (id == "CrediDiario4") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").show();
                $("#anterior").hide();
              }
              if (id == "anterior") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#anterior").show();
              }
              if (id == "producto") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#anterior").hide();
              }
            }
          </script>
          <br>


          <div id="diario" style="display: none;">
            <h4>Plazo: <strong><span id="demomodalidad"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="1" max="25" value="1" class="slider" name="modalidadr" onChange="calcularr()" id="modalidadr">
            </div><br>
            <input type="hidden" id="tasar" name="tasar" value="0.25">
            <h4>Monto Solicitado: <strong>$<span id="demor"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="500" step="100" max="3000" value="1500" class="slider" name="capitalr" onChange="calcularr()" id="capitalr">
            </div>
            <br>
            <input type="hidden" id="interesr" name="interesr" value="Norway">
            {!! Form::label('totalr', 'Cuota:') !!}  
            {!! Form::text('totalr', 'null', ['class' => 'form-control input-lg', 'id' => 'totalnr', 'readonly' => 'readonly']) !!} 
            {!! Form::label('totalpayment', 'Total a Pagar:') !!}  
            {!! Form::text('totalpayment', null, ['class' => 'form-control input-lg', 'id' => 'totalpayment', 'readonly' => 'readonly']) !!}  
            <br>             
          </div>

          <div id="anterior" style="display: none;"> 
            <h4>Plazo: <strong><span id="demomodalidaddiario"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="1" max="25" value="25" class="slider" name="modalidaddiario" onChange="calculardiario()" id="modalidaddiario">
            </div><br>
            <input type="hidden" id="tasadiario" name="tasadiario" value="0.15">
            <h4>Monto Solicitado: <strong>$<span id="demordiario"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="500" step="100" max="3000" value="1500" class="slider" name="capitaldiario" onChange="calculardiario()" id="capitaldiario">
            </div>
            <br>
            <input type="hidden" id="interesdiario" name="interesdiario" value="Norway">
            {!! Form::label('totaldiario', 'Cuota:') !!}  
            {!! Form::text('totaldiario', 'null', ['class' => 'form-control input-lg', 'id' => 'totalndiario', 'readonly' => 'readonly']) !!} 
            {!! Form::label('totalpaymentdiario', 'Total a Pagar:') !!}  
            {!! Form::text('totalpaymentdiario', null, ['class' => 'form-control input-lg', 'id' => 'totalpaymentdiario', 'readonly' => 'readonly']) !!}   
          </div>

          <div id="semanal" style="display: none;"  ">
            <input type="hidden" name="modalidad" id="modalidad" value="1">
            <input type="hidden" id="tasa" name="tasa" value="0.15">
            <h4>Monto Solicitado: <strong>$<span id="demo"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " class="slidecontainer">
              <input type="range" min="200" step="100" max="1000" value="500" class="slider" name="capital" onChange="calcular()" id="myRange">
            </div>
            <br>
            {!! Form::label('refrendo', 'Refrendo:') !!}  
            {!! Form::text('refrendo', null, ['class' => 'form-control input-lg', 'id' => 'refrendo', 'readonly' => 'readonly']) !!}
            <input type="hidden" id="interes" name="interes">
            {!! Form::label('total', 'Total a pagar:') !!}  
            {!! Form::text('total', null, ['class' => 'form-control input-lg', 'id' => 'totaln', 'readonly' => 'readonly']) !!}
          </div>

          <div id="credidiario4" style="display: none;"  ">
            <h4>Semanas: <strong><span id="democredi4"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " class="slidecontainer">
              <input type="range" min="1"  max="4" value="2" class="slider" name="modalidadfour" onChange="calcularcredi4()" id="modalidadfour">
            </div>
            <input type="hidden" id="tasafour" name="tasafour" value="0.28">
            <br>   
            <h4>Monto Solicitado: <strong>$<span id="democredi44"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " id="slidecontainer">
              <input type="range" min="500" step="100" max="3000" value="1500" class="slider" name="capitalfour" onChange="calcularcredi4()" id="capitalfour">
            </div>
            <br>
            {!! Form::label('refrendofour', 'Refrendo:') !!}  
            {!! Form::text('refrendofour', null, ['class' => 'form-control input-lg', 'id' => 'refrendofour', 'readonly' => 'readonly']) !!}
            <input type="hidden" id="interesfour" name="interesfour">
            {!! Form::label('totalfour', 'Total a pagar:') !!}  
            {!! Form::text('totalfour', null, ['class' => 'form-control input-lg', 'id' => 'totalnfour', 'readonly' => 'readonly']) !!}
          </div>
          @endrole
           @role('coordinador-regional')
           <option value="producto" class="selected">PRODUCTO</option>
            <option value="Diario">CrediDiario 25</option>
            <option value="Semanal">CrediSemana</option>
            <option value="CrediDiario4">CrediDiario 4</option>
            <option value="anterior">Diario</option>
          </select>
          <script>
            function mostrar(id) {
              if (id == "Diario") {
                $("#diario").show();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#credidiario4").hide();
              }
              if (id == "Semanal") {
                $("#diario").hide();
                $("#semanal").show();
                $("#credidiario4").hide();
                $("#credidiario4").hide();
              }
              if (id == "CrediDiario4") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").show();
                $("#anterior").hide();
              }
              if (id == "anterior") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#anterior").show();
              }
              if (id == "producto") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#anterior").hide();
              }
            }
          </script>
          <br>


          <div id="diario" style="display: none;">
            <h4>Plazo: <strong><span id="demomodalidad"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="1" max="25" value="25" class="slider" name="modalidadr" onChange="calcularr()" id="modalidadr">
            </div><br>
            <input type="hidden" id="tasar" name="tasar" value="0.25">
            <h4>Monto Solicitado: <strong>$<span id="demor"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="500" step="100" max="7000" value="3500" class="slider" name="capitalr" onChange="calcularr()" id="capitalr">
            </div>
            <br>
            <input type="hidden" id="interesr" name="interesr" value="Norway">
            {!! Form::label('totalr', 'Cuota:') !!}  
            {!! Form::text('totalr', 'null', ['class' => 'form-control input-lg', 'id' => 'totalnr', 'readonly' => 'readonly']) !!} 
            {!! Form::label('totalpayment', 'Total a Pagar:') !!}  
            {!! Form::text('totalpayment', null, ['class' => 'form-control input-lg', 'id' => 'totalpayment', 'readonly' => 'readonly']) !!}  
            <br>             
          </div>

          <div id="anterior" style="display: none;"> 
            <h4>Plazo: <strong><span id="demomodalidaddiario"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="1" max="25" value="25" class="slider" name="modalidaddiario" onChange="calculardiario()" id="modalidaddiario">
            </div><br>
            <input type="hidden" id="tasadiario" name="tasadiario" value="0.15">
            <h4>Monto Solicitado: <strong>$<span id="demordiario"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="500" step="100" max="7000" value="3500" class="slider" name="capitaldiario" onChange="calculardiario()" id="capitaldiario">
            </div>
            <br>
            <input type="hidden" id="interesdiario" name="interesdiario" value="Norway">
            {!! Form::label('totaldiario', 'Cuota:') !!}  
            {!! Form::text('totaldiario', 'null', ['class' => 'form-control input-lg', 'id' => 'totalndiario', 'readonly' => 'readonly']) !!} 
            {!! Form::label('totalpaymentdiario', 'Total a Pagar:') !!}  
            {!! Form::text('totalpaymentdiario', null, ['class' => 'form-control input-lg', 'id' => 'totalpaymentdiario', 'readonly' => 'readonly']) !!}   
          </div>

          <div id="semanal" style="display: none;"  ">
            <input type="hidden" name="modalidad" id="modalidad" value="1">
            <input type="hidden" id="tasa" name="tasa" value="0.15">
            <h4>Monto Solicitado: <strong>$<span id="demo"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " class="slidecontainer">
              <input type="range" min="200" step="100" max="3000" value="1500" class="slider" name="capital" onChange="calcular()" id="myRange">
            </div>
            <br>
            {!! Form::label('refrendo', 'Refrendo:') !!}  
            {!! Form::text('refrendo', null, ['class' => 'form-control input-lg', 'id' => 'refrendo', 'readonly' => 'readonly']) !!}
            <input type="hidden" id="interes" name="interes">
            {!! Form::label('total', 'Total a pagar:') !!}  
            {!! Form::text('total', null, ['class' => 'form-control input-lg', 'id' => 'totaln', 'readonly' => 'readonly']) !!}
          </div>

          <div id="credidiario4" style="display: none;"  ">
            <h4>Semanas: <strong><span id="democredi4"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " class="slidecontainer">
              <input type="range" min="1"  max="4" value="2" class="slider" name="modalidadfour" onChange="calcularcredi4()" id="modalidadfour">
            </div>
            <input type="hidden" id="tasafour" name="tasafour" value="0.28">
            <br>   
            <h4>Monto Solicitado: <strong>$<span id="democredi44"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " id="slidecontainer">
              <input type="range" min="500" step="100" max="7000" value="3500" class="slider" name="capitalfour" onChange="calcularcredi4()" id="capitalfour">
            </div>
            <br>
            {!! Form::label('refrendofour', 'Refrendo:') !!}  
            {!! Form::text('refrendofour', null, ['class' => 'form-control input-lg', 'id' => 'refrendofour', 'readonly' => 'readonly']) !!}
            <input type="hidden" id="interesfour" name="interesfour">
            {!! Form::label('totalfour', 'Total a pagar:') !!}  
            {!! Form::text('totalfour', null, ['class' => 'form-control input-lg', 'id' => 'totalnfour', 'readonly' => 'readonly']) !!}
          </div>
          @endrole
            @role('coordinador-sucursal')
           <option value="producto" class="selected">PRODUCTO</option>
            <option value="Diario">CrediDiario 25</option>
            <option value="Semanal">CrediSemana</option>
            <option value="CrediDiario4">CrediDiario 4</option>
            <option value="anterior">Diario</option>
          </select>
          <script>
            function mostrar(id) {
              if (id == "Diario") {
                $("#diario").show();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#credidiario4").hide();
              }
              if (id == "Semanal") {
                $("#diario").hide();
                $("#semanal").show();
                $("#credidiario4").hide();
                $("#credidiario4").hide();
              }
              if (id == "CrediDiario4") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").show();
                $("#anterior").hide();
              }
              if (id == "anterior") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#anterior").show();
              }
              if (id == "producto") {
                $("#diario").hide();
                $("#semanal").hide();
                $("#credidiario4").hide();
                $("#anterior").hide();
              }
            }
          </script>
          <br>


          <div id="diario" style="display: none;">
            <h4>Plazo: <strong><span id="demomodalidad"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="1" max="25" value="25" class="slider" name="modalidadr" onChange="calcularr()" id="modalidadr">
            </div><br>
            <input type="hidden" id="tasar" name="tasar" value="0.25">
            <h4>Monto Solicitado: <strong>$<span id="demor"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="500" step="100" max="5000" value="2500" class="slider" name="capitalr" onChange="calcularr()" id="capitalr">
            </div>
            <br>
            <input type="hidden" id="interesr" name="interesr" value="Norway">
            {!! Form::label('totalr', 'Cuota:') !!}  
            {!! Form::text('totalr', 'null', ['class' => 'form-control input-lg', 'id' => 'totalnr', 'readonly' => 'readonly']) !!} 
            {!! Form::label('totalpayment', 'Total a Pagar:') !!}  
            {!! Form::text('totalpayment', null, ['class' => 'form-control input-lg', 'id' => 'totalpayment', 'readonly' => 'readonly']) !!}  
            <br>             
          </div>

          <div id="anterior" style="display: none;"> 
            <h4>Plazo: <strong><span id="demomodalidaddiario"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="1" max="25" value="25" class="slider" name="modalidaddiario" onChange="calculardiario()" id="modalidaddiario">
            </div><br>
            <input type="hidden" id="tasadiario" name="tasadiario" value="0.15">
            <h4>Monto Solicitado: <strong>$<span id="demordiario"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 "  class="slidecontainer">
              <input type="range" min="500" step="100" max="5000" value="2500" class="slider" name="capitaldiario" onChange="calculardiario()" id="capitaldiario">
            </div>
            <br>
            <input type="hidden" id="interesdiario" name="interesdiario" value="Norway">
            {!! Form::label('totaldiario', 'Cuota:') !!}  
            {!! Form::text('totaldiario', 'null', ['class' => 'form-control input-lg', 'id' => 'totalndiario', 'readonly' => 'readonly']) !!} 
            {!! Form::label('totalpaymentdiario', 'Total a Pagar:') !!}  
            {!! Form::text('totalpaymentdiario', null, ['class' => 'form-control input-lg', 'id' => 'totalpaymentdiario', 'readonly' => 'readonly']) !!}   
          </div>

          <div id="semanal" style="display: none;"  ">
            <input type="hidden" name="modalidad" id="modalidad" value="1">
            <input type="hidden" id="tasa" name="tasa" value="0.15">
            <h4>Monto Solicitado: <strong>$<span id="demo"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " class="slidecontainer">
              <input type="range" min="200" step="100" max="2000" value="1000" class="slider" name="capital" onChange="calcular()" id="myRange">
            </div>
            <br>
            {!! Form::label('refrendo', 'Refrendo:') !!}  
            {!! Form::text('refrendo', null, ['class' => 'form-control input-lg', 'id' => 'refrendo', 'readonly' => 'readonly']) !!}
            <input type="hidden" id="interes" name="interes">
            {!! Form::label('total', 'Total a pagar:') !!}  
            {!! Form::text('total', null, ['class' => 'form-control input-lg', 'id' => 'totaln', 'readonly' => 'readonly']) !!}
          </div>

          <div id="credidiario4" style="display: none;"  ">
            <h4>Semanas: <strong><span id="democredi4"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " class="slidecontainer">
              <input type="range" min="1"  max="4" value="2" class="slider" name="modalidadfour" onChange="calcularcredi4()" id="modalidadfour">
            </div>
            <input type="hidden" id="tasafour" name="tasafour" value="0.28">
            <br>   
            <h4>Monto Solicitado: <strong>$<span id="democredi44"></span></strong></h4>
            <div class=" col-sm-6 col-lg-12 " id="slidecontainer">
              <input type="range" min="500" step="100" max="5000" value="2500" class="slider" name="capitalfour" onChange="calcularcredi4()" id="capitalfour">
            </div>
            <br>
            {!! Form::label('refrendofour', 'Refrendo:') !!}  
            {!! Form::text('refrendofour', null, ['class' => 'form-control input-lg', 'id' => 'refrendofour', 'readonly' => 'readonly']) !!}
            <input type="hidden" id="interesfour" name="interesfour">
            {!! Form::label('totalfour', 'Total a pagar:') !!}  
            {!! Form::text('totalfour', null, ['class' => 'form-control input-lg', 'id' => 'totalnfour', 'readonly' => 'readonly']) !!}
          </div>
          @endrole
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <style>

  .color-3 .irs-min, .irs-max {

    font-size: 12px; line-height: 1.333;
    text-shadow: none;
    top: 0; padding: 1px 3px;
    background: #e1e4e9;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
  .color-3 .irs-from, .irs-to, .irs-single {
    color: #fff;
    font-size: 15px; line-height: 1.333;
    text-shadow: none;
    padding: 1px 5px;
    background: black;
    -moz-border-radius: 4px;
    border-radius: 4px;
  }
</style>
<!--SCRIPTS ADMINISTRADOR Y DIRECTOR GENERAL-->
<!--semanal-->
<script>
  function calcular()
  {
    capital = eval(document.getElementById('myRange').value);
    tasa = eval(document.getElementById('tasa').value);
    interes = capital * tasa;

    document.getElementById('interes').value=interes;
    modalidad = eval(document.getElementById('modalidad').value);

    utilidad_neta = capital + interes;
    total= utilidad_neta/modalidad;
    var formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2,
    });

    var formatterr = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2,
    });


    document.getElementById('totaln').value=formatterr.format(Math.ceil(total));
    document.getElementById('refrendo').value=formatter.format(Math.ceil(interes));         
  }


  function calcularcredi4()
  {
    capitalfour = eval(document.getElementById('capitalfour').value);
    tasafour = eval(document.getElementById('tasafour').value);
    interesfour = capitalfour * tasafour;

    document.getElementById('interesfour').value=interesfour;
    modalidadfour = eval(document.getElementById('modalidadfour').value);

    utilidad_netafour = capitalfour + interesfour;
    totalfour= utilidad_netafour/modalidadfour;
    var formatterfour = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2,
    });

    var formatterrfourfour = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2,
    });


    document.getElementById('totalnfour').value=formatterrfourfour.format(Math.ceil(totalfour));
    document.getElementById('refrendofour').value=formatterfour.format(Math.ceil(interesfour));         
  }
  function calcularr()
  {
    capitalr = eval(document.getElementById('capitalr').value);
    tasar = eval(document.getElementById('tasar').value);
    interesr = capitalr * tasar;

    document.getElementById('interesr').value=interes;
    modalidadr = eval(document.getElementById('modalidadr').value);

    utilidad_netar = capitalr + interesr;
    totalr= utilidad_netar/modalidadr;

    var formatterr = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2,
    });


    document.getElementById('totalnr').value=formatterr.format(Math.ceil(totalr));  

    var formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2,
    });

    totalpayment =  capitalr + interesr;
    document.getElementById('totalpayment').value = formatter.format(Math.ceil(totalpayment));  
  }

  function calculardiario()
  {
    capitaldiario = eval(document.getElementById('capitaldiario').value);
    tasadiario= eval(document.getElementById('tasadiario').value);
    interesdiario = capitaldiario * tasadiario;

    document.getElementById('interesdiario').value=interes;
    modalidaddiario = eval(document.getElementById('modalidaddiario').value);

    utilidad_netadiario = capitaldiario + interesdiario;
    totaldiario= utilidad_netadiario/modalidaddiario;

    var formatterr = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2,
    });


    document.getElementById('totalndiario').value=formatterr.format(Math.ceil(totaldiario));  

    var formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
      minimumFractionDigits: 2,
    });

    totalpaymentdiario =  capitaldiario + interesdiario;
    document.getElementById('totalpaymentdiario').value = formatter.format(Math.ceil(totalpaymentdiario));  
  }
</script>


<script>
  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  output.innerHTML = slider.value;

  slider.oninput = function() {
    output.innerHTML = this.value;
  }
</script>

<script>
  var slider3 = document.getElementById("modalidadfour");
  var output3 = document.getElementById("democredi4");
  output3.innerHTML = slider3.value;

  slider3.oninput = function() {
    output3.innerHTML = this.value;
  }
</script>
<script>
  var slider4 = document.getElementById("capitalfour");
  var output4 = document.getElementById("democredi44");
  output4.innerHTML = slider4.value;

  slider4.oninput = function() {
    output4.innerHTML = this.value;
  }
  
</script>


<script>
  var slider1 = document.getElementById("modalidadr");
  var output1 = document.getElementById("demomodalidad");
  output1.innerHTML = slider1.value;

  slider1.oninput = function() {
    output1.innerHTML = this.value;
  }

</script>
<script>
  var sliderdiario = document.getElementById("modalidaddiario");
  var outputdiario = document.getElementById("demomodalidaddiario");
  outputdiario.innerHTML = sliderdiario.value;

  sliderdiario.oninput = function() {
    outputdiario.innerHTML = this.value;
  }

</script>
<script>
 var slider2 = document.getElementById("capitalr");
 var output2 = document.getElementById("demor");
 output2.innerHTML = slider2.value;

 slider2.oninput = function() {
  output2.innerHTML = this.value;
}

</script>
<script>
 var slider2diario = document.getElementById("capitaldiario");
 var output2diario = document.getElementById("demordiario");
 output2diario.innerHTML = slider2diario.value;

 slider2diario.oninput = function() {
  output2diario.innerHTML = this.value;
}

</script>

<!--END ADMIN & DG-->

<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 15px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #ff3300;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #ff3300;
  cursor: pointer;
}
</style>
