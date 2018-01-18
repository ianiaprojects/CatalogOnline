<?php
$show = 1;
if(isset($_GET['student'])){
  $student = $_GET['student'];
  $getMarks = mysqli_query($db->getConnection(), "SELECT * FROM marks WHERE id = '$student'");
  $marks = mysqli_fetch_object($getMarks);
  $medie = 0;
  $getStudent = mysqli_query($db->getConnection(),"SELECT * FROM account WHERE id ='$student'");
  $dateStudent = mysqli_fetch_object($getStudent);
}
else{
  $show = 0;
}
?>
<div class = "container-fluid">
  <div class ="row main-content">
    <div class = "col-sm-2"></div>
    <div class = "col-sm-8">
      <?php if($show == 1){?>
      <h3>Studentul #<?php echo $student;?>: <?php echo $dateStudent->name;?> </h3>
   </div>
   <div class = "col-sm-2"></div>

  </div>
  <div class ="row main-content">
    <div class = "col-sm-2"></div>
    <div class = "col-sm-8">
      <table class="table table-bordered">
       <thead>
         <tr>
           <th>Subiect</th>
           <th>Notă</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>Capitole Speciale de Informatică</td>
           <td><?php echo $marks->class1; $medie+=$marks->class1;?></td>

         </tr>
         <tr>
           <td>Disciplina Complementară</td>
           <td><?php echo $marks->class2; $medie+=$marks->class2;?></td>

         </tr>
         <tr>
           <td>Ecuații Diferențiale</td>
           <td><?php echo $marks->class3; $medie+=$marks->class3;?></td>

         </tr>
         <tr>
           <td>Inteligență Artificială</td>
           <td><?php echo $marks->class4; $medie+=$marks->class4;?></td>

         </tr>
         <tr>
           <td>Medii de Modelare și Proiectare</td>
           <td><?php echo $marks->class5; $medie+=$marks->class5;?></td>

         </tr>
         <tr>
           <td>Stagiu de Licență</td>
           <td><?php echo $marks->class6; $medie+=$marks->class6;?></td>

         </tr>
         <tr>
           <td>Tehnologii Web</td>
           <td><?php echo $marks->class7; $medie+=$marks->class7;?></td>

         </tr>
         <tr>
           <td><b>Media generală</b></td>
           <td><?php echo $medie/7;?></td>

         </tr>
       </tbody>
     </table>
     <?php
   }
   else{
     echo "<h2>Căutați un student!</h2>";
     echo '<br>';
       if($details->rank == 1){ echo '
     <div class="form-group">
       <form action="index.php?act=action_search" method="post" style="margin-bottom:0px;">
       <input type="text" class="form-control" name ="search" placeholder="ex. Hermione Granger, Hermione, Granger"><br>
         <button type="submit" class="btn btn-default">Caută student</button>
       </form>
     </div>
     ';}

   }?>
   </div>
   <div class = "col-sm-2"></div>

  </div>


</div>
