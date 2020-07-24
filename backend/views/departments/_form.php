<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\Arrayhelper;
use backend\models\Branches;
use backend\models\Companies;

/* @var $this yii\web\View */
/* @var $model backend\models\Departments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'companies_company_id')->dropDownList(ArrayHelper::map(Companies::find()->all(), 'company_id','company_name'),
    ['prompt'=>'Select company']) ?>
    
    <?= $form->field($model, 'branches_branch_id')->dropDownList(Arrayhelper::map(Branches::find()->all(), 'branch_id','branch_name'),
    ['prompt'=>'Select branch'])?>

    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => 'status']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
