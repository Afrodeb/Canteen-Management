<?php

/* @var $this yii\web\View */
use app\models\Orders;
use app\models\Credit;
$credits=Credit::find()->where(["student_id"=>Yii::$app->user->identity->id])->count();
$orders=Orders::find()->where(["student_id"=>Yii::$app->user->identity->id])->count();
$this->title = 'Canteen Manager';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Canteen Manager!</h1>

        <p class="lead">View Your Order History and Make New Orders.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
                <h2><?= $credits; ?></h2>

                <p>Available credits</p>
            </div>
            <div class="col-lg-6">
                <h2><?= $orders; ?></h2>
                <p>Orders Done.</p>
            </div>
           
        </div>

    </div>
</div>
