<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        Log::info("User sedang merespon data produk dengan");
        return response()->json([
            "data" => User::all()
        ], 200);
    }

    public function total_user()
    {
        Log::info("User sedang melihat semua jumlah data user");
        return response()->json([
            "totalUser" => User::count()
        ], 200);
    }
}
