<?php include('header.php');
include 'db_connection.php';
 
$game_ID=$_GET['IDGame'];

$games_array=$conn->Query("SELECT * FROM games");

    foreach($games_array as $game)
{ $game_a=$game['IDGame'];
    if($game_a == $game_ID ){
    
?>

<div class="container">
    <h1><?php echo $game['Name'];?></h1>
</div>

<div class="container text-center">
            <div class="row">
                <div class="col-4">
<br>
                <img src="data:image;base64,<?php echo base64_encode($game["Picture"]);?>" class="card-img-top" alt="..." weight="300px"height="482.66px">
                
                </div>
            
                
        <div class="col-8">
        <br>
                <div class="text-start">
                    
                    <h3>ReleaseYear: <?php echo $game['ReleaseYear'];?></h3>
                    <br>
                </div>

            <div class="text-start">
                    <p class="fw-semibold fs-5 text-white">Description: <br><br><?php echo $game['Description'];?></p><br>
                    <p class="fw-semibold fs-5 text-white">Type: <?php echo $game['Type'];?></p><br>
                    <p class="fw-semibold fs-5 text-white">PEGI: <?php echo $game['PEGI'];?></p><br>
                    <button type="button" class="btn btn-warning"><h1><?php echo $game['Price'];?> LEI</h1></button>
            </div>
        </div>
        </div>
</div>        
<?php 
}

} ?>