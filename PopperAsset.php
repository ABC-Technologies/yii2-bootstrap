<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\bootstrap;

use yii\web\AssetBundle;

/**
 * Asset bundle for Tether javascript files.
 *
 * @author Alan Willms <alanwillms@gmail.com>
 * @since 2.0
 */
class PopperAsset extends AssetBundle
{
    public $js = [
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js',
    ];
}
