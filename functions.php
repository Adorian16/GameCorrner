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

function username_already_in_db($username) {
  $conn = new mysqli("localhost", "root", "","gamecorrner");
  $query = "SELECT * FROM user WHERE username='$username'";
  $result = mysqli_query($conn, $query);
  
  if (mysqli_num_rows($result) > 0) {
      return true;
  } else {
      return false;
  }
}

function email_already_in_db($email) {
  $conn = new mysqli("localhost", "root", "","gamecorrner");
  $query = "SELECT * FROM user WHERE Email='$email'";
  $result = mysqli_query($conn, $query);
 
  if (mysqli_num_rows($result) > 0) {
      return true;
  } else {
      return false;
  }
}
?>