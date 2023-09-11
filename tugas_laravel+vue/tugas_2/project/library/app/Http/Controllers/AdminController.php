<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Models\Catalog;

class AdminController extends Controller
{
    public function test_spatie(){
        // $role = Role::create(['name' => 'petugas']);
        // $permission = Permission::create(['name' => 'index peminjaman']);

        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);

// melihat user siapa yg sedang login saat ini
        // $user = auth()->user();
        // return $user;
// agar user yg login memiliki role 
// cara 1       
        // $user = auth()->user();
        // $user->assignRole('petugas');
        // return $user;
// cara 2
        // $user = User::where('id', 2)->first();
        // $user->assignRole('petugas');
        // return $user;
// menghapus role
// cara 1
        // $user = auth()->user();
        // $user->removeRole('petugas');
// cara 2
        // $user = User::where('id', 2)->first();
        // $user->removeRole('petugas');
// melihat data user beserta rolesnya
        // $user = User::with('roles')->get();
        // return $user;
    }

    public function katalog()
    {
        // memanggil permission
        // if(auth()->user()->can('index peminjaman')){

        //memanggil role
        if(auth()->user()->role('petugas')){    

            $catalogs=Catalog::with('books')->get();
            // return $catalogs;
            return view('admin.catalog.index', compact('catalogs'));
        }else{
            return abort('403');
        }


       
    }

}
