<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    use fillable;


    protected $fillable = ['type', 'amount', 'description'];

    const TYPE_INCOME = 'income';
    const TYPE_EXPENSE = 'expense';

    public function scopeIncome($query){
        return $query->where('type', );
    }
}
