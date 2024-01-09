<?php include 'header.php'?>
<div class="content">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">candidate name</th>
                <th scope="col">position</th>
                <th scope="col">year passout</th>
            
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Krish </td>
                <td>PHP Developer</td>
                <td><a href=""><i class="fa fa-download" aria-hidden="true"></i></a></td>
            </tr>
        </tbody>
        <tbody>
            <?php
            $sql="SELECT name,apply,year FROM candidates";
            $result=mysqli_query($conn,$sql);
            $i=0;
            if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
                    echo'
                }
            }
            <tr>
                <th scope="row">'.++$i.'</th>
                <td>'.$rows['name'].'</td>

                <td>'.$rows['apply'].'/td>

                <td>'.$rows['year'].'</td>
            </tr>'; 
        }}
        else{
            echo"";
        }
            
            ?>

        </tbody>
    </table>
</div>