<?php
    if (isset($_POST['submit']))    {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $database = "Practical";
        $Conn = mysqli_connect($servername, $username, $password, $database);
        $SQL_query = "SELECT * FROM `login`";  
        $result = mysqli_query($Conn, $SQL_query); 
        $numRows =  mysqli_num_rows($result); 
 $ststus = 0;
if($numRows > 0)   
        {
            $i = 1;
            while($i <= $numRows)   
            {
                $row = mysqli_fetch_assoc($result);
                if(($row['user_name'] == $_POST['username']) && ($row['password'] == $_POST['password']))
                {
                    $ststus = 1;
                    break;
                }
                $i++;
            }}
        if($ststus == 1) {
                    echo "done";
                }else
                {
      echo "try again"  ;}
 }?>