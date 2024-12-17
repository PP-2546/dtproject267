<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p2"><i class="fa-solid fa-magnifying-glass"></i> เพิ่มข้อมูลผู้ใช้</h2>
<div class="content1">
<form action="../action.php" method="post">
  <div class="mb-3">
    <label class="form-label">FIRSTNAME</label>
    <input type="text" class="form-control"
    name="tfirstname" placeholder="ระบุชื่อ..." required>
  </div>
  <div class="mb-3">
    <label class="form-label">LASTNAME</label>
    <input type="text" class="form-control"
    name="tlastname" placeholder="ระบุนามสกุล..." required>
  </div>
  <div class="mb-3">
    <label class="form-label">USERNAME</label>
    <input type="text" class="form-control"
    name="tusername"  placeholder="ระบุUsername..." required>
  </div>
  <div class="mb-3">
    <label class="form-label">PASSWORD</label>
    <input type="password" class="form-control"
    name="tpassword"  placeholder="ระบุPassword..." required>
  </div>
  <div><input type="submit" name="bSubmitregis" class="btn btn-primary" value="บันทึกข้อมูล"></div>
</form>
<div><a href="lab-fromlogin.php"<button type="button" class="btn btn-danger"><i class="fa-solid fa-xmark"></i> Login</button></a></div>
</div>