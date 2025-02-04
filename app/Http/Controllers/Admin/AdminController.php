<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthAdminRequest;
use App\Models\Prestamo;
use App\Models\Libro;
use App\Models\Clasificacion;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index() {
        //Data
        $bookData = Libro::all();

        //Tesis
        $bookTesis = Libro::where('tipo', 'Tesis')->count();

        //Libros
        $bookBooks = Libro::where('tipo', 'Libro')->count();

        //Otros
        $bookTales = Libro::where('tipo', 'Otro')->count();

        //Prestamos de hoy
        $loanToday = Prestamo::whereDay('fecha_prestamo', Carbon::today())->get();

        //Prestamos sin devolver
        $loanTotal = Prestamo::whereDay('fecha_maximo', '<=', Carbon::today())->whereNull('fecha_entrega')->get();

        //Prestamos atrasados
        $loanDated = Prestamo::whereDay('fecha_maximo', '>', Carbon::today())->whereNull('fecha_entrega')->get();

        return view ('admin.index')->with([
            'bookData' => $bookData,
            'bookTesis' => $bookTesis,
            'bookBooks' => $bookBooks,
            'bookTales' => $bookTales,
            'loanToday' => $loanToday,
            'loanTotal' => $loanTotal,
            'loanDated' => $loanDated,
        ]);
    }

    public function login() {
        if(!auth()->guard('admin')->check()) {
            return view('admin.login');
        }
        return redirect()->route('admin.index');
    }

    public function logout() {
        auth()->guard('admin')->logout();
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
