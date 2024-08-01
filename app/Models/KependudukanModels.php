<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kependudukanModels extends Model
{
    use HasFactory;
    protected $table = 'kependudukan';
    protected $primaryKey = 'nik';
}
