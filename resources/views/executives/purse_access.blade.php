<div class="modal fade" id="purse_access" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">REGISTRAR RECUPERACIÓN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['url' => 'purseAccess','data-parsley-validate' => '',  'files' => 'true','onsubmit'=>'return enviado()']) !!}  
        <p>
          {!! Form::label('ammount', 'Monto:') !!}
          <input type="number" name="ammount" class="form-control input-lg" placeholder="ESCRIBE MONTO" required="required" data-parsley-trigger="input focusin" data-parsley-type="digits" data-parsley-maxlength="5">
          <input type="hidden"  name="user_id" value="{{ $user->id }}">
        </p>
        <!--<p>
        {!! Form::label('concept', 'Concepto:') !!}
          <input type="text" name="concept" class="form-control input-lg" placeholder="ESCRIBE CONCEPTO" required="required" data-parsley-trigger="input focusin" data-parsley-type="digits" data-parsley-maxlength="5">
        </p>-->
        <p>
          {!! Form::label('voucher', 'Coprobante:') !!}
          <input type="file" name="voucher" class="form-control input-lg">
        </p>
        <p>
          {!! Form::submit('ASIGNAR', ['class' => 'btn btn-lg btn-block bg-navy']) !!}
        </p>
        {!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-lg btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<script>

  var cuenta=0;
  function enviado() { 
    if (cuenta == 0)
    {
      cuenta++;
      return true;
    }
    else 
    {
      alert("El formulario ya está siendo enviado, por favor aguarde un instante.");
      return false;
    }
  }

</script>