<link rel="stylesheet" href="./styles/footer.css">
<footer class="footer-section">
    <div class="footer-slider">
        <div class="container">
            <div id="basicSlider" class="ms-animating">
                <div class="MS-content">
                <div class="item" style="margin-left: -98.2243px;"> <a href="http://cea.nic.in/" target="_blank"> 
                  <img src="Images/footer/cea.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                <div class="item"> <a href="https://mnre.gov.in/" target="_blank"> 
                  <img src="Images/footer/mnre_0.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                <div class="item"> <a href="https://www.digitalindia.gov.in/" target="_blank"> <img src="Images/footer/digitalindia_0-1.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                <div class="item"> <a href="http://www.ipds.gov.in/" target="_blank"> 
                  <img src="Images/footer/IPDS-1.gif" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                <div class="item"> <a href="https://npp.gov.in/" target="_blank"> 
                  <img src="Images/footer/natportal_0.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                <div class="item"> <a href="http://www.powergridindia.com/" target="_blank"> 
                  <img src="Images/footer/powergrid_1.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                <div class="item"> <a href="https://www.pfcindia.com/" target="_blank"> 
                  <img src="Images/footer/pfcl.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                <div class="item"> <a href="https://powermin.nic.in/" target="_blank"> 
                  <img src="Images/footer/minofpower_3.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                <div class="item"> <a href="https://www.mygov.in/" target="_blank"> 
                  <img src="Images/footer/mygov_7.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>                </div> 
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 text-left text-white">
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                    <span class="align-text-bottom small"></span>
                </div>
                <div class="col-md-6 text-center">
                    <span class="text-white">Copyright © TNEBEA 2024</span>
                </div>
                <div class="col-md-3 text-right footer-links">
                    <a href="tnebeaengineers.in/tnbe-ea-privacy-policy/">Privacy Policy</a>
                    <a href="https://tnebeaengineers.in/terms-and-conditions/">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-scroll slider
    const sliderContent = document.querySelector('.MS-content');
    if (sliderContent) {
        setInterval(() => {
            if (!sliderContent.querySelector(':hover')) {
                const firstItem = sliderContent.firstElementChild;
                sliderContent.style.transition = 'transform 0.5s ease-in-out';
                sliderContent.style.transform = 'translateX(-100px)';
                
                setTimeout(() => {
                    sliderContent.style.transition = 'none';
                    sliderContent.style.transform = 'translateX(0)';
                    sliderContent.appendChild(firstItem.cloneNode(true));
                    firstItem.remove();
                }, 500);
            }
        }, 3000);
    }
});