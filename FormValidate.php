<?php

class FormValidate{
    public $_passed=false;
    public $_errors=array();
   public $db=null;

  public function __construct(){
      $this->db=Database::getInstance();
  }
 
 public function check($source,$items=array()){
       foreach($items as $item => $rules){
        foreach($rules as $rule => $rules_value){
$value=$source[$item];

    if($rule === 'required' && empty($value)){
$this->addError("{$item} is required");
    }else if(!empty($value)){
switch($rule){
case 'min':
if(strlen($value) < $rules_value){
 $this->addError("{$item} must be a minimum of {$rule_value} characters");
}
    break;
    case 'max':
        if(strlen($value) > $rules_value){

        $this->addError("{$item} must be a maximum of {$rule_value} characters");
        }
        break;
        case 'unique':
$check = $this->db->get($rule_value, array($item, '=',$value));
if($chek->count()){
    $this->addError("{$item} already exists");
}
            break;
}
    }
        }
        if(empty($this->_errors)){
            $this->_passed=true;
        }
 }
}

 public function addError($error){
$this->_errors[]=$error;
 }

 public function errors(){
     return $this->_errors;
 }
 public function passed(){
     return $this->_passed;
 }
}



?>

