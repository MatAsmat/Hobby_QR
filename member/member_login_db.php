<?php 
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
                      $_SESSION["Level"] = $row["Level"];

                      if($_SESSION["Level"]=="member"){ 
                        Header("Location: ./index.php");

                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }
        }else{

             Header("Location: ../index.php"); 

        }
?>