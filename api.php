<?php 
  include __DIR__ . '/data/db.php';
 
  $genres=[];
  $filtered=[];
  $options=[];
  $key=$_GET['key'];
  $toSearch=$_GET['value'];
  $options= array_keys($database[0]);
  $options = array_diff($options,['poster']);


  if($toSearch==='all' || $toSearch===''){
    $filtered=$database;
  }else{
    foreach($database as $album){
      if((strpos(strtolower($album[$key]),strtolower($toSearch))===0)||(strpos(strtolower($album[$key]),strtolower($toSearch))>0)){
        $filtered[]=$album;
      }
    }
  }
   

  /* ORDINO ARRAY PER DATA CRESCENTE */
  if(count($filtered)>0){
    $year = array_column($filtered, 'year');
    array_multisort($year, SORT_DESC, $filtered);
  }
  
  

  $response =[
    'albums'=> $filtered,
    'genres'=> $genres,
    'options'=>$options
  ];


  header('Content-Type: application/json'); // devo specificare il tipo
  echo json_encode($response);
?>