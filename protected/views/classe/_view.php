<?php
/* @var $this ClasseController */
/* @var $data Classe */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('nom_classe')); ?>:</b>
    <?php echo CHtml::encode($data->nom_classe); ?> <?php if ($data->bool_groupe)
    { ?> (groupe) <?php } ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('etablissementId')); ?>:</b>
<?php echo CHtml::encode(Etablissement::model()->find('id=' . $data->etablissementId)->nom_etablissement); ?>
    <br />

    <?php if ($data->bool_groupe)
    { ?>
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/oui.png" alt="oui" class="puce" />
    <?php }
    else
    { ?>  
        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/non.png" alt="non" class="puce" />
<?php } ?>
    <b>Groupe</b>
    <br />


</div>