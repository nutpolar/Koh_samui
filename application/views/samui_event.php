<?php
//echo '<pre>';
//print_r($event_name);
//exit;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="Scripts/script.js"></script>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--        <title><?php echo $title; ?></title>-->
        <title>KOH SAMUI GUIDE AND GO - EVENT</title>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css"></link>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/styles_menu.css"></link>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/styles_menu_event.css"></link>
        <script src="jquery.js"></script> 



        <script type='text/javascript' src='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/js/jquery-11.0.min.js'></script>	
        <script type='text/javascript' src='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/js/unitegallery.min.js'></script>	

        <link rel='stylesheet' href='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/css/unite-gallery.css' type='text/css' />

        <script type='text/javascript' src='<?php echo base_url(); ?>js/unitegallery-master/package/unitegallery/themes/compact/ug-theme-compact.js'></script>
        <script type="text/javascript">

            jQuery(document).ready(function() {

                jQuery("#gallery1").unitegallery();

            });

            jQuery(document).ready(function() {

                jQuery("#gallery2").unitegallery();

            });

        </script>

        <script
            src="http://maps.googleapis.com/maps/api/js">
        </script>

        <script src="<?php echo base_url(); ?>/js/event_js.js"></script>





    </head>
    <body>
        <div class="header">
            <img class="" id="" src="<?php echo base_url(); ?>images/header_web.png" />

        </div>
        <div class="containner"> 

            <br/>

            <div class="menu_left">
                <div id="cssmenu">
                    <ul>
                        <li><a href='<?php echo base_url(); ?>'><span>Home</span></a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/welcome/attraction'><span>Koh Samui Attraction</span></a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/welcome/samui_map'><span>Koh Samui Map</span></a></li>
                        <li class="active"><a href='<?php echo base_url(); ?>index.php/welcome/samui_event'><span>Koh Samui Event</span></a></li>
                        <li><a href='<?php echo base_url(); ?>index.php/welcome/weather'><span>Koh Samui Weather</span></a></li>
                    </ul>
                </div>
            </div>

            <div class="slide_right">
                <div id="gallery1" style="display:none;">
                    <img alt="Preview Image 1"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/1.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/1.jpg"
                         data-description="Preview Image 1 Description"/>

                    <img alt="Preview Image 2"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/2.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/2.jpg"
                         data-description="Preview Image 2 Description"/>

                    <img alt="Preview Image 3"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/3.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/3.jpg"
                         data-description="Preview Image 3 Description"/>

                    <img alt="Preview Image 4"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/4.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/4.jpg"
                         data-description="Preview Image 4 Description"/>

                    <img alt="Preview Image 5"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/5.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/5.jpg"
                         data-description="Preview Image 5 Description"/>

                    <img alt="Preview Image 6"
                         src="<?php echo base_url(); ?>js/unitegallery-master/package/images/thumbs/6.jpg"
                         data-image="<?php echo base_url(); ?>js/unitegallery-master/package/images/big/6.jpg"
                         data-description="Preview Image 5 Description"/>
                </div>
            </div>
            <div class="clear"></div>
            <br/>

            <div class="content_main2">
                <br/>
<!--                <center>
                    <img class="" id="" src="<?php echo base_url(); ?>images/weather_exam.png" />
                </center>-->
                <link href='<?php echo base_url(); ?>css/fullcalendar.css' rel='stylesheet' />
                <link href='<?php echo base_url(); ?>css/fullcalendar.print.css' rel='stylesheet' media='print' />
                <script src='<?php echo base_url(); ?>js/moment.min.js'></script>
<!--                <script src='<?php echo base_url(); ?>js/jquery.min.js'></script>-->
                <script src='<?php echo base_url(); ?>js/fullcalendar.min.js'></script>
                <script>
             $(document).ready(function() {

                 $('#calendar').fullCalendar({
                     header: {
                         left: 'prev,next today',
                         center: 'title',
                         right: 'month,basicWeek,basicDay'
                     },
                     
                     defaultDate: Date(),
                     editable: false,
                     disableDragging: false,
                     //eventLimit: true, // allow "more" link when too many events
                     events: "<?php echo base_url();?>/events.php",
                     
    
    
                     
                 });

             });

                </script>

                <style>

                    /*                    body {
                                            margin: 40px 10px;
                                            padding: 0;
                                            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                                            font-size: 14px;
                                        }*/

                    #calendar {
                        max-width: 900px;
                        margin: 0 auto;
                    }

                </style>
                <div id='calendar'></div>


                <div class="clear"></div>
                <br/>
                <div class="credit" style="text-align: right; margin-right: 20px;">
                    Reference :: <a href="http://www.kohsamuisunset.com/koh-samui-events-2015" target="_blank">http://www.kohsamuisunset.com/koh-samui-events-2015</a>
                </div>

            </div>

            <div class="clear"></div>
            <br/>
        </div>

        <div class="footer">

        </div>
        <br/>
    </body>


</html>

