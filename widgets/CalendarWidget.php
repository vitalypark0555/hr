<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 03.10.2018
 * Time: 20:36
 */

namespace app\widgets;


use yii\base\Widget;

class CalendarWidget extends Widget
{
    public function run()
    {
        return $this->render('calendar/calendar');
    }
}