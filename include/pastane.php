 <section id="menu" class="menu section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Pastane Menüsü</h2>
      <p>Sizin Kadar Tatlı Ürünler...</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="menu-flters">
         
          <li data-filter=".filter-starters1">Sütlü  Tatlılar</li>
          <li data-filter=".filter-starters2">Kurabiyeler (Porsiyon)</li>
          <li data-filter=".filter-starters6">Pastalar</li>
          <li data-filter=".filter-starters3">Adet Tatlılar</li>
          

        </ul>
      </div>
    </div>

    <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">


      <?php
      $urunBilgisi=$VT->VeriGetir("urunler","WHERE kategori=?",array(52),"ORDER BY sirano ASC");
      if($urunBilgisi!=false){
        for ($i=0; $i <count($urunBilgisi) ; $i++) { 
          ?>

          <div class="col-lg-6 menu-item filter-starters1">
            <!--<img src="<?=SITE?>images/urunler/<?=$urunBilgisi[$i]["resim"]?>" class="menu-img" alt="<?=stripslashes($urunBilgisi[$i]["baslik"])?>">-->
            <div class="menu-content">
              <a href="#"><?=stripslashes($urunBilgisi[$i]["baslik"])?></a><span>₺<?=stripslashes($urunBilgisi[$i]["fiyat"])?></span>
            </div>
            <div class="menu-ingredients">
              <?=stripslashes($urunBilgisi[$i]["metin"])?>
            </div>
          </div>
          <?php
        }
      }



      ?>  
      <?php
      $urunBilgisi=$VT->VeriGetir("urunler","WHERE kategori=?",array(51),"ORDER BY sirano ASC");
      if($urunBilgisi!=false){
        for ($i=0; $i <count($urunBilgisi) ; $i++) { 
          ?>

          <div class="col-lg-6 menu-item filter-starters2">
            <!--<img src="<?=SITE?>images/urunler/<?=$urunBilgisi[$i]["resim"]?>" class="menu-img" alt="<?=stripslashes($urunBilgisi[$i]["baslik"])?>">-->
            <div class="menu-content">
              <a href="#"><?=stripslashes($urunBilgisi[$i]["baslik"])?></a><span>₺<?=stripslashes($urunBilgisi[$i]["fiyat"])?></span>
            </div>
            <div class="menu-ingredients">
              <?=stripslashes($urunBilgisi[$i]["metin"])?>
            </div>
          </div>
          <?php
        }
      }



      ?>  
      <?php
      $urunBilgisi=$VT->VeriGetir("urunler","WHERE kategori=?",array(54),"ORDER BY sirano ASC");
      if($urunBilgisi!=false){
        for ($i=0; $i <count($urunBilgisi) ; $i++) { 
          ?>

          <div class="col-lg-6 menu-item filter-starters3">
            <!--<img src="<?=SITE?>images/urunler/<?=$urunBilgisi[$i]["resim"]?>" class="menu-img" alt="<?=stripslashes($urunBilgisi[$i]["baslik"])?>">-->
            <div class="menu-content">
              <a href="#"><?=stripslashes($urunBilgisi[$i]["baslik"])?></a><span>₺<?=stripslashes($urunBilgisi[$i]["fiyat"])?></span>
            </div>
            <div class="menu-ingredients">
              <?=stripslashes($urunBilgisi[$i]["metin"])?>
            </div>
          </div>
          <?php
        }
      }



      ?> 

 
      <?php
      $urunBilgisi=$VT->VeriGetir("urunler","WHERE kategori=?",array(53),"ORDER BY sirano ASC");
      if($urunBilgisi!=false){
        ?>

        <?php
        for ($i=0; $i <count($urunBilgisi) ; $i++) { 
          ?>

          <div class="col-lg-6 menu-item filter-starters6">
            <!--<img src="<?=SITE?>images/urunler/<?=$urunBilgisi[$i]["resim"]?>" class="menu-img" alt="<?=stripslashes($urunBilgisi[$i]["baslik"])?>">-->
            <div class="menu-content">
              <a href="#"><?=stripslashes($urunBilgisi[$i]["baslik"])?></a><span>₺<?=stripslashes($urunBilgisi[$i]["fiyat"])?></span>
            </div>
            <div class="menu-ingredients">
              <?=stripslashes($urunBilgisi[$i]["metin"])?>
            </div>
          </div>
          <?php
        }
      }



      ?> 
     
    </div>

  </div>
</section><!-- End Menu Section -->
