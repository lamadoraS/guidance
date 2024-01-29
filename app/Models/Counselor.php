<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    protected $table = 'counselors';
    protected $primaryKey = 'id';
    protected $fillable = [
    'last_name',
    'first_name',  
    'email_address',
    'specialization',
    'office_location'];
    use HasFactory;


}
