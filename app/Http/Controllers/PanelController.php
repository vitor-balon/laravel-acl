<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\Permission;
use App\Notice;

class PanelController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalRoles = Role::count();
        $totalNotice = Notice::count();
        $totalPermission = Permission::count();

        return view('home', compact('totalUsers', 'totalRoles', 'totalNotice', 'totalPermission'));
    }
}
