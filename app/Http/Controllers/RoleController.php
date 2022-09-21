<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Role::class, 'model');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $roles = Role::all();
        $flashMessage = session('success');

        return view('roles.index', compact('roles', 'flashMessage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Role $model)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $role = $model->updateOrCreate([
            'name' => $request->input('name'),
        ]);


        $role->givePermissionTo($request->input('permission'));

        return redirect()
            ->route('roles.index')
            ->with('success', 'Role Created SUCCESSFULLY');
    }
}
