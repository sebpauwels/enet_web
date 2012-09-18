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

    <div class="infos-etab">
    <p><?php echo nl2br(CHtml::encode($data->adresse_etablissement)); ?></p>


    <b>Téléphone :</b>
    <?php echo CHtml::encode($data->tel_etablissement); ?>
    <br />
    
    </div>


</div>