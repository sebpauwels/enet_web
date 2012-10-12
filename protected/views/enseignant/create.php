<?php
/* @var $this EnseignantController */
/* @var $model Enseignant */

$this->breadcrumbs=array(
	'Enseignants'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Liste des enseignants', 'url'=>array('admin')),
);
?>

<h1>Ajouter un enseignant</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>