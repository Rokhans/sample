<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * 用户管理
 */
class UsersController extends Controller
{
    /**
     * 用户注册
     * @return [type] [description]
     */
    public function create()
    {
        return view('users.create');
    }
}
