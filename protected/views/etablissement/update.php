<?php
/* @var $this EtablissementController */
/* @var $model Etablissement */

$this->breadcrumbs=array(
	'Etablissements'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Etablissement', 'url'=>array('index')),
	array('label'=>'Create Etablissement', 'url'=>array('create')),
	array('label'=>'View Etablissement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Etablissement', 'url'=>array('admin')),
);
?>

<h1>Update Etablissement <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>