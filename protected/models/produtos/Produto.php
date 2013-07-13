<?php

/**
 * This is the model class for table "yii_produtos".
 *
 * The followings are the available columns in table 'yii_produtos':
 * @property integer $id
 * @property integer $id_produto_grupo
 * @property string $nome
 * @property string $descricao
 * @property string $cor
 * @property double $valor
 * @property integer $ativo
 * @property string $dt_criacao
 * @property string $dt_alteracao
 *
 * The followings are the available model relations:
 * @property PedidoItens $pedidoItens
 * @property ProdutosLinhas $idLinhaProduto
 * @property TagRef[] $tagRefs
 */
class Produto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Produto the static model class
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
		return 'yii_produtos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_produto_grupo, nome', 'required'),
			array('id_produto_grupo, ativo', 'numerical', 'integerOnly'=>true),
			array('valor', 'numerical'),
			array('nome, cor', 'length', 'max'=>45),
			array('descricao', 'length', 'max'=>200),
			array('dt_criacao, dt_alteracao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_produto_grupo, nome, descricao, cor, valor, ativo, dt_criacao, dt_alteracao', 'safe', 'on'=>'search'),
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
			'pedidoItens' => array(self::HAS_ONE, 'PedidoItens', 'id'),
			'idLinhaProduto' => array(self::BELONGS_TO, 'ProdutosLinhas', 'id_produto_grupo'),
			'tagRefs' => array(self::HAS_MANY, 'TagRef', 'id_produto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_produto_grupo' => 'Grupo Produto',
			'nome' => 'Nome',
			'descricao' => 'Descricao',
			'cor' => 'Cor',
			'valor' => 'Valor',
			'ativo' => 'Ativo',
			'dt_criacao' => 'Dt Criacao',
			'dt_alteracao' => 'Dt Alteracao',
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
		$criteria->compare('id_produto_grupo',$this->id_produto_grupo);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('cor',$this->cor,true);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('ativo',$this->ativo);
		$criteria->compare('dt_criacao',$this->dt_criacao,true);
		$criteria->compare('dt_alteracao',$this->dt_alteracao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}