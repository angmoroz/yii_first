<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'first_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'last_name')->textarea(['rows' => 6]) ?>


    <?php echo $form->field($model,'birthdate')->widget(DatePicker::className(),
        ['pluginOptions' => ['dateFormat' => 'dd/mm/yyyy','todayHighlight' => true]

        ]); ?>

    <?= $form->field($model, 'gender_id')->dropDownList($model->genderList,
        ['prompt' => 'Please Choose One' ]);?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
