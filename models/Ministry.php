<?php namespace Sitesforchurch\Ministries\Models;

use Model;
use Radiantweb\Proevents\Models\Calendar;


/**
 * ministry Model
 */
class Ministry extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'sitesforchurch_ministries_ministries';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [

    ];
    public $hasMany = [];
    public $belongsTo = [
        'calendar' => 'Radiantweb\Proevents\Models\Calendar'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'leaderPicture' => 'System\Models\File'
    ];
    public $attachMany = [];

    public function calendar()
    {
        return $this->hasOne('Radiantweb\Proevents\Models\Calendar');
    }

}