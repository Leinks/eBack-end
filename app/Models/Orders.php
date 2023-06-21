<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $consumer_id
 * @property integer $ammount
 * @property string $shipping_address
 * @property string $order_address
 * @property string $order_email
 * @property string $order_date
 * @property integer $order_status
 * @property string $create_at
 * @property string $update_at
 * @property OrdersDetail[] $ordersDetails
 * @property Consumer $consumer
 */
class Orders extends Model
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
    protected $fillable = ['consumer_id', 'ammount', 'shipping_address', 'order_address', 'order_email', 'order_date', 'order_status', 'create_at', 'update_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordersDetails()
    {
        return $this->hasMany('App\Models\OrdersDetail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consumer()
    {
        return $this->belongsTo('App\Models\Consumer');
    }
}
