<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    
    use SoftDeletes;
    
    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateBylimit(int $limit_count = 5)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    public $fillable = [
        'title',
        'body',
    ];
}