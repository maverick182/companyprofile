<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/css/materialize.min.css' ?>"  media="screen,projection"/>  
  <!-- Icon CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <!-- my CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/mycss.css' ?>">
</head>

<body>

  <!-- Navbar -->
   <div class="navbar-fixed">
    <nav class=" cyan darken-2">
     <div class="container">
      <div class="nav-wrapper">
        <a href="<?php echo base_url().'control/dashboard' ?>" class="brand-logo center">Admin Lab</a>
      </div>
    </div>
  </nav>
</div>

<!--SideNav -->
<div class="container section">
  <a href="#" class="sidenav-trigger" data-target="menu-side">
    <i class="material-icons">menu</i>
  </a>
</div>

<!-- IsiSideNav -->
<ul class="sidenav" id="menu-side">
  <li><a href="<?php echo base_url().'control/dashboard' ?>"><i class="material-icons">view_compact</i>Dashboard</a></li>
  <li><a href="<?php echo base_url().'control/news' ?>"><i class="material-icons">message</i>News</a></li>
  <li><a href="<?php echo base_url().'control/inbox' ?>"><i class="material-icons">mail_outline</i>Inbox</a></li>
  <li><a href="<?php echo base_url().'control/req' ?>"><i class="material-icons">description</i>Recruitment</a></li>
  <li><a href=""><i class="material-icons">forward</i>Logout</a></li>    
</ul>
<!-- Akhir Navbar -->

<!-- Add News -->
<div class="row">
  <div class="col l6 offset-l3 m10 offset-m1 s12">
    <form action="<?php echo base_url('control/innews'); ?>" method="post">
      <div class="card-panel"> 
        <h5 class="center">Add News</h5><br><br>

          <!-- Datepicker -->
           <div class="input-field">
            <input type="text" class="datepicker" id="tanggal" name="tanggal">
            <label for="datepicker">Tanggal Posting</label> 
          </div><br>
          

          <!-- Title -->
          <div class="input-field">
            <input type="text" name="judul" id="judul">
            <label for="judul">Judul</label> 
          </div><br>

          <!-- content -->
          <div class="input-field">
            <textarea id="content" name="content" class="materialize-textarea"></textarea>
            <label for="textarea1">Content</label>
          </div><br>

          <!-- input file -->
          <div class="file-field input-field">
            <div class="btn-small orange darken-4">
              <span>Choose Image</span>
                <input type="file" id="img" name="img">
            </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
          </div><br><br><br>

          <!-- btn -->
          <div class="center">
            <button class="btn-small cyan" type="submit" name="action">Posting
              <i class="material-icons right">send</i>
            </button> 
          </div>
        </div>
      </form>
      </div>
    </div>







<!-- JavaScript -->
<script type="text/javascript" src="<?php echo base_url().'assets/js/materialize.min.js' ?>"></script>

<!-- SideNav -->
<script>
  const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);
</script>

<!-- MaterialBox -->
<script>
  const material = document.querySelectorAll('.materialboxed');
  M.Materialbox.init(material);
</script>

<script>
  const datepicker = document.querySelectorAll('.datepicker');
  M.Datepicker.init(datepicker);
</script>

</body>
</html>

