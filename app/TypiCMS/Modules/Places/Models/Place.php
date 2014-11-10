<?php
namespace TypiCMS\Modules\Places\Models;

use Dimsav\Translatable\Translatable;
use TypiCMS\Models\Base;
use TypiCMS\Presenters\PresentableTrait;
use TypiCMS\Traits\Historable;

class Place extends Base
{

    use Historable;
    use Translatable;
    use PresentableTrait;

    protected $presenter = 'TypiCMS\Modules\Places\Presenters\ModulePresenter';

    protected $fillable = array(
        'address',
        'email',
        'phone',
        'fax',
        'website',
        'image',
        'latitude',
        'longitude',
        // Translatable fields
        'title',
        'slug',
        'body',
        'status',
    );

    /**
     * Translatable model configs.
     *
     * @var array
     */
    public $translatedAttributes = array(
        'title',
        'slug',
        'body',
        'status',
    );

    /**
     * List of fields that are file.
     *
     * @var array
     */
    public $attachments = array(
        'image',
    );

    /**
     * The default route for admin side.
     *
     * @var string
     */
    public $route = 'places';
}
