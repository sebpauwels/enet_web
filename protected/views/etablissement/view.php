<?php
/* @var $this EtablissementController */
/* @var $model Etablissement */

$this->breadcrumbs=array(
	'Etablissements'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Etablissement', 'url'=>array('index')),
	array('label'=>'Create Etablissement', 'url'=>array('create')),
	array('label'=>'Update Etablissement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Etablissement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Etablissement', 'url'=>array('admin')),
);
?>

<h1>View Etablissement #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nom_etablissement',
		'adresse_etablissement',
		'tel_etablissement',
	),
)); ?>
