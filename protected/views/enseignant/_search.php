<?php
/* @var $this EnseignantController */
/* @var $model Enseignant */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nom_enseignant'); ?>
		<?php echo $form->textField($model,'nom_enseignant',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sexe_enseignant'); ?>
		<?php echo $form->textField($model,'sexe_enseignant'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img_enseignant'); ?>
		<?php echo $form->textField($model,'img_enseignant',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->