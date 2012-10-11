<?php
/* @var $this ClasseController */
/* @var $model Classe */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Liste des classes', 'url'=>array('index')),
	array('label'=>'Ajouter une classe', 'url'=>array('create')),
	array('label'=>'Gérer les classes', 'url'=>array('admin')),
);
?>

<h1>Update Classe <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>