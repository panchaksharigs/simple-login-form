<html>
    <head>
        <title>list of users</title>
    </head>
    <body>
    <table>
        <thead>
            
            <tr>
                <th>user name</th>
                <th>email</th>
            </tr>
        </thead>
        <?php
        require_once('conn.php');
        $conn=mysqli_connect('localhost','root','','register');
        $result=mysqli_query($conn,"select * from gsp ");
        $cnt=1;
        while($row=mysqli_fetch_array($result)){
            ?>
            <tr>
                
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['email'];?></td>
                <?php
                $cnt=$cnt+1;
        
        }
        ?>
        </table>
    </body>
        </html> 
