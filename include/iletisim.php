    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>İletişim</h2>
          <p>Tatlı  Bir İletişim</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3153.021282595368!2d30.5430743!3d37.789541!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1622901527728!5m2!1str!2str" frameborder="0" allowfullscreen></iframe>
  
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adres:</h4>
                <p><?=$siteadres?></p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Hizmet Saatleri:</h4>
                <p>
                  Pazartesi-Cumartesi:<br>
                  10:00  - 21:00 
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?=$sitemail?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Bizi Aramaktan Çekinmeyin:</h4>
                <p><?=$sitetelefon?></p>
              </div>

            </div>

          </div>
     <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="adsoyad" class="form-control" id="adsoyad" placeholder="Ad Soyad" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="mail" id="mail" placeholder=" Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="konu" id="konu" placeholder="Konu" required>
              </div>
               <div class="form-group mt-3">
                <input type="text" class="form-control" name="telefon" id="telefon" placeholder="Telefon" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="mesaj" rows="8" placeholder="Mesaj" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Mesaj Gönder</button></div>
            </form>

          </div>


        </div>

      </div>
    </section><!-- End Contact Section -->