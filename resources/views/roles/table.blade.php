<div class="table-responsive-sm">
    <table class="table table-striped" id="permissions-table">
        <thead>
            <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Guard</th>
        <th>Permisos</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>{{ $role->guard_name }}</td>
            <td>
                   @forelse ($role->permissions as $permission)
                       <span class="badge badge-info">{{ $permission->name }}</span>
                   @empty
                       <span class="badge badge-danger">No permission added</span>
                   @endforelse
                 </td>
                <td>
                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roles.show', [$role->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('roles.edit', [$role->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
