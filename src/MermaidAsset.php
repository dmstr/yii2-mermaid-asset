<?php

namespace dmstr\web;

/**
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2017 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use yii\web\AssetBundle;

class MermaidAsset extends AssetBundle
{
    public $sourcePath = '@bower/mermaid/dist/';
    public $js = [
        'mermaid.js'
    ];
    public $css = [

    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}