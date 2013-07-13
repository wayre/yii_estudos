<?php

/**
 * This is the model class for table "yii_usuarios".
 *
 * The followings are the available columns in table 'yii_usuarios':
 * @property integer $id
 * @property integer $id_grupo
 * @property string $user
 * @property string $pass
 * @property string $nome
 * @property string $email
 * @property string $endereco
 * @property string $numero
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 * @property string $cep
 *
 * The followings are the available model relations:
 * @property Clientes[] $clientes
 * @property Pedidos[] $pedidoses
 * @property UsuarioGrupos $idGrupo
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'yii_usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_grupo, user, pass, nome, email', 'required'),
			array('id_grupo', 'numerical', 'integerOnly'=>true),
			array('user, pass', 'length', 'max'=>8),
			array('nome, email, endereco, bairro, cidade', 'length', 'max'=>60),
			array('numero', 'length', 'max'=>6),
			array('uf', 'length', 'max'=>2),
			array('cep', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_grupo, user, pass, nome, email, endereco, numero, bairro, cidade, uf, cep', 'safe', 'on'=>'search'),
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
			'clientes' => array(self::HAS_MANY, 'Clientes', 'id_usuario'),
			'pedidoses' => array(self::HAS_MANY, 'Pedidos', 'id_usuario'),
			'idGrupo' => array(self::BELONGS_TO, 'UsuarioGrupos', 'id_grupo'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_grupo' => 'Id Grupo',
			'user' => 'User',
			'pass' => 'Pass',
			'nome' => 'Nome',
			'email' => 'Email',
			'endereco' => 'Endereco',
			'numero' => 'Numero',
			'bairro' => 'Bairro',
			'cidade' => 'Cidade',
			'uf' => 'Uf',
			'cep' => 'Cep',
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
		$criteria->compare('id_grupo',$this->id_grupo);
		$criteria->compare('user',$this->user,true);
		$criteria->compare('pass',$this->pass,true);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('endereco',$this->endereco,true);
		$criteria->compare('numero',$this->numero,true);
		$criteria->compare('bairro',$this->bairro,true);
		$criteria->compare('cidade',$this->cidade,true);
		$criteria->compare('uf',$this->uf,true);
		$criteria->compare('cep',$this->cep,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}