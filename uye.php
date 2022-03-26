 <?php 
   include 'header.php';
 ?>     
        <section class="page-section" id="contact">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Üye Ol</h2>
                
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
              
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
            
                        <form action="islem.php" method="post" id="contactForm" >
                           
                            <div class="form-floating mb-3">
                                <input class="form-control" id="ad" type="text" name="kadi" placeholder="isim giriniz..." data-sb-validations="required" required />
                                <label for="name">Ad Soyad</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Ad Soyad Gerekli!!</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" name="mail" placeholder="name@example.com" data-sb-validations="required,email"  required/>
                                <label for="email">E-mail Adresi</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Bir e-mail gerekli!</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Geçersiz E-mail!</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="tc" type="text" name="tc" placeholder="Tc giriniz..." data-sb-validations="required" required />
                                <label for="name">Tc Kimlik No </label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Kimlik No Gerekli!!</div>
                            </div>
            
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" type="password" name="pw" placeholder="Şifre giriniz" data-sb-validations="required,email" required />
                                <label for="email">Şifre </label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Şifre gerekli!</div>
                             </div>
                           
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Bir hata oluştu..</div></div>
                         
                            
                               <button type="submit" class="btn-lg btn-warning" id="giris" name="kullanicikayit"  style="color:#4b0082" >Üye Ol</button>
                              


                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php   include "footer.php"; ?>
    </body>
</html>
