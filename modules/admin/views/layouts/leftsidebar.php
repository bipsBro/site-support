<?php 

$image = '';

use yii\helpers\Url;
?>
<div class="sidebar" data-color="purple" data-image="img/sidebar-1.jpg">
    <div class="logo">
        <a href="/" class="simple-text">
            Ad
        </a>
    </div>
    <div class="sidebar-wrapper">
        <?= \app\widgets\Menu::widget(
                [
                    'options' => ['class' => 'nav'],
                    'items' => [
                        [
                            'url' => 'admin/default/index',
                            'label' => yii::t( 'app', 'Home'),
                            'icon' => 'dashboard'
                        ],
                        [
                            'label' => yii::t( 'app', 'Drop Down'),
                            'icon' => 'edit',
                            'url' => 'a',
                            'items' => [
                                [
                                    'label' =>  'Manage Event',
                                    'icon' => 'plus',
                                    'url' => '/admin',
                                    'terget' => 'a',
                                ]
                            ]
                        ]
                    ]
                ]
            )
        ?>
    </div>
</div>