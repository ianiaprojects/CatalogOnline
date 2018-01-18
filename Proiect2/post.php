<?php
$rank = $details->rank;

if($rank == 1){
	echo '
		<form action="./makepost.php" method="post">
  <fieldset>
   <h4>Introduceți un anunț nou</h4><br>
    <textarea name="post" rows="5" cols="130"></textarea>
	<br>
	<br>
	<input type="submit" value="Postează noul mesaj" class="pull-right">
	<input type="text" hidden value="'.$details->name.'" name="user"/>
  </fieldset>
</form>
	';

}

$getPosts = mysqli_query($db->getConnection(), "SELECT * FROM posts ORDER BY id ASC");

$n =  mysqli_num_rows($getPosts);
$i = 0;
while($i < $n){
	$postContent = mysqli_fetch_object($getPosts);
	$text = $postContent->text;
	$poster = $postContent->poster;
	$postDate = $postContent->date;

	echo'
	<div class="row" style="margin:5px;">
		<div class="col-md-12" style="border-bottom:1px solid black; border-top:1px solid black; margin:10px; background-color:rgba(0,0,0,0.1)">
			<p style="margin-left:10px;margin-top:15px;">'.$text.'</p>
			<br> <small class="pull-right" > postat de '.$poster.', '.$postDate.'</small><br>
		</div>
	</div>


	';
	$i++;
}


?>
