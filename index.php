<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
   <title>TUGAS REFLEKSI DIRI 2</title>
</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header  -->
<body background ="https://i.postimg.cc/m2R09WYd/363000c1b5735897d229b4d3f2504126.jpg";
<header class="header">
        <div class="card-body"><div class="container mt-3 mb-5">
        <center><img src="https://i.postimg.cc/c46jGQNW/IMG-20221018-WA0026.jpg" class="rounded-circle" alt="Image" height="300" width="220"/></div></div></div></div></center></section>
</header>

<!-- home  -->
<section class="home" id="home">
   <div class="content">
      <div class="container mt-3 mb-3">
      <h3 data-aos="fade-up">Hi, i am Siti Mutamimah</h3>
      <span data-aos="fade-up"><a class="social-media-icon" href="https://instagram.com/s.imhh?igshid=ZDdkNTZiNTM="><span class="fab fa-instagram"></span></a>
      <a class="social-media-icon" href="https://www.linkedin.com/in/siti-mutamimah-97b992265/"><span class="fab fa-linkedin"></span></a>
      <a class="social-media-icon" href="https://github.com/dariakuuntukkamu"><span class="fab fa-github"></span></a>
      <a class="social-media-icon" href="https://www.youtube.com/@mhimh/videos"><span class="fab fa-youtube"></span></a>
      <a class="social-media-icon" href="https://wa.me/082265107650"><span class="fab fa-whatsapp"></span></a></span>
   </div>
</section>
<section>
   <div class="card-group">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Work Ekspression</h5>
      <p class="card-text">✦Field work practice in the STARINDO SHOP
      <br>✦YUK NGAJI PURWOKERTO Volunteer 
      <br>✦AMIKOM MENGAJI Divisi Konsumsi
      <br>✦RAIHAN Divisi Perlengkapan
      </p> </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Education</h5>
      <p class="card-text">Information Technology | 6 | Universitas Amikom Purwokerto
      <br>✦UKM INTERMEDIA -Multimedia
      <br>✦UKM LDK IMAM -Anggota
      <br>✦STUDI INDEPENDEN -PT Maribelajar Indonesia Cerdas</p></p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Additional Information</h5>
      <p class="card-text">✦Skill <br>Microsoft Office 98% | Adobe Photoshop 87% <br> Corel Draw  90% | HTML 78% | Python 80%.</p>
      ✦Interest <br> Reading | Writing | Watching Anime</div>
  </div>
</div>
</section>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
   AOS.init({
      duration:800,
      delay:300
   });
</script>
</body>
</html>