<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PHPStan\Type\MixedType;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(User::class, 'model');
    }

    /**
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::all();
        $flashMessage = session('success');

        return view('users.index', compact('users', 'flashMessage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::all();

        return view('users.create', compact('roles'));
    }

    /**
     * @param Request $request
     * @param User $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, User $model)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        $user = $model->create(
            array_merge(
                $request->all(),
                ['password' => Hash::make(strval($request->input('password')))]
            )
        );

        $user->assignRole(strval($request->input('roles')));

        return redirect()
            ->route('users.index')
            ->with('success', 'User Created SUCCESSFULLY');
    }
}
