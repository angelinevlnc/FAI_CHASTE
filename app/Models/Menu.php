<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $table = "menu";
    protected $primaryKey = "menu_id";
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'nama',
        'foto',
        'harga',
        'deskripsi',
        'kategori',
    ];

    public function dimiliki_user(){
        return $this->belongsTo('App\Models\User', 'user_id', 'user_id');
    }
    
    public function dimiliki_tenant(){
        return $this->belongsTo('App\Models\Tenant', 'tenant_id', 'tenant_id');
    }

    public function memiliki_d_menu(){
        return $this->hasMany('App\Models\D_Menu', 'menu_id', 'menu_id');
    }
}
