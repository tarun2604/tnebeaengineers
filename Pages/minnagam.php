<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minnagam</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<header>
    <div class="container-fluid ">
        <div id="Header" class="row">

            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                                <strong>Tamil Nadu Electricity Board Engineers Association Site</strong></marquee>


            </div></div>

            <div class="col-sm-4 text-right align-bottom">
        </div>
    </div>
    <div class="container-fluid mb-2">
        <div id="Header1" class="row" style="background-color: #FFFFFF; align-items: center; padding: 1rem 0;">
            <div class="col-sm-9">
                <div class="row align-items-center">
                    <div class="col-auto pl-3">
                        <a href="https://tnebeaengineers.in/">
                            <img src="../images/tnebea_logo_cropped2.png" class="img-fluid mx-auto d-block rounded" style="height: 80px; width: auto;" alt="TNEBEA logo">
                        </a>
                    </div>
                    <div class="col p-2">
                        <h3 class="text-primary" style="font-family: 'Comfortaa', sans-serif; font-size: 22px; margin-bottom: 0;">Tamilnadu Electricity Board | Engineers Association</h3>
                        <p class="text-secondary" style="font-family: 'Comfortaa', sans-serif; font-size: 14px; margin-top: 5px;">The association was formed &amp; registered in 1946.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 pt-2">
                <form class="form-inline my-2 my-lg-0" action="https://tnebeaengineers.in/" id="search-form" method="get">
                    <input class="form-control w-100" type="text" name="s" id="s" placeholder="Search Portal Content">
                </form>
                <div class="content mt-2">
                    <div id="clockbox" class="text-secondary font-weight-bold"></div>
                    <script type="text/javascript">
                        var tday = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                        var tmonth = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                        function GetClock() {
                            var d = new Date();
                            var nday = d.getDay(), nmonth = d.getMonth(), ndate = d.getDate(), nyear = d.getFullYear();
                            var nhour = d.getHours(), nmin = d.getMinutes(), nsec = d.getSeconds();
                            if (nmin <= 9) nmin = "0" + nmin;
                            if (nsec <= 9) nsec = "0" + nsec;
                            var clocktext = "" + tday[nday] + ", " + ndate + "-" + tmonth[nmonth] + "-" + nyear + ", " + nhour + ":" + nmin + ":" + nsec + "";
                            document.getElementById('clockbox').innerHTML = clocktext;
                        }
                        GetClock();
                        setInterval(GetClock, 1000);
                    </script>
                </div>
            </div>
        </div>
    </div>
