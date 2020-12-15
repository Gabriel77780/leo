<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Services\UserService;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    protected $userService;

    function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function permissions(Request $request)
    {
        return response()->json($this->userService->getUserPermissions());
    }
}
