<?php
/* @var $this EtablissementController */
/* @var $data Etablissement */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_etablissement')); ?>:</b>
	<?php echo CHtml::encode($data->nom_etablissement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adresse_etablissement')); ?>:</b>
	<?php echo CHtml::encode($data->adresse_etablissement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_etablissement')); ?>:</b>
	<?php echo CHtml::encode($data->tel_etablissement); ?>
	<br />


</div>