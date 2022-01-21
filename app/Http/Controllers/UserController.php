<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       abort_if(Gate::denies('user_index'), 403);
  $users = User::paginate(5);
  return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      abort_if(Gate::denies('user_create'), 403);
      $roles = Role::all()->pluck('name', 'id');
      return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
      $user = User::create($request->only('name', 'username', 'email')
    + [
        'password' => bcrypt($request->input('password')),
    ]);

$roles = $request->input('roles', []);
$user->syncRoles($roles);
return redirect()->route('users.index', $user->id)->with('success', 'Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      abort_if(Gate::denies('user_show'), 403);
     // $user = User::findOrFail($id);
     // dd($user);
     $user->load('roles');
     return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
      abort_if(Gate::denies('user_edit'), 403);
$roles = Role::all()->pluck('name', 'id');
$user->load('roles');
return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
      // $user=User::findOrFail($id);
      $data = $request->only('name', 'username', 'email');
      $password=$request->input('password');
      if($password)
          $data['password'] = bcrypt($password);
      // if(trim($request->password)=='')
      // {
      //     $data=$request->except('password');
      // }
      // else{
      //     $data=$request->all();
      //     $data['password']=bcrypt($request->password);
      // }

      $user->update($data);

      $roles = $request->input('roles', []);
      $user->syncRoles($roles);
      return redirect()->route('users.index', $user->id)->with('success', 'Usuario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      abort_if(Gate::denies('user_destroy'), 403);

       if (auth()->user()->id == $user->id) {
           return redirect()->route('users.index');
       }

       $user->delete();
       return back()->with('succes', 'Usuario eliminado correctamente');
    }
}
