<?php
include("config.php");

  if (isset($_POST['delete'])) {
   $id = $_POST['id'];
 $sql = "DELETE FROM `register` WHERE id='$id' ";
$query_run = mysqli_query($conn,$sql);  
   if ($query_run) {

echo"<script>alert('Date Deleted');</script>";
 header("location:home.php");
   }
       else{
        echo"<script>alert('Date not Deleted');</script>";
         }
                                                     
     }

  if (isset($_POST['delete1'])) {
   $id = $_POST['id'];
 $sql = "DELETE FROM `carwashbook` WHERE id='$id' ";
$query_run = mysqli_query($conn,$sql);  
   if ($query_run) {

echo"<script>alert('Date Deleted');</script>";
 header("location:waterless.php");
   }
       else{
        echo"<script>alert('Date not Deleted');</script>";
         }
                                                     
     }
       

     if (isset($_POST['delete2'])) {
      $id = $_POST['id'];
    $sql = "DELETE FROM `carbook` WHERE id='$id' ";
   $query_run = mysqli_query($conn,$sql);  
      if ($query_run) {
   
   echo"<script>alert('Date Deleted');</script>";
    header("location:waterless.php");
      }
          else{
           echo"<script>alert('Date not Deleted');</script>";
            }
                                                        
        }
       
       
        if (isset($_POST['delete3'])) {
          $id = $_POST['id'];
        $sql = "DELETE FROM `booking` WHERE id='$id' ";
       $query_run = mysqli_query($conn,$sql);  
          if ($query_run) {
       
       echo"<script>alert('Date Deleted');</script>";
        header("location:servicebook.php");
          }
              else{
               echo"<script>alert('Date not Deleted');</script>";
                }
                                                            
            }
       
       
            if (isset($_POST['delete4'])) {
              $id = $_POST['id'];
            $sql = "DELETE FROM `carrent` WHERE id='$id' ";
           $query_run = mysqli_query($conn,$sql);  
              if ($query_run) {
           
           echo"<script>alert('Date Deleted');</script>";
            header("location:carrent_booked.php");
              }
                  else{
                   echo"<script>alert('Date not Deleted');</script>";
                    }
                                                                
                }

                if (isset($_POST['delete5'])) {
                  $id = $_POST['id'];
                $sql = "DELETE FROM `contact` WHERE id='$id' ";
               $query_run = mysqli_query($conn,$sql);  
                  if ($query_run) {
               
               echo"<script>alert('Date Deleted');</script>";
                header("location:carrent_booked.php");
                  }
                      else{
                       echo"<script>alert('Date not Deleted');</script>";
                        }
                                                                    
                    }


       
       ?>