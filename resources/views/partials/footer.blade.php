<footer id="f" class="w3l-footer-29-main">
    <div class="footer-29-w3l py-5">
        <div class="container pt-md-5 pt-4">
            <div class="row footer-top-29 pt-lg-5 pt-sm-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="address-grid">
                        <h5>001 rue rabat st, 5th Asafi, <br> Maroc.</h5>
                        <h5 class="mt-sm-5 mt-4">Everyday: <span> 9 AM - 5:30 PM</span></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class="address-grid">
                        <h5 class="top-bold">Phone</h5>
                        <h5 class="phone-number-text mt-2"><a href="tel:+1(21) 112 7368">+(212)6 14 23 23 58</a></h5>
                    </div>
                    <div class="address-grid mt-sm-5 mt-4">
                        <h5 class="top-bold">E-mail</h5>
                        <h5 class="email-cont-text mt-1"> <a href="mailto:youcode@gmail.com"
                                class="mail">youcode@gmail.com</a></h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5 footer-list-menu ps-lg-0 mt-lg-0 mt-sm-5 mt-4">
                    <div class="address-grid">
                        <h5 class="mb-sm-4 mb-3 pb-lg-2 top-bold">Support Links</h5>
                        <ul>
                            <li><a href="#privacy">Privacy Policy</a></li>
                            <li><a href="#terms"> Terms of Service</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="#support"> Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="address-grid col-lg-4 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 w3l-footer-16-main">
                    <h5 class="top-bold">Subscribe Here</h5>
                    <form action="#" class="subscribe d-flex mt-sm-4 mt-3 pt-lg-2 mb-4" method="post">
                        <input type="email" name="email" placeholder="Email Address" required="">
                        <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                    </form>
                    <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                </div>
            </div>
            <!-- copyright -->
            <div class="w3l-copyright text-center mt-lg-5 mt-4 pt-sm-4 pt-3">
                <p class="copy-footer-29">© 2024 Laundries. All rights reserved. Design by <a href="#"
                        target="_blank">
                        yassine</a></p>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>

<script>
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>

<script>
    $(function() {
        $('.navbar-toggler').click(function() {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<script src="assets/js/bootstrap.min.js"></script>
