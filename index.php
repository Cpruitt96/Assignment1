<?php
    require_once('database.php');
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Class Explorer</title>
    <link rel="stylesheet" type="text/css" href="main.css" /> 
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <img src="CSU.png" alt="CSU" width=80 height=80>
        <h1>Choose a Subject and Semester</h1>
    </div>

    <div id="main">

        
       

        <div id="content">
            <!-- display a table of customers -->
            
            <form action = "results.php" method = "post">
                <select name ="subject">
                    <option value = "0" >Choose a Subject</option>
                    <option value = "1" >Anthropology</option>
                    <option value = "2" >Computer Science</option>
                    <option value = "3" >Math</option>
                </select>
                
                <select name ="semester">
                    <option value =  "0" >Choose a Semester</option>
                    <option value = "Fall 17">Fall 2017</option>
                    <option value = "Spring 17">Spring 2017</option>
                    <option value = "Summer 17">Summer 2017</option>
                </select>
                
                <br />
                <br />
                
                <button value = "Submit" type = "submit">Submit</button>
            </form>
            
        </div>
        
        
        
    </div>
    
    
    
    <div id="footer">
        <p>&copy;  Columnus State University</p>
    </div>

    </div><!-- end page -->
    
    
</body>
</html>
>