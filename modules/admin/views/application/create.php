<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Application */

$this->title = 'Create Application';
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="application-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
