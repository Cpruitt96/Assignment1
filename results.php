<?php
    require_once('database.php');
    
    $selectSubject = $_POST['subject'];
    $selectSemester = $_POST['semester'];
    
    if($selectSubject == "0"){
        echo "Error: no subject chosen";
        $stmt = NULL;
    }
    else{
        $subjectID = (int)$selectSubject;
        if($selectSemester == "0"){
            echo "Error: no semester chosen";
            $stmt = NULL;
        }
        else{
            $semester = $selectSemester;
            $query = "SELECT c.classTitle, c.description, i.lastName, cs.CRN, cs.sectionDay, cs.sectionTime
                FROM classSection cs
                INNER JOIN instructor i
                ON
                cs.instructorID = i.instructorID
                INNER JOIN classes c
                ON
                cs.classID = c.classID
                Where c.subjectID = ? AND c.semester = ?
                ORDER By c.classTitle;";
                
            $stmt = $conn->prepare($query);
            $stmt->bind_param('is', $subjectID, $semester);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($Title, $Description, $Instructor, $CRN, $Day, $Time);
        }
    }
    
    
   
   
   
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
        <h1>Results</h1>
    </div>

    <div id="main">

        
       

        <div id="content">
            <!-- display a table of customers -->
            
            <table>
                <tr>
                    <th>CRN</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Instructor</th>
                    <th>Day</th>
                    <th>Time</th>
                </tr>
                    <?php 
                    if($stmt != NULL){
                        while ($stmt->fetch()){ ?>
                            <tr> 
                                <td><?php echo $CRN; ?></td>
                                <td><?php echo $Title; ?></td>
                                <td><?php echo $Description; ?></td>
                                <td><?php echo $Instructor; ?></td>
                                <td><?php echo $Day; ?></td>
                                <td><?php echo $Time; ?></td>
                            </tr>
                    
                        
                    <?php }} ?>
                
                
            </table>
            
        </div>
        
        
        
    </div>
    
    
    
    <div id="footer">
        <p>&copy;  Columnus State University</p>
    </div>

    </div><!-- end page -->
    
    <?php
     $stmt->free_result();
    mysqli_close($conn);
    ?>
</body>
</html>