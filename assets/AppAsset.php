<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/base.css',
        'css/style.css',
        'css/site.css',
        'css/colors/green.css',
        'css/responsive.css'
    ];
    public $js = [
        'scripts/custom.js',
        'scripts/jquery.superfish.js',
        'scripts/jquery.themepunch.tools.min.js',
        'scripts/jquery.themepunch.revolution.min.js',
        'scripts/jquery.themepunch.showbizpro.min.js',
        'scripts/jquery.flexslider-min.js',
        'scripts/chosen.jquery.min.js',
        'scripts/jquery.magnific-popup.min.js',
        'scripts/waypoints.min.js',
        'scripts/jquery.counterup.min.js',
        'scripts/jquery.jpanelmenu.js',
        'scripts/stacktable.js',
        'scripts/slick.min.js',
        'scripts/headroom.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
