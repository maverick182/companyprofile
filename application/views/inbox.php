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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<!-- <script type="text/javascript">
  function detail_inbox(id){
   save_method = 'update';
      $('#form')[0].reset();
   $.ajax({
        url : "<?php ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          //alert(data);
          $('[name="id"]').val(data.id);
          $('[name="nama"]').val(data.nama);
          $('[name="email"]').val(data.email);
          $('[name="notelp"]').val(data.notelp);
          $('[name="pesan"]').val(data.pesan);

          $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
          $('.modal-title').text('Detail Inbox'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
</script> -->
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

<!-- News -->

<!-- Table -->
<div class="row">
  <div class="col l10 offset-l2 m10 offset-m2 s12">
    <table class="highlight centered">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>No.Tlp</th>
          <th>Pesan</th>
          <th>Action</th>
        </tr>
      </thead>
        <?php 
        $no = 1;
        $cut_msg = null;
        foreach($formulir as $f){
        ?>
        <tbody>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $f->nama ?></td>
          <td><?php echo $f->email ?></td>
          <td>asd</td>
          <td><?php 
            $msg = $f->pesan;
            $char = strlen($msg);
            if ($char >= 33) {
              $cut_msg = substr($msg, 0, 33);
              echo $cut_msg . "...";
            }
            else {
              echo $msg;
            } ?>
          </td>
          <?php
          $msg = $f->pesan;
          $char = strlen($msg);
          echo $char;
          ?>
          <td>
            <a class="btn-small red" href="<?php echo base_url("control/hapus_inbox/$f->id"); ?>" type="submit" name="btnhapus" onclick="return confirm('Anda yakin menghapus data ini')">
              <i class="material-icons">delete</i>
            </a>
            <a class="btn-small green modal-trigger" href="<?php echo "#modal"."$f->id"; ?>" <i class="material-icons">zoom_in</i></a>
            <!--<a href="'control/hapus_inbox'.<?php $f->id ?>" class="btn-small red" type="button" name="btnHapusFormulir"><i class="material-icons">delete</i></a>
            <a href="control/lihat_inbox" class="btn-small green" type="button" name="btnHapusFormulir"><i class="material-icons">zoom_in</i>-->
          </td>
        </tr>
        </tbody>
        <?php } ?>
      </table>
  </div>

  <!-- test -->
  <!-- Modal Structure -->
  <?php foreach($formulir as $f) {?>
  <div id="<?php echo "modal"."$f->id"; ?>" class="modal">
    <div class="modal-content">
      <h4><?php echo "$f->nama ($f->email)"; ?></h4>
      <p><?php echo $f->pesan; ?></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  <?php } ?>
  <!--  -->

</div>

</body>
</html>  





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