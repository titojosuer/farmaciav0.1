<!-- Modal -->
<div class="modal fade cd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          @include('coreui-templates::common.errors')
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        {!! Form::open() !!}
      <div class="modal-body">
        <!-- Nombre Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('nombre', 'Nombre:') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Proveedor Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('descripcion', 'Proveedor:') !!}
            {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Cantidad Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('correo', 'Cantidad:') !!}
            {!! Form::text('correo', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Precio Field -->
        <div class="form-group col-sm-12">
            {!! Form::label('telefono', 'Precio:') !!}
            {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Descripcion Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('direccion', 'Descripcion:') !!}
            {!! Form::textarea('direccion', null, ['class' => 'form-control']) !!}
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
  {!! Form::close() !!}
    </div>
  </div>
</div>
