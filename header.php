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
    <?php include 'navbar.php'; ?>
</header> 