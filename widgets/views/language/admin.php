<?php

use yii\helpers\Html;

?>
<ul class="dropdown-menu dropdown-menu-default">
    <?php foreach ($languages as $lang): ?>
        <li class="<?= Yii::$app->language == $lang['label'] ? 'hide' : '' ?>">
            <?= Html::a(strtoupper($lang['label']), $lang['url']) ?>
        </li>
    <?php endforeach; ?>
</ul>
