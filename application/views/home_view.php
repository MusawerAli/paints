<?php
$this->load->view('header');

?>

<section class="w3-container w3-margin">
    <div class="w3-row">
        <div class="w3-col s9">
            <header class="w3-display-container w3-wide" id="home">
                <img class="w3-image" src="<?= base_url('assets/images/6.jpg')?>" alt="Fashion Blog" width="800" height="500">
                <div class="w3-display-left w3-padding-large">
                    <h1 class="w3-text-white">Jane's</h1>
                    <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>FASHION BLOG</b></h1>
                    <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off"
                            onclick="document.getElementById('subscribe').style.display='block'">SUBSCRIBE</button></h6>
                </div>
            </header>
        </div>
        <div class="w3-col s3">

        </div>
    </div>
</section>