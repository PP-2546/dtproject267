<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p2"><i class="fa-solid fa-magnifying-glass"></i> ข้อมูลหนังสือ</h2>
<div class="content1">
    <table class="table table-striped table-bordered">
        <thead>
            <th>Bookname</th>
            <th>Author</th>
            <th>Price</th>
            <th>Stock</th>
            <th>BookType</th>
        </thead>
    <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbbook INNER JOIN tbbooktype ON tbbook.booktypeid=tbbooktype.booktypeid";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->bookname?></td>
            <td><?=$row->author?></td>
            <td><?=$row->price?></td>
            <td><?=$row->stock?></td>
            <td><?=$row->booktypename?></td>
        </tr>
<?php
    }
?>
    </tbody>
</table>
    <div><a href="lab3-1.php"< button type="button" class="btn btn-success"><i class="fa-solid fa-plus"></i> เพิ่มข้อมูลหนังสือ</button></a></div>
</div>

<h2 class="p2"><i class="fa-solid fa-magnifying-glass"></i> ประเภทหนังสือ</h2>
<div class="content1">
    <table class="table table-striped table-bordered">
        <thead>
            <th>BookType</th>
        </thead>
    <tbody>
<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbbooktype";
    $query=$conn->query($sql);
    while($row=$query->fetch_object()){
?>
        <tr>
            <td><?=$row->booktypename?></td>
        </tr>
<?php
    }
?>
    </tbody>
</table>
    <div><a href="lab3-2.php"< button type="button" class="btn btn-success"><i class="fa-solid fa-plus"></i> เพิ่มประเภทหนังสือ</button></a></div>
</div>