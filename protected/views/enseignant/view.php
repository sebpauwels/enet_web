<?php
/* @var $this EnseignantController */
/* @var $model Enseignant */

$this->breadcrumbs=array(
	'Enseignants'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Enseignant', 'url'=>array('index')),
	array('label'=>'Create Enseignant', 'url'=>array('create')),
	array('label'=>'Update Enseignant', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Enseignant', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Enseignant', 'url'=>array('admin')),
);
?>

<h1>View Enseignant #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nom_enseignant',
		'sexe_enseignant',
		'img_enseignant',
	),
)); ?>
