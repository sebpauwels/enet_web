<?php
/* @var $this EnseignantController */
/* @var $model Enseignant */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'enseignant-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Les champs <span class="required">*</span> sont requis.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nom_enseignant'); ?>
                <label class="formExemple">ex: "Jean Dupont"</label>
                <label class="formExemple">les mots de passe et accès seront générés automatiquement</label>
		<?php echo $form->textField($model,'nom_enseignant',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nom_enseignant'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Créer' : 'Modifier'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->