<?php namespace Zamora\Sany\Models;

use Model;

/**
 * CP Model
 */
class CP extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'zamora_sany_cp';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['id'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

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
}
