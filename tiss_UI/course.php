<?php
$con = mysqli_connect('localhost', 'root','','tiss');
if (isset($_POST['addcourse'])) {
		// receive all input values from the form
		$coursename = $_POST['coursename'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		
 $sql =  mysqli_query($con,"INSERT INTO course(`coursename`, `category`, `description`) 
	 VALUES ('".$coursename."', '".$category."', '".description."');");

 if (mysqli_query($con,$sql) === TRUE)
	{		
    echo "<script>alert('course created successfully');
    </script>";
    }
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

			echo "<script>alert('Your course has been added');</script>";

			}
			
?>