</header> 
<nav>
    <link rel="stylesheet" href="./styles/navbar.css">
    <nav class="navbar navbar-expand-lg  bg-primary navbar-dark p-1">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-nowrap" id="navbar-content">
            <ul id="menu-general-info" class="navbar-nav mr-auto text-light"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-129 current_page_item active menu-item-130 nav-item nav-item"><a title="Home" href="https://tnebeaengineers.in/" class="nav-link" aria-current="page">Home</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-594" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-594 nav-item nav-item"><a title="About TNEBEA" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-594">About TNEBEA</a>
    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-594" role="menu">
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-681" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-681 nav-item nav-item"><a title="CEC" href="cec.php" class="dropdown-item">CEC</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-559 nav-item nav-item"><a title="Roll of Honour" href="roll-of-honour.php" class="dropdown-item">Roll of Honour</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-485" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-485 nav-item nav-item"><a title="TNEBEA Branches" href="tnebea-branches.php" class="dropdown-item">TNEBEA Branches</a></li>
    </ul>
    </li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-6170 nav-item nav-item"><a title="TNEB General Info" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-6170">TNEB General Info</a>
    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-6170" role="menu">
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6928" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6928 nav-item nav-item"><a title="General Information Corner" href="general-information-corner.php" class="dropdown-item">General Information Corner</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4633" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4633 nav-item nav-item"><a title="Act &amp; Regulations" href="act-regulations.php" class="dropdown-item">Act &amp; Regulations</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-624" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-624 nav-item nav-item"><a title="TNEB Regulations, Manual &amp; Forms" href="tnebeaengineers.in/manuals-and-forms-download/" class="dropdown-item">TNEB Regulations, Manual &amp; Forms</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4703" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4703 nav-item nav-item"><a title="CONTRIBUTORY PENSION SCHEME" href="contributory-pension-scheme.php" class="dropdown-item">CONTRIBUTORY PENSION SCHEME</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-7006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7006 nav-item nav-item"><a title="ERP IMPLEMENTATION – ALL RELATED DATAS" href="erp-implementation-all-related-datas.php" class="dropdown-item">ERP IMPLEMENTATION – ALL RELATED DATAS</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6996" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6996 nav-item nav-item"><a title="DISTRIBUTION RELATED INSTRUCTIONS – AGRI, DOMESTIC, COMMERCIAL" href="tnebeaengineers.in/distribution-related-instructions-agri-domestic-commercial/" class="dropdown-item">DISTRIBUTION RELATED INSTRUCTIONS – AGRI, DOMESTIC, COMMERCIAL</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6921" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6921 nav-item nav-item"><a title="HEALTH CORNER -நலமுடன் வாழ்க" href="tnebeaengineers.in/general-information-corner/health-corner-%e0%ae%a8%e0%ae%b2%e0%ae%ae%e0%af%81%e0%ae%9f%e0%ae%a9%e0%af%8d-%e0%ae%b5%e0%ae%be%e0%ae%b4%e0%af%8d%e0%ae%95/" class="dropdown-item">HEALTH CORNER -நலமுடன் வாழ்க</a></li>
    </ul>
    </li>

    </li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-563" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-563 nav-item nav-item"><a title="Minnagam" href="minnagam.php" class="nav-link">Minnagam</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-482 nav-item nav-item"><a title="Engineers Hand Book" href="hand-book.php" class="nav-link">Engineers Hand Book</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4630" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-4630 nav-item nav-item"><a title="Technical Corner" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-4630">Technical Corner</a>
    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-4630" role="menu">
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4636" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4636 nav-item nav-item"><a title="Technical Q&amp;A" href="technical-qa.php" class="dropdown-item">Technical Q&amp;A</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4639" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4639 nav-item nav-item"><a title="Technical Parameters" href="technical-parameters.php" class="dropdown-item">Technical Parameters</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4693" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4693 nav-item nav-item"><a title="TECHNICAL BOOKS AND MANUALS" href="technical-books-and-manuals.php" class="dropdown-item">TECHNICAL BOOKS AND MANUALS</a></li>
    </ul>
    </li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4624" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-4624 nav-item nav-item"><a title="News" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-4624">News</a>
    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-4624" role="menu">
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6709" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6709 nav-item nav-item"><a title="ENGINEERS DAY 2021 COMPETITONS" href="engineers-day-2021-competitons.php" class="dropdown-item">ENGINEERS DAY 2021 COMPETITONS</a></li>
    </ul>
    </li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4628" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4628 nav-item nav-item"><a title="Grievance Forum" href="grievance-forum.php" class="nav-link">Grievance Forum</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-589" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-589 nav-item nav-item"><a title="Contact Us" href="contactus.php" class="nav-link">Contact Us</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-8837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8837 nav-item nav-item"><a title="TNEBEA FORMS" href="forms.php" class="nav-link">TNEBEA FORMS</a></li>
    </ul>

    </div>

    </nav>

    <!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('.navbar a, .navbar .dropdown-item');
    navLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
        e.preventDefault();
        alert('Page under construction');
        });
    });
    });
    </script>  -->
