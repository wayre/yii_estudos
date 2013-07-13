<?php

/**
 * This is the model class for table "yii_pedido_itens".
 *
 * The followings are the available columns in table 'yii_pedido_itens':
 * @property integer $id
 * @property integer $id_pedido
 * @property integer $id_produto
 * @property integer $qtde
 *
 * The followings are the available model relations:
 * @property Produtos $id0
 */
class PedidoItem extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PedidoItem the static model class
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
		return 'yii_pedido_itens';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_pedido, id_produto, qtde', 'required'),
			array('id_pedido, id_produto, qtde', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_pedido, id_produto, qtde', 'safe', 'on'=>'search'),
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
			'id0' => array(self::BELONGS_TO, 'Produtos', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_pedido' => 'Id Pedido',
			'id_produto' => 'Id Produto',
			'qtde' => 'Qtde',
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
		$criteria->compare('id_pedido',$this->id_pedido);
		$criteria->compare('id_produto',$this->id_produto);
		$criteria->compare('qtde',$this->qtde);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}