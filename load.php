<?php
    $output = '';  
    $id= '';  
    sleep(1);
    $conc = new mysqli("localhost", "root", "", "form1");
    $data = "select * from `info` WHERE `id`<".$_POST['lastid']." ORDER BY `id` DESC limit 2";
    $result=mysqli_query($conc,$data);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];  
            $output .= '   
               <tr>  
                    <td>'.$row["id"].'</td>
                    <td>'.$row["name"].'</td> 
                    <td>'.$row["mail"].'</td>
                    <td>'.$row["mobile"].'</td> 
                    <td>'.$row["gender"].'</td> 
                    <td>'.$row["state"].'</td> 
                    <td>'.$row["image"].'</td>   
               </tr>';  
        }  
             $output .= '  
                <tr id="load-row">
                    <td colspan="8"><button id="btn-load" name="Load" data-rid="'. $id .'">Load more</button></td>
                </tr>';  
     echo $output;
?>