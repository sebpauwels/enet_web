<?php
/* @var $this ClasseController */
/* @var $model Classe */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	'Liste',
);

$this->menu=array(
	array('label'=>'Ajouter une classe', 'url'=>array('create')),
);
?>

<h1>Liste des classes</h1>

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php 
$etablissementId = Yii::app()->request->getQuery('etablissementId', null);
if (!is_null($etablissementId))
{
    $dataProvider->model->dbCriteria->addCondition('etablissementId='.$etablissementId);
}
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'classe-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'nom_classe',
		array(
                  'name'=>'etablissementId',
                  'value'=>'Etablissement::model()->find("id=$data->etablissementId")->nom_etablissement'
                ),
                array(
                  'name'=>'bool_groupe',
                  'value'=>'($data->bool_groupe) ? "oui" : "non"'
                ),
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{delete}{update}'
		),
	),
)); ?>
