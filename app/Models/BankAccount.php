<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Banks;

class BankAccount extends Model
{
    use HasFactory;

    public $table = 'bank_account';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'id';

    public $fillable = [
        'firstName',
        'lastName',
        'email',
        'phone',
        'gender',
        'dateOfBirth',
        'address',
        'city',
        'state',
        'opening_balance',
        'bank_id',
    ];

    public function bank()
    {
        return $this->belongsTo(Banks::class, 'bank_id', 'id');
    }
}
