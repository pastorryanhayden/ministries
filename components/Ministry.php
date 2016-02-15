<?php namespace Sitesforchurch\Ministries\Components;

use Cms\Classes\ComponentBase;
use Sitesforchurch\Ministries\Models\Ministry as MinistryModel;

class Ministry extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Ministry Component',
            'description' => 'Displays a single Ministry'
        ];
    }

    public function defineProperties()
    {
        return [
            'ministry_slug' => [
                 'title'             => 'Ministry slug',
                 'default'     => '{{ :slug }}',
                 'type'              => 'string',
                 'validationPattern' => '^[0-9]+$',
                 'validationMessage' => 'The Ministry id property can contain only numeric symbols'
            ]
        ];
    }
    
    public function onRun()
    {
        $ministry_slug = $this->property('ministry_slug');
        $this->page['ministry'] = $ministry = MinistryModel::where('slug', $ministry_slug)->first();
    }

}