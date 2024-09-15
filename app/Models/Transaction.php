<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function holidayPackage()
    {
        return $this->belongsTo(HolidayPackage::class, 'package_id');
    }
    
    protected $fillable = [
        'user_id',
        'package_id',
        'transaction_date',
        'payment_status',
        'payment_method',
        'payment_date',
    ];
}
