<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Boat List</h1>
<ul>
    <?php  foreach ($result as $boat): ?>
        <li>
            <?= Html::encode("{$boat->boat_id} ({$boat->name})")?>
            <?= $boat->maxseat ?>
            //name type maxseat
        </li>
    <?php endforeach; ?>
<ul>
<?= LinkPager::widget(['pagination' => $pagination]) ?>
