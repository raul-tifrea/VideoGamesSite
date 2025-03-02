<style>
  

.flex-equal > * {
  flex: 1;
}
@media (min-width: 768px) {
  .flex-md-equal > * {
    flex: 1;
  }
}
.mark{
  background-color:black;
}

#principal{
  background-image: url("imagini/allgames.jpg");
}

#TheLastOfUs{
  background-image: url("imagini/tlou.jpg");
  background-repeat: no-repeat;
  background-position: center;
}

#GTA5{
  background-image: url("imagini/gtaV.jpg");
  background-repeat: no-repeat;
  background-position: center;
}

#Portal2{
  background-image: url("imagini/Portal2.jpg");
  background-repeat: no-repeat;
  background-position: center;
}

#Witcher3{
  background-image: url("imagini/thewitcher.jpg");
  background-repeat: no-repeat;
  background-position: center;
}

#RDR{
  background-image: url("imagini/rdr2.png");
  background-repeat: no-repeat;
  background-position: center;
}

</style>

<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center text-light" style="height: 450px;" id="principal">

    <div class="col-md-5 p-lg-5 mx-auto my-5 bg-dark bg-gradient">
      <h1 class="display-4 fw-normal">Top 5 Jocuri</h1>
      <p class="lead fw-normal">2010-2020</p>
    </div>
  </div>

  <div class="d-md-block w-100 my-md-3 ps-md-3">
    <div class="text-bg-dark bg-gradient me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Numărul 1</h2>
        <p class="lead">The Last of Us (part 1)</p>
      </div>
      <div class="bg-warning shadow-sm mx-auto" style="width: 50%; height: 300px; border-radius: 21px 21px 0 0; " id="TheLastOfUs"></div>
    </div>

    <div class="text-bg-dark bg-gradient me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden my-md-3 ps-md-3">
      <div class="my-3 p-3">
        <h2 class="display-5">Numărul 2</h2>
        <p class="lead">Grand Theft Auto V</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 50%; height: 300px; border-radius: 21px 21px 0 0;" id="GTA5" ></div>
    </div>
  </div>

  <div class="d-md-block w-100 my-md-3 ps-md-3">
    <div class="text-bg-dark bg-gradient me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-4">
        <h2 class="display-5">Numărul 3</h2>
        <p class="lead">Portal 2</p>
      </div>
      <div class="bg-info shadow-sm mx-auto" style="width: 100%; height: 300px; border-radius: 21px 21px 0 0;" id="Portal2"></div>
    </div>

    <div class="text-bg-dark bg-gradient me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden my-md-3 ps-md-3">
      <div class="my-3 py-3">
        <h2 class="display-5">Numărul 4</h2>
        <p class="lead">The Witcher 3: Wild Hunt</p>
      </div>
      <div class="bg-light shadow-sm mx-auto" style="width: 70%; height: 300px; border-radius: 21px 21px 0 0;" id="Witcher3"></div>
    </div>
  </div>

  <div class="d-md-block w-100 my-md-3 ps-md-3">
    <div class="text-bg-dark bg-gradient me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Numărul 5</h2>
        <p class="lead"> Red Dead Redemption 2</p>
      </div>
      <div class="bg-dark shadow-sm mx-auto" style="width: 60%; height: 300px; border-radius: 21px 21px 0 0;" id="RDR"></div>
    </div>
  </div>
</main>