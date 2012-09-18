<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
    <div id="content">
        <?php echo $content; ?>
    </div><!-- content -->
</div>
<div class="span-5 last">
    <div id="sidebar">
        <?php
        $this->beginWidget('zii.widgets.CPortlet', array(
            'title' => 'Établissements',
        ));
        
        $this->widget('zii.widgets.CMenu', array(
            'items' => $this->menu,
            'htmlOptions' => array('class' => 'operations'),
        ));
        $this->endWidget();
        
        
        
        /*$this->beginWidget('zii.widgets.CPortlet', array());
        
        $container = new XmlMenu(Yii::app()->basePath . '/config/menu.xml');
        $this->widget(
                'zii.widgets.CMenu', array(
                    'items' => $container->getData(),
                    'htmlOptions' => array('class' => 'operations'),
        ));
        
        $this->endWidget();*/
        ?>
    </div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>