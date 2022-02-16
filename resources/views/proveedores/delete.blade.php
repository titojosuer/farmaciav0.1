{{-- !-- Delete Warning Modal -->  --}}
<form action="{{ route('proveedores.destroy', $proveedores->id) }}" method="post">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center">Esta seguro que desea eliminar este proveedor: {{ $proveedores->nombre }} ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Si,aceptar</button>
    </div>
</form>
