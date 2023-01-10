<?php
if($_SERVER["REQUEST_METHOD"]==="POST"){
       require_once "../config/course_information.php";
       // echo '<pre>', print_r($_POST), '</pre>';
       extract($_POST);
                     try{
                            $stmt = $conn->prepare("INSERT INTO course(id_Type,Type_Name,Cou_Name,details)VALUES(:id_Type,:Type_Name,:Cou_Name,:details)");
                            $stmt->bindParam(':id_Type', $id_Type);
                            $stmt->bindParam(':Type_Name', $Type_Name);
                            $stmt->bindParam(':Cou_Name', $Cou_Name);
                            $stmt->bindParam(':details', $details);
                            $stmt->execute();
                            header("refresh: 1; url=course_information.php");
                     } catch(PDOException $e){
                            // กลับไปกรอกข้อมูลใหม่
                            header("refresh: 1; url=course_information.php");
                     } $conn = null;
              }

