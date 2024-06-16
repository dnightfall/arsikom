<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleModel extends Model
{
    use HasFactory;

    protected $table = 'tbl_article';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $guarded = ['id'];
}
