<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://localhost/firstAppPhp/css/studentStuff.css">
</head>
<body>
	<div id="box1">
    	<h2>YMCA University of Science and Technology</h2>
    	<ul>
    		<li><a href="">Add Student</a></li>
    		<li><a href="">List all Students</a></li>
    	</ul>  	
    </div>
    <h2>Edit Student Record</h2>
    <div>
      <form method="post" action="<?php echo base_url() . "index.php/update_ctrl/update_student_id1"?>">
        <label>Full Name :</label>
        <input type="text" name="name" value="<?php echo $student_table->student_name; ?>">
        <label>Residence Address :</label>
        <input type="text" name="address" value="<?php echo $student_table->student_email; ?>">
        <label>Gender :</label>
        <input type="checkbox" name="gender" value="<?php echo $student_table->student_gender; ?>">
        <input type="checkbox" name="gender" value="<?php echo $student_table->student_gender; ?>">

        
        <label>Address :</label>
        <input type="checkbox" name="" value="<?php echo $student_table->student_interests; ?>">
        <input type="submit" id="submit" name="dsubmit" value="Update">
     </form>
         <button><a href="http://localhost/firstAppPhp/Student/create">Cancel</a></button>
    </div>    
</body>
</html>