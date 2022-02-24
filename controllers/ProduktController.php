<?php
include 'config/database.php';

class ProduktController  {
  public $db;
  private $emri;
  private $pershkrimi;
  private $foto;
  private $qmimi;
  private $id;

  public function __construct($id='', $emri='',
  $pershkrimi='', $foto='', $qmimi='')
  {
  $this->id=$id;
  $this->emri=$emri;
  $this->pershkrimi=$pershkrimi;
  $this->foto=$foto;
  $this->qmimi=$qmimi;
      $this->db=new Database();
  }


public function getID(){
  return $this->id;
}
public function setID($id){
  $this->id=$id;
}
public function getEmri(){
  return $this->emri;
}

public function setEmri($emri){
  $this->emri=$emri;
}

public function getPershkrimi(){
  return  $this->pershkrimi;
}
public function setPershkrimi($pershkrimi){
  $this->pershkrimi=$pershkrimi;
}
public function getFoto(){
  return  $this->foto;
}
public function setFoto($foto){
  $this->foto=$foto;
}
public function setQmimi($qmimi){
  $this->qmimi=$qmimi;
}
public function getQmimi(){
  return  $this->qmimi;
}

  public function readData(){
    $query = $this->db->pdo->query('SELECT emri,pershkrimi,foto,qmimi from produktet');

    return $query->fetchAll();
  }

  public function insert($request){
   
     $query=$this->db->pdo->prepare('INSERT INTO produktet(emri,pershkrimi,foto,qmimi)
     values(:emri,:pershkrimi,:foto,:qmimi)');

     $query->execute([
       ':emri' => $request['emri'] ,
       ':pershkrimi' => $request['pershkrimi'], 
     ':foto' => $request['foto'],
      ':qmimi' => $request['qmimi']
    ]);
     /*$query->execute(':emri',$request['emri']);
     $query->bindParam(':pershkrimi',$request['pershkrimi']);
     $query->bindParam(':foto',$request['foto']);
     $query->bindParam(':qmimi',$request['qmimi']);

     $query->execute();*/
    
   // return header('Location: projekti.php');

  }

   public function edit($id){
  $query=$this->db->pdo->prepare('SELECT * from produktet where id=:id');
$query->bindParam(':id',$id);
$query->execute();

return $query->fetch();

}
/*public function update($request,$id){
   $query=$this->db->pdo->prepare('UPDATE produktet set emri=:emri,pershkrimi=:pershkrimi,
   qmimi=:qmimi where id=:id');

   $query->bindParam(':emri',$request['emri']);
   $query->bindParam(':pershkrimi',$request['pershkrimi']);
   $query->bindParam(':qmimi',$request['qmimi']);
   $query->bindParam(':foto',$request['foto']);
   $query->bindParam(':id',$id);
   $query->execute();

return header('Location: projekti.php');


}*/
public function updateDhenat(){
  $sql='UPDATE Studenti SET emri=?, mbiemri=?, departamenti=?, adresa=? where id=?';

  $stm=$this->dbconn->prepare($sql);
  $stm->execute([$this->emri, $this->mbiemri,$this->departamenti,$this->adresa, $this->id]);
}

public function  delete($id){
  $query=$this->db->pdo->prepare('DELETE fro produktet where id=:id');
  $query->execute();

  return header('Location : projekti.php');

}


}

?>