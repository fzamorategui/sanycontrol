<?php namespace Zamora\Sany\Models;

use Model;
use October\Rain\Database\Traits\Validation;
use Vdomah\Excel\Classes\Excel;

/**
 * Sepomex Model
 */
class Sepomex extends Model
{
    use Validation;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'zamora_sany_sepomexes';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    public $rules = [
        'base' => 'required'
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
    public $attachOne = [
        'base' => ['System\Models\File']
    ];
    public $attachMany = [];

    public function afterSave()
    {
        $this->commitDeferred($this->sessionKey);
        Excel::excel()->load($this->base->getLocalPath(), function ($reader) {
            $reader->each(function($sheet){
                $sheet->each(function ($row){
                    if(!$row->c_codigo){
                        CP::create($row->toArray());
                    }
                });
            });
        });
    }
}
