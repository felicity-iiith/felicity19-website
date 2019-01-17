
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
    width: 95vw;
    height: 90vh;
    position: absolute;
    top: 55%;
    left: 50%;
    overflow: auto;
    transform: translate(-50%,-50%);
    background-color: rgba(0,0,0,0);
    color: white;
}
.content {  
    background-color: rgba(0,0,0,0.8);
    height: 85%;
    position: relative;
    display: flex;
    justify-content: center;
    /* align-items: baseline; */

}
.nav-bars {
    width: 100%;
    height: 5%;
}
.nav-bar {
    display: inline-block;
    width: 10.8%;
    height: 100%;
    box-sizing: border-box;
    font-size: 1rem;
    clip-path: polygon(20% 0, 80% 0,100% 100%, 0 100%);
    text-align: center;
    padding: .75vh 2vw;
    position: relative;
    background-color: rgba(0,0,0,1);
}
.nav-bar-active{
    color: #aaa;
    background-color: rgba(0,0,0,0.8);
}
.nav-bar-link:hover{
    color: red;
}

.projector {
    width: 75%;
    display: inline-block;
    height: 70vh;
    margin-top: 4vh;
    font-size: 2.5rem;
        width: 70vh;
    background: url('/static/images/projector.png');
}

.filmstrip{
    height: 100%;
    width: 17.5%;   
    align-self: right;   
    box-sizing: border-box;
    background-color: rgba(0,0,0,0.5);
    /* vertical-align: middle;  */
}

.panels {
    width: 65%;
    display: inline-block;
}

.boxes {
    width: 15%;
    height: 89%;
    display: inline-block;
    align-items: center;
}

.white-box{
    background-color: rgba(255,255,255,0.3);
    height: 1.5vh;
    border-radius: 0.2vh;
    width: 1.5vh;
    margin: 1vh auto;
}

.film-pic{
    width: 100%;
    background-color: rgba(255,255,255,0.7);
    border-radius: 3vh;
    margin-top: 1vh;
    height: 17.5vh;
    font-size: 3rem;
    justify-content: center;
    align-items:center;
    color: black;
    display: flex;
}

.avengers-logo {
    display: inline-block;
    position: absolute;
    bottom: 2%;
    left: 2.5%;
    width: 7%;
    z-index: 2;
}

</style>
</head>
<body>
    <div class="container">
        <div class="nav-bars">
            <div class="nav-bar nav-bar-active">
                Threads
            </div>
            <div class="nav-bar nav-bar-link">
                LitCafe
            </div>
            <div class="nav-bar nav-bar-link">
                Pulsation
            </div>
            <div class="nav-bar nav-bar-link">
                Workshops
            </div> 
            <div class="nav-bar nav-bar-link">
                Culture
            </div>
            <div class="nav-bar nav-bar-link">
                Zombie Zone
            </div>
            <div class="nav-bar nav-bar-link">
                Sports
            </div>        
            <div class="nav-bar nav-bar-link">
                Day events
            </div>
            <div class="nav-bar nav-bar-link">
                Night events
            </div> 
        </div>
        <div class="content">
            <div class="projector">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus minus dolore expedita facere velit optio est ipsa et nihil libero. Quis, ea quibusdam. Deleniti blanditiis, vitae assumenda voluptatem minima alias.
            </div>
           <div class="filmstrip">
               <div class="boxes">
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
               </div>
               <div class="panels">
                    <div class="film-pic">TBA</div>                   
                    <div class="film-pic">TBA</div>                   
                    <div class="film-pic">TBA</div>                   
                    <div class="film-pic">TBA</div>                   
               </div>              
               <div class="boxes">
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
                    <div class="white-box"></div>
               </div>
            </div> 
        </div>
    </div>
    <a href="/"><img class="/static/images/avengers-logo" src="avengers-logo.png"></a>
</body>
</html>