
<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<head>
<title>Catalog Online</title>
<link rel = "stylesheet" href = "./css/bootstrap.min.css" >
<link rel = "stylesheet" href = "./css/style.css" >
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hogwarts School of Witchcraft and Wizardry</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php?act=front">Pagina de start</a></li>
      <?php if($details->rank==0){
    echo '  <li><a href="index.php?act=marks&student='.$details->id.'">Catalog</a></li> ';
  }
    else {
        echo '  <li><a href="index.php?act=marks">Catalog</a></li> ';
    }

      ?>
      <li><a href="orar.pdf">Orar</a></li>
      <?php
        if($details->rank == 1){
          echo '<li><a href="index.php?act=create">Creează Cont</a></li>';
        }
      ?>
        <li><a href="index.php?act=logout">Deloghează-te</a></li>
    </ul>

    <div class="navbar-form navbar-left pull-right">
      
    </div>
  </div>
</nav>
