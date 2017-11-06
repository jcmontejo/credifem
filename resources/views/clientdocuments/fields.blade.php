<!-- CLIENTS DOCUMENTS-->
<div class="box box-danger">
    <div class="box-header with-border">
        <div>
            <h3> Datos del Aval</h3>
        </div>
        <div class="col-xs-12">
            <div class="col-md-12">	
                <div class="form-group col-sm-6 col-lg-4">
                    {!! Form::label('ine', 'INE:') !!}
                    {!! Form::file('ine') !!}
                </div>
                <div class="form-group col-sm-6 col-lg-4">
                    {!! Form::label('curp', 'CURP:') !!}
                    {!! Form::file('curp') !!}
                </div>
                <div class="form-group col-sm-6 col-lg-4">
                    {!! Form::label('proof_of_addres', 'Comprobante de Domicilio:') !!}
                    {!! Form::file('proof_of_addres') !!}
                </div>
                <div class="box-body" >
                 <div class="col-md-4">
                    <div class="btn-group">
                      {!! Form::submit('Guardar', ['class' => 'uppercase btn btn-primary', 'id' => 'save']) !!}
                  </div>
              </div> 
          </div>
      </div>
  </div>
</div>