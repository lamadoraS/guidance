<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    protected $table = 'offerings';
    protected $primaryKey = 'id';
    protected $fillable = [
    'offering_name',
    'specialty_offered',
    'duration'];
    use HasFactory;
}
