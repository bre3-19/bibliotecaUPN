<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthAdminRequest;
use App\Models\Order;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index() {
        $bookTotal = 0;
        $bookTesis = 0;
        $bookBooks = 0;
        $bookTales = 0;
        $loanToday = Order::whereDay('created_at', Carbon::today())->get();
        $loanTotal = 0;
        return view ('admin.index')->with([
            'bookTotal' => $bookTotal,
            'bookTesis' => $bookTesis,
            'bookBooks' => $bookBooks,
            'bookTales' => $bookTales,
            'loanToday' => $loanToday,
            'loanTotal' => $loanTotal,
        ]);
    }

    public function login() {
        if(!auth()->guard('admin')->check()) {
            return view('admin.login');
        }
        return redirect()->route('admin.index');
    }

    public function auth(AuthAdminRequest $request) {
        if($request->validated()) {
            if(auth()->guard('admin')->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])) {
                $request->session()->regenerate();
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('admin.login')->with([
                    'error' => 'Las credenciales no coinciden con nuestros registros.'
                ]);
            }
        }
    }
}
