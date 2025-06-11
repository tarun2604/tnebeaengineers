<?php include 'header.php'; ?>
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
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


    <main>
        <div class="container-fluid">
        <!-- Control the column width, and how they should appear on different devices -->
        <div class="row ">
            <div class="col-sm-7 p-2 ">
                <div id="demo" class="carousel slide shadow-sm" data-ride="carousel" style="height: 400px; overflow: hidden;">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                                                <li data-target="#demo" data-slide-to="0" class="active"></li> 
                                            <li data-target="#demo" data-slide-to="1" class=""></li> 
                                            <li data-target="#demo" data-slide-to="2" class=""></li> 
                                        </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        
  <div class="carousel-item active">
                            <img class="d-block w-100 img-fluid mx-auto rounded" src="https://web.archive.org/web/20240625213755im_/https://tnebeaengineers.in/wp-content/uploads/2024/05/IMG-20240515-WA0043.jpg" alt="Slider">
                            <div class="carousel-caption">
                                <h3>   </h3>
                                <p>  TNEBEA Congratulated and honoured Shri Aneesh Sekhar, IAS, joined as Managing Director, TN Green Energy Corporation Limited, Chennai. 💐💐💐 </p>
                            </div>
                            
                        </div>   <div class="carousel-item">
                            <img class="d-block w-100 img-fluid mx-auto rounded" src="https://web.archive.org/web/20240625213755im_/https://tnebeaengineers.in/wp-content/uploads/2024/05/IMG-20240512-WA0050.jpg" alt="Slider">
                            <div class="carousel-caption">
                                <h3> 1 </h3>
                                <p>  Happy to share that Minnagam Structural consultancy service awarded to Anna University, CEG, Chennai, represented by Prof. Dr. Senthil.  </p>
                            </div>
                            
                        </div>   <div class="carousel-item">
                            <img class="d-block w-100 img-fluid mx-auto rounded" src="https://web.archive.org/web/20240625213755im_/https://tnebeaengineers.in/wp-content/uploads/2024/05/IMG-20240517-WA0084.jpg" alt="Slider">
                            <div class="carousel-caption">
                                <h3> 1 </h3>
                                <p>  1 </p>
                            </div>
                            
                        </div> 
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>


            <div class="col-sm-5 pt-2 pl-0">

                <div class="row no-gutters">
                    <div class="col-sm-10">
                        <div class="card shadow-sm">
                            <h6 class="card-header text-primary">
                                Latest Events / Updates <i class="fa fa-bullhorn" aria-hidden="true"></i>
                            </h6>
                            
                            <div class="card-body marquee-container">
                                <div class="marquee-content">
                                    <?php
                                        // This data can easily come from your database
                                        $events = [
                                            ['day' => '28', 'month' => 'May', 'title' => 'Kallakurichi Branch Meeting held at Rotary Club, Kallakurichi on 27.05.2024.', 'link' => '#'],
                                            ['day' => '28', 'month' => 'May', 'title' => 'TTPS Branch Meeting held at Bell Hotel at Tuticorin on 27.05.2024', 'link' => '#'],
                                            ['day' => '28', 'month' => 'May', 'title' => 'Cuddalore Branch Meeting held at Anandha Bhavan Hotel, Cuddalore on 27.05.2024.', 'link' => '#'],
                                            ['day' => '02', 'month' => 'Sep', 'title' => 'Branch Meeting held at Salem on 02.09.2023', 'link' => '#'],
                                            ['day' => '01', 'month' => 'Sep', 'title' => 'Villupuram Branch Meeting held on 31.08.2023', 'link' => '#'],
                                        ];

                                        // The loop generates each event item
                                        foreach ($events as $event) {
                                    ?>
                                    <div class="event-item">
                                        <div class="event-date">
                                            <div class="day"><?= $event['day'] ?></div>
                                            <div class="month"><?= $event['month'] ?></div>
                                        </div>
                                        <div class="event-details">
                                            <a href="<?= $event['link'] ?>">
                                                <span class="card-title text-primary"><?= $event['title'] ?></span>
                                            </a>
                                            <span class="badge badge-success">New</span>
                                        </div>
                                    </div>
                                    <?php 
                                        } 
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
          
           <div class="col-sm-2" style="margin-left: -5px;">
             <div id="mySidenav" class="sidenav  ">
                            <a href="https://web.archive.org/web/20240625213755/http://www.tneb.in/" id="tneb">TNEB LIMITED</a>
                            <a href="https://web.archive.org/web/20240625213755/http://www.tangedco.gov.in/" id="tangedco">TANGEDCO </a>
                            <a href="https://web.archive.org/web/20240625213755/http://www.tantransco.gov.in/" id="tantransco">TANTRANSCO </a>
                            <a href="https://web.archive.org/web/20240625213755/http://teda.in/" id="kalp">TEDA </a>
                            
                            <a href="https://web.archive.org/web/20240625213755/http://www.tnerc.gov.in/" id="dffe"> TNERC </a>
                            
                            <a href="" id="dfff"> TUFIDCO  </a>

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