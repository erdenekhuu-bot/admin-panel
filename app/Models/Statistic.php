<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    use HasFactory;
    protected $table='statistics';
    protected $fillable=['Жил','Нийт_айл_өрх','Хэмнэсэн_цахилгаан','Бууруулсан_нүүрс_хүчлийн_хий'];
}
