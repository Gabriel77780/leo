<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function permissions(Request $request)
    {
        return response()->json(Permission::all());
    }
}
