<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class H_Menu extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = "h_menu";
    protected $primaryKey = "h_menu_id";
    public $incrementing = true;
    public $timestamps = true;

    public function memiliki_d_menu(){
        return $this->hasMany('App\Models\D_Menu', 'h_menu_id', 'h_menu_id');
    }

    public function dimiliki_tenant(){
        return $this->belongsTo('App\Models\Tenant', 'tenant_id', 'tenant_id');
    }
    public function dimiliki_customer(){
        return $this->belongsTo('App\Models\User', 'customer_id', 'user_id');
    }
}
