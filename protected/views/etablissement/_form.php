<?php
/* @var $this EtablissementController */
/* @var $model Etablissement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'etablissement-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">les champs <span class="required">*</span> sont requis.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom de l\'établissement'); ?>
		<?php echo $form->textField($model,'nom_etablissement',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nom_etablissement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adresse de l\'établissement'); ?>
		<?php echo $form->textArea($model,'adresse_etablissement',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'adresse_etablissement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teléphone de l\'établissement'); ?>
		<?php echo $form->textField($model,'tel_etablissement',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tel_etablissement'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Créer' : 'Enregistrer les modifications'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->