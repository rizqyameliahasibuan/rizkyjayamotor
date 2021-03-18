<!DOCTYPE html>
<html>
    <head>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel ="stylesheet" href="css/index.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
    
    <body>
      <title> Rizky Jaya Motor-Tanggapan </title>

<!-- navbar -->
<div id="nav" class="navbar-fixed scrollspy">
        <nav class ="blue-grey">
          <div class="container">
            <div class="nav-wrapper">
              <a href="#!" class="brand-logo"></a> 
              <img src ="img/logo/2.png" width="60px" height="60px">
              <a href="#" data-target="mobile-bar" class="sidenav-trigger">
              <i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li> <a href="index.html" class="center teal lighten-5-text">Rizky Jaya Motor</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- said nav -->
    <ul class="sidenav" id="mobile-bar"> 
        <li><a href="index.html" class="center teal lighten-5-text">Rizky Jaya Motor</a></li>
    </ul>

    <!-- tanggapan -->
 <?php
if (isset ($_POST['submit']) ){

  $nama =$_POST['nama'];
  $telepon =$_POST ['telepon'];
  $alamat =$_POST ['alamat'];
  $merk = $_POST['merk'];
  $email= $_POST ['email'];
  $pesan = $_POST['pesan'];
  
  
  if ( mail($nama, $telepon , $alamat, $merk, $email, $pesan) ){
      echo 'email berhasil terkirim';
  } else {
      echo 'email tidak berhasil terkirim';
  }
  }
 ?>
    <form action="tanggapan.php" method="post">
      <section id="tanggapan" class="tanggapan scrollspy">
        <div class="container">
          <div class="row">
            <h3 class="center light"> Tanggapan </h3>
            <hr class="" width="200px">
          </div>
                  <div class="input-field col m6 s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" name="nama" class="validate" 
                    placeholder="Nama">
                    <label for="icon_prefix"></label>
                  </div>
                  <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_prefix" name="telepon" class="validate"
                    placeholder="Telepon">
                    <label for="icon_prefix"></label>
                  </div>
                  <div class="input-field col s6">
                      <i class="material-icons prefix">edit_location</i>
                      <input id="icon_prefix" name="alamat" class="validate"
                      placeholder="Alamat">
                      <label for="icon_prefix"></label>
                  </div>
                  <div class="input-field col s6">
                      <i class="material-icons prefix">group_work</i>
                      <input id="icon_prefix" name="merk" class="validate"
                      placeholder="Merk Kendaraan">
                      <label for="icon_prefix"></label>
                  </div>
                  <div class="input-field col s6">
                      <i class="material-icons prefix">import_contacts</i>
                      <input id="icon_prefix" type="email" name="email" class="validate"
                      placeholder="Email">
                      <label for="icon_prefix"></label>
                  </div>
                  <div class="input-field col s6">
                      <i class="material-icons prefix">forum</i>
                      <textarea id="textarea1" name="pesan" class="materialize-textarea"
                      placeholder="Kritik dan Saran"></textarea>
                      <label for="textarea1"></label>
                  </div>
                  <button class="btn waves-effect waves-light"
                      type="submit" name="action">Kirim
                      <i class="material-icons left">send</i>
                    </button>
                </div>
         </section>
</form>


                <script type="text/javascript" src="js/materialize.min.js"></script>
                <script>
                const materialbox = document.querySelectorAll('.materialboxed');
                M.Materialbox.init(materialbox);
                
                const scroll =document.querySelectorAll('.scrollspy');
                M.ScrollSpy.init(scroll);

                const sideNav = document.querySelectorAll('.sidenav');
                M.Sidenav.init(sideNav);
                </script>

                <!-- footer -->
                <footer class="blue-grey white-textcenter">
                    <h5 class="center white-text"> Rizqy Amelia Hasibuan &copy; Jan2021</h3>
                </footer>


                
        </body>

    </head>
</html>