<?php 
$qrID = $_POST["qrID"];
session_start();
        if(isset($_POST['Username'])){
                  include("../condb.php");
                  
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);

                  $sql="SELECT * FROM tbl_owner 
                  WHERE  Username='".$Username."' 
                  AND  Password='".$Password."' ";

                  $result = mysqli_query($condb,$sql);

                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);
                      $_SESSION["OwnerID"] = $row["OwnerID"];
                      $_SESSION["TagType"] = $row["TagType"];
                      $ownerID = $_SESSION["OwnerID"];
                    
                      if($_SESSION["TagType"]=="Dtag"){ 
                        Header("Location: ./member_dtag_register.php?qrID=$qrID&ownerID=$ownerID");
                      }

                      if($_SESSION["TagType"]=="Ctag"){ 
                        Header("Location: ./member_ctag_register.php?qrID=$qrID&ownerID=$ownerID");
                      }

                      if($_SESSION["TagType"]=="Ttag"){ 
                        Header("Location: ./member_ttag_register.php?qrID=$qrID&ownerID=$ownerID");
                      }
                      
                    }else{
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                  }
                }
                
        // }else{
        //     Header("Location: ./member_dtag_register.php?qrID=$qrID&ownerID=$ownerID");
        // }
?>