</nav>
<body>
    <main>
        <div class="container" style="max-width: 1200px;">
            <div class="text-center mt-5 mb-4">
                <h1 style="color: green; font-weight: bold; text-decoration: underline; font-size: 3rem;">MINNAGAM</h1>
                <h2 style="font-weight: bold; font-size: 2.2rem; margin-top: 1rem;">(Royapettah High Road, Chennai)</h2>
                <h3 style="font-weight: bold; font-size: 2rem; margin-top: 1rem;">Residential accomodation for Engineers</h3>
                <h4 style="font-weight: bold; font-size: 1.5rem; margin-top: 1rem;">(Details shown here for kind information Only)</h4>
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-3" style="font-size: 1.3rem;">
                        <span style="font-weight: bold; text-decoration: underline;">APR MANSION & MINNAGAM</span>
                        <span class="ml-3" style="font-weight: bold;">Two AC Rooms, Four Non-AC delux Rooms and 16 Dormetry's Available</span>
                    </div>
                    <div class="mb-2" style="font-size: 1.2rem;">
                        <span style="font-weight: bold;">AC Rooms (Double Bed)</span>
                        <span class="ml-3" style="font-weight: bold;">Rs.400 / Day</span>
                    </div>
                    <div class="mb-2" style="font-size: 1.2rem;">
                        Non-AC Rooms (Double Bed) <span class="ml-3">Rs. 250 / Day</span>
                    </div>
                    <div class="mb-2" style="font-size: 1.2rem;">
                        Dormetry 16 Nos <span class="ml-3">Rs.75/day, Rs.1500/Month</span>
                    </div>
                    <div class="mb-3" style="font-size: 1.2rem;">
                        <span style="font-weight: bold;">For Details Contact</span>
                        <span class="ml-3" style="font-weight: bold;">Care Taker :</span>
                    </div>
                    <div class="mb-3" style="font-size: 2rem; font-weight: bold;">
                        Sekar : 9042183530
                    </div>
                    <div class="mb-2" style="font-size: 1.2rem;">
                        <span style="font-weight: bold;">Secretary (Minnagam):</span>
                    </div>
                    <div class="mb-4" style="font-size: 2rem; font-weight: bold;">
                        Er.S.SENTHIL : 9894812568
                    </div>
                    <div class="mb-3" style="font-size: 1.1rem;">
                        <span style="font-weight: bold;">Have a Pleasent Stay... </span>
                        <a href="https://tnebeaengineers.in/wp-content/uploads/2024/05/CONSTRUCTION-OF-MULTIPURPOSE-COMPLEX-AT-MINNAGAM-CHENNAI-PROPOSAL.pdf" class="text-primary font-weight-bold" target="_blank">
                            CONSTRUCTION OF MULTIPURPOSE COMPLEX AT MINNAGAM CHENNAI- PROPOSAL
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<footer>
    <link rel="stylesheet" href="./styles/footer.css">
    <footer class="footer-section">
        <div class="footer-slider">
            <div class="container">
                <div id="basicSlider" class="ms-animating">
                    <div class="MS-content">
                    <div class="item" style="margin-left: -98.2243px;"> <a href="http://cea.nic.in/" target="_blank"> 
                    <img src="../Images/footer/cea.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                    <div class="item"> <a href="https://mnre.gov.in/" target="_blank"> 
                    <img src="../Images/footer/mnre_0.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                    <div class="item"> <a href="https://www.digitalindia.gov.in/" target="_blank"> 
                    <img src="../Images/footer/digitalindia_0-1.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                    <div class="item"> <a href="http://www.ipds.gov.in/" target="_blank"> 
                    <img src="../Images/footer/IPDS-1.gif" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                    <div class="item"> <a href="https://npp.gov.in/" target="_blank"> 
                    <img src="../Images/footer/natportal_0.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                    <div class="item"> <a href="http://www.powergridindia.com/" target="_blank"> 
                    <img src="../Images/footer/powergrid_1.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                    <div class="item"> <a href="https://www.pfcindia.com/" target="_blank"> 
                    <img src="../Images/footer/pfcl.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                    <div class="item"> <a href="https://powermin.nic.in/" target="_blank"> 
                    <img src="../Images/footer/minofpower_3.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>
                    <div class="item"> <a href="https://www.mygov.in/" target="_blank"> 
                    <img src="../Images/footer/mygov_7.png" alt="" class="img-fluid mx-auto d-block rounded"> </a> </div>                </div> 
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
</footer>

    <script src="./scripts/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.5.0/jquery.marquee.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.dropdown-menu > li > .dropdown-menu').parent().addClass('dropdown-submenu').find(' > .dropdown-item').attr('href', 'javascript:;').addClass('dropdown-toggle');
        $('.dropdown-submenu > a').on("click", function(e) {
            var Arundropdown = $(this).parent().find(' > .show');
            $('.dropdown-submenu .dropdown-menu').not(Arundropdown).removeClass('show');
            $(this).next('.dropdown-menu').toggleClass('show');
            e.stopPropagation();
        });
        $('.dropdown').on("hidden.bs.dropdown", function() {
            $('.dropdown-menu.show').removeClass('show');
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.marquee-content').marquee({
            direction: 'up',
            duration: 15000,
            gap: 50,
            delayBeforeStart: 0,
            duplicated: true,
            pauseOnHover: true
        });
    });
    </script>
</body>
</html>