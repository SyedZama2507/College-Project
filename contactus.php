<?php
if(isset($_POST['sub'])){

    $name    = $_POST['name'];
    $email   = $_POST['mail'];
    $phone   = $_POST['phone'];
    $gender  = $_POST['gen'];
    $program = isset($_POST['program']) ? implode(",", $_POST['program']) : "";

    $conn = mysqli_connect(
        "mydb.cn0i064kwf3f.ap-south-1.rds.amazonaws.com",
        "admin",
        "YOUR_RDS_PASSWORD",
        "mydb"
    );
  
     if(!$conn){
        die(mysqli_connect_error());
    }

    $sql = "INSERT INTO contactus (name,email,phone,gender,program)
            VALUES ('$name','$email','$phone','$gender','$program')";

     if(mysqli_query($conn,$sql)){
	             echo "<script>
			   alert('Form submitted successfully');
		           window.location.href='index.html';
		      </script>";
    } else {
		    echo "Error inserting data";
}
}
?>
