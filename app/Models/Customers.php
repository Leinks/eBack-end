<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $email
 * @property string $billing_address
 * @property string $rif_n
 * @property string $phone_code
 * @property integer $phone
 * @property string $country
 * @property string $address
 * @property string $create_at
 * @property string $update_at
 * @property Company[] $companys
 * @property User $user
 */
class Customers extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'email', 'billing_address', 'rif_n', 'phone_code', 'phone', 'country', 'address', 'create_at', 'update_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companys()
    {
        return $this->hasMany('App\Models\Company');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
