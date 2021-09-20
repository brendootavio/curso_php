
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
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

    <section class="container-fluid row">
        <article class=" container row">
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6 col-xl-6 col-xxl-6 p-2 row" style="margin-top:10%"> 
                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 col-xl-6 col-xxl-6">
                         <img src="assets/img/undraw_Welcome_re_h3d9.svg" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6 col-xl-6 col-xxl-6" style="margin-top:10%">
                            <p class="size-20">Texto de Teste</p>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab iure repellat omnis ipsa, voluptate aperiam consectetur ea optio, error molestiae voluptas explicabo odit! Ab quia quam commodi dolorum in sint!</p>
    <div class="icons">
    <a href="" class="fac"><i class="bi bi-facebook"></i></a>
    <a href="" class="ins"><i class="bi bi-instagram"></i></a>
    <a href="" class="you"><i class="bi bi-youtube"></i></a>
    </div>
                        </div>
                       
            
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-6 col-xl-6 col-xxl-6 text-center" style="margin: 10% auto">
                        <div class="card color-back">
                            <br>
                                <h3>Cadastre-se</h3>
                                
                                <p class="p-2 m-2">Aproveite sua vida profissional ao máximo</p>
                                <div class="card-body">
                                    <form class="form-floating m-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Joao Victor">
                                            <label for="floatingInput">Nome</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control cep"  id="cep"  placeholder="19999-000" onblur="pesquisacep(this.value);">
                                            <label for="floatingInput">CEP</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control uf" id="cidade" placeholder="">
                                            <label for="floatingInput">Cidade</label>
                                        </div>
                                        
                                        <div class="form-floating mb-3">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelectGrid" aria-label="Seu Cargo">
                                                <option selected>Selecione seu Cargo</option>
                                                <option value="1">CEO</option>
                                                <option value="2">Desenvolvedor Full Stack</option>
                                                <option value="3">Desenvolvedor Front-end</option>
                                                <option value="4">Desenvolvedor Back-end</option>
                                                <option value="5">Designer UI/UX</option>
                                                <option value="6">Designer</option>
                                                <option value="7">Redator</option>
                                            </select>
                                            <label for="floatingSelectGrid">Seu Cargo</label>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Email</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword">Senha</label>
                                        </div>

                                        <br>
                                        <button type="button" class="btn  block">Cadastrar</button>
                                        <br>
                                        <br>
                                        <p class="color-site">Se voce já tem uma conta <a href="." >Clique aqui</a></p>
                                    </form>
                                </div>
                        </div>
                    </div>
            </article>
    </section>
<footer class="container py-5 ">
  <div class="row">
    <div class="col-12 col-md text-center">
      <p class="d-block mb-3 text-muted pfooter">Desenvolvido por <span><i class="bi bi-heart-fill"></i> Brendo Oliveira<span></p>
    </div>
    
  </div>
</footer>

<script>
        $(document).ready(function(){
             $('.cep').mask('00000-000');
        });
      </script>

<script type="text/javascript" >




    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
       
            document.getElementById('cidade').value=("");
      
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
        
            document.getElementById('cidade').value=(conteudo.localidade + conteudo.uf);

        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
             
                document.getElementById('cidade').value="...";
        

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>

  </body>    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>