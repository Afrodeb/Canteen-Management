<?php
use app\models\Food;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
$food=Food::find()->all();
$listData=ArrayHelper::map($food,'id','name');
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <h4><i class="icon fa fa-check"></i>Error!</h4>
    <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>
    <?= $form->field($model, 'student_id')->hiddenInput(["value"=>Yii::$app->user->identity->id]) ?>

    <?= $form->field($model, 'count')->textInput() ?>
	<?php echo $form->field($model, 'food_id')->dropDownList(
        $listData,
        ['prompt'=>'Select Food Choice']
        );
?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
