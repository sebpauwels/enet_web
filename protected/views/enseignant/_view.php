<?php
/* @var $this EnseignantController */
/* @var $data Enseignant */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_enseignant')); ?>:</b>
	<?php echo CHtml::encode($data->nom_enseignant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexe_enseignant')); ?>:</b>
	<?php echo CHtml::encode($data->sexe_enseignant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img_enseignant')); ?>:</b>
	<?php echo CHtml::encode($data->img_enseignant); ?>
	<br />


</div>