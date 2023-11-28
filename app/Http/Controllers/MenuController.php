<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function insertmenu(){
        $attributes = request()->validate([
            'name' => 'required|max:255|min:2',
            'price' => 'required',
            'kategori' => 'required|max:255',
            'terms' => 'required',
            'description' => 'required',
        ]);
        $menu = Menu::create($attributes);
    }
}
