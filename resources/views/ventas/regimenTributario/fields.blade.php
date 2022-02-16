<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cai', 'CAI:') !!}
    {!! Form::text('cai', null, ['class' => 'form-control']) !!}
</div>

<!-- Inicial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correlativo_inicial', 'Correlativo Inicial:') !!}
    {!! Form::text('correlativo_inicial', null, ['class' => 'form-control']) !!}
</div>

<!-- Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correlativo_final', 'Correlativo Final:') !!}
    {!! Form::text('correlativo_final', null, ['class' => 'form-control']) !!}
</div>

<!-- Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ultimo_correlativo', 'Ultimo Correlativo:') !!}
    {!! Form::text('ultimo_correlativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_relativo', 'Numero Relativo:') !!}
    {!! Form::text('numero_relativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_vencimiento', 'Fecha Vencimiento:') !!}
    {!! Form::date('fecha_vencimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('regimenTributario.index') }}" class="btn btn-secondary">Cancel</a>
</div>
