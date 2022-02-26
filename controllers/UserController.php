<?php
include_once ('config/database.php');

class UserController{
  public $db;

  public function __construct(){
      $this->db=new Database();
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
       ':email' => $request['emailS'], 
       ':password' => $request['passwordS'],
       ':NumriTel' => $request['number']
    ]);
  header("Location: shop.php");
  }

 /*  public function edit($id){
  $query=$this->db->pdo->prepare('SELECT emri,email,password,NumriTel from users where id=:id')
$query->bindParam(':id',$id);
$query->execute();

return $query->fetch();

}
public function update($request,$id){
   $query=$this->db->pdo->prepare('UPDATE users set emri=:emri, email=:email,password=:password,
   roli='klient',NumriTel=:NumriTel where id=:id');

   $query->bindParam(':emri',$request['emailS']);
   $query->bindParam(':email',$request['emailS']);
   $query->bindParam(':password',$request[['passwordS']]);
   $query->bindParam(':NumriTel',$request[['number']]);
   $query->bindParam(':id',$id);
   $query->execute();

return header('Location: projekti.php');

}*/

public function  delete($id){
  $query=$this->db->pdo->prepare('DELETE from users where id=:id');
  $query->execute();

  return header('location: projekti.php');

}


}

?>