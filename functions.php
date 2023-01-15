<?php function description($item){
    if(strlen($item['Description'])<100)
    {
      echo substr($item['Description'],0,100);
    }
    else if (strlen($item['Description'])>=100){
      echo substr($item['Description'],0,100).'...';
    }
  }

  function find_game_by_id($item){
    if($item['id']===intval($_GET['IDGame'])){
        return true;
    }
    else
    {
        exit();
    }
}
?>