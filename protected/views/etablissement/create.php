<?php
/* @var $this EtablissementController */
/* @var $model Etablissement */

$this->breadcrumbs=array(
	'Etablissements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Etablissement', 'url'=>array('index')),
	array('label'=>'Manage Etablissement', 'url'=>array('admin')),
);
?>

<h1>Create Etablissement</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>