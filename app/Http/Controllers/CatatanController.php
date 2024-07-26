<?php

namespace App\Http\Controllers;

use App\Models\CatatanPerjalanan;

use Illuminate\View\View;
class CatatanController extends Controller
{
    /**
     *index
     *
     * @return void
     */
    public function index()
    {
        $title = 'Catatan';
        return view('Catatanperjalanan.index', compact('title'));
    }
    public function create(){
        return view('Catatanperjalanan.create');
    }
}