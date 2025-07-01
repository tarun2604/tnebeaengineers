<?php
session_start();
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'tnebea';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Get carousel images
$carousel_images = [];
$result = $conn->query("SELECT * FROM carousel_images WHERE active = 1 ORDER BY created_at DESC LIMIT 4");
while($row = $result->fetch_assoc()) {
    $carousel_images[] = $row;
}

// Get events
$events = [];
$result = $conn->query("SELECT * FROM events WHERE active = 1 AND event_date >= CURDATE() ORDER BY event_date ASC LIMIT 5");
while($row = $result->fetch_assoc()) {
    $events[] = $row;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamilnadu Electricity Board | Engineers Association</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
                            <img src="./images/tnebea_logo_cropped2.png" class="img-fluid mx-auto d-block rounded" style="height: 80px; width: auto;" alt="TNEBEA logo">
                        </a>
                    </div>
                    <div class="col p-2">
                        <h3 class="text-primary" style="font-family: 'Comfortaa', sans-serif; font-size: 22px; margin-bottom: 0;">Tamilnadu Electricity Board | Engineers Association</h3>
                        <p class="text-secondary" style="font-family: 'Comfortaa', sans-serif; font-size: 14px; margin-top: 5px;">The association was formed &amp; registered in 1946.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 pt-2">
                <form class="form-inline my-2 my-lg-0" action="search.php" id="search-form" method="get">
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
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-681" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-681 nav-item nav-item"><a title="CEC" href="./Pages/cec.php" class="dropdown-item">CEC</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-559" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-559 nav-item nav-item"><a title="Roll of Honour" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/roll-of-honour/" class="dropdown-item">Roll of Honour</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-485" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-485 nav-item nav-item"><a title="TNEBEA Branches" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/tnebea-branches/" class="dropdown-item">TNEBEA Branches</a></li>
    </ul>
    </li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6170" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-6170 nav-item nav-item"><a title="TNEB General Info" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-6170">TNEB General Info</a>
    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-6170" role="menu">
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6928" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6928 nav-item nav-item"><a title="General Information Corner" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/general-information-corner/" class="dropdown-item">General Information Corner</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4633" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4633 nav-item nav-item"><a title="Act &amp; Regulations" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/act-regulations/" class="dropdown-item">Act &amp; Regulations</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-624" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-624 nav-item nav-item"><a title="TNEB Regulations, Manual &amp; Forms" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/manuals-and-forms-download/" class="dropdown-item">TNEB Regulations, Manual &amp; Forms</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4703" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4703 nav-item nav-item"><a title="CONTRIBUTORY PENSION SCHEME" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/contributory-pension-scheme/" class="dropdown-item">CONTRIBUTORY PENSION SCHEME</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-7006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7006 nav-item nav-item"><a title="ERP IMPLEMENTATION – ALL RELATED DATAS" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/erp-implementation-all-related-datas/" class="dropdown-item">ERP IMPLEMENTATION – ALL RELATED DATAS</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6996" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6996 nav-item nav-item"><a title="DISTRIBUTION RELATED INSTRUCTIONS – AGRI, DOMESTIC, COMMERCIAL" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/distribution-related-instructions-agri-domestic-commercial/" class="dropdown-item">DISTRIBUTION RELATED INSTRUCTIONS – AGRI, DOMESTIC, COMMERCIAL</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6921" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6921 nav-item nav-item"><a title="HEALTH CORNER -நலமுடன் வாழ்க" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/general-information-corner/health-corner-%e0%ae%a8%e0%ae%b2%e0%ae%ae%e0%af%81%e0%ae%9f%e0%ae%a9%e0%af%8d-%e0%ae%b5%e0%ae%be%e0%ae%b4%e0%af%8d%e0%ae%95/" class="dropdown-item">HEALTH CORNER -நலமுடன் வாழ்க</a></li>
    </ul>
    </li>

    </li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-563" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-563 nav-item nav-item"><a title="Minnagam" href="./Pages/minnagam.php" class="nav-link">Minnagam</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-482" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-482 nav-item nav-item"><a title="Engineers Hand Book" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/hand-book/" class="nav-link">Engineers Hand Book</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4630" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-4630 nav-item nav-item"><a title="Technical Corner" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-4630">Technical Corner</a>
    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-4630" role="menu">
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4636" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4636 nav-item nav-item"><a title="Technical Q&amp;A" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/technical-qa/" class="dropdown-item">Technical Q&amp;A</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4639" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4639 nav-item nav-item"><a title="Technical Parameters" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/technical-parameters/" class="dropdown-item">Technical Parameters</a></li>
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4693" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4693 nav-item nav-item"><a title="TECHNICAL BOOKS AND MANUALS" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/technical-books-and-manuals/" class="dropdown-item">TECHNICAL BOOKS AND MANUALS</a></li>
    </ul>
    </li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4624" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children dropdown menu-item-4624 nav-item nav-item"><a title="News" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-4624">News</a>
    <ul class="dropdown-menu" aria-labelledby="menu-item-dropdown-4624" role="menu">
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6709" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6709 nav-item nav-item"><a title="ENGINEERS DAY 2021 COMPETITONS" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/engineers-day-2021-competitons/" class="dropdown-item">ENGINEERS DAY 2021 COMPETITONS</a></li>
    </ul>
    </li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-4628" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4628 nav-item nav-item"><a title="Grievance Forum" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/grievance-forum/" class="nav-link">Grievance Forum</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-589" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-589 nav-item nav-item"><a title="Contact Us" href="./Pages/contactus.php" class="nav-link">Contact Us</a></li>
    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-8837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8837 nav-item nav-item"><a title="TNEBEA FORMS" href="https://web.archive.org/web/20240625213755/https://tnebeaengineers.in/forms/" class="nav-link">TNEBEA FORMS</a></li>
    <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
            <li class="nav-item">
                <a href="admin_dashboard.php" class="nav-link">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">
                    <i class="fa fa-sign-out"></i> Logout
                </a>
            </li>
        <?php else: ?>
            <li class="nav-item">
                <a href="login.php" class="nav-link">
                    <i class="fa fa-sign-in"></i> Login
                </a>
            </li>
        <?php endif; ?>
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

    <main>
        <div class="container-fluid">
            <div class="row">
                <!-- Carousel (Left) -->
                <div class="col-md-7 p-2 d-flex flex-column">
                    <div id="demo" class="carousel slide shadow-sm mb-3" data-ride="carousel" style="height: 400px; overflow: hidden;">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <?php foreach($carousel_images as $index => $image): ?>
                                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                    <img class="d-block w-100 img-fluid mx-auto rounded" src="<?php echo htmlspecialchars($image['image_path']); ?>" alt="Slider">
                                    <?php if($image['caption']): ?>
                                        <div class="carousel-caption">
                                            <p><?php echo htmlspecialchars($image['caption']); ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                    <!-- Announcement Card below carousel on small screens, beside on large screens -->
                </div>
                <!-- Events & Quick Links Sidebar (Right) -->
                <div class="col-md-5 pt-2 pl-0">
                    <div class="row no-gutters">
                        <div class="col-sm-10">
                            <div class="card shadow-sm">
                                <h6 class="card-header text-primary">
                                    Latest Events / Updates <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                </h6>
                                <div class="card-body marquee-container">
                                    <div class="marquee-content">
                                        <?php foreach($events as $event): ?>
                                            <div class="event-item">
                                                <div class="event-date">
                                                    <div class="day"><?php echo date('d', strtotime($event['event_date'])); ?></div>
                                                    <div class="month"><?php echo date('M', strtotime($event['event_date'])); ?></div>
                                                </div>
                                                <div class="event-details">
                                                    <a href="<?php echo htmlspecialchars($event['link'] ?: '#'); ?>">
                                                        <span class="card-title text-primary"><?php echo htmlspecialchars($event['title']); ?></span>
                                                    </a>
                                                    <span class="badge badge-success">New</span>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2" style="margin-left: -5px;">
                            <div id="mySidenav" class="sidenav">
                                <a href="" id="FromTheBoard">FROM THE BOARD</a>
                                <a href="" id="ToTheBoard">TO THE BOARD</a>
                                <a href="https://www.tneb.in/" id="tneb">TNEB LIMITED</a>
                                <a href="https://www.tangedco.gov.in/" id="tangedco">TANGEDCO </a>
                                <a href="https://www.tantransco.gov.in/" id="tantransco">TANTRANSCO </a>
                                <a href="https://www.teda.in/" id="kalp">TEDA </a>
                                <a href="https://www.tnerc.gov.in/" id="dffe"> TNERC </a>
                                <a href="https://www.tufidco.gov.in/" id="dfff"> TUFIDCO  </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
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