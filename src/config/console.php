<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */
return [

    'controllerMap' => [
        'migrate' => [
            'migrationPath' => [
                '@skeeks/cms/logDbTarget/migrations',
            ],
        ],
    ],

    'modules' => [
        'logDbTarget' => [
            'controllerNamespace' => 'skeeks\cms\logDbTarget\console\controllers',
        ],
    ],
];