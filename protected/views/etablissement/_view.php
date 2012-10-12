<?php
/* @var $this EtablissementController */
/* @var $data Etablissement */
?>

<div class="view viewEtablissement">

        <!--<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
        <br />-->
    <b>
        <?php echo CHtml::encode($data->nom_etablissement); ?>
    </b>

    <div class="clear"></div>
    
    <div class="infos-etab-left">
    <p><?php echo nl2br(CHtml::encode($data->adresse_etablissement)); ?></p>


    <b>Téléphone :</b>
    <?php echo CHtml::encode($data->tel_etablissement); ?>
    <br />
    
    </div>
    
    <div class="infos-etab-right">
        <p class="nbClasseEtab">il y a actuellement <?php echo CHtml::link(count(Classe::model()->findAll('etablissementId='.$data->id)),Yii::app()->request->baseUrl.'/index.php/classe/admin/etablissementId/'.$data->id,array('class'=>'nbClasses')); ?> classe(s) renseignée(s) dans cet établissement</p>
    </div>
    
    <div class="clear"></div>


</div>