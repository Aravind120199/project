<?php 
                                           $con = mysqli_connect("localhost","root","","registration");
       
                                           if(isset($_POST['search']))
                                           {
                                               $filtervalues = $_POST['search'];
                                               $query = "SELECT * FROM reguser WHERE CONCAT(Name) LIKE '%$filtervalues%' ";
                                               $query_run = mysqli_query($con, $query);
       
                                               if(mysqli_num_rows($query_run) > 0)
                                               {
                                                   foreach($query_run as $items)
                                                   {
                                                       ?>
                                                       <tr>
                                                       
                                                           <td><?= $items['Name']; ?></td>
                                                         
                                                       </tr>
                                                       <?php
                                                   }
                                               }
                                               else
                                               {
                                                   ?>
                                                       <tr>
                                                           <td colspan="4">No Record Found</td>
                                                       </tr>
                                                   <?php
                                               }
                                           }
                                       ?>				