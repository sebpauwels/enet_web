<?php

/**
 * This is the model class for table "enet_etablissement".
 *
 * The followings are the available columns in table 'enet_etablissement':
 * @property integer $id
 * @property string $nom_etablissement
 * @property string $adresse_etablissement
 * @property string $tel_etablissement
 *
 * The followings are the available model relations:
 * @property EnetClasse[] $enetClasses
 * @property EnetClasse[] $enetClasses1
 */
class Etablissement extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Etablissement the static model class
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
		return 'enet_etablissement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_etablissement, adresse_etablissement, tel_etablissement', 'required'),
			array('nom_etablissement, tel_etablissement', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nom_etablissement, adresse_etablissement, tel_etablissement', 'safe', 'on'=>'search'),
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
			'enetClasses' => array(self::HAS_MANY, 'EnetClasse', 'etablissementId'),
			'enetClasses1' => array(self::HAS_MANY, 'EnetClasse', 'etablissementid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nom_etablissement' => 'Nom Etablissement',
			'adresse_etablissement' => 'Adresse Etablissement',
			'tel_etablissement' => 'Tel Etablissement',
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
		$criteria->compare('nom_etablissement',$this->nom_etablissement,true);
		$criteria->compare('adresse_etablissement',$this->adresse_etablissement,true);
		$criteria->compare('tel_etablissement',$this->tel_etablissement,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}