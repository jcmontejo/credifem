<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- Form Element sizes -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Datos de la Sucursal</h3>
        </div>       
        <div class="box-body">
          <div class="col-md-4">
            <label for="exampleInputEmail1">Nombre de la Sucursal</label>
            {!! Form::text('name', null, [
              'style' => 'text-transform:uppercase',
              'class' => 'form-control input-lg', 
              'placeholder'=>'ESCRIBE EL NOMBRE DE LA SUCURSAL',
              'required'=>'required',
              'data-parsley-trigger ' => 'input focusin',
              'data-parsley-validate-if-empty'=>'true',
              'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
            </div>
            <div class="col-md-4">
              <label for="exampleInputEmail1">Teléfono</label>
              <input type="number" name="phone" class="form-control input-lg" placeholder="TELÉFONO" required="required" data-parsley-trigger="input focusin" data-parsley-type="digits" data-parsley-validate-if-empty="true" data-parsley-maxlength="10">
            </div>  
            <div class="col-md-4">
              <label for="region_id">Región</label>
              {!! Form::select('region_id',$regions ,null, ['class' => 'form-control input-lg']); !!}
            </div>
            <br>
            <div class="col-md-12">
              <label for="exampleInputEmail1">Nomenclatura</label>
              {!! Form::text('nomenclature', null, [
                'style' => 'text-transform:uppercase',
                'class' => 'form-control input-lg', 
                'placeholder'=>'ESCRIBE LA NOMENCLATURA DE LA SUCURSAL',
                'required'=>'required',
                'data-parsley-trigger ' => 'input focusin',
                'data-parsley-validate-if-empty'=>'true',
                'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
              </div>

            </div>
            <!-- /.box-body -->        
            <div class="box-body">
              <div class="col-md-12">
                <div class="gllpLatlonPicker">
                  <label for="exampleInputEmail1">Dirección</label>
                  <div class="input-group">
                    {!! Form::text('address', null, [
                      'style' => 'text-transform:uppercase',
                      'class' => 'form-control input-lg gllpSearchField',
                      'placeholder'=>'ESCRIBE LA DIRECCIÓN DE LA SUCURSAL, EJ: AV. CENTRAL OTE. 214 SAN MARCOS, TUXTLA GUTIÉRREZ, CHIS.',
                      'required'=>'required',
                      'data-parsley-trigger ' => 'input focusin',
                      'onkeyup' => 'javascript:this.value=this.value.toUpperCase();']) !!}
                      <div class="input-group-btn">
                       <input type="button" class="gllpSearchButton btn btn-primary input-lg" value="Buscar">
                     </div>
                   </div>
                   <br/><br/>
                   <div class="gllpMap">Google Maps</div>
                   <br/>
                   <input type="hidden" name="latitude" class="gllpLatitude" value="16.753239967660058"/>
                   <input type="hidden" name="length" class="gllpLongitude" value="-93.11789682636714"/>
                   <input type="hidden" class="gllpZoom" value="12"/>
                 </div>
               </div>
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
        <!--/.col (left) -->

        <!-- /.row -->
      </section>

