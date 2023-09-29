<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scroll to top button with progress indicator</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css' rel='stylesheet' />
    <style>
        /* Scroll to top button */
        .scroll-to-top {
            position: fixed;
            right: 20px;
            bottom: 85px;
            height: 46px;
            width: 46px;
            cursor: pointer;
            display: block;
            border-radius: 50px;
            box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            transition: all 200ms linear;
        }

        .scroll-to-top.active-progress {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .scroll-to-top::after {
            position: absolute;
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            content: '\f062';
            text-align: center;
            line-height: 46px;
            font-size: 18px;
            color: #830303; 
            left: 0;
            top: 0;
            height: 46px;
            width: 46px;
            cursor: pointer;
            display: block;
            z-index: 1;
            transition: all 200ms linear;
        }

        .scroll-to-top svg path {
            fill: none;
        }

        .scroll-to-top svg.progress-circle path {
            stroke: #830303;
            stroke-width: 4;
            box-sizing: border-box;
            transition: all 200ms linear;
        }

        
    </style>
</head>
<body>
    <!-- Scroll to top button -->
    <div class="scroll-to-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script>
        (function($) {
            "use strict";

            $(document).ready(function() {
                // Scroll back to top
                var progressPath = document.querySelector('.scroll-to-top path');
                var pathLength = progressPath.getTotalLength();
                progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
                progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
                progressPath.style.strokeDashoffset = pathLength;
                progressPath.getBoundingClientRect();
                progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
                
                var updateProgress = function () {
                    var scroll = $(window).scrollTop();
                    var height = $(document).height() - $(window).height();
                    var progress = pathLength - (scroll * pathLength / height);
                    progressPath.style.strokeDashoffset = progress;
                }
                updateProgress();
                $(window).scroll(updateProgress);
                
                var offset = 50;
                var duration = 550;
                
                jQuery(window).on('scroll', function() {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery('.scroll-to-top').addClass('active-progress');
                    } else {
                        jQuery('.scroll-to-top').removeClass('active-progress');
                    }
                });
                
                jQuery('.scroll-to-top').on('click', function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({scrollTop: 0}, duration);
                    return false;
                });
            });
        })(jQuery);
    </script>
</body>
</html>
