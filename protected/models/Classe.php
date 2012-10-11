<?php

/**
 * This is the model class for table "enet_classe".
 *
 * The followings are the available columns in table 'enet_classe':
 * @property integer $id
 * @property string $nom_classe
 * @property integer $etablissementId
 * @property integer $bool_groupe
 *
 * The followings are the available model relations:
 * @property EnetEtablissement $etablissement
 */
class Classe extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Classe the static model class
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
		return 'enet_classe';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_classe, etablissementId', 'required'),
			array('etablissementId, bool_groupe', 'numerical', 'integerOnly'=>true),
			array('nom_classe', 'length', 'max'=>255),
			array('nom_classe', 'unique', 
				  'criteria'=>array(
            					'condition'=>'`t`.`etablissementId`=:etablissementId',
				  				'params'=>array(
                					':etablissementId'=>$this->getPost('etablissementId')
            					)
            					
        		  )),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nom_classe, etablissementId, bool_groupe', 'safe', 'on'=>'search'),
		);
	}
	
	private function getPost($name,$defaultValue=null)
	{
		return isset($_POST['Classe'][$name]) ? $_POST['Classe'][$name] : $defaultValue;
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'etablissement' => array(self::BELONGS_TO, 'EnetEtablissement', 'etablissementid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nom_classe' => 'nom de la classe',
			'etablissementId' => 'établissement',
			'bool_groupe' => 'est un groupe',
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
		$criteria->compare('nom_classe',$this->nom_classe,true);
		$criteria->compare('etablissementId',$this->etablissementId);
		$criteria->compare('bool_groupe',$this->bool_groupe);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function searchByEtablissementId($etablissementId)
        {
            $this->etablissementId = $etablissementId;
            $criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('nom_classe',$this->nom_classe,true);
		$criteria->compare('etablissementId',$this->etablissementId);
		$criteria->compare('bool_groupe',$this->bool_groupe);

                $this->etablissementId = null;
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
                
        }
}