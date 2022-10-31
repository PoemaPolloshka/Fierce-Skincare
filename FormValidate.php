<?php
include_once ('config/DataBase.php');


class FormValidate{
    public $_passed=false;
    public $_errors=array();
   public $_db=null;

  public function __construct(){
    $this->_db=new DataBase();  
}
 
 public function check($source,$items=array()){
       foreach($items as $item => $rules){
        foreach($rules as $rule => $rule_value){
      if(isset($source[$item])){
            $value=$source[$item];
      }
    if($rule === 'required' && empty($value)){
$this->addError("{$item} is required");
    }else if(!empty($value)){
switch($rule){
case 'min':
if(strlen($value) < $rule_value){
 $this->addError("{$item} must be a minimum of {$rule_value} characters!");
}
    break;
    case 'max':
        if(strlen($value) > $rule_value){

        $this->addError("{$item} must be a maximum of {$rule_value} characters!");
        }
        break;
       case 'unique':
        filter_var($item, FILTER_VALIDATE_EMAIL) == false;
        $this->addError("{$item} is not the correct format!");
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


