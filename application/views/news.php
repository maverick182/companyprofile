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
</ul><br>
<!-- Akhir Navbar -->


<!-- News -->
<div class="row">
  <div class="col l9 offset-l3 m9 offset-m3 s12">
    <!-- Add News  -->
    <a href="<?php echo base_url().'control/addnews' ?>" class="btn cyan"><i class="material-icons right">add_circle</i>Add News</a><br><br>
  </div>
</div>

<!-- Table -->
<div class="row">
  <div class="col l10 offset-l2 m10 offset-m2 s12">
    <table class="highlight centered">
      <thead>
        <tr>
          <th>No</th>
          <th>Date</th>
          <th>Title</th>
          <th>Content</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php 
        $no = 1;
        foreach($berita as $b){
        ?>
        <tbody>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $b->tanggal_berita ?></td>
          <td><?php echo $b->judul_berita ?></td>
          <td><?php echo $b->isi_berita ?></td>
          <td><?php echo $b->img?></td>
          <td>
            <a class="btn-small red" type="submit" name="action" href="<?php echo base_url("control/hapus_berita/$b->id_berita"); ?>" onclick="return confirm('Anda yakin menghapus data ini')">
              <i class="material-icons">delete</i>
            </a>
           <a class="btn-small green modal-trigger" href="#modal2"><i class="material-icons">edit</i></a>
          </td>
        </tr>
      </tbody>
    <?php } ?>
    </table>
  </div>
</div>


 <!-- test -->
  <!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  <!--  -->




<!-- JavaScript -->
<script type="text/javascript" src="<?php echo base_url().'assets/js/materialize.min.js' ?>"></script>

<!-- SideNav -->
<script>
  const sideNav = document.querySelectorAll('.sidenav');
  M.Sidenav.init(sideNav);
</script>

<!-- Modal -->
<script>
   $(document).ready(function(){
   $('.modal').modal();
  });
</script>



</body>
</html>