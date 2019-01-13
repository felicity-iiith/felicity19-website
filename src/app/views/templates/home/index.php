<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            font-family: 'Exo', sans-serif;
            background: url('static/images/felicity hero large.png');
        }

        .container {
            position: absolute;
            bottom: 1rem;
        }

        .grid-item {
            height: 37.5vh;
            width: 15vw;
            background-color: #000;
            clip-path: polygon(0 0, 100% 0, 100% 95%, 85% 100%, 0 100%);
            display: inline-block;
            margin: 0 2vw;
        }

        .grid-content {
            background-color: rgba(255, 0, 0, 0.9);
            height: 2%;
            color: #EEEEEE;
            font-size: 2.5rem;
            transition: height linear 0.3s;
            text-align: center;
            line-height: 0.8;
        }

        .grid-image img {
            transition: transform linear 0.2s;
        }

        .grid-item:hover .grid-image img {
            transform: scale(1.2);
        }

        .grid-item:hover .grid-content {
            height: 100%;

        }
    </style>
</head>

<body>
    <div class="container">
        <div class="grid-item">
            <div class="grid-image">
                <img src="static/images/about-us-fixed.png" style="max-width: 100%;" />
            </div>
            <div class="grid-content">
                &nbsp;
                <br />
                About Us
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-image">
                <img src="static/images/dj-night-fixed.png" style="max-width: 100%;" />
            </div>
            <div class="grid-content">
                &nbsp;
                <br />
                Events
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-image">
                <img src="static/images/art-events-fixed.png" style="max-width: 100%;" />
            </div>
            <div class="grid-content">
                &nbsp;
                <br />
                Gallery
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-image">
                <img src="static/images/sponsors-ot-fixed.png" style="max-width: 100%;" />
            </div>
            <div class="grid-content">
                &nbsp;
                <br />
                Sponsors
            </div>
        </div>
        <div class="grid-item">
            <div class="grid-image">
                <img src="static/images/contact us cropped.png" style="max-width: 100%;" />
            </div>
            <div class="grid-content">
                &nbsp;
                <br />
                Contact
            </div>
        </div>
    </div>
</body>
</html>