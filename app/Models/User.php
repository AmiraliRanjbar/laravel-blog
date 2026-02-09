<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\UserStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Bootstrap\BootProviders;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Builder;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status'
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
        'password' => 'hashed',
    ];



//    public function  scopeUserStatus($query, $status)
//    {
//        return $query->where('status', $status);
//    }

//    protected static function boot()
//    {
//        parent::boot();
//        static::addGlobalScope('status' , function (Builder $builder) {
//            $builder->where('status', UserStatus::Active->value)
//                ->where('email_verified_at', '!=' , null);
//        });
//    }


//Accessor
    public function getStatusAttribute($value)
    {
        switch ($value) {
            case UserStatus::Active->value: return'فعال';
            break;
            case UserStatus::Active->value: return'غیرفعال';
                break;
            case UserStatus::Active->value: return'بن شده';
                break;

            default:
               return "هیچکدام";
        }
    }
}


