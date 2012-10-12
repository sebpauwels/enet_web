<?php
/* @var $this ClasseController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Classes',
);

$this->menu=array(
	array('label'=>'Ajouter une classe', 'url'=>array('create')),
	array('label'=>'Liste des classes', 'url'=>array('admin')),
);
?>

<h1>Classes</h1>
<?php 
//si l'id de l'établissement est renseigné en GET, on affiche seulement les classes ou groupes associés
$etablissementId = Yii::app()->request->getQuery('etablissementId', null);
if (!is_null($etablissementId))
{
    $dataProvider->model->dbCriteria->addCondition('etablissementId='.$etablissementId);
}
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
