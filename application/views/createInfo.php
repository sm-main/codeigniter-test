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
    <div>
        <?php echo form_open('http://localhost/firstAppPhp/Student/show'); ?>	
        <h2>Add new Student Record</h2>
        <?php echo form_label('Full Name :'); ?><br>
        <?php echo form_input(array('id' => 'name', 'name' => 'name')); ?><br><br>
        <?php echo form_label('Residence Address :'); ?><br>
        <?php echo form_input(array('id' => 'address', 'name' => 'address')); ?><br><br>
        <?php $data_radio1 = array(
         'name' => 'gender',
         'value' => 'male',
         'checked' => TRUE,
        );

        $data_radio2 = array(   
        'name' => 'gender',
        'value' => 'female',
        );?>
        <?php echo form_label('Gender:');?><br>
        <?php  echo form_radio($data_radio1);?>Male 
        <?php  echo form_radio($data_radio2);
        ?>Female<br> <br>

        <?php echo form_label('Expected Year of Passing:'); ?><br>   
        <select id="birthyear" name="birthyear">
            <option value="">Select Year</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
        </select>  <br>  <br>
        <?php echo form_label('Extra Curricular Intrests:'); ?><br>
        <input type="checkbox" name="interests[]" value="sports">Sports<br>  
        <input type="checkbox" name="interests[]" value="programming">Programming<br>
        <input type="checkbox" name="interests[]" value="arts">Arts<br>
        <input type="checkbox" name="interests[]" value="music">Music<br><br>
        <?php echo form_error('interests[]') ?>

        <?php echo form_submit(array('id' => 'submit', 'value' => 'Add')); ?>
        <button><a href="http://localhost/firstAppPhp/Student/create">Cancel</a></button>

        <?php echo form_close(); ?>
        
    </div>    
</body>
</html>