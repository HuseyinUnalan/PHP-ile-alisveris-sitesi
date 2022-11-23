<?php

$slidersor = $db->prepare("SELECT * FROM slider");
$slidersor->execute();

$slidercek = $slidersor->fetch(PDO::FETCH_ASSOC);

$slider_id = $slidercek['slider_id'];
$sliderfotosor = $db->prepare("SELECT * FROM sliderfoto where slider_id=:slider_id order by RAND() limit 1 ");
$sliderfotosor->execute(array(
  'slider_id' => $slider_id
));

$sliderfotocek = $sliderfotosor->fetch(PDO::FETCH_ASSOC);


?>


<style>
  .ustkisim {
    display: flex;
    align-items: center;
    justify-content: center;
    background: url(<?php echo $sliderfotocek['sliderfoto_resimyol'] ?>) no-repeat;
    background-position: center;
    background-size: cover;
    padding-top: 20rem;
    padding-bottom: 20rem;
  }
</style>

<!-- anasayfa başlangıcı  -->

<section class="ustkisim" id="anasayfa">

  <div class="banner">
    
    <h3><?php echo $slidercek['slider_baslik'] ?></h3>
    <p><?php echo $slidercek['slider_icerik'] ?></p>

  </div>

</section>

<!-- anasayfa bitişi -->