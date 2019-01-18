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
    .container{
        width: 95vw;
        height: 85vh;
        position: absolute;
        top: 55%;
        left: 50%;
        overflow: auto;
        transform: translate(-50%,-50%);
        /* background-color: rgba(0,0,0,0.7); */
        background-color: rgba(0,0,0,0.9);
        color: white;
    }
    .coordinators{
        height: 40%;
        width: 100%;
        margin-top: 10vh;
        padding: 0vh 6vw;
    }
    .fc{
        height: 90%;
        display: inline-block;
        width: 33%;
        background-color: rgba(255,255,255,0.9);
        box-shadow: 2vw 2vw 4vw 9vw blue;
        clip-path: polygon(10% 0,100% 0,90% 100%,0 100%);
    }
    .image {
        height: 50%;
        text-align: center;
    }
    .image img{
        border-radius: 50%;
        max-width: 100%;
        max-height: 100%;
    }
    .details{
        /* background-color: red; */
        height: 50%;
        color: black;
        text-align: center;
        transform: translateX(-10px);
        font-size: 1.3rem;
    }
    .details * {
        margin: 0.5vh;
    }
    .details a{
        text-decoration: none;
        color: inherit;
        font-weight: bold;
    }
    .social {
        height: 47%;
        /* background-color: red; */
    }
    .reach{
        display: flex;
        justify-content: center;
        align-items: center;
        /* background-color: yellow; */
        width: 100%;
        height: 50%;
        font-size: 4rem;
    }
    .social-logos{
        text-align: center;
        padding: 5vh 0;
    }
    .social-img{
        display: inline-block;
        height: 10vh;
        padding: 0 2vh;
        /* transform: scale(0.5,0.5); */
    }
    .social-img img{
        max-width: 100%;
        max-height: 100%;
        border-radius: 50%;
        transition: all ease-in-out 0.3s;
    }
    .social-img img:hover{
        transform: scale(1.4)
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
        }
        .details{
            font-size: 1rem;
        }
        .fc{
            display: inline-block;
            width: 100%;
            height: 31%;
            margin: 2vh 0;
        }
        .reach {
            font-size: 2em;
            text-align: center;
            margin: 6vh 0 0 0;
        }
    }
</style>
<body>
    <div class="container">
        <div class="coordinators">
            <div class="fc">
                <div class="image">
                    <img src="/static/images/oishika.png">
                </div>
                <div class="details">
                    <p class="name">Oishika Pradhan</p>
                    <a href="#">oishika.pradhan@felicity.iiit.ac.in</a>
                    <p class="number">(+91) 8910643173 </p>
                </div>
            </div>
            <div class="fc">
                <div class="image">
                    <img src="/static/images/aamir.png">
                </div>
                <div class="details">
                    <p class="name">Aamir Farhan</p>
                    <a href="#">aamir.farhan@felicity.iiit.ac.in</a>
                    <p class="number">(+91) 946051640 </p>
                </div>
            </div>
            <div class="fc">
                <div class="image">
                    <img src="/static/images/saikiran.png">
                </div>
                <div class="details">   
                    <p class="name">Saikiran Lade</p>
                    <a href="#">saikiran.lade@felicity.iiit.ac.in</a>
                    <p class="number">(+91) 7036119977 </p>
                </div>
            </div>
        </div>
        <div class="social">
            <div class="reach">
                Reach us at our social media handles!
            </div>
            <div class="social-logos">
                <div class="social-img">
                    <a href="https://www.facebook.com/felicity.iiith/"><img src="/static/images/facebook.png"></a>    
                </div>       
                <div class="social-img">
                    <a href="https://www.instagram.com/felicity.iiith/"><img src="/static/images/instagram.png"></a>
                </div>
                <div class="social-img">
                    <a href="https://www.youtube.com/channel/UC_1vMv4Al_96QgYzkFjh99w"><img src="/static/images/youtube.png"></a>
                </div>
            </div>
            <div class="avengers">
                <a href="/"><img src="/static/images/avengers-logo.png"></a>
            </div>
        </div>
    </div>
    
</body>
</html>
