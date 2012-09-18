<?php
/* @var $this EtablissementController */
/* @var $model Etablissement */

$this->breadcrumbs=array(
	'Établissements'=>array('index'),
	$model->nom_etablissement=>array('view','id'=>$model->id),
	'Mettre à jour',
);

$this->menu=array(
	array('label'=>'Vos établissements', 'url'=>array('index')),
	array('label'=>'Ajouter un établissement', 'url'=>array('create')),
	//array('label'=>'View Etablissement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Gérer vos établissements', 'url'=>array('admin')),
);
?>

<h1>Mise à jour de : <?php echo $model->nom_etablissement; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>