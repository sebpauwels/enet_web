<?php
/* @var $this EtablissementController */
/* @var $model Etablissement */

$this->breadcrumbs=array(
	'Établissements'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Vos établissements', 'url'=>array('index')),
	array('label'=>'Gérer les établissements', 'url'=>array('admin')),
);
?>

<h1>Ajouter un établissement</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>