<?php
namespace yii\easyii\modules\text;

class TextModule extends \yii\easyii\components\Module
{
    public static $installConfig = [
        'title' => [
            'en' => 'Text blocks',
            'ru' => 'Текстовые блоки',
            'zh' => '文本'
        ],
        'icon' => 'font',
        'order_num' => 20,
    ];
}