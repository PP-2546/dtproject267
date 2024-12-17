<?php
    include"dbcon.php";
    if(isset($_REQUEST['bSubitStudent'])){
        $firstname=$_REQUEST['tfirstname'];
        $lastname=$_REQUEST['tlastname'];
        $email=$_REQUEST['temail'];
        $address=$_REQUEST['taddress'];

        echo $firstname.$lastname.$email.$address;
        $sql="INSERT INTO tbstudent
            VALUE(null,'$firstname','$lastname','$email','$address')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                    CONTENT='3; URL=lab2-2.php'>";
    }elseif(isset($_REQUEST['bSubmitRoom'])){
        $roomname=$_REQUEST['troomname'];
        $detail=$_REQUEST['tdetail'];
        $roomtype=$_REQUEST['troomtype'];

        echo $roomname.$detail.$roomtype;
        $sql="INSERT INTO tbroom
            VALUE(null,'$roomname','$detail','$roomtype')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                    CONTENT='3; URL=lab2-4.php'>";
        
        
    }elseif(isset($_REQUEST['bSubmitBook'])){
        $bookname=$_REQUEST['tbookname'];
        $author=$_REQUEST['tauthor'];
        $price=$_REQUEST['tprice'];
        $stock=$_REQUEST['tstock'];
        $booktype=$_REQUEST['tbooktype'];

        $sql="INSERT INTO tbbook
            VALUE(null,'$bookname','$author','$price','$stock','$booktype')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                    CONTENT='1; URL=lab3.php'>";
        
        
    }elseif(isset($_REQUEST['bSubmitBooktype'])){
        $booktypename=$_REQUEST['tbooktypename'];

        $sql="INSERT INTO tbbooktype
            VALUE(null,'$booktypename')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                    CONTENT='1; URL=lab3.php'>";

    }elseif(isset($_REQUEST['bSubmitregis'])){
        $firstname=$_REQUEST['tfirstname'];
        $lastname=$_REQUEST['tlastname'];
        $username=$_REQUEST['tusername'];
        $password=$_REQUEST['tpassword'];
        $hashValue=md5($password);

        $sql="INSERT INTO tbuser
            VALUE(null,'$firstname','$lastname','$username','$hashValue')";
        $query=$conn->query($sql);
        echo "<META HTTP-EQUIV='refresh'
                    CONTENT='1; URL=lab_function/lab-fromlogin.php'>";

    }elseif(isset($_REQUEST['bLogin'])){
        $username=$_REQUEST['tusername'];
        $password=md5($_REQUEST['tpassword']);

        $sql="SELECT * FROM tbuser WHERE username='$username' and password='$password'";
        $query=$conn->query($sql);
        $rs=$query->fetch_object();
        $numrows=$query->num_rows;
        if($numrows>0){
            echo"ล็อคอินสำเร็จ";
            echo "<META HTTP-EQUIV='refresh'
                    CONTENT='1; URL=lab_function/lab-fromlogin.php'>";
        }else{
            echo"ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        }

        
    }
?>
