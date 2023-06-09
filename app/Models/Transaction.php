<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// attribute: transactionID (primary key), transactionDate, num_of_purchase, amount, payment_method, productID (foreign key)
class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    public $fillable = ['date', 'purchase_num', 'amount', 'payment_method'];
}
