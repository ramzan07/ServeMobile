<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'orders';
    protected $fillable = ['total_amount', 'transaction_id', 'user_id'];

}
