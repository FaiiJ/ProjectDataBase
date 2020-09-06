<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class consoleController extends Controller
{
    public function index()
    {
        $product = DB::select("select * from product", []);
        return view('admin_console', ['products' => $product]);
    }
    public function destroy($id)
    {
        DB::delete('delete from product where id = ?', [$id]);
        return redirect('admin_console');
    }
}
     