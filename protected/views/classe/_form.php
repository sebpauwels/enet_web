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

	<p class="note">Les champs <span class="required">*</span> sont requis.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'nom_classe'); ?>
		<?php echo $form->textField($model, 'nom_classe',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nom_classe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'etablissementId'); ?>
        <?php echo $form->dropDownList($model, 'etablissementId', CHtml::listData(Etablissement::model()->findAll(), 'id', 'nom_etablissement'))?>
		<?php echo $form->error($model,'etablissementId'); ?>
	</div>

	<div class="row">
		<?php echo $form->checkBox($model, 'bool_groupe')?> est un groupe
		<?php echo $form->error($model,'bool_groupe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Créer' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->