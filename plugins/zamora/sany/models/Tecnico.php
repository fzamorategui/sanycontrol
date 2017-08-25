<?php namespace Zamora\Sany\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Tecnico Model
 */
class Tecnico extends Model
{
    use Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'zamora_sany_tecnicos';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $rules = [
        'nombre' => 'required',
        'a_paterno' => 'required',
        'direccion' => 'required'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getAllNameAttribute($value)
    {
        return $this->nombre . " " . $this->a_paterno . " " . $this->a_materno;
    }
}
