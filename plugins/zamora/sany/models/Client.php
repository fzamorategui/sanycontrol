<?php namespace Zamora\Sany\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Client Model
 */
class Client extends Model
{
    use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zamora_sany_clients';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    protected $jsonable = ['telefonos'];

    public $rules = [
        'nombre' => 'required',
        'rfc' => 'required|min:9'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'locations' => ['Zamora\Sany\Models\Location', 'table' => 'zamora_sany_clients_locations']
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
