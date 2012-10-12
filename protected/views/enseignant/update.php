<?php
/* @var $this EnseignantController */
/* @var $model Enseignant */

$this->breadcrumbs=array(
	'Enseignants'=>array('index'),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Ajouter un Enseignant', 'url'=>array('create')),
	array('label'=>'Liste des enseignants', 'url'=>array('admin')),
);
?>

<h1>Modifier enseignant <?php echo $model->nom_enseignant; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>