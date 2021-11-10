<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Search</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top:5%">
            <div class="row">
                <?php 
                    $connection = mysqli_connect('localhost',"root","","search");
                    if(isset($_POST['search'])){
                        $sql = "select * from search where name like '%$searchKey%'";
                    }else{
                        $sql = "select * from search";
                        $searchKey = "";
                    }
                    
                    $result = mysqli_query($connection,$sql); 
                ?>
                <form action="" method="POST">
                    <div class="col-md-6">
                        <input type="text" name="search" class="class-control" placeholder="Search by file name" value="<?php echo $searchKey; ?>">
                    </div>
                    <div class="col-md-6 text-left">
                        <button class="btn">search</button>
                    </div>
                </form>
                <br>
                <br>
            </div>
            <table class="table table-bordered">
            <tr> 
                <th>Name</th>
                <th>file</th>
                <th>folder</th>
            </tr>
            <?php while($row = mysqli_fetch_object($result)) { ?>
            <tr>
                <td><?php echo $row->id?></td>
                <td><?php echo $row->name?></td>
                <td><?php echo $row->file?></td>
                <td><?php echo $row->folder ?></td>
            </tr>
            <?php }?>
            </table>
        </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://www.youtube.com/watch?v=GS1edGcflcY&t=111s">
</body>
</html>

