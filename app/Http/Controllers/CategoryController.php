<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category() {
        return view("category");
    }

    public function tambah_category() {
        return view("tambah_category");
    }

    public function edit_category() {
        return view("edit_category");
    }
}
