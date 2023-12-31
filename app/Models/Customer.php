<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Customer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "customers";
    protected $primaryKey = "id";
    protected $fillable = ['name', 'email', 'gender', 'address', 'DOB', 'password', 'status', 'points', 'grp_id'];


    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords(strtolower($value));
    }


    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    public function getDOBAttribute($value)
    {
        return date("l, F d, Y", strtotime($value));
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'grp_id');
    }
}
