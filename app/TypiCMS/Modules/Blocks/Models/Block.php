<?php
namespace TypiCMS\Modules\Blocks\Models;

use Dimsav\Translatable\Translatable;
use TypiCMS\Models\Base;
use TypiCMS\Presenters\PresentableTrait;

class Block extends Base
{

    use PresentableTrait;
    use Translatable;

    protected $presenter = 'TypiCMS\Modules\Blocks\Presenters\BlockPresenter';

    protected $fillable = array(
        'name',
        // Translatable fields
        'status',
        'body',
    );

    /**
     * Translatable model configs.
     *
     * @var array
     */
    public $translatedAttributes = array(
        'status',
        'body',
    );

    protected $appends = ['status', 'body'];

    /**
     * The default route for admin side.
     *
     * @var string
     */
    public $route = 'blocks';

    /**
     * Get Body attribute from translation table
     * and append it to main model attributes
     * @return string
     */
    public function getBodyAttribute()
    {
        return $this->body;
    }
}