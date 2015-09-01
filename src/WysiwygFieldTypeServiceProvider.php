<?php namespace Anomaly\WysiwygFieldType;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class WysiwygFieldTypeServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\WysiwygFieldType
 */
class WysiwygFieldTypeServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'streams/wysiwyg-field_type/upload' => 'Anomaly\WysiwygFieldType\Http\Controller\UploadController@handle'
    ];

}
