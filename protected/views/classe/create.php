<?php
/* @var $this ClasseController */
/* @var $model Classe */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	'Créer',
); 

$this->menu=array(
	array('label'=>'Liste des classes', 'url'=>array('admin')),
);
?>

<h1>Créer une classe</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>