<?php
     session_start();
     $baseUrl = 'http://localhost/p/';

    function insertData($conn , $sql )
    {
          if($conn->query($sql) === TRUE)
          {
              return true;
          }
          else
          {
              return false;
          }
    }


    function getData($conn, $sql)
    {
        $arr = array( array() );
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            $i = 0;
            while($row = $result->fetch_array(MYSQLI_NUM))
            {
                for($j=0; $j<$result->field_count; $j++)
                {
                    $arr[$i][$j] = $row[$j];
                }
                $i++;
            }

        }
        
        
        return $arr;
       
    }


    function userExist($arr, $name, $pass)
    {
        for($i=0; $i<sizeof($arr); $i++)
        {
            for($j=0; $j<sizeof($arr[0]); $j++)
            {
                if($arr[$i][1] == $name && $arr[$i][4] == $pass)
                {
                    return true;
                }
            }
        }
    }

?>