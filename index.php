<?php

include_once ('lib/application.php');

echo "<pre>";
 //print_r($_SESSION);
echo "</pre>";



?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p><a href="create.html">Click here</a> to add an email</p>
        <table border='1'>
            <tr>
                <th>SL</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
                
            </tr>
            
            <?php 
            
                 if(array_key_exists('myemails', $_SESSION)){
            foreach ($_SESSION['myemails'] as $key=>$value) {
            
                ?>
           
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php
                        if(array_key_exists('LastName', $value) && !empty($value['LastName'])){
                      echo  $value['LastName']; 
                        }
                ?></td>
                <td><?php 
                if(array_key_exists('email', $value) && !empty($value['email'])){
                      echo  $value['email']; 
                        } ?></td>
                <td>
                    <a href="create.html">View</a>
                    |<a href="create.html">Edit</a>
                    |<a href="create.html">Delete</a>
                </td>
            </tr>
            
            <?php
                                }
                                
                 }
                        else {
                         ?>
            <tr>
                No Data Available!
            </tr>
          <?php 
                        }
                    ?>
             
        </table>
        
        
    </body>
</html>
