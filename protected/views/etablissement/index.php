<?php
/* @var $this EtablissementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Établissements',
);

$this->menu=array(
	array('label'=>'Ajouter un établissement', 'url'=>array('create')),
	array('label'=>'Gérer les établissements', 'url'=>array('admin')),
);
?>

<h1>Etablissements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
