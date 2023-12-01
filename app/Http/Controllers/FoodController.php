<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Tenant;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    //
    public function getLanding(){
        $listTenant = Tenant::all();
        
        return view('landing', ['listTenant' => $listTenant]);
    }

    public function getFood(){
        $listTenant = Tenant::all();
        $listMenu = Menu::all();
        
        return view('food', ['listTenant' => $listTenant, 'listMenu' => $listMenu]);
    }
}
