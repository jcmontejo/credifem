   <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Productos</h3>
    </div>  

    <div class="box-body">
      <div class="form-group col-sm-6 col-lg-4">
        {!! Form::label('code', 'Codigo del Producto:') !!}
        {!! Form::text('code', null, [ 'style' => 'text-transform:uppercase',
          'class' => 'form-control input-lg', 
          'placeholder'=>'ESCRIBE EL CODIGO DEL PRODUCTO',
          'required'=>'required',
          'data-parsley-trigger ' => 'input focusin',
          'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
        </div>


        <div class="form-group col-sm-6 col-lg-4">
          {!! Form::label('name', 'Nombre del Producto:') !!}
          {!! Form::text('name', null, [ 'style' => 'text-transform:uppercase',
            'class' => 'form-control input-lg', 
            'placeholder'=>'ESCRIBE EL NOMBRE DEL PRODUCTO',
            'required'=>'required',
            'data-parsley-trigger ' => 'input focusin',
            'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
          </div>


          <div class="form-group col-sm-6 col-lg-4">
            {!! Form::label('interest_of_cup', 'Interés:') !!}
            <input type="number" name="interest_of_cup" class="form-control input-lg" placeholder="ESCRIBE EL INTERES" required="required" data-parsley-trigger="input focusin" data-parsley-type="digits" data-parsley-maxlength="2">
            </div> 

            <div class="form-group col-sm-6 col-lg-4">
              {!! Form::label('ammount_max', 'Monto  Máximo:') !!}
              <input type="number" name="ammount_max" class="form-control input-lg" placeholder="ESCRIBE EL MONTO MÁXIMO" required="required" data-parsley-trigger="input focusin" data-parsley-type="digits" data-parsley-maxlength="5">
              </div> 


              <div class="form-group col-sm-6 col-lg-4">
                {!! Form::label('ammount_min', 'Monto Mínimo:') !!}
                <input type="number" name="ammount_min" class="form-control input-lg" placeholder="ESCRIBE EL MONTO MÍNIMO" required="required" data-parsley-trigger="input focusin" data-parsley-type="digits" data-parsley-maxlength="5">
                </div> 


                <div class="form-group col-sm-6 col-lg-4">
                  {!! Form::label('surcharge', 'Recargo:') !!}
                  <input type="number" name="surcharge" class="form-control input-lg" placeholder="ESCRIBE EL RECARGO" required="required" data-parsley-trigger="input focusin" data-parsley-type="digits" data-parsley-maxlength="5">
                  </div> 


                  <div class="box-body" >
                   <div class="col-md-4">
                    <div class="btn-group">
                      {!! Form::submit('Guardar', ['class' => 'uppercase btn btn-primary', 'id' => 'save']) !!}
                    </div>
                  </div> 
                </div>

              </div>
