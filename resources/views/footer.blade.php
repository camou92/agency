<!-- Footer -->
<section class="footer">
    <div class="footer-container container">
        <h2>R. State</h2>
        <div class="footer-box">
            @php
              $route = request()->route()->getName();
          @endphp
            <h3>Quick Links</h3>
            <a href="/">Acceuil</a>
            <a href="#about">A Propos</a>
            <a href="{{ route('property.index')}}" @class(['nav-link', 'active' => str_contains($route, 'property.')])">Biens</a>
        </div>
        <div class="footer-box">
            <h3>Locations</h3>
            <a href="#">Pikine</a>
            <a href="#">Nord Foire</a>
            <a href="#">Liberté 6</a>
        </div>
        <div class="footer-box">
            <h3>Contact</h3>
            <a href="#">221 77 804 63 75 </a>
            <a href="#">yourmail@gmail.com</a>
            <div class="social">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Copyright -->
<div class="copyright">
    <p>&#169; Camoutech All Right Reserved</p>
</div>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
