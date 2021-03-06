<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/IletisimSonucu.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <script
      src="https://kit.fontawesome.com/fcd5fc05d9.js"
      crossorigin="anonymous"
    ></script>
    <title>İletişim Sonucu</title>
  </head>
  <body>
    <!--  -->
    <!-- Navigasyon Barı -->

    <nav class="navbar navbar-expand-lg bg-info navbar-dark py-3 fixed-top">
      <div class="container">
        <a
          href="index.html"
          class="navbar-brand mb-0"
          style="font-size: 20pt; font-weight: bold"
          ><i class="fa-solid fa-mountain"></i><i> Kayseri'yi Tanıyalım</i></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="index.html" class="nav-link"
                ><i class="fa-solid fa-circle-user"></i> Hakkımda</a
              >
            </li>
            <li class="nav-item">
              <a href="Ozgecmis.html" class="nav-link"
                ><i class="fa-solid fa-address-card"></i> Özgeçmiş</a
              >
            </li>
            <li class="nav-item">
              <a href="Sehrim.html" class="nav-link"
                ><i class="fa-solid fa-city"></i> Şehrim</a
              >
            </li>
            <li class="nav-item">
              <a href="Takimimiz.html" class="nav-link"
                ><i class="fa-regular fa-futbol"></i> Takımımız</a
              >
            </li>
            <li class="nav-item">
              <a href="IlgiAlanlarim.html" class="nav-link"
                ><i class="fa-solid fa-chess"></i> İlgi Alanlarım</a
              >
            </li>
            <li class="nav-item">
              <a href="Iletisim.html" class="nav-link"
                ><i class="fa-solid fa-address-book"></i> İletişim</a
              >
            </li>
            <li class="nav-item">
              <a href="Login.html" class="nav-link"
                ><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Bilgi -->

    <section class="mb-5">
      <div class="container bg-info sinir-bukucu p-3">
        <form>
        <div class="m-2">
              <h3 class="text-center text-light">İletişim Sonucu:</h3> <br>
              <div class="container bg-light sinir-bukucu p-2">
                <p class="m-2">Mesaj iletildi. <br> Mesaj içeriği =   <br>
                    Adın soyadın    = <?php echo $_POST['Adsoyad'];
                    ?><br>
                    Mail = 
                    <?php echo $_POST['Email']; 
                    ?> <br>
                    Cinsiyetin = <?php echo $_POST['Cinsiyet']; ?> <br>
                    Şehrin =    <?php echo $_POST['Sehir']; ?> <br>
                    Mesaj =    <?php echo $_POST['Mesaj']; ?> <br>
                    Durum = <?php echo $_POST['Datalist']; ?> <br>
 
                    <?php  
                    if (isset($_POST["hobi"])) {
                        echo "Hobileri = ";
                        foreach ($_POST["hobi"] as $key => $value)
                    {
                        echo $value." "; 
                    }
                    }
                    else{
                     echo "Hiçbir hobisi yok.";
                    }
                    ?> <br></p>
              </div>
              </div>
    </section>

    <!-- Footer -->

    <footer class="p-2 bg-info text-white text-center footer fixed-bottom">
      <div class="container">
        <p class="lead">
          Copyright &copy; Emre Turhan</p>
          <a href="#" class="position-absolute bottom-0 end-0 p-2">
            <i class="bi bi-arrow-up-circle h1 text-dark"></i>
          </a>
        </p>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
