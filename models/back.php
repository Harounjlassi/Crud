<?php
require_once'connexion.php';

 if(isset($_POST['comment'])&&!empty($_POST['comment'])&&$_POST['comment']!=='getall'){

  $comment = $_POST['comment'];
  try { $c=new config(); 
    $query=$c->getConnexion()->prepare("select * from crud where id=:id");
    $query1=$c->getConnexion()->prepare("select * from crud ");

   
    $query->execute([  'id' => $comment  ]);
    $query1->execute();

    $list = $query->fetchAll(); 
       $list1 = $query1->fetchAll();
       $data = array(
        'data' => $list,
        'data1' => $list1
     );
    if(count($list) == 0){
  
      echo json_encode($list1);
    }else{
   
    echo json_encode($list);} 
    } catch (PDOException $e) {
      echo json_encode([false,"fasfle"]);  
    
  }}
   if(isset($_POST['comment'])&&$_POST['comment']=='getall'){

    try { $c=new config(); 
      $query1=$c->getConnexion()->prepare("select * from crud ");
  
     
      $query1->execute();
  
         $list1 = $query1->fetchAll();
      
    
  
      echo json_encode($list1);}
       catch (PDOException $e) {
        echo json_encode([false,"fasflooe"]);  
      
    }    }else{}
  
  ?>