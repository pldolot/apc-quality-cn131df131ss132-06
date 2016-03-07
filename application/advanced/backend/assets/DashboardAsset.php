<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.min.css',
        'css/_all-skins.min.css',
        'css/AdminLTE.min.css',
        'css/blue.css',
        'css/bootstrap3-wysihtml5.min.css',
        'css/datepicker3.css',
        'css/daterangepicker-bs3.css',
        'css/jquery-jvectormap-1.2.2.css',
        'css/morris.css',

        '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css',
        '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',

    ];
    public $js = [
        '//code.jquery.com/ui/1.11.4/jquery-ui.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
        '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js',

        'js/app.min.js',
        'js/bootstrap-datepicker.js',
        'js/bootstrap.min.js',
        'js/bootstrat3-wysihtml5.all.min.js',
        'js/dashboard.js',
        'js/daterangepicker.js',
        'js/demo.js',
        'js/fastclick.min.js',
        'js/jquery-2.1.4.min.js',
        'js/jquery-jvectormap-world-mill-en.js',
        'js/jquery-jvectormap-1.2.2.min.js',
        'js/jquery.knob.js',
        'js/jquery.slimscroll.min.js',
        'js/jquery.sparkline.min.js',
        'js/morris.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
