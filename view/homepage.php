  <div class="jumbotron">
    <h1 class="font-weight-bold">Details about work and life in China are just a click away!</h1>
    <h2 class = "justify">Operating since 2019, our concern is answering your questions and guiding you to your ideal goals in China!</h2>
    <div id="carouselControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php
        $pics = new DirectoryIterator(APPROOT."/pictures");
        foreach ($pics as $picinfo) {
              $pic = $picinfo->getFilename();

              if ($pic == 'index.php' or $pic == 'Logo.png' or $pic =='.' or $pic =='..') {
                //This isn't ideal. Need to figure out why != isn't working, something with variable type? For now this is outputting the pictures correctly but there has to be a better to implement this.
              } else {
                if ($pic == 'LeShan-Buddha.JPG') {
                  echo   '<div class="carousel-item active">
                      <img class="d-block w-100" src="'.URLROOT.'/pictures/'.$pic.'" alt="'.$pic.'">
                    </div>';
                } else {
                  echo   '<div class="carousel-item">
                      <img class="d-block w-100" src="'.URLROOT.'/pictures/'.$pic.'" alt="'.$pic.'">
                    </div>';
                }
              }
        }
       ?>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  </div>
</div>
