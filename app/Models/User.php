<?php

namespace App\Models;

use App\Services\CompanyServices\CompanyService;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'id';
    protected $table = 'sys_users';

    public $incrementing = false;
    public $keyType = 'string';

    protected $loginPath = '/login'; // <--- note this

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    public function isAdmin() // แอดมิน
    {
        return $this->user_level == "1" ? true : false;
    }
    public function isUser() // ผู้ใช้งานทั่วไป
    {
        return $this->user_level == "3" ? true : false;
    }
    public function fetchCompanyById()
    {
        return CompanyService::fetchById($this->company_id);
    }
    public function fetchProfileById()
    {
        // return PersonalService::findOneBySmeId($this->id);
    }
}
