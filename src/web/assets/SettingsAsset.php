<?php
/**
 * EnupalStripe plugin for Craft CMS 3.x
 *
 * @link      https://enupal.com/
 * @copyright Copyright (c) 2018 Enupal
 */

namespace enupal\stripe\web\assets;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class SettingsAsset extends AssetBundle
{
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = '@enupal/stripe/resources/';

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/enupalstripesettings.js'
        ];

        parent::init();
    }
}