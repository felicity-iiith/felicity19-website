    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <title>Contact Us</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Exo', sans-serif;
    }
    body{
        background: url('/static/images/felicity hero large.png') no-repeat;
        background-size: cover;
    }
    .sponsors{
        /* display: flex;    */
        font-size: 7rem;
        text-align: center;
    }
    .container{
        width: 95vw;
        height: 85vh;
        position: absolute;
        top: 55%;
        left: 50%;
        overflow: auto;
        transform: translate(-50%,-50%);
        background-color: rgba(0,0,0,0.9);
        color: white;
        overflow: auto;
    }
    .coordinators{
        height: 40%;
        width: 100%;
        display: flex;
        flex-direction: row;
        margin-top: 10vh;
        padding: 0vh 6vw;
    }
    .fc{
        height: 90%;
        width: 33%;
        margin-bottom: 5vh;
        vertical-align: top;
        background-color: rgba(255,255,255,0.9);
        box-shadow: 2vw 2vw 4vw 9vw blue;
        clip-path: polygon(10% 0,100% 0,90% 100%,0 100%);
    }
    .fc .image{
        display: flex;
        justify-content: center;
        height: 100%;
        align-items: center;
    }
    .image img{
        max-width: 30%;
    }
    .avengers {
        position: absolute;
        bottom: 0rem;
        transform: scale(0.6);
        transform-origin: bottom left;
        left: 0rem;
    }
    @media(max-width:600px){
        body{
            background: url('/static/images/felicity-hero-large-mobile.png') no-repeat;
            background-size: cover;
        }
        .coordinators{
            height: 100%;
            width: 90%;
        }
        .fc{
            display: inline-block;
            width: 100%;
            height: 31%;
            margin: 2vh 0;
        }
        .coordinators{
            flex-direction: column;
        }
    }
</style>
<body>
    <div class="container">
        <div class="sponsors">
           Our Sponsors
        </div>
        <div class="coordinators">
            <div class="fc">
                <div class="image" style="transform: scale(2)">
                    <img src="/static/images/sponsors/19/SBI.svg" />
                </div>
            </div>
            <div class="fc">
                <div class="image" style="transform: scale(2)">
                    <img src="/static/images/sponsors/19/zebronics.png" />
                </div>
            </div>
            <div class="fc">
                <div class="image">
                    <img src="/static/images/sponsors/19/airtel.svg" />
                </div>
            </div>
            <div class="fc" style="background-color: rgb(35,31,32)">
                <div class="image" style="transform: scale(2)">
                    <img src="/static/images/sponsors/19/Ptron.png" />
                </div>
            </div>
        </div>
        <div class="avengers">
            <a href="/"><img src="/static/images/avengers-logo.png" /></a>
        </div>
    </div>
</body>
</html>
