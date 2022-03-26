<?php  include 'header.php';
    
 ?>         
        <section class="page-section" id="contact">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Giriş Yap</h2>
                
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
              
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
            
                        <form id="contactForm"  action="islem.php" method= "post" data-sb-form-api-token="API_TOKEN">
                           
                            <div class="form-floating mb-3">
                                <input class="form-control" id="tc" name="tc" type="text" placeholder="Tc giriniz..." data-sb-validations="required" />
                                <label for="name">Tc Kimlik No </label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Kimlik No Gerekli!!</div>
                            </div>
                          
                            <div class="form-floating mb-3">
                                <input class="form-control" id="password" name="password"  type="password" placeholder="Şifre giriniz" data-sb-validations="required,email" />
                                <label for="email">Şifre </label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">Şifre gerekli!</div>
                             </div>
                             <button type="submit" class="btn-lg btn-danger" id= "giris" name="giris_yap" style="color:#adff2f">Giriş Yap</button>
                            
                              
                              





                           
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php   include "footer.php"; ?>
        <!-- Footer
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Adres</h4>
                        <p class="lead mb-0">
                        Bilkent yerleşkesi , Üniversiteler mah. Dumlupınar bulvarı 6001. Cad. No​:9 Çankaya/Ankara 06800.
                            <br />
                            SANTRAL: Tel :+90 (312) 585 1000
                        </p>
                    </div>
                   
                   
                </div>
            </div>
        </footer>
         Copyright Section
        <div class="copyright py-4 text-center text-write">
            <div class="container"><small>Copyright &copy; 2021 Tüm Hakları Saklıdır</small></div>
        </div>
         -->
                  
    
       
    </body>
</html>
