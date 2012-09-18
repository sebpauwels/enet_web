<?php
/* @var $this EtablissementController */
/* @var $model Etablissement */

$this->breadcrumbs=array(
	'Établissements'=>array('index'),
	'Gérer',
);

$this->menu=array(
	array('label'=>'Vos établissements', 'url'=>array('index')),
	array('label'=>'Ajouter un établissement', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('etablissement-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gérer vos établissements</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'etablissement-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'nom_etablissement',
		'adresse_etablissement',
		'tel_etablissement',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
