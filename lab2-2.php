<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<h2 class="p1"><i class="fa-solid fa-magnifying-glass"></i> ความหมาย CSS</h2>
<div class="content">
CSS คือ ภาษาที่ใช้สำหรับตกแต่งเอกสาร HTML/XHTML ให้มีหน้าตา สีสัน ระยะห่าง พื้นหลัง เส้นขอบและอื่นๆ ตามที่ต้องการ CSS ย่อมาจาก Cascading Style Sheets มีลักษณะเป็นภาษาที่มีรูปแบบในการเขียน Syntax แบบเฉพาะและได้ถูกกำหนดมาตรฐานโดย W3C เป็นภาษาหนึ่งในการตกแต่งเว็บไซต์ ได้รับความนิยมอย่างแพร่หลาย
<head>
</div>
<h2 class="p1">รูปแบบการใช้งาน CSS</h2>
<div class="content">
การเขียน CSS มีหลายรูปแบบในการจัดการหลัก ๆ มีอยู่ 3 รูปแบบ ซึ่งในแต่ละรูปแบบก้จะมีจุดประส์ในการใช้งานที่แตกต่างกัน แต่ยังใช้ไวยากรณ์ของภาษา CSS ยังคงเดิม เพียงแค่รูปแบบการจัดวางที่แตกต่างกัน โดยทั้งทั้งหมด 3 รูปแบบ ดังนี้
Inline Style Sheet
Internal Style Sheet
External Style Sheet
</div>
<h2 class="p1"><i class="fa-solid fa-magnifying-glass"></i> การสร้างฟอร์ม (FROM)</h2>
<div class="content">
<form action="action.php" method="post">
  <div class="mb-3">
    <label class="form-label">FIRSTNAME</label>
    <input type="text" class="form-control"
    name="tfirstname" placeholder="ระบุชื่อ...">
  </div>
  <div class="mb-3">
    <label class="form-label">LASTNAME</label>
    <input type="text" class="form-control"
    name="tlastname" placeholder="ระบุนามสกุล...">
  </div>
  <div class="mb-3">
    <label class="form-label">EMAIL</label>
    <input type="email" class="form-control"
    name="temail"  placeholder="ระบุemail...">
  </div>
  <div class="mb-3">
    <label class="form-label">ADDRESS</label>
    <input type="text" class="form-control"
    name="taddress"  placeholder="ระบุที่อยู่...">
  </div>
  <div><input type="submit" name="bSubmitStudent" class="btn btn-primary" value="บันทึกข้อมูล"></div>
</form>
</div>