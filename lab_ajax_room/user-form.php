<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--====form section start====-->
    <h2 class="p1"><i class="fa-solid fa-magnifying-glass"></i> Room</h2>
    <div class="content">    
    <p id="msg"></p>
    <form id="userForm" method="POST">
          <h5><label class="form-label">Room name</label></h5>
          <input type="text" class="form-control" placeholder="Enter Room name" name="roomname" required>
          <h5><label class="form-label">Detail</label></h5>
          <input type="text" class="form-control" placeholder="Enter Detail" name="detail" required>
          <h5><label class="form-label">Room type id</label></h5>
          <select class="form-control"
          name="roomtypeid">
          <?php
          include"database.php";
          $sql="SELECT * FROM tbroomtype";
          $query=$conn->query($sql);
          while($row=$query->fetch_object()){
            ?>
            <option value="<?=$row->roomtypeid?>">
                <?=$row->roomtypename?></option>
                <?php } ?>    </select>
          <button type="submit"class="btn btn-primary">บันทึก</button>
    </form>
        </div>
</div>
<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="ajax-script.js"></script>
</body>
</html>

<h2 class="p1"><i class="fa-solid fa-magnifying-glass"></i> Room</h2>
<div class="content">
    <table class="table table-dark table-striped table-bordered table-hover">
        <thead>
            <th>roomname</th>
            <th>Detail</th>
            <th>roomtypename</th>
            <th>price</th>
        </thead>
    <tbody>
<?php
    include"database.php";
    $sql="SELECT * FROM tbroom INNER JOIN tbroomtype ON tbroom.roomtypeid=tbroomtype.roomtypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->roomname?></td>
            <td><?=$row->detail?></td>
            <td><?=$row->roomtypename?></td>
            <td><?=$row->price?></td>
        </tr>
<?php
    }
?>
    </tbody>
</table>
</div>