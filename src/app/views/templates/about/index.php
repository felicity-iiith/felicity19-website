<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Exo', sans-serif;
    background: url('/static/images/felicity hero large.png') no-repeat;
    background-size: cover;
}
.container {
    width: 85vw;
    height: 85vh;
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%,-50%);
    background-color: rgba(0,0,0,0);
    color: white;
}
.content {  
    background-color: rgba(0,0,0,0.8);
    height: 85%;
    padding: 3vw;
}
.nav-bars {
    width: 100%;
    height: 7.5%;
}
.nav-bar {
    display: inline-block;
    width: 40%;
    height: 100%;
    box-sizing: border-box;
    clip-path: polygon(10% 0, 90% 0,100% 100%, 0 100%);
    margin: 0 4%;
    text-align: center;
    padding: 2vh;
    position: relative;
    background-color: rgba(0,0,0,1);
}
.nav-bar-active{
    color: #ccc;
    background-color: rgba(0,0,0,0.8);
}
.nav-bar-link:hover{
    color: red;
}
</style>
</head>
<body>
    <div class="container">
        <div class="nav-bars">
            <div class="nav-bar nav-bar-active">
                About Us
            </div>
            <a href="/contact/">
            <div class="nav-bar nav-bar-link">
                Team
            </div>
            </a>
        </div>
        <div class="content">
            Felicity is back with a bang! This year, Felicity, the annual techno-cultural
fest of IIIT Hyderabad is celebrating "Superheroes" from 19th January to 21st
January 2019. One year has passed since we took you around the world
and now here we are, locked, loaded, fully ready and excited to take you
through an amazing journey through the world of your favorite superheroes.
        </div>
    </div>
</body> 
</html>
