<?php
App::uses('AppModel', 'Model');
/**
 * Option Model
 *
 */
class Option extends AppModel
{

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'value' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'group' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'key' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    public function afterSave($created, $options = array()){
        if($created)
            Cache::delete('Settings');
        parent::afterSave($created, $options = array());
    }
    public function afterDelete(){
        Cache::delete('Settings');
        parent::afterDelete();
    }

    function writeConfigure()
    {
        Configure::delete('W');
        if(Cache::read('Settings')){
            $cfgs = Cache::read('Settings');
        }else{
            $cfgs = $this->find('all');
            $cfgs = Set::combine(
                $cfgs,
                array(
                    'W.{0}.{1}', '{n}.Option.group', '{n}.Option.key'
                )
                ,'{n}.Option.value'
            );
            Cache::write('Settings',$cfgs);
        }

        if (count($cfgs)) {
            Configure::write($cfgs);
        }
    }
}
