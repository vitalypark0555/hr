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
class AdminAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web/admin/assets';
    public $css = [
        'global/plugins/font-awesome/css/font-awesome.min.css',
        'global/plugins/simple-line-icons/simple-line-icons.min.css',
        'global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'global/plugins/morris/morris.css',
        'global/css/components-rounded.min.css',
        'global/plugins/bootstrap-select/css/bootstrap-select.min.css',
        'global/plugins/jquery-multi-select/css/multi-select.css',
        'global/plugins/select2/css/select2.min.css',
        'global/plugins/select2/css/select2-bootstrap.min.css',
        'global/plugins/datatables/datatables.min.css',
        'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',
        'global/css/plugins.min.css',
        'layouts/layout/css/layout.min.css',
        'layouts/layout/css/themes/darkblue.min.css',
        'layouts/layout/css/custom.min.css',
        'pages/css/profile.min.css',
        'pages/css/login.min.css',
        'apps/css/style.css',
        'global/css/style.css',

    ];
    public $js = [
        'global/plugins/respond.min.js',
        'global/plugins/excanvas.min.js',
        'global/plugins/js.cookie.min.js',
        'global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'global/plugins/jquery.blockui.min.js',
        'global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'global/plugins/moment.min.js',
        'global/plugins/morris/morris.min.js',
        'global/plugins/morris/raphael-min.js',
        'global/plugins/jquery.sparkline.min.js',
        'global/plugins/bootstrap-select/js/bootstrap-select.min.js',
        'global/plugins/jquery-multi-select/js/jquery.multi-select.js',
        'global/plugins/select2/js/select2.full.min.js',
        'pages/scripts/components-multi-select.min.js',
        'global/plugins/moment.min.js',
        'global/plugins/jquery-ui/jquery-ui.min.js',
        'global/scripts/app.min.js',
        'global/scripts/menu-active.js',
        'global/scripts/datatable.js',
        'global/plugins/datatables/datatables.min.js',
        'global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',
        'pages/scripts/table-datatables-managed.min.js',
        'global/plugins/jquery-validation/js/jquery.validate.min.js',
        'global/plugins/backstretch/jquery.backstretch.min.js',
        'global/plugins/jquery-validation/js/additional-methods.min.js',
        'layouts/layout/scripts/layout.min.js',
        'layouts/layout/scripts/demo.min.js',
        'layouts/global/scripts/quick-sidebar.min.js',
        'pages/scripts/profile.min.js',
        'pages/scripts/dashboard.min.js',
        'pages/scripts/login.min.js',
        'apps/scripts/calendar.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
