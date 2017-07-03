<?php namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;
use yii\web\View;
class ButtonWidget extends Widget
{
    public $message;
    public $button;
    public function init()
    {
        parent::init();
        if ($this->message === null) {
        	
        	$this->registerJs(
			    "$('#myButton').on('click', function() { alert('Button clicked!'); });",
			    View::POS_READY,
			    'my-button-handler'
			);

            $this->message = 'Hello World';
        }
    }

    public function run()
    {
        return Html::encode($this->message);
    }
}
?>
