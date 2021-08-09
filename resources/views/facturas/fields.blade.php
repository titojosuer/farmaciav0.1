
<div class="row">
<!-- Subtotal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtotal', 'Subtotal:') !!}
    {!! Form::text('subtotal', null, ['class' => 'form-control']) !!}
</div>

<!-- Isv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isv', 'Isv:') !!}
    {!! Form::text('isv', null, ['class' => 'form-control']) !!}
</div>
</div>
<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::text('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('facturas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
