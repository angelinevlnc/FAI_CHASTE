<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class D_Menu extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = "d_menu";
    protected $primaryKey = "d_menu_id";
    public $incrementing = true;
    public $timestamps = false;

    public function dimiliki_h_menu(){
        return $this->belongsTo('App\Models\H_Menu', 'h_menu_id', 'h_menu_id');
    }

    public function dimiliki_menu(){
        return $this->belongsTo('App\Models\Menu', 'menu_id', 'menu_id');
    }
}
