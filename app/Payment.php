<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'payment_id', 'payer_id', 'payer_email', 'amount', 'currency', 'payment_status',
    ];


        // Table Name
        protected $table = 'payments';
        // Primary Key
        public $primaryKey = 'payment_id';
        // Timestamps
        public $timestamps = true;
}
