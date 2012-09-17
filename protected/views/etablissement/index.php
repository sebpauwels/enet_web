<?php
/* @var $this EtablissementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Etablissements',
);

$this->menu=array(
	array('label'=>'Create Etablissement', 'url'=>array('create')),
	array('label'=>'Manage Etablissement', 'url'=>array('admin')),
);
?>

<h1>Etablissements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
