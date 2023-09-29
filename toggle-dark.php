<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light/Dark Mode Toggle</title>
    <style>
        body {
            transition: background-color 1.5s;
        }

        #toggle-btn {
            position: fixed;
            cursor: pointer;
            z-index: 9999;
            top: 20px;
            right: 20px;
        }

        #toggle-btn img {
            width: 40px;
        }

        /* Dark Mode */
        body.dark-mode {
            background-color: #052428;
        }

        body.dark-mode .filter-control h3,
        body.dark-mode .product-item .pi-text .product-price,
        body.dark-mode .scroll-to-top::after, 
        body.dark-mode .scroll-to-top svg.progress-circle path,
        body.dark-mode .contact-widget .cw-item,
        body.dark-mode .first-row {   
            color: white;
            stroke: white;
        }
        body.dark-mode .contact-widget .cw-item{   
            -webkit-box-shadow: 0px 8px 35px 10px black;
            box-shadow: 0px 8px 35px 10px black;
        }

        /* Positioning for larger screens */
        @media screen and (min-width: 1260px) {
            #toggle-btn {
                top: 20px;
                left: 20px;
            }
        }
    </style>
</head>
<body>
    <div id="toggle-btn" onclick="toggleMode()">
        <img id="mode-icon" src="img/moon.png" alt="Dark Mode">
    </div>

    <script>
        const body = document.body;
        const toggleBtn = document.getElementById('toggle-btn');
        const modeIcon = document.getElementById('mode-icon');
        let isDarkMode = localStorage.getItem('darkMode') === 'true';

        function setMode() {
            if (isDarkMode) {
                body.classList.add('dark-mode');
                modeIcon.src = 'img/moon.png';
            } else {
                body.classList.remove('dark-mode');
                modeIcon.src = 'img/sun.png';
            }
        }

        function toggleMode() {
            isDarkMode = !isDarkMode;
            localStorage.setItem('darkMode', isDarkMode);
            setMode();
        }

        setMode(); // Set initial mode on page load
    </script>
</body>
</html>