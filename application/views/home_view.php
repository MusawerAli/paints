<?php
$this->load->view('header');

?>

<section class="w3-container ">
    <div class="w3-row">
        <div class="w3-col s8">
            <header class="w3-display-container w3-margin" id="home">
                <img class="w3-image w3-opacity-min" src="<?= base_url('assets/images/6.jpg')?>" alt="Fashion Blog">
                <div class="w3-display-left w3-padding-large">
                    <h1 class="w3-text-white">Restore Your Driveway Now!</h1>
                    <h5 class="w3-text-white">We now stock a wide range of sealers and restorers for <br>use on block
                        paving, interior & exterior concrete and tarmac</p>

                        <h6><button class="w3-button blue1 w3-text-white w3-padding-large w3-large"
                                onclick="document.getElementById('subscribe').style.display='block'">View our range of
                                driveway sealers</button></h6>
                </div>
            </header>
        </div>
        <div class="w3-col s4">
            <div class="w3-row">
                <header class="w3-display-container w3-margin" id="home">
                    <img class="w3-image w3-opacity-min" src="<?= base_url('assets/images/7.png')?>" alt="Fashion Blog">
                    <div class="w3-display-left w3-padding-large">
                        <h1 class="w3-text-white">Exterior Masonry Paints</h1>
                        <h5 class="w3-text-white">Smooth exterior masonry paint available in a wide range of colours and
                            sizes.</p>

                            <h6><button class="w3-button blue1 w3-text-white w3-padding-large w3-large"
                                    onclick="document.getElementById('subscribe').style.display='block'">View Mansory
                                    Paints</button></h6>
                    </div>
                </header>
            </div>
            <div class="w3-row">
                <header class="w3-display-container w3-margin" id="home">
                    <img class="w3-image w3-opacity-min" src="<?= base_url('assets/images/8.png')?>" alt="Fashion Blog">
                    <div class="w3-display-left w3-padding-large">
                        <h2 class="w3-text-white">Wood and Metal Clading <br> Paints</h2>
                        <h5 class="w3-text-white">A range of durable topcoats and primers for use on exterior wood and
                            metal cladding.</p>

                            <h6><button class="w3-button blue1 w3-text-white w3-padding-large w3-large"
                                    onclick="document.getElementById('subscribe').style.display='block'">View Clading
                                    Paints</button></h6>
                    </div>
                </header>
            </div>
        </div>
    </div>
</section>


<section>
    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <div class="w3-col" style="width:19.99%">
            <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
            <h3>The Perfect Sandwich, A Real NYC Classic</h3>
            <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
        </div>
        <div class="w3-col" style="width:19.99%">
            <img src="/w3images/steak.jpg" alt="Steak" style="width:100%">
            <h3>Let Me Tell You About This Steak</h3>
            <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
        </div>
        <div class="w3-col" style="width:19.99%">
            <img src="/w3images/cherries.jpg" alt="Cherries" style="width:100%">
            <h3>Cherries, interrupted</h3>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <p>What else?</p>
        </div>
        <div class="w3-col" style="width:19.99%">
            <img src="/w3images/wine.jpg" alt="Pasta and Wine" style="width:100%">
            <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
        </div>
        <div class="w3-col" style="width:19.99%">
            <img src="/w3images/wine.jpg" alt="Pasta and Wine" style="width:100%">
            <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
        </div>
    </div>

</section>
















<?php $this->load->view('footer');?>