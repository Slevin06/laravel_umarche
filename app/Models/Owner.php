<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * 自作
 * 認証に使うためにUsersモデルを参考にextends Authenticatable
 *
 * Class Owner
 * @package App\Models
 * @method static select(string $string, string $string1, string $string2, string $string3)
 * @method static create(array $array)
 * @method static findOrFail(int $id)
 */
class Owner extends Authenticatable
{
    /**
     * 下記もUserモデルの内容ベース
     */

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
