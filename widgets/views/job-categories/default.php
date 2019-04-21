<?php

use yii\helpers\Url;

?>
<div class="container">
    <div class="sixteen columns">
        <h3 class="margin-bottom-20 margin-top-10">Popular Categories</h3>

        <!-- Popular Categories -->
        <div class="categories-boxes-container">
            <?php foreach ($categories

                           as $cat): ?>
                <!-- Box -->
                <a href="<?= Url::to(['job/index', 'cat_id' => $cat->id]); ?>" class="category-small-box">
                    <i class="<?= $cat->icon ?>"></i>
                    <h4><?= $cat->name ?></h4>
                </a>
            <?php endforeach; ?>

        </div>

        <div class="clearfix"></div>
        <div class="margin-top-30"></div>

        <a href="<?= Url::to(['job/index']); ?>" class="button centered">Browse All Categories</a>
        <div class="margin-bottom-55"></div>
    </div>
</div>

