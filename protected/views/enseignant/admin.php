<?php
/* @var $this EnseignantController */
/* @var $model Enseignant */

$this->breadcrumbs=array(
	'Enseignants'=>array('index'),
	'Liste',
);

$this->menu=array(
	array('label'=>'Ajouter un enseignant', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('enseignant-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Liste des enseignants</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'enseignant-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nom_enseignant',
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{delete}{update}'
		),
	),
)); ?>
