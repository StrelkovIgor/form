<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 */
class bid extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */


    protected $table = 'bid';

    /**
     * @var array
     */
    protected $fillable = ['email', 'description', 'created_at', 'updated_at'];
    
    
}
