<?php
/* @var $this EnseignantController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enseignants',
);

$this->menu=array(
	array('label'=>'Create Enseignant', 'url'=>array('create')),
	array('label'=>'Manage Enseignant', 'url'=>array('admin')),
);
?>

<h1>Enseignants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
