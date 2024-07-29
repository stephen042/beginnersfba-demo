<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin(Request $request, User $users, withdrawal $withdrawal)
    {
        if ($request->method() == "GET") {

            $users_data = $users->where("role", 1)->get();

            $total_users = $users->where("role", 1)->count();

            $total_balance = $users->where("role", 1)->sum("account_bal");

            $total_withdrawal = $withdrawal
            ->where("status", 2)
            ->sum("amount");

            return view('admin.index', [
                "title" => "Admin Dashboard",
                "admin_data" => Auth::user(),
                "total_users" => $total_users,
                "total_balance" => $total_balance,
                "total_withdrawal" => $total_withdrawal,
                "users" => $users_data,
            ]);
        }
    }

    public function editUser(Request $request, User $user)
    {
        if ($request->method() == 'GET') {
            
            return view('admin.editUser',[
                "user" => $user,
            ]);
        }
    }
}
