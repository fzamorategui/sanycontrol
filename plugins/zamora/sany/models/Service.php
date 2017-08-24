<?php namespace Zamora\Sany\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Service Model
 */
class Service extends Model
{

    use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zamora_sany_services';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $jsonable = ['productos','plaga'];

    public $rules = [
        'client' => 'required',
        'location' => 'required',
        'fecha_inicio' => 'required|date',
        'fecha_termino' => 'required|date',
        'numero_servicio' => 'required|integer',
        'total_servicios' => 'required|integer',
        'proximo_servicio' => 'required|date',
        'areas' => 'required',
        'responsable' => 'required',
        'tecnico' => 'required'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'client' => ['Zamora\Sany\Models\Client'],
        'location' => ['Zamora\Sany\Models\Location']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getLocationOptions()
    {
        $locations[''] = '-- Selecciona --';
        if ($this->client) {
            $this->client->locations()->get()->each(function ($location) use (&$locations) {
                $locations[$location->id] = $location->nombre;
            });
        }

        return $locations;
    }
}
