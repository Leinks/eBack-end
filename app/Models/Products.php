<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $sku
 * @property string $name
 * @property integer $price
 * @property integer $weight
 * @property string $description
 * @property string $thumbnail
 * @property string $image
 * @property string $category
 * @property string $stock
 * @property string $create_at
 * @property string $update_at
 * @property OrdersDetail[] $ordersDetails
 * @property ProductOption[] $productOptions
 */
class Products extends Model
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
    protected $fillable = ['sku', 'name', 'price', 'weight', 'description', 'thumbnail', 'image', 'category', 'stock', 'create_at', 'update_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordersDetails()
    {
        return $this->hasMany('App\Models\OrdersDetail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productOptions()
    {
        return $this->hasMany('App\Models\ProductOption');
    }
}
