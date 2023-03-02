<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $table = 'invoices';

    public function getTotalAttribute()
    {
        $total = $this->price * (1 + $this->tva / 100);
        return number_format($total, 2, '.', '');
    }

}