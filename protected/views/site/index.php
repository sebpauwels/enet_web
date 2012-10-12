<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1><?php echo CHtml::encode(Yii::app()->name); ?></h1>

<p>Bienvenue dans l'espace de configuration du réseau éNet de votre établissement.</p>

<p>Pour commencer, renseignez :</p>
<ul>
	<li>votre (ou vos) établissements(s): <?php echo CHtml::link('lien',Yii::app()->request->baseUrl.'/index.php/etablissement');?> </li>
	<li>les classes et groupes: <?php echo CHtml::link('lien',Yii::app()->request->baseUrl.'/index.php/classe/admin');?> </li>
        <li>les enseignants: <?php echo CHtml::link('lien',Yii::app()->request->baseUrl.'/index.php/enseignant/admin');?> </li>
</ul>

<!--<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>-->
