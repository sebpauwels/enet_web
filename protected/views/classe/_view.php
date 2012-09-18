<?php
/* @var $this ClasseController */
/* @var $data Classe */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom_classe')); ?>:</b>
	<?php echo CHtml::encode($data->nom_classe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('etablissementId')); ?>:</b>
	<?php echo CHtml::encode(Etablissement::model()->find('id='.$data->etablissementId)->nom_etablissement); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bool_groupe')); ?>:</b>
	<?php echo CHtml::encode($data->bool_groupe); ?>
	<br />


</div>