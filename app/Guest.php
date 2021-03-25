<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'hotel_id', 'guest_firstname','guest_lastname', 'guest_tel_number', 'guest_add_str', 'guest_add_hno', 'guest_add_extra', 'guest_add_pin', 'guest_add_city', 'guest_visit_date', 'guest_visit_time', 'guest_total', 'table_number','is_privacy_accepted',
    ];

    // Table Name
    protected $table = 'guests';
    // Primary Key
    public $primaryKey = 'guest_id';
    // Timestamps
    public $timestamps = true;
    
}


