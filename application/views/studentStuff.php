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
    		<li><a href="http://localhost/firstAppPhp/Student/create">Add Student</a></li>
    		<li><a href="">List all Students</a></li>
    	</ul>
        </div>  
        <h2>List Of Students</h2>
        <ol>
            
                <?php foreach($query as $row): ?>
 
            <li>        
                <?php echo $row->student_name; ?>
                <?php echo $row->student_id; ?>
                <?php echo $row->student_address; ?>
                <?php echo $row->student_passing_year; ?>

            </li>    
                <?php endforeach; ?>
        </ol>
 
    	
    	
    
</body>
</html>