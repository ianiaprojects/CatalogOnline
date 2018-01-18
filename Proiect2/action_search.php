<?php
$name = $_POST['search'];
$getData = mysqli_query($db->getConnection(), "SELECT * FROM account WHERE rank = 0");


$i=0;
echo '   <div class ="row main-content">
    <div class = "col-sm-3"></div>
    <div class = "col-sm-6">
 <table class="table table-bordered">
   <thead>
     <tr>
       <th>Nume</th>
       </tr>
     </thead>
     <tbody>';
while($i<$getData->num_rows){
  $data = mysqli_fetch_object($getData);
  if(strstr( $data->name, $name)){
    echo '<tr><td><a href="index.php?act=marks&student='.$data->id.'">'.$data->name.'</a></td></tr>';
  }
  $i++;
}
echo '</tbody>
</table><div class = "col-sm-3"></div>

</div>';
?>
