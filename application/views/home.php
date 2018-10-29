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

<body id="home" class="scrollspy">

  <!-- Navbar -->
  <div class="navbar-fixed">
    <nav class=" cyan darken-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" data-target="mobile_navbar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <a href="<?php echo base_url().'home' ?>" class="brand-logo">FajriaGroup</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#Information">Information</a></li>
            <li><a href="<?php echo base_url().'blog' ?>">Article</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="#map">Location</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- Akhir Navbar -->

  <!--Side Mobile Navbar -->
  <ul class="sidenav" id="mobile_navbar">
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About Us</a></li>
    <li><a href="<?php echo base_url().'blog' ?>">Article</a></li>
    <li><a href="#Information">Information</a></li>
    <li><a href="#contact">Contact Us</a></li>
    <li><a href="#map">Location</a></li>
  </ul>
  <!--Side Mobile Navbar -->

  <!-- Akhir Navbar -->


  <!-- Slider -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="<?php echo base_url().'assets/img/computer2.jpg' ?>">
        <div class="caption left-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url().'assets/img/computer4.jpg' ?>">
        <div class="caption right-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url().'assets/img/computer5.jpg' ?>">
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</h5>
        </div>
      </li>
    </ul> 
  </div>
  <!-- Akhir Slider -->


  
  <!-- Bisnis Kami -->
  <section class="bisnis" id="bisnis">
    <div class="container">
      <div class="row">
        <h3 class="center light">Our Business</h3>
        <hr>
        <div class="col m6 s12 light">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </p>
      </div>
      <div class="col m6 s12 light">
        <p>Web Development</p>
        <div class="progress">
          <div class="determinate" style="width: 70%"></div>
        </div>
        <p>User Interface</p>
        <div class="progress">
          <div class="determinate" style="width: 90%"></div>
        </div>
        <p>User Experience</p>
        <div class="progress">
          <div class="determinate" style="width: 50%"></div>
        </div>
        <p>Mobile Development</p>
        <div class="progress">
          <div class="determinate" style="width: 40%"></div>
        </div>
        <p>Game Development</p>
        <div class="progress">
          <div class="determinate" style="width: 50%"></div>
        </div>
        <p>Testing App</p>
        <div class="progress">
          <div class="determinate" style="width: 70%"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Bisnis Kami -->


<!-- Our Clients -->
<div class="parallax-container">
  <div class="parallax"><img src="<?php echo base_url().'assets/img/bw1.jpg' ?>"></div>
  <div class="container clients">
    <h4 class="center light white-text">Our Clients</h4>
    <div class="row">
      <div class="center col m3 s12">
        <img src="<?php echo base_url().'assets/img/tokopedia.png' ?>">
      </div>
      <div class="center col m3 s12">
        <img src="<?php echo base_url().'assets/img/blibli.png' ?>">
      </div>
      <div class="center col m3 s12">
        <img src="<?php echo base_url().'assets/img/gojek.png' ?>">
      </div>
      <div class="center col m3 s12">
        <img src="<?php echo base_url().'assets/img/bukalapak.png' ?>">
      </div>
    </div>   
  </div>
</div>
<!-- Akhir Our Clients -->

<!-- About Us -->
<section class="about scrollspy"  id="about">
  <div class="container">
    <div class="row">
      <h3 class="center light ">About Us</h3>
      <hr>
      <div class="col s12 light ">
        <h5>Profil</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h5>Struktur Organisasi</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h5>Visi & Misi</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>      
    </div>
  </div>
</section>
<!-- Akhir About Us -->

<!-- Information -->
<section class="Information scrollspy" id="Information">
  <div class="container">
    <div class="row">
      <h3 class="center light">Information</h3>
      <hr>
      <div class="col s12 light">
        <h5>Hubungan Investor</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h5>E-Recruitment</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="<?php echo base_url().'control/reqruitment' ?>" class="btn cyan">Lihat Lowongan</a>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Information -->


