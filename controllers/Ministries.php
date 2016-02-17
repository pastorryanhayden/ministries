<?php namespace Sitesforchurch\Ministries\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Radiantweb\Proevents\Models\Calendar;
use Sitesforchurch\Ministries\Models\Ministry;

/**
 * Ministries Back-end Controller
 */
class Ministries extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Sitesforchurch.Ministries', 'ministries', 'ministries');
    }

    /**
     * Called after the creation or updating form is saved.
     * @param Model
     */
    public function formAfterSave($model)
    {
        if ($model->calendar) {
            $calendar = Calendar::find($model->calendar->id);
            $calendar->name = $model->name;
            $calendar->slug = $model->slug;
            $calendar->save();
        } else {
            $calendar = new Calendar([
                'name' => $model->name,
                'slug' => $model->slug,
            ]);
            $model->calendar()->save($calendar);
        }
    }
}