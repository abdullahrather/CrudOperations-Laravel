<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Group extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "group";
    protected $primaryKey = "grp_id";

    public function setNameAttribute($value)
    {
        $this->attributes['grp_name	'] = ucwords(strtolower($value));
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'grp_id');
    }
}
