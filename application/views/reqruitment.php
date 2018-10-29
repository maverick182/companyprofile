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

  <!-- Navbar Reqruitment-->
  <div class="navbar-fixed">
    <nav class=" cyan darken-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" data-target="mobile_navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <a href="<?php echo base_url().'reqruitment' ?>" class="brand-logo center">E-Reqruitment</a>
          <ul class="left hide-on-med-and-down">
            <li><a href="<?php echo base_url().'home' ?>"><i class="material-icons">home</i></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--Side Mobile Navbar -->
  <ul class="sidenav" id="mobile_navbar">
    <li><a href="<?php echo base_url().'home' ?>"><i class="material-icons">home</i></a></li>
  </ul>
  <!--Side Mobile Navbar -->

  <!-- Akhir Nabar  -->
  <br><br><br>

  <!-- Form -->
  <div class="row">
  <div class="col l6 offset-l3 m10 offset-m1 s12">
    <form>
      <div class="card-panel">
      <h5>Masukan Data Diri Anda</h5> 
          <div class="input-field">
            <input type="text" name="nama" id="nama">
            <label for="name">Nama</label> 
          </div>
          <div class="input-field">
            <input type="text" name="nomer" id="nomer">
            <label for="name">No. Tlp</label> 
          </div>
          <div class="input-field">
              <input type="email" name="email" id="email" class="validate">
              <label for="email">Email</label>
          </div>
          

          <!-- input file -->
          <div class="file-field input-field">
            <div class="btn-small orange darken-4">
              <span>Upload CV</span>
                <input type="file">
            </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
          </div><br><br><br>

          <!-- btn -->
          <div class="center">
            <button class="btn-small cyan" type="submit" name="action">Submit
              <i class="material-icons right">send</i>
            </button> 
          </div>
        </div>
      </form>
      </div>
    </div>

  
  





  <script type="text/javascript" src="<?php echo base_url().'assets/js/materialize.min.js' ?>"></script>
  <!-- Aktivasi JavaScript untuk Mobile Navbar -->
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);
  </script>
  <!-- Akhir Aktivasi JavaScript untuk Mobile Navbar -->

  <!-- Aktivasi JavaScript untuk Slider -->
  <script>
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider,{
      indicators: false,
      height: 300,
      transition: 600,
      interval: 2500
    });
  </script>
  <!-- Akhir Aktivasi JavaScript untuk Slider -->

  <!-- Scrollspy -->
  <script>
    const scrollspy = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scrollspy,{
      scrollOffset: 70,
      throttle: 20
    });
  </script>
  <!-- AKhir Scrollspy -->

</body>
</html>
