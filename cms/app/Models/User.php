<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'birthday',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // Itemsテーブルとのリレーション （主テーブル側）
     public function items() {
        return $this->hasMany('App\Models\Item');
    }
    
    
     // Itemsテーブルとの多対多リレーション（中間テーブル：item_user用）
     //一人のユーザーは、複数の商品に「いいね」できる
     public function nice_items() {
        return $this->belongsToMany('App\Models\Item');
    }
    
    // 気になるユニットテーブルとのリレーション （主テーブル側）
    //一人のユーザーは、複数の気になる商品を持つ
     public function units() {
        return $this->hasMany('App\Models\Unite');
    }
    
     // Unitesテーブルとのリレーション （主テーブル側）
    //一人のユーザーは、複数Uniteに属する
    public function unites() {
        return $this->hasMany('App\Models\Unite');
    }



}


