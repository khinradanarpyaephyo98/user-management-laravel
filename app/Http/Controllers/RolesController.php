<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use App\Models\Features;
use Illuminate\Support\Facades\Session;


class RolesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $itemsPerPage = 5;
        $currentPage = $request->query('page',1);
        $currentPage = max(1, $currentPage); 

        // Count total roles
        $totalItems = Roles::count();
        $totalPages = ceil($totalItems/ $itemsPerPage);

        // Recheck current page is within bounds
        $currentPage = min($currentPage, $totalPages > 0 ? $totalPages : 1);

        $offset = ($currentPage - 1) * $itemsPerPage;

        $roles = Roles::select('name')
            ->limit($itemsPerPage)
            ->offset($offset)
            ->pluck('name')
            ->toArray();

        return view('roles.roles-list',[
            'roles' =>  $roles,
            'currentPage'=>  $currentPage,
            'totalPages' =>  $totalPages,
        ]);
    }

    public function create(Request $request){
        $request->validate([
            'role_name'=> 'required|string|max:255',
            'permissions'=> 'array',
        ]);

        $role = Roles::create(['name'=>$request->role_name]);

        if($request->has('permissions')){
            $permissions = [];
            foreach($request->permissions as $permissionId => $value){
                if($value == 1){
                    $permissions[]= $permissionId;
                }
            }
            $role->permissions()->attach($permissions);
        }
        Session::flash('role_create_success', "Role created successfully!");
        return redirect('/roles');
    }

    public function fetch()
    {
        $features = Features::with('permissions')->get();
        return view('roles.CreateRole', ['features' => $features]);
    }

}
