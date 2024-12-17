<?php
    include"dbcon.php";
    $sql="SELECT * FROM tbstudent";
    $query=$conn->query($sql);
    while($rs=$query->fetch_object()){
        echo$rs->stdid.". ".$rs->firstname
        ."&nbsp;&nbsp;".$rs->lastname.", ".$rs->address."<br>";
    }

    echo"<hr>";

    $sql2="SELECT * FROM tbstudent
            WHERE stdid='2'";
    $query2=$conn->query($sql2);
    while($rs2=$query2->fetch_object()){
        echo$rs2->stdid.". ".$rs2->firstname
        ."&nbsp;&nbsp;".$rs2->lastname.", ".$rs2->address."<br>";
    }

    echo"<hr>";

    $sql3="SELECT * FROM tbstudent
            WHERE firstname LIKE'%ภ%'";
    $query3=$conn->query($sql3);
    while($rs3=$query3->fetch_object()){
        echo$rs3->stdid.". ".$rs3->firstname
        ."&nbsp;&nbsp;".$rs3->lastname.", ".$rs3->address."<br>";
    }

    
?>