<?php

include 'Connexion.php';
include 'ShowTables.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin DB</title>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body style="background-color:#efefef">
<div class="bgtable">
<div class="container ">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Table Name</th>
            <th scope="col">Number of Rows</th>
            <th scope="col">Number of Columns</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($i = 1; $i <=sizeof($tables); $i++)          
            {
              $id="#myModal$i";
              
              ?>
            <tr>
            <td><?php echo $tables[$i]["$indexTables"];?></td>
            <td><?php echo getRowsNumber($tables[$i]["$indexTables"],$db);?> </td>
            <td><?php echo getColumnsNumber($tables[$i]["$indexTables"],$db);?></td>

            <td>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=<?php echo $id ?> ><i class="fa fa-plus"></i></button>
              <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
            <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
            </td>
          </tr>

<!-- Modal -->
<?php $idm="myModal$i";?>
<div id=<?php echo $idm ?> class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Row</h4>
      </div>
      <div class="modal-body">
      <form>
      
      
      
      <?php 

      $columnsTable=getColumnsNamesAndTypes($tables[$i]["$indexTables"],$db);
      for ($j = 1; $j <=sizeof($columnsTable); $j++)   {?>
          
    <div class="form-group">
    <label for="exampleInputEmail1"><?php echo $columnsTable[$j]['column_name'] ?></label>
    <input type="text" class="form-control" id="exampleInputEmail1"  >
    </div>

       <?php } ?>

       <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


         <?php } ?>
  
        </tbody>
      </table>
    </div>
  </div>
</div>
 </div>

</body>
</html>