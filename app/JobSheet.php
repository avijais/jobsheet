<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class JobSheet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['model_no', 'mobile_brand', 'imei_1', 'imei_2', 'fault', 'target_delivery', 'name', 'mobile_no', 'alternate_mobile_no', 'email', 'address', 'district', 'state', 'pincode', 'battery', 'battery_cover', 'headset', 'mmc', 'sim'];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'int',
    ];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
