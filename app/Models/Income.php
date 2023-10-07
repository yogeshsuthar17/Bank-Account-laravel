<?php

namespace App\Models;

use App\Models\BankAccount;
use App\Models\Banks;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    public $table = 'income';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'id';

    public $fillable = [
       'bank_id',
       'amount',
       'user_id'
    ];

    public function bank()
    {
        return $this->belongsTo(Banks::class, 'bank_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(BankAccount::class, 'user_id', 'id');
    }
}
