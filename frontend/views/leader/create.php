<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Leader */

$this->title = 'Добавить руководителя';
$this->params['breadcrumbs'][] = ['label' => 'Руководители', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="leader-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
