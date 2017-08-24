<?php namespace Zamora\Sany\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Location Model
 */
class Location extends Model
{
    use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zamora_sany_locations';

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
        'calle' => 'required',
        'num_ext' => 'required',
        'cp' => 'required|digits:5',
        'colonia' => 'required'
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

    public function getColoniaOptions()
    {
        $colonias[''] = '-- Selecciona --';
        CP::where('d_codigo', $this->cp)->get()->each(function ($cp) use (&$colonias) {
            $colonias[$cp['d_asenta']] = $cp['d_asenta'];
        });

        return $colonias;
    }

    public function getDelegacionOptions()
    {
        $delegaciones = [];
        if ($this->colonia != '') {
            $row = CP::where('d_codigo', $this->cp)->first();
            $delegaciones[$row->D_mnpio] = $row->D_mnpio;
        }

        return $delegaciones;
    }

    public function filterFields($fields, $context = null)
    {
        if (! empty($this->cp)) {
            $row = CP::where('d_codigo', $this->cp)->first();
            $fields->delegacion->value = $row->D_mnpio;
            $fields->estado->value = $row->d_estado;
        }
    }

}
