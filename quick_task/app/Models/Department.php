<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Department extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'id';
    protected $guarded = [];

    protected $fillable = [
        'name',
    ];
    //Phương thức liên kết quan hệ 1-n
    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }
}
