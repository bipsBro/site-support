<?php

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
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/bootstrap.min.css',
        'css/material-dashboard.css',
        'css/demo.css',
        'css/font-awesome.min.css',
        'http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css',
        'http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons',
    ];
    public $js = [
        //'js/jquery-3.2.1.min.js',
        'js/bootstrap.min.js',
        'js/material.min.js',
        'js/chartist.min.js',
        'js/arrive.min.js',
        'js/perfect-scrollbar.jquery.min.js',
        'js/bootstrap-notify.js',
        'js/material-dashboard.js',
        // 'js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
