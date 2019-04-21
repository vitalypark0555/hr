<?php

use yii\helpers\Html;

?>
<ul class="language-chooser">
    <?php foreach ($languages as $lang): ?>
        <li class="language-chooser-item <?= Yii::$app->language == $lang['label'] ? 'active' : '' ?>">
            <?= Html::a($lang['label'], $lang['url']) ?>
        </li>
    <?php endforeach; ?>
</ul>
