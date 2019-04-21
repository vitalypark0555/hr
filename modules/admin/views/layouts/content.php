<?php
use yii\widgets\Breadcrumbs;
?>
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->

    <div class="page-content">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            'homeLink' => [
                'label' => 'Home',  // required
                'url' => '/admin/default/index',      // optional, will be processed by Url::to()
            ]
        ]) ?>

        <?= $content ?>

    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->