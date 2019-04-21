<?php
/**
 * Created by PhpStorm.
 * User: Vitaly
 * Date: 13.10.2018
 * Time: 11:37
 */

namespace app\widgets;


use Yii;
use yii\bootstrap\Widget;

class LanguageWidget extends Widget
{

    private $languages;
    public $template = 'view';
    public function init()
    {
        $route = Yii::$app->controller->route;
        $params = $_GET;

        array_unshift($params, '/' . $route);

        foreach (Yii::$app->urlManager->languages as $language) {

            $params['language'] = $language;
            $this->languages[] = [
                'label' => $language,
                'url' => $params,
            ];
        }
        parent::init();
    }

    public function run()
    {
        return $this->render('language/'.$this->template, [
            'languages' => $this->languages,
        ]);
    }


}