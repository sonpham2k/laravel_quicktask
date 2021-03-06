<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $fillable = [
        'name', 
        'address', 
        'department_id',
    ];
    //Phương thức liên kết quan hệ 1-n
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
