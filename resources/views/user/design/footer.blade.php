<footer class="page-footer">
    <div class="container">
        <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Company</h5>
                <ul class="footer-menu">
                    <li><a href="{{ route('front.about') }}">About Us</a></li>
                    <li><a href="{{ route('front.home') }}">Career</a></li>
                    <li><a href="https://www.linkedin.com/in/omarbnkhattab">Editorial Team</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>More</h5>
                <ul class="footer-menu">
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Advertise</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Our partner</h5>
                <ul class="footer-menu">
                    <li><a href="#">One-Fitness</a></li>
                    <li><a href="#">One-Drugs</a></li>
                    <li><a href="#">One-Live</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Contact</h5>
                <p class="footer-link mt-2">6th Of October, El Giza, Egypt</p>
                <a href="#" class="footer-link">02 383 40 727</a>
                <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" class="footer-link">om926933@gmail.com</a>

                <h5 class="mt-3">Social Media</h5>
                <div class="footer-sosmed mt-3">
                    <a href="https://www.facebook.com/profile.php?id=100005905234471" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                    <a href="https://twitter.com/omarbahga" target="_blank"><span class="mai-logo-twitter"></span></a>
                    <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                    <a href="https://www.instagram.com/3amurr_" target="_blank"><span class="mai-logo-instagram"></span></a>
                    <a href="https://www.linkedin.com/in/omarbnkhattab" target="_blank"><span class="mai-logo-linkedin"></span></a>
                </div>
            </div>
        </div>

        <hr>

        <p class="text-center" id="copyright">Copyright &copy; 2024 <a href="https://www.linkedin.com/in/omarbnkhattab" target="_blank">Omar Muhammed</a>. All right
            reserved</p>
    </div>
</footer>

<script>
    const today = new Date().toISOString().split('T')[0];
    document.getElementById("date").setAttribute('min', today);
</script>

<script src="{{ asset('assets') }}/js/jquery-3.5.1.min.js"></script>

<script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('assets') }}/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="{{ asset('assets') }}/vendor/wow/wow.min.js"></script>

<script src="{{ asset('assets') }}/js/theme.js"></script>

</body>

</html>
