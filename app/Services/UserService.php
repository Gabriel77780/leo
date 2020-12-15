<?php

namespace App\Services;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\UserRole;
use App\Repositories\Interfaces\Eloquent\UserRepository;
use Illuminate\Support\Facades\Auth;

class UserService
{

    protected $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function logIn($email, $password)
    {
        return Auth::attempt(['email' => $email, 'password' => $password]);
    }

    public function logOut()
    {
        Auth::logout();
    }

    public function save($email, $password, $roleCode)
    {

        $role = Role::where('description', $roleCode)->first();

        $userId = $this->userRepository->save($email, $password);

        $userRole = new UserRole();
        $userRole->role_id = $role->id;
        $userRole->user_id = $userId;
        $userRole->save();

        return $userId;
    }

    public function getUserPermissions()
    {
        $userRole = UserRole::where('user_id', Auth::id())->first();
        $rolePerssion = RolePermission::where('role_id', $userRole->role_id)->get()->pluck('permission_id')->toArray();

        return Permission::whereIn('id', $rolePerssion)->get();
    }
}
