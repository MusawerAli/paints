</div>
<script>
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>


<footer class="w3-padding-64 w3-light-grey w3-small w3-center w3-topbar w3-border-blue id=" footer">

    <section>
        <div class="w3-container">
            <div class="w3 row">
                <div class="w3-col s3">
                    <h2>Let our customer to speak</h2>
                    <span class="fa fa-star-half-full"></span>
                </div>
                <div class="w3-col s9">
                    <div id="mixedSlider">
                        <div class="MS-content">
                            <div class="item">
                                <div class="imgTitle">
                                    <h2 class="blogTitle">Animals</h2>
                                    <img src="https://placeimg.com/500/300/animals" alt="" />
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac tellus ex.
                                    Integer eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis ...</p>
                                <a href="#">Read More</a>
                            </div>
                            <div class="item">
                                <div class="imgTitle">
                                    <h2 class="blogTitle">Arch</h2>
                                    <img src="https://placeimg.com/500/300/arch" alt="" />
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac tellus ex.
                                    Integer eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis ...</p>
                                <a href="#">Read More</a>
                            </div>
                            <div class="item">
                                <div class="imgTitle">
                                    <h2 class="blogTitle">Nature</h2>
                                    <img src="https://placeimg.com/500/300/nature" alt="" />
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac tellus ex.
                                    Integer eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis ...</p>
                                <a href="#">Read More</a>
                            </div>
                            <div class="item">
                                <div class="imgTitle">
                                    <h2 class="blogTitle">People</h2>
                                    <img src="https://placeimg.com/500/300/people" alt="" />
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac tellus ex.
                                    Integer eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis ...</p>
                                <a href="#">Read More</a>
                            </div>
                            <div class="item">
                                <div class="imgTitle">
                                    <h2 class="blogTitle">Tech</h2>
                                    <img src="https://placeimg.com/500/300/tech" alt="" />
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac tellus ex.
                                    Integer eu fringilla nisi. Donec id dapibus mauris, eget dignissim turpis ...</p>
                                <a href="#">Read More</a>
                            </div>

                        </div>
                        <div class="MS-controls">
                            <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                            <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>

<hr>
<!-- Footer -->
<footer class="w3-padding-64 w3-black w3-small w3-center" id="footer">
    <div class="w3-row-padding">

        <div class="w3-col" style="width:300px">
            <h2>Page Links</h2>
            <h5><a href="#">Cookie Policy</a></h5>
            <h5><a href="#">Delivery Policy</a></h5>
            <h5><a href="#">Returns Policy</a></h5>
            <h5><a href="#">Privacy Policy</a></h5>

        </div>

        <div class="w3-col" style="width:300px">
            <h4>Questions?</h4>
            <p>Please contact us if
                you have any questions or seek advice for any
                product or service on premiumpaints.co.uk,
                click here.</p>

        </div>

        <div class="w3-col" style="width:300px">
            <h4>Follow Us</h4>
            <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
            <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
            <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
            <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
            <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>

        </div>

        <div class="w3-col" style="width:300px">
            <h4>Quality Guarantee</h4>
            <p>
                Our quality guarantee is our guarantee policy,
                If there is any defect or quality issue with any
                product we will resolve the issue, guaranteed.

            </p>
        </div>

        <div class="w3-col" style="width:300px">
            <h4>Subscribe to our mailing list.</h4>
            <p>
                Enter your email address to be signed up to our mailing list.

            </p>
        </div>


    </div>
</footer>

<div class="w3-black w3-center w3-padding-24">Copyright © 2020 Premium Paints. - Unit 4 Tranker Lane, Worksop,
    Nottinghamshire, S80 3LG - VAT ID: GB 165255112</div>








</body>

</html>

<script src="<?=base_url();?>assets/js/multislider.min.js"></script>

<script>
$('#mixedSlider').multislider({
    duration: 750,
    interval: 3000
});
</script>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
    '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
</script>