<?php
/* @var $this ClasseController */
/* @var $model Classe */
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
		<?php echo $form->label($model,'nom_classe'); ?>
		<?php echo $form->textField($model,'nom_classe',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'etablissementId'); ?>
		<?php echo $form->textField($model,'etablissementId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bool_groupe'); ?>
		<?php echo $form->textField($model,'bool_groupe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->