<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Detalle
 * @package App\Models
 * @version October 21, 2021, 2:21 am UTC
 *
 * @property string $id_detallecita
 * @property string $idcita
 */
class Detalle extends Model
{
    //
     //use SoftDeletes;

     public $table = 'citas_detalle';
     protected $primaryKey= 'id_detallecita';
     public $timestamps =false;
 
     
     const CREATED_AT = 'created_at';
     const UPDATED_AT = 'updated_at';
 
 
     protected $dates = ['deleted_at'];
 
 
 
     public $fillable = [
         'id_detallecita',
         'id_cita'
     ];
 
     /**
      * The attributes that should be casted to native types.
      *
      * @var array
      */
     protected $casts = [
         'id_detallecita' => 'string',
         'idcita' => 'string'
     ];
 
     /**
      * Validation rules
      *
      * @var array
      */
     public static $rules = [
         'id_detallecita' => 'nullable|string|max:45',
         'id_cita' => 'nullable|string|max:45'
     ];
}
