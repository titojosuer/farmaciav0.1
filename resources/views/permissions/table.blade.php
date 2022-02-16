<div class="table-responsive-sm">
    <table class="table table-striped" id="permissions-table">
        <thead>
            <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Guard</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($permissions as $permission)
            <tr>
            <td>{{ $permission->id }}</td>
            <td>{{ $permission->name }}</td>
            <td>{{ $permission->guard_name }}</td>
                <td>
                    {!! Form::open(['route' => ['permissions.destroy', $permission->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('permissions.show', [$permission->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('permissions.edit', [$permission->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
    {!! $permissions->links() !!}
    </div>
</div>
