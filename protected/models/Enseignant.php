<?php

/**
 * This is the model class for table "enet_enseignant".
 *
 * The followings are the available columns in table 'enet_enseignant':
 * @property integer $id
 * @property string $nom_enseignant
 * @property integer $sexe_enseignant
 * @property string $img_enseignant
 *
 * The followings are the available model relations:
 * @property EnetClasseEnseignant[] $enetClasseEnseignants
 */
class Enseignant extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Enseignant the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'enet_enseignant';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_enseignant', 'required'),
			array('sexe_enseignant', 'numerical', 'integerOnly'=>true),
			array('nom_enseignant, img_enseignant', 'length', 'max'=>255),
                        array('nom_enseignant', 'unique'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nom_enseignant, sexe_enseignant, img_enseignant', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'enetClasseEnseignants' => array(self::HAS_MANY, 'EnetClasseEnseignant', 'enseignantId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nom_enseignant' => 'Nom complet',
			'sexe_enseignant' => '',
			'img_enseignant' => '',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nom_enseignant',$this->nom_enseignant,true);
		$criteria->compare('sexe_enseignant',$this->sexe_enseignant);
		$criteria->compare('img_enseignant',$this->img_enseignant,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function generatePass($attributes)
        {
            $this->id=$attributes['id'];
            $tabNom=explode(' ', $attributes['nom_enseignant']);
            $lgn='';
            $cpt=count($tabNom);
            for($i=0;$i<$cpt;$i++){($i<($cpt-1)) ? $lgn.=$tabNom[$i][0] : $lgn.=$tabNom[$i];}
            if($this->model()->count('lgn="'.$lgn.'"')) {$lgn.='1';}
            while($this->model()->count('lgn="'.$lgn.'"')){$lgn++;}
                
            $psswd=substr(md5($lgn.time()),0, 10);
            parent::updateByPk($this->id,array('psswd'=>$psswd, 'lgn'=>$lgn));
            $this->id=NULL;
            
            return TRUE;
        }
}