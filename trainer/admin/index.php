
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>My project!</title>
  </head>
  <body class="bg-gray" >  
  <nav class="navbar navbar-expand-lg navbar-light nav_bg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Space</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
</nav>
<main class="container-fluid row ">
    <section class="col-md-6 col-sm-12 col-xs-s col-lg-3 col-xl-3 col-xxl-3 mag-top">
        <article class="card color-back">
            <div class="card-body" align="center">
                <div class="img-profile mag-top">
                    <img src="../assets/img/img_profile.jpeg" class="img-fluid" alt="">
                </div>
                <br>
                <h3 class="color-h">Brendo Oliveira</h3>
            
                <p class="p-sub">
                Desenvolvedor Full Stack <br> Code and Soul
                </p>
                <p class="p-sub">
                <i class="bi bi-geo-alt-fill" style="color: #87868b;"></i> Itapetininga - SP 
                </p>

                <div class="app">
                    <img src="../assets/img/bootstrap.svg" alt="Bootstrap" currentitem="false">
                    <img src="../assets/img/html5.svg" alt="html5" currentitem="false">
                    <img src="../assets/img/jquery.svg" alt="jquery" currentitem="false">
                    <img src="../assets/img/php.svg" alt="php" currentitem="false"> 
                </div>

                <hr class="hr-color">

                <p class="p-member">MEMBRO DESDE: 15/09/2021</p>
            </div>
        </article>
    </section>

    <section class="col-md-6 col-sm-12 col-xs-12 col-lg-9 col-xl-9 col-xxl-9 mag-top">
        <article class="card color-back">
            <div class="card-body mag-top">
                <div class="row" align="center">
                    <div class="col-3 col-xs-2 col-sm-2 col-md-3 col-lg-2 col-xl-1 col-xxl-1">
                    <div class="img-profile-coment ">
                    <img src="../assets/img/img_profile.jpeg" class="img-fluid" alt="">
                </div>
                    </div>
                    <div class="col-9 col-xs-10  col-sm-10 col-md-9 col-lg-10 col-xl-11 col-xxl-11">
                        <form action="" method="POST">
                        <div class="form-floating">
                            <textarea class="form-control post" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                            </div>
                        </form>
                        <br>
                        <div  class="row">

                          <div class="col-3 col-xs-2 col-sm-2 col-md-3 col-lg-1 col-xl-1 col-xxl-1" align="start">
                            <a href="" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-image" ></i></a>
                          </div>

                          <div class="col-3 col-xs-2  col-sm-2  col-md-3 col-lg-1 col-xl-1 col-xxl-1" align="start">
                            <a href="" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-play-btn-fill"></i> </a>
                          </div>

                          <div class="col-3 col-xs-2  col-sm-2  col-md-3 col-lg-1 col-xl-1 col-xxl-1" align="start">
                            <a href="" class="btn btn-outline-secondary" >Publicar</a>
                          </div>

                        </div>
                    </div>
                    
                </div>

             
            </div>
        </article>

        <article>
                <div class="card color-back mag-top">
                    <div class="card-body">
                   
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 row" >
                      <div class="col-3 col-xs-2 col-sm-2 col-md-3 col-lg-2 col-xl-1 col-xxl-1" align="center">
                          <div class="img-profile-coment">
                              <img src="../assets/img/img_profile.jpeg" class="img-fluid" alt="">
                          </div>
                      </div>
                      <div class="col-9 col-xs-10  col-sm-10 col-md-9 col-lg-10 col-xl-11 col-xxl-11">
                          <h5 class="color-h" align="start" style="margin-top: 1%;">Brendo Oliveira</h5>
                          <div class="blockquote">
                            <p>18/09/2021</p>
                          </div>
                          
                      </div>
                    </div>
                  <br>     
                    <!--PARAGRAFO -->
                    <div class="p-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati incidunt, eaque soluta magni, quae consectetur repellat quo aspernatur laudantium libero similique reprehenderit sed earum, perferendis temporibus. Vero magnam ipsa amet.</p>
                    </div>
                    <hr class="hr-white">
                    <div class="p-2">
                      <a href="" class="like"><i class="bi bi-suit-heart-fill"></i> Amei</a> &subnE;
                      <a class="like" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="bi bi-chat-left-text-fill"></i> Comentar</a>

                      <div class="collapse m-2" id="collapseExample">
                          <div class="card card-body" style="background-color: #202024 !important; border: none !important">
                                      <form action="" method="POST" style="background-color: #202024 !important;">
                                          <div class="form-floating mb-3" >
                                              <input type="text" class="form-control" id="floatingInput" placeholder="Meu momento">
                                              <label for="floatingInput">Comments</label>
                                          </div>
                                      </form>
                          </div>
</div>
                    </div>
                </div>
                    </div>
               
        </article>
        <article>
                <div class="card color-back mag-top">
                    <div class="card-body">
                   
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 row" >
                      <div class="col-3 col-xs-2 col-sm-2 col-md-3 col-lg-2 col-xl-1 col-xxl-1" align="center">
                          <div class="img-profile-coment">
                              <img src="../assets/img/img_profile.jpeg" class="img-fluid" alt="">
                          </div>
                      </div>
                      <div class="col-9 col-xs-10  col-sm-10 col-md-9 col-lg-10 col-xl-11 col-xxl-11">
                          <h5 class="color-h" align="start" style="margin-top: 1%;">Brendo Oliveira</h5>
                          <div class="blockquote">
                            <p>18/09/2021</p>
                          </div>
                          
                      </div>
                    </div>
                  <br>     
                    <!--PARAGRAFO -->
                    <div class="p-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati incidunt, eaque soluta magni, quae consectetur repellat quo aspernatur laudantium libero similique reprehenderit sed earum, perferendis temporibus. Vero magnam ipsa amet.</p>
                        <hr class="hr-white">
                          <div class="ratio ratio-16x9">
                            <video  src="../assets/img/teste_video.mp4" controls></video>
                          </div>
                    </div>
                    <hr class="hr-white">
                    <div class="p-2">
                      <a href="" class="like"><i class="bi bi-suit-heart-fill"></i> Amei</a> &subnE;
                      <a href="" class="like"><i class="bi bi-chat-left-text-fill"></i> Comentar</a>
                    </div>
                </div>
                    </div>
               
        </article>
        <article>
                <div class="card color-back mag-top">
                    <div class="card-body">
                   
                    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 row" >
                      <div class="col-3 col-xs-2 col-sm-2 col-md-3 col-lg-2 col-xl-1 col-xxl-1" align="center">
                          <div class="img-profile-coment">
                              <img src="../assets/img/img_profile.jpeg" class="img-fluid" alt="">
                          </div>
                      </div>
                      <div class="col-9 col-xs-10  col-sm-10 col-md-9 col-lg-10 col-xl-11 col-xxl-11">
                          <h5 class="color-h" align="start" style="margin-top: 1%;">Brendo Oliveira</h5>
                          <div class="blockquote">
                            <p>18/09/2021</p>
                          </div>
                          
                      </div>
                    </div>
                  <br>     
                    <!--PARAGRAFO -->
                    <div class="p-2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati incidunt, eaque soluta magni, quae consectetur repellat quo aspernatur laudantium libero similique reprehenderit sed earum, perferendis temporibus. Vero magnam ipsa amet.</p>
                        <hr class="hr-white">
                        <img src="../assets/img/atuo-agency-logo.svg" class="rounded mx-auto d-block img-thumbnail p-4" alt="">
                    </div>
                    <hr class="hr-white">
                    <div class="p-2">
                      <a href="" class="like"><i class="bi bi-suit-heart-fill"></i> Amei</a> &subnE;
                      <a href="" class="like"><i class="bi bi-chat-left-text-fill"></i> Comentar</a>
                    </div>
                </div>
                    </div>
               
        </article>
    </section>
</main>
<footer class="container py-5 ">
  <div class="row">
    <div class="col-12 col-md text-center">
      <p class="d-block mb-3 text-muted pfooter">Desenvolvido por <span><i class="bi bi-heart-fill"></i> Brendo Oliveira<span></p>
    </div>
    
  </div>
</footer>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content color-back">
      <div class="modal-header bord-none">
        <h5 class="modal-title color-h" id="staticBackdropLabel">Compartihe seu video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Meu momento">
                <label for="floatingInput">Comments</label>
            </div>
            <div>
              <div class="mb-3">
                    <label for="formFile" class="form-label color-h">Escolha um video</label>
                    <input class="form-control" accept="video/*" type='file' onChange="load(this)">
              </div>
             
                <div class="ratio ratio-16x9">
                <video  controls id="id"> </video>     
              </div>
            </div>
      </div>
      <div class="modal-footer bord-none">
        <button type="button" class="btn def" data-bs-dismiss="modal">Sair</button>
        <button type="button" class="btn bt-sit">Compartilhar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content color-back">
      <div class="modal-header bord-none">
        <h5 class="modal-title color-h" id="exampleModalLabel">Compartilhe sua foto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Meu momento">
                <label for="floatingInput">Comments</label>
            </div>
            <div>
              <div class="mb-3">
                    <label for="formFile" class="form-label color-h">Escolha sua Imagem</label>
                    <input class="form-control" accept="image/*" type='file' onchange="loadFile(event)">
              </div>
             
                <div>
                  <img id="output" class="img-fluid">
                </div>
            </div>
      <div class="modal-footer bord-none">
        <button type="button" class="btn def" data-bs-dismiss="modal">Sair</button>
        <button type="button" class="btn bt-sit">Compartilhar</button>
      </div>
    </div>
  </div>
</div>







<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

  
  <script>


const load = (e) => {
  let url = URL.createObjectURL(e.files[0])
  let video = document.querySelector("#id");
  video.setAttribute("src", url)
  
}






  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

  document.getElementById("videoUpload")
.onchange = function(event) {
  let file = event.target.files[0];
  let blobURL = URL.createObjectURL(file);
  document.querySelector("video").src = blobURL;
}

</script>

  </body>    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>