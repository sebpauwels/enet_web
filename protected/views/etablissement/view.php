<?php
/* @var $this EtablissementController */
/* @var $model Etablissement */

$this->breadcrumbs=array(
	'Établissements'=>array('index'),
);

$this->menu=array(
	array('label'=>'Vos établissements', 'url'=>array('index')),
	array('label'=>'Ajouter un établissement', 'url'=>array('create')),
	array('label'=>'Modifier cet établissement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Supprimer cet établissement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Voulez-vous supprimer cet établissement ?')),
	array('label'=>'Gérer les établissements', 'url'=>array('admin')),
);
?>

<h1>Établissement <?php echo $model->nom_etablissement; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nom_etablissement',
		'adresse_etablissement',
		'tel_etablissement',
	),
)); ?>
