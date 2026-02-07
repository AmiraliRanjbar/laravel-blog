<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    //اگه اسم جدول اشتباه وارد بشه از این دستور استفاده میشه
//    protected $table = 'articles';

//    protected $primaryKey = 'article_id';

    protected $fillable = [ //اینا رو میتونه وارد کنه
        'image',
        'title',
        'body'
    ];

//    protected $guarded = [ //اینارو نمیتونه وارد کنه
//        'id'
//    ];


}
