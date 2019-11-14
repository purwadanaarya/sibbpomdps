<?php $url = 'http://192.168.88.55/sibbpomdps/assets/maintenance/'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Under Maintenance</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo $url ?>images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    
    <div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1">
        <span></span>
        <img style="width: 9%" src="http://192.168.88.55/sibbpomdps/img/logo_stroke.png">
        <div class="flex-col-c p-t-50 p-b-50">
            <h3 class="l1-txt1 txt-center p-b-10">
                Coming Soon
            </h3>

            <p class="txt-center l1-txt2 p-b-60">
                This system is under construction
            </p>

            <div class="flex-w flex-c cd100 p-b-82">
                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt3 p-b-9 days">00</span>
                    <span class="s1-txt1">Days</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt3 p-b-9 hours">00</span>
                    <span class="s1-txt1">Hours</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt3 p-b-9 minutes">00</span>
                    <span class="s1-txt1">Minutes</span>
                </div>

                <div class="flex-col-c-m size2 how-countdown">
                    <span class="l1-txt3 p-b-9 seconds">00</span>
                    <span class="s1-txt1">Seconds</span>
                </div>
            </div>
            <a target="_blank" href="http://digidev.id"><span class="s1-txt3 txt-center">
                @ 2019 DIGIDEV.ID
            </span></a>
        </div>
    </div>

<!--===============================================================================================-->  
    <script src="<?php echo $url ?>vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo $url ?>vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo $url ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo $url ?>vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo $url ?>vendor/countdowntime/moment.min.js"></script>
    <script src="<?php echo $url ?>vendor/countdowntime/moment-timezone.min.js"></script>
    <script src="<?php echo $url ?>vendor/countdowntime/moment-timezone-with-data.min.js"></script>
    <script src="<?php echo $url ?>vendor/countdowntime/countdowntime.js"></script>
    <script>
        $('.cd100').countdown100({
            // Set Endtime here
            // Endtime must be > current time
            endtimeYear: 2019,
            endtimeMonth: 11,
            endtimeDate: 30,
            endtimeHours: 0,
            endtimeMinutes: 0,
            endtimeSeconds: 0,
            timeZone: "Asia/Makassar" 
            // ex:  timeZone: "America/New_York", can be empty
            // go to " http://momentjs.com/timezone/ " to get timezone
        });
    </script>
<!--===============================================================================================-->
    <script src="<?php echo $url ?>vendor/tilt/tilt.jquery.min.js"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
<!--===============================================================================================-->
    <script src="<?php echo $url ?>js/main.js"></script>

</body>
</html>