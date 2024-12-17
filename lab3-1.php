<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p2"><i class="fa-solid fa-magnifying-glass"></i> เพิ่มข้อมูลหนังสือ</h2>
<div class="content1">
<form action="action.php" method="post">
  <div class="mb-3">
    <label class="form-label">Bookname</label>
    <input type="text" class="form-control"
    name="tbookname" placeholder="ระบุชื่อหนังสือ...">
  </div>
  <div class="mb-3">
    <label class="form-label">Author</label>
    <textarea  class="form-control"
    name="tauthor"> </textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Price</label>
    <input type="number" name="tprice" value="0" class="form-control"> 
  </div>
  <div class="mb-3">
    <label class="form-label">Stock</label>
    <input type="number" name="tstock" value="0" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">BookType</label>
    <select class="form-control"
    name="tbooktype">
<?php
        include"dbcon.php";
        $sql="SELECT * FROM tbbooktype";
        $query=$conn->query($sql);
        while($row=$query->fetch_object()){
?>
        <option value="<?=$row->booktypeid?>">
            <?=$row->booktypename?></option>
<?php } ?>
    </select>
  </div>
  <div><input type="submit" name="bSubmitBook" class="btn btn-primary" value="บันทึกข้อมูล"></div>
</form>
    <div><a href="lab3.php"<button type="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> กลับ</button></a></div>
</div>