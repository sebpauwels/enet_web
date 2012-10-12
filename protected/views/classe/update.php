<?php
/* @var $this ClasseController */
/* @var $model Classe */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Ajouter une classe', 'url'=>array('create')),
	array('label'=>'Liste des classes', 'url'=>array('admin')),
);
?>

<h1>Modifier la classe <?php echo $model->nom_classe; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>