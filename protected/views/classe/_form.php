<?php
/* @var $this ClasseController */
/* @var $model Classe */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classe-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_classe'); ?>
		<?php echo $form->textField($model,'nom_classe',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nom_classe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'etablissementId'); ?>
		<?php echo $form->textField($model,'etablissementId'); ?>
		<?php echo $form->error($model,'etablissementId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bool_groupe'); ?>
		<?php echo $form->textField($model,'bool_groupe'); ?>
		<?php echo $form->error($model,'bool_groupe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->