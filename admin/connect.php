<?php
    $name=$_POST['name'];
    $college_name=$_POST['college_name'];
    $branch=$_POST['branch'];
    $mob_no=$_POST['mob_no'];
    $email=$_POST['email'];
    $ref_no=$_POST['ref_no'];
    $tech=$_POST['tech'];
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    
    $conn=new mysqli('localhost','root','','codingexpo');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }
    else{
        $stmt=$conn->prepare("INSERT INTO add_intern (name,college_name,branch,mob_no,email,ref_no,tech,start_date,end_date)
           values(?, ?, ?, ?, ?, ?, ?,?,?)");
         $stmt->bind_param("sssssssss",$name, $college_name, $branch, $mob_no, $email, $ref_no, $tech,$start_date,$end_date);
         $stmt->execute();
         echo "<p> Data Added Successfully!!!</p>";
         $stmt->close();
         $conn->close();
    }
?>
    <center>
        <a href="add_intern.html">Back</a>
    </center>
    <style>
        p {
            color: green;
            font-size: 35px;
            font-style: italic;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            width: 100%;
            text-align: center;
        }
        
        a {
            text-decoration: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: white;
            font-size: large;
            background-color: green;
            padding: 15px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>