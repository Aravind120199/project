
<?php

include('connect.php');

?>







<div class="sales-boxes">
    
  <div class="recent-sales box">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js">

  <div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->

<?php
   $id=$_GET['id'];
    $sql = "SELECT * FROM `subject` where id='$id'";
   $data = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($data);
   $subject = $row['subject'];
   $teacher = $row['teacher'];
   $fees = $row['fees '];
   $month= $row['month'];


//    WHERE `email_id`= '$var'
  
?>

        <div class="col-xl-8">
            <!-- Account details card-->
            <button  id="pdfButton" style="background-color:green; color:#ffff;"><b>Print</b></button>
            <td><a class = "btn" href="http://localhost/website/payfee.php"  id="pdfButton" style="background-color:red; color:#ffff;"><b>Close</b></a></td>
            <div class="card" id="generatePDF">
                
                <div class="card mb-4">
                    <div class="card-header"><h1>Masters Tuition Center<h1><br> 
                    <h5>masterstution@gmail.com<h5>
                        <h5> Contact number : 6282141791<h5><br>
                        <br>
                        <h4>Fees paid date<h4><?php echo date("d/m/y");?>
                    </div>
                
                    <div class="card-body">
                    
                        <form>
                       
                        <!-- Form Group (username)
                        <div class="mb-3">
                            <h3>
                            <label class="small mb-1" for="subject">subject</label>
                            <h3>
                            <input class="form-control" id="subject" type="text" readonly="readonly" value="<?php  echo $subject;?>"><h3>
                            <h3>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <h3>
                                <label class="small mb-1" for="teacher">Teacher</label>
                                <h3>
                                <input class="form-control" id="teacher" type="text" readonly="readonly"  value=<?php  echo $teacher;?>><h3>
                                <h3>
                            </div>
                            <!-- Form Group (email address)-->
                            <div class="mb-3">
                            <h3>
                            <label class="small mb-1" for="fees">Fees</label>
                            <h3>
                            <input class="form-control" id="fees" type="num"  readonly="readonly"  value=<?php  echo $fees;?>><h3>
                                <h3>
                            </div>
                            <!-- Form Row-->
                             <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                                <div class="col-md-6">
                                <h3>
                                <label class="small mb-1" for="month">Month</label><h3>
                                    <h3>
                                <input class="form-control" id="month" type="text"  readonly="readonly"  value=<?php  echo $month;?>><h3>
                                </div>
                                <div class="col-md-6">
                                <h3>
                                <label class="small mb-1" for="month">Status</label><h3>
                                    <h3>
                                <input class="form-control" id="Status" type="text"  readonly="readonly" value="Paid"><h3>
                                </div>
                           
                                
                           
                        </form>
                    
                    </div>
            </div>
</div>
          <h3>  <!-- <button type="button" style="background-color:green; color:#ffff;" onclick="alert('')">Print!</button> -->
                           
        </div>
      
    </div>
</div>
 </div>
 </div>
 </div>
</div>

           
          </div>
        </div>
       
      </div>
    </div>
  </section>


  <script>
      var button = document.getElementById("pdfButton");
      var makepdf = document.getElementById("generatePDF");
      button.addEventListener("click", function () {
         var mywindow = window.open("", "PRINT", "height=600,width=600");
         mywindow.document.write(makepdf.innerHTML);
         mywindow.document.close();
         mywindow.focus();
         mywindow.print();
         return true;
      });
   </script>


</body>
</html>

