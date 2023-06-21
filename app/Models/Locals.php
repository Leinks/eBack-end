<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $company_id
 * @property string $local_name
 * @property string $name_location
 * @property string $phone_code
 * @property integer $phone
 * @property string $create_at
 * @property string $update_at
 */
class Locals extends Model
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
    protected $fillable = ['company_id', 'local_name', 'name_location', 'phone_code', 'phone', 'create_at', 'update_at'];
}