<!-- Contact Us -->
<section class="contact scrollspy" id="contact">
  <div class="container">
    <h3 class="center light">Contact Us</h3>
    <hr>
    <div class="row">
      <div class="col m5 s12">
        <div class="card-panel cyan darken-2 center white-text">
          <i class="material-icons">email</i>
          <h5>Contact</h5>
          <p>Silahkan hubungi kami apabila ada sesuatu hal yang ingin ditanyakan. Silahkan hubungi melalui alamat dan nomor telepon yang tertera pada website kami</p>
        </div>
        <ul class="collection width-header">
          <li class="collection-header"><h4><center>Our Office</center></h4></li>
          <li class="collection-item"> <b>Alamat :</b> Sentra Bisnis Harapan Indah Blok : SS 20, No. 2, Kelurahan Pejuang
          , Kecamatan Medan Sastra, Bekasi </li>
          <li class="collection-item"> <b>Phone :</b> 021-8897 7497</li>
          <li class="collection-item"> <b>Fax :</b> 021-8838 7185</li>
          <li class="collection-item"> <b>Email :</b> </li>
        </ul>          
      </div>
      <div class="col m7 s12">
        <form class= "" action="formulir" method= "post">
          <div class="card-panel"> 
            <h5>Silahkan isi formulir dibawah ini</h5>
            <div class="input-field">
              <input type="text" name="nama" id="nama" class="form-control">
              <label for="name">Nama</label>
            </div>
            <div class="input-field">
              <input type="email" name="email" id="email" class="form-control">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" name="phone" id="phone" class="form-control">
              <label for="phone">No.Tlp</label>
            </div>
            <div class="input-field">
              <textarea name="pesan" class="materialize-textarea" id="pesan"></textarea>
              <label for="pesan">Masukan Pesan</label>
            </div>
            <div class="col-xs-4">
            <input style="width: 20%" type="submit" value="Kirim" class="btn cyan darken-2">
            </div>

            <!--<button type="submit" class="btn cyan darken-2">Kirim</button>
            -->
          </div>         
        </form>
      </div>
    </div>
  </div>   
</section>
<!-- Akhir Contact Us -->


<!-- Map -->
<section class="map scrollspy" id="map">
  <div class="container">
    <h3 class="center light">Location</h3>
    <hr>
    <div class="row">
      <div class="col s12">
        <p>Lokasi saat ini menunjukan lokasi terdekat</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6351748300672!2d106.97818092914927!3d-6.192153899719822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb76a034830460d6a!2sCV.+Bintang+Usaha+Makmur!5e0!3m2!1sid!2sid!4v1533985659182" width="920" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div> 
</section><br><br>
<!-- Akhir Map -->





<!-- Footer -->
<footer class=" cyan darken-4">
  <div class="container">
    <div class="row">
      <div class="col l6 m6 s12">
        <h5 class="light white-text">PT. Fajria Fajar Asia</h5>
        <p class="grey-text text-lighten-3">Sentra Bisnis Harapan Indah Blok : SS 20, No. 2, Kelurahan Pejuang
        , Kecamatan Medan Sastra, Bekasi</p>
        <p class="grey-text text-lighten-3"> Phone : 021-8897 7497 </p>
        <p class="grey-text text-lighten-3"> Fax : 021-8838 7185 </p>
        <p class="grey-text text-lighten-3"> Email : </p> 
      </div>
      <div class="col l6 m6 s12">
        <h5 class="light white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#home">Home</a></li>
          <li><a class="grey-text text-lighten-3" href="#about">About Us</a></li>
          <li><a class="grey-text text-lighten-3" href="blog.html">Article</a></li>
          <li><a class="grey-text text-lighten-3" href="#Information">Information</a></li>
          <li><a class="grey-text text-lighten-3" href="#contact">Contact Us</a></li>
          <li><a class="grey-text text-lighten-3" href="#map">Location</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="white">
      <div class="container">
        <div class="center">
          Copyright © 2018 PT. Fajria Fajar Asia 
          <div class="center">
            Semua konten yang termuat di website ini merupakan hak milik PT. Fajria Fajar Asia
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Akhir Footer -->




<!--JavaScript at end of body for optimized loading-->
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
    height: 600,
    transition: 600,
    interval: 3000
  });
</script>
<!-- Akhir Aktivasi JavaScript untuk Slider -->

<!-- Paralax -->
<script>
  const parallax = document.querySelectorAll('.parallax');
  M.Parallax.init(parallax);
</script>
<!-- Akhir Paralax -->

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