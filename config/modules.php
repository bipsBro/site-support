<?php

return [
	'admin' => [
        'class' => 'app\modules\admin\Module',
        'layout' => 'admin'
    ],
    'rbac' => [
    	'class' => 'dektrium\rbac\RbacWebModule'
    ],
    'user' => [
        'class' => 'dektrium\user\Module',
        'enableRegistration' => true,
        'enableConfirmation' => false, //true
        'enablePasswordRecovery' => true,
        'enableAccountDelete' => false,
        'enableUnconfirmedLogin' => false,
		// STRATEGY_DEFAULT :-  This is default strategy. Confirmation message will be sent 
		// 						to new user's email and user must click confirmation link.
	    // STRATEGY_INSECURE:- 	Email will be changed without any confirmation.
	    // STRATEGY_SECURE :-  	Confirmation messages will be sent to both new and 
	    // 						old user's email addresses and user must click both confirmation links.
        'emailChangeStrategy' => \dektrium\user\Module::STRATEGY_DEFAULT,
        'confirmWithin' => 86400,
        'rememberFor' => 1209600,
        'recoverWithin' => 21600,
        'admins' => ['admin'],
        'adminPermission' => null, // special admin pages
        'cost' => 12,
        'modelMap' => [
           
        ],
        'controllerMap' => [

        ]

    ],
];