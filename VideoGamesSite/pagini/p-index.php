<style>
  .img-main {
  --b: 6px; 
  --c: #0000 25%,#2c3333 0; 
  padding: 10px;
  background:
    conic-gradient(from 90deg  at top    var(--b) left  var(--b),var(--c)) 0    0,
    conic-gradient(from 180deg at top    var(--b) right var(--b),var(--c)) 100% 0,
    conic-gradient(from 0deg   at bottom var(--b) left  var(--b),var(--c)) 0    100%,
    conic-gradient(from -90deg at bottom var(--b) right var(--b),var(--c)) 100% 100%;
  background-size: 50px 50px; 
  background-repeat: no-repeat;
  transition: .6s;
  cursor: pointer;
}

.img-main:hover {
  background-size: 51% 51%;
}
.anim-text {
  box-shadow: inset 0 0 0 0 black;
  color: black;
  margin: 0 0;
  padding: 0 0;
  transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
}
.anim-text:hover {
  box-shadow: inset 0 0 150px 0 black;
  color: white;
}
.bg-darc{
  background-color: #171717;
}


.anim-text2{
  display: block;
  color: black;
  text-decoration: none;
  position: relative;
}

.anim-text2::after{
  content: "";
  background: white;
	mix-blend-mode: exclusion;
  width: calc(100% + 20px);
  height: 0;
  position: absolute;
  bottom: -4px;
  left: -10px;
	transition: all .3s cubic-bezier(0.445, 0.05, 0.55, 0.95);
}
 a{
  text-decoration:none;
 }
.anim-text2:hover::after{
	height: calc(100% + 8px)
}
.anim-games {
  --c: #2c3333; 
  --b: 5px;    
  --g: 1px;     
  
  padding: calc(var(--g) + var(--b));
  --_g: #0000 25%,var(--c) 0;
  background: 
    conic-gradient(from 180deg at top    var(--b) right var(--b),var(--_g))
     var(--_i,200%) 0  /200% var(--_i,var(--b))  no-repeat,
    conic-gradient(            at bottom var(--b) left  var(--b),var(--_g))
     0   var(--_i,200%)/var(--_i,var(--b)) 200%  no-repeat;
  transition: .3s, background-position .3s .3s;
  cursor: pointer;
}
.anim-games:hover {
  --_i: 100%;
  transition: .3s, background-size .3s .3s;
}

.anim-textDB {
  box-shadow: inset 0 0 0 0 #ab3300;
  color: black;
  margin: 0 0;
  padding: 0 0;
  transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
}
.anim-textDB:hover {
  box-shadow: inset 0 0 125px 0 #ab3300;
  color: white;
}
</style>


  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagini/goty_hed.30.webp"  class="image">

        <div class="container">
          <div class="carousel-caption bg-darc ">
            <h1>Ştirile din Lumea Jocurilor</h1>
            <p>Site-ul unde poţi găsi diferite clasamente ale Jocurilor Video</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagini/bgmain2.jpg"  class="image">

        <div class="container">
          <div class="carousel-caption bg-darc">
            <h1>Clasament Jocurile Anului 2022</h1>
            <p><a class="btn btn-lg btn-primary" href="./?pagina=top2022">Află mai multe</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imagini/jocPref.png"  class="image">

        <div class="container">
          <div class="carousel-caption bg-darc">
            <h1>Clasament Jocurile Preferate</h1>
            <p><a class="btn btn-lg btn-primary" href="./?pagina=jocuripref">Află mai multe</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div style="text-align: center;"><h2 >Jocuri ale Momentului şi Următoarele Lansări</h2></div>
  <br>
  <br>
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <a href="https://www.playstation.com/en-ro/games/god-of-war-ragnarok/" target="_blank">
          <div class="banner image-containermid">
            <img class="anim-games" width="350" height="170" src="imagini/gow-banner.webp">
          </div>
        </a>
<br>
        <a href="https://www.playstation.com/en-ro/games/god-of-war-ragnarok/" target="_blank"><h2 style="margin:0 35px" class="fw-normal anim-text">God Of War Ragnarok</h2></a>
      </div>
      <div class="col-lg-4">
        <a href="https://store.steampowered.com/app/851850/DRAGON_BALL_Z_KAKAROT/" target="_blank">
          <div class="banner">
            <img class="anim-games" width="350" height="170" src="imagini/dbzk-banner.webp">
          </div>
        </a>
<br>
<a href="https://store.steampowered.com/app/851850/DRAGON_BALL_Z_KAKAROT/" target="_blank"> <h2 class="fw-normal anim-textDB" style="margin:0 35px">Dragon Ball Z Kakarot</h2></a>
      </div>
      <div class="col-lg-4">
        <a href="https://deadisland.com" target="_blank">
          <div class="banner">
            <img class="anim-games" width="350" height="170" src="imagini/dead island-banner.jfif">
          </div>
        </a>
<br>
<a href="https://deadisland.com" target="_blank"><h2 style="margin:0 35px " class="fw-normal anim-text">Dead Island 2</h2></a>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Jocul Momentului</h2>
        <p class="lead">Jocul cu cei mai mulţi jucătorii online al lunii</p>
        <a href="https://www.callofduty.com/modernwarfare2" target="_blank"><h3 class="display-6 anim-text2">Call Of Duty Modern Warfare 2</h3></a>
      </div>
      <div class="col-md-5">
        <div class="image-container img-main">
        <a href="https://www.callofduty.com/modernwarfare2" target="_blank">
            <img src="imagini/mw2index.jpg">
        </a>
        </div>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <a href="./?pagina=top2010-2020">
          <h2 class="featurette-heading anim-text2 lh-1">Clasament Jocuri 2010-2020</h2>
        </a>
        <p class="lead">Jocurile cu cel mai mare impact asupra lumii dintre anii 2010-2020</p>
      </div>
      <div class="col-md-5 order-md-1 img-main">
        <img src="imagini/multigames.webp">

      </div>
    </div>

    <hr class="featurette-divider">


  </div>

