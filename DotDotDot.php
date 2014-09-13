<?php
/**
 * @link http://www.greyneuron.com/
 * @copyright Copyright (c) 2014 Grey Neuron
 */

namespace harrytang\dotdotdot;

use yii\base\Widget;
use yii\helpers\Json;
use yii\web\View;

class DotDotDot extends Widget
{

    public $selector = '.dot3';
    public $options = [];

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->registerPlugin();
        $this->registerJS();
    }

    /**
     * Registers plugin and the related events
     */
    protected function registerPlugin()
    {
        $view = $this->getView();
        Asset::register($view);
    }

    /**
     * Register JS
     */
    protected function registerJS()
    {
        //$options = CJavaScript::encode($this->options);
        $options = Json::encode($this->options);
        $script = '$("' . $this->selector . '").dotdotdot(' . $options . ');';
        $this->view->registerJs($script, View::POS_READY, __CLASS__ . $this->selector);
    }

} 