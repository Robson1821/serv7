<div class="row">
    
        <div class="col-xs-12 rodape">
            <div class="mediaSocial">
                <a href="">
                    <img src="images/facebook.png" alt="Facebook">
                </a>

                <a href="">
                    <img src="images/instagram.png" alt="Instagram">
                </a>
            </div>

            <div class="copyright">
                <p>Serv7 Eventos © 2017 All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>





<!-- Gridder JavaScript Files -->
<script src="dist/js/jquery.gridder.js"></script>
<script>
jQuery(document).ready(function ($) {

    // Call Gridder
    $(".gridder").gridderExpander({
        scroll: true,
        scrollOffset: 60,
        scrollTo: "listitem", // "panel" or "listitem"
        animationSpeed: 400,
        animationEasing: "easeInOutExpo",
        nextText: "<span class=\"glyphicon glyphicon-menu-right\" aria-hidden=\"true\"></span>",
        prevText: "<span class=\"glyphicon glyphicon-menu-left\" aria-hidden=\"true\"></span>",
        closeText: "X",
        onStart: function () {
            console.log("Gridder Inititialized");
        },
        onExpanded: function (object) {
            console.log("Gridder Expanded");
            $(".carousel").carousel();
        },
        onChanged: function (object) {
            console.log("Gridder Changed");
        },
        onClosed: function () {
            console.log("Gridder Closed");
        }
    });
});
</script>


<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>





<!-- Slider Revolution core JavaScript files -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING --> 
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>

</body>
</html>