<div class="table-responsive-sm">
    <table class="table table-striped" id="permissions-table">
        <thead>
            <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Roles</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                                @forelse ($user->roles as $role)
                                  <span class="badge badge-info">{{ $role->name }}</span>
                                @empty
                                  <span class="badge badge-danger">No roles</span>
                                @endforelse
                              </td>
                <td>
                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('users.show', [$user->id]) }}" class='btn btn-ghost-info'><i class="fa fa-eye text-primary"></i></a>
                        <a href="{{ route('users.edit', [$user->id]) }}" class='btn btn-ghost-success'><i class="fa fa-edit text-success"></i></a>
                        {!! Form::button('<i class="fa fa-trash text-danger"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
