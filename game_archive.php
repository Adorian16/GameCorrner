<?php include 'db_connection.php'; ?>
<?php $games_array=$conn->Query("SELECT * FROM games ORDER BY IDGame ASC");
?>
<div class="container text-center">
    <div class="row">
            <?php foreach($games_array as $game){?>
                
        <div class="col-4" id="game <?php echo $game['IDGame']; ?>">
                <div class="card" style="width: 18rem">
               
                  <img src="data:image;base64,<?php echo base64_encode($game["Picture"]);?>" class="card-img-top" alt="..." height="482.66px">
                 
                  <div class="card-body" style="height:128.02px">
                      <p class="card-text"><?php echo description($game);?></p>
                      
                    </div>
                    <a href="game.php?IDGame=<?php echo $game["IDGame"];?>" class="btn btn-danger">Details..</a>
                </div>
                <br>
          </div>
  
              <?php } ?>
    </div>
</div> 