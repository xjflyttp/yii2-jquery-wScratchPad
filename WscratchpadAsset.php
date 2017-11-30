<?php

namespace xj\wscratchpad;

use yii\web\AssetBundle;

/**
 * @author xjflyttp <xjflyttp@gmail.com>
 */
class WscratchpadAsset extends AssetBundle
{

    public $sourcePath = '@bower/wscratchpad/src';
    public $js = ['wScratchPad.js'];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
