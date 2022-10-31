<?php
include_once ('config/DataBase.php');

class UserController{
  public $db;

  public function __construct(){
      $this->db=new DataBase();
  }



  public function readData(){
      $query=$this->db->pdo->query('SELECT * from users');

      $query->fetchAll();
  }

  public function insert($request){
    $query=$this->db->pdo->prepare('INSERT INTO users(emri,email,password,NumriTel,roli)
     values(:emri,:email,:password,:NumriTel,"Klient")');

     $query->execute([
       ':emri' => $request['name'] ,
       ':email' => $request['email'], 
       ':password' => $request['password'],
       ':NumriTel' => $request['number']
    ]);
  //header("Location: shop.php");
  }

  public function edit($id){
  $query=$this->db->pdo->prepare('SELECT emri,email,password,NumriTel from users where id=:id');
  $query->bindParam(':id',$id);
$query->execute();

return $query->fetch();

}
public function update($request,$id){
   $query=$this->db->pdo->prepare('UPDATE users set emri=:emri, email=:email,password=:password,
   roli="Klient",NumriTel=:NumriTel where id=:id');

   $query->bindParam(':emri',$request['emri']);
   $query->bindParam(':email',$request['email']);
   $query->bindParam(':password',$request[['password']]);
   $query->bindParam(':NumriTel',$request[['number']]);
   $query->bindParam(':id',$id);
   $query->execute();

return header('Location: projekti.php');

}

public function  delete($id){
  $query=$this->db->pdo->prepare('DELETE from users where id=:id');
  $query->execute();

  return header('location: projekti.php');

}


}

?>