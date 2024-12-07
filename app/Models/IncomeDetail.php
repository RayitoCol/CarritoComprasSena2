<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'income_id', 
        'article_id', 
        'quantity', 
        'price'
    ];

    // Relación con la tabla incomes
    public function income()
    {
        return $this->belongsTo(Income::class);
    }

    // Relación con la tabla articles
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
