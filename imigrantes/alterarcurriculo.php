
<?php
session_start();
?>
<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lagoa Seca Imigrantes</title>
    <link href="bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<style>
    .footer2 {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color:#E3E4E3;
      color: black;
      text-align: center;
      min-height: 35px;
    }
    .esp{
      min-height: 10vh;
    }
    .container{
      margin-bottom: 75px;
    }
</style> 
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Lagoa Seca</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item" style="display: none;">
                <a class="nav-link" href="" >Cadastro de Imigrantes</a>
              </li>
              <li class="nav-item" style="display: none;">
                <a class="nav-link" href="">Cadastro de Empresas</a>
              </li>
              <li class="nav-item" style="display: none;">
                <a class="nav-link" href="" >Cadastro de Vagas</a>
              </li>
              <li class="nav-item" style="display: none;">
                <a class="nav-link" href="" >Buscar Candidatos</a>
              </li>
              <li class="nav-item" style="display: block;">
                <a class="nav-link" href="buscarvagas.html" >Buscar Vagas</a>
              </li>
              <li class="nav-item" style="display: block;">
                <a class="nav-link active" href="alterarcurriculo.html" >Alterar curr??culo</a>
              </li>
            </ul>
            <div style="display: none;">
                <form action="" method="post" class="d-flex" >
                    <input class="form-control me-2" id="email" name="email" type="email" placeholder="E-mail" >
                    <input class="form-control me-2" id="senha" name="senha" type="senha" placeholder="Senha" >
                    <button class="btn btn-outline-primary" type="button" onclick="logar()">Logar</button>
                </form>
            </div>
            <div style="display: block;">
                <form action="" method="post" class="d-flex" >
                    <button class="btn btn-outline-primary" type="button" onclick="Sair()">Sair</button>
                </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="esp">

      </div>
      <div class="row">
        <form class="row g-3" method="POST" action="http://imigrantes.quizall.com.br/alteraimigrantes.php">
          <div class="col-md-4">
            <label for="inputnome4" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="inputnome4" value="<?php echo $_SESSION["nome"]?>">
          </div>
          <div class="col-md-2">
            <label for="inputidade4" class="form-label">Idade</label>
            <input type="text" class="form-control" id="inputidade4">
          </div>
          <div class="col-md-3">
            <label for="inputgenero4" class="form-label">G??nero</label>
            <select class="form-select" id="inputgenero4" >
              <option selected> </option>
              <option value="1">Masculino</option>
              <option value="2">Feminino</option>
            </select>
          </div>
          <div class="col-md-3">
            <label for="inputestadocivil4" class="form-label">Estado civil</label>
            <select class="form-select" id="inputestadocivil4" >
              <option selected></option>
              <option value="1">Solteiro</option>
              <option value="2">Casado</option>
              <option value="3">Divorciado</option>
              <option value="4">Vi??vo</option>
            </select>
          </div>


          <div class="col-md-4">
            <label for="inputestadoatual4" class="form-label">Estado atual</label>
            <select class="form-select" id="inputestadoatual4" onchange="estado(this.value)" >
              <option selected></option>
              <option value="1">MG</option>
              <option value="2">SP</option>
              <option value="3">RJ</option>
            </select>
          </div>


          <div class="col-md-4" style="display: block;" id="cidadeDivMg">
            <label for="selectmg" class="form-label">Cidade atual</label>
            <select class="form-select" id="selectmg" disabled onchange="cidade(this)">
              <option selected></option>
              <option value="1">Belo Horizonte</option>
              <option value="2">Betim</option>
              <option value="3">Contagem</option>
            </select>
          </div>
          <div class="col-md-4"  style="display: none;" id="cidadeDivSp">
            <label for="selectsp" class="form-label">Cidade atual</label>
            <select class="form-select" id="selectsp" disabled onchange="cidade(this)">
              <option selected></option>
              <option value="1">S??o Paulo</option>
              <option value="2">S??o Paulo 2</option>
              <option value="3">S??o Paulo 3</option>
            </select>
          </div>
          <div class="col-md-4"  style="display: none;" id="cidadeDivRj">
            <label for="selectrj" class="form-label">Cidade atual</label>
            <select class="form-select" id="selectrj" disabled onchange="cidade(this)">
              <option selected></option>
              <option value="1">Rio de Janeiro</option>
              <option value="2">Rio de Janeiro 2</option>
              <option value="3">Rio de Janeiro 3</option>
            </select>
          </div>









          <div class="col-md-4" style="display: block;" id="bairroDivBh">
            <label for="selectBbh" class="form-label">Bairro atual</label>
            <select class="form-select" id="selectBbh" disabled onchange="bairro(this)">
              <option selected></option>
              <option value="1">Bairro bh 1</option>
              <option value="2">Bairro bh 2</option>
              <option value="3">Bairro bh 3</option>
            </select>
          </div>
          <div class="col-md-4" style="display: none;" id="bairroDivBt">
            <label for="selectBbt" class="form-label">Bairro atual</label>
            <select class="form-select" id="selectBbt" disabled onchange="bairro(this)">
              <option selected></option>
              <option value="1">Bairro bt 1</option>
              <option value="2">Bairro bt 2</option>
              <option value="3">Bairro bt 3</option>
            </select>
          </div>
          <div class="col-md-4" style="display: none;" id="bairroDivCt">
            <label for="selectBct" class="form-label">Bairro atual</label>
            <select class="form-select" id="selectBct" disabled onchange="bairro(this)">
              <option selected></option>
              <option value="1">Bairro ct 1</option>
              <option value="2">Bairro ct 2</option>
              <option value="3">Bairro ct 3</option>
            </select>
          </div>



          <div class="col-md-4" style="display: none;" id="bairroDivSp1">
            <label for="selectBSp1" class="form-label">Bairro atual</label>
            <select class="form-select" id="selectBSp1" disabled onchange="bairro(this)">
              <option selected></option>
              <option value="1">Bairro Sp b1 1</option>
              <option value="2">Bairro Sp b1 2</option>
              <option value="3">Bairro Sp b1 2</option>
            </select>
          </div>
          <div class="col-md-4" style="display: none;" id="bairroDivSp2">
            <label for="selectBSp2" class="form-label">Bairro atual</label>
            <select class="form-select" id="selectBSp2" disabled onchange="bairro(this)">
              <option selected></option>
              <option value="1">Bairro Sp b2 1</option>
              <option value="2">Bairro Sp b2 2</option>
              <option value="3">Bairro Sp b2 3</option>
            </select>
          </div>
          <div class="col-md-4" style="display: none;" id="bairroDivSp3">
            <label for="selectBSp3" class="form-label">Bairro atual</label>
            <select class="form-select" id="selectBSp3" disabled onchange="bairro(this)">
              <option selected></option>
              <option value="1">Bairro Sp b3 1</option>
              <option value="2">Bairro Sp b3 2</option>
              <option value="3">Bairro Sp b3 2</option>
            </select>
          </div>



          <div class="col-md-4" style="display: none;" id="bairroDivRj1">
            <label for="selectBRj1" class="form-label">Bairro atual</label>
            <select class="form-select" id="selectBRj1" disabled onchange="bairro(this)">
              <option selected></option>
              <option value="1">Bairro Rj b1 1</option>
              <option value="2">Bairro Rj b1 2</option>
              <option value="3">Bairro Rj b1 2</option>
            </select>
          </div>
          <div class="col-md-4" style="display: none;" id="bairroDivRj2">
            <label for="selectBRj2" class="form-label">Bairro atual</label>
            <select class="form-select" id="selectBRj2" disabled onchange="bairro(this)">
              <option selected></option>
              <option value="1">Bairro Rj b2 1</option>
              <option value="2">Bairro Rj b2 2</option>
              <option value="3">Bairro Rj b2 3</option>
            </select>
          </div>
          <div class="col-md-4" style="display: none;" id="bairroDivRj3">
            <label for="selectBRj3" class="form-label">Bairro atual</label>
            <select class="form-select" id="selectBRj3" disabled onchange="bairro(this)">
              <option selected></option>
              <option value="1">Bairro Rj b3 1</option>
              <option value="2">Bairro Rj b3 2</option>
              <option value="3">Bairro Rj b3 2</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="inputemail4" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" id="inputemail4" value="<?php echo $_SESSION["email"]?>">
          </div>
          <div class="col-md-2">
            <label for="inputemail4" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="inputsenha4" value="<?php echo $_SESSION["senha"]?>">
          </div>
          <div class="col-md-2">
            <label for="inputtel4" class="form-label">Telefone para contato</label>
            <input type="text" class="form-control" id="inputtel4" pattern="\(\d{2}\)\d{4}-\d{4}">
          </div>
          <div class="col-md-2">
            <label for="inputanochegada4" class="form-label">Ano de chegada no Brasil (AAAA)</label>
            <input type="text" class="form-control" id="inputanochegada4">
          </div>
          <div class="col-md-2">
            <label for="inputdatanascimento4" class="form-label">Data de nascimento (DD/MM/AAAA)</label>
            <input type="text" class="form-control" id="inputdatanascimento4">
          </div>
          <div class="mb-3">
            <label for="inputdataformacao4" class="form-label">Forma????o</label>
            <textarea class="form-control" id="inputdataformacao4" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="inputdataexpanteriores4" class="form-label">Experi??ncias anteriores</label>
            <textarea class="form-control" id="inputdataexpanteriores4" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="inputdataidiomas4" class="form-label">Idiomas conhecidos</label>
            <textarea class="form-control" id="inputdataidiomas4" rows="3"></textarea>
          </div>
          </div>
          <div class="col-12 pt-3">
            <button type="submit" class="btn btn-primary">Alterar</button>
          </div>
        </form>
        <form action="delete.php">
        <button type="submit" class="btn btn-danger mt-3">Deletar</button>
        </form
        </div>
    </div>

    </footer>
    <div class="footer2 p-3">
      <small> Lagoa Seca Imigrantes. 2021. All rights reserved </small>
    </div>
  </body>
<script>
    var Vcidade='';
    var Vestado='';
    var Vbairro='';


  function logar(){
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    switch (email) {
      case 'a@a.com':
        if(senha=='a'){
          window.location.href = "imigrantes.html";
        }else{
          alert('Senha incorreta');
        }
        break;
      
      case 'b@b.com':
        if(senha=='b'){
          window.location.href = "empresas.html";
        }else{
          alert('Senha incorreta');
        }
        break;
      default:
       alert('E-mail n??o cadastrado no sistema');
    }


  }


 function  estado(x){
  Vestado=x;
  if(Vbairro!=''){
    document.getElementById(Vbairro).disabled = true;
    document.getElementById(Vbairro).value="";
  }else{
    document.getElementById('selectBbh').disabled = true;
    document.getElementById('selectBbh').value="";
  }
  if(Vcidade!=''){
    document.getElementById(Vcidade).value="";
  }else{
    document.getElementById('selectmg').value="";
  }

  switch (x) {
      case '1':
        document.getElementById("cidadeDivMg").style.display = 'block';
        document.getElementById("cidadeDivSp").style.display = 'none';
        document.getElementById("cidadeDivRj").style.display = 'none';
        document.getElementById("selectmg").disabled = false;
        break;
        
      case '2':
        document.getElementById("cidadeDivMg").style.display = 'none';
        document.getElementById("cidadeDivSp").style.display = 'block';
        document.getElementById("cidadeDivRj").style.display = 'none';
        document.getElementById("selectsp").disabled = false;
        break;
      case '3':
        document.getElementById("cidadeDivMg").style.display = 'none';
        document.getElementById("cidadeDivSp").style.display = 'none';
        document.getElementById("cidadeDivRj").style.display = 'block';
        document.getElementById("selectrj").disabled = false;
        break;
      default:
        document.getElementById("selectmg").disabled = true;
        document.getElementById("selectsp").disabled = true;
        document.getElementById("selectrj").disabled = true;
      return;
    }
  }
  function  cidade(x){
    Vcidade=x.id;
  switch (Vestado) {
      case '1':
        if(x.value=='1'){
          document.getElementById("bairroDivBh").style.display = 'block';
          document.getElementById("bairroDivBt").style.display = 'none';
          document.getElementById("bairroDivCt").style.display = 'none';

          document.getElementById("bairroDivSp1").style.display = 'none';
          document.getElementById("bairroDivSp2").style.display = 'none';
          document.getElementById("bairroDivSp3").style.display = 'none';

          document.getElementById("bairroDivRj1").style.display = 'none';
          document.getElementById("bairroDivRj2").style.display = 'none';
          document.getElementById("bairroDivRj3").style.display = 'none';


          document.getElementById("selectBbh").disabled = false;
        }else if(x.value=='2'){
          document.getElementById("bairroDivBh").style.display = 'none';
          document.getElementById("bairroDivBt").style.display = 'block';
          document.getElementById("bairroDivCt").style.display = 'none';

          document.getElementById("bairroDivSp1").style.display = 'none';
          document.getElementById("bairroDivSp2").style.display = 'none';
          document.getElementById("bairroDivSp3").style.display = 'none';

          document.getElementById("bairroDivRj1").style.display = 'none';
          document.getElementById("bairroDivRj2").style.display = 'none';
          document.getElementById("bairroDivRj3").style.display = 'none';

          
          document.getElementById("selectBbt").disabled = false;
        }else if(x.value=='3'){
          document.getElementById("bairroDivBh").style.display = 'none';
          document.getElementById("bairroDivBt").style.display = 'none';
          document.getElementById("bairroDivCt").style.display = 'block';

          document.getElementById("bairroDivSp1").style.display = 'none';
          document.getElementById("bairroDivSp2").style.display = 'none';
          document.getElementById("bairroDivSp3").style.display = 'none';

          document.getElementById("bairroDivRj1").style.display = 'none';
          document.getElementById("bairroDivRj2").style.display = 'none';
          document.getElementById("bairroDivRj3").style.display = 'none';

          
          document.getElementById("selectBct").disabled = false;
        }
        break;
        
      case '2':
       
      if(x.value=='1'){
          document.getElementById("bairroDivBh").style.display = 'none';
          document.getElementById("bairroDivBt").style.display = 'none';
          document.getElementById("bairroDivCt").style.display = 'none';

          document.getElementById("bairroDivSp1").style.display = 'block';
          document.getElementById("bairroDivSp2").style.display = 'none';
          document.getElementById("bairroDivSp3").style.display = 'none';

          document.getElementById("bairroDivRj1").style.display = 'none';
          document.getElementById("bairroDivRj2").style.display = 'none';
          document.getElementById("bairroDivRj3").style.display = 'none';


          document.getElementById("selectBSp1").disabled = false;
        }else if(x.value=='2'){
          document.getElementById("bairroDivBh").style.display = 'none';
          document.getElementById("bairroDivBt").style.display = 'none';
          document.getElementById("bairroDivCt").style.display = 'none';

          document.getElementById("bairroDivSp1").style.display = 'none';
          document.getElementById("bairroDivSp2").style.display = 'block';
          document.getElementById("bairroDivSp3").style.display = 'none';

          document.getElementById("bairroDivRj1").style.display = 'none';
          document.getElementById("bairroDivRj2").style.display = 'none';
          document.getElementById("bairroDivRj3").style.display = 'none';

          
          document.getElementById("selectBSp2").disabled = false;
        }else if(x.value=='3'){
          document.getElementById("bairroDivBh").style.display = 'none';
          document.getElementById("bairroDivBt").style.display = 'none';
          document.getElementById("bairroDivCt").style.display = 'none';

          document.getElementById("bairroDivSp1").style.display = 'none';
          document.getElementById("bairroDivSp2").style.display = 'none';
          document.getElementById("bairroDivSp3").style.display = 'block';

          document.getElementById("bairroDivRj1").style.display = 'none';
          document.getElementById("bairroDivRj2").style.display = 'none';
          document.getElementById("bairroDivRj3").style.display = 'none';

          
          document.getElementById("selectBSp3").disabled = false;
        }
        break;
      case '3':
      if(x.value=='1'){
          document.getElementById("bairroDivBh").style.display = 'none';
          document.getElementById("bairroDivBt").style.display = 'none';
          document.getElementById("bairroDivCt").style.display = 'none';

          document.getElementById("bairroDivSp1").style.display = 'none';
          document.getElementById("bairroDivSp2").style.display = 'none';
          document.getElementById("bairroDivSp3").style.display = 'none';

          document.getElementById("bairroDivRj1").style.display = 'block';
          document.getElementById("bairroDivRj2").style.display = 'none';
          document.getElementById("bairroDivRj3").style.display = 'none';


          document.getElementById("selectBRj1").disabled = false;
        }else if(x.value=='2'){
          document.getElementById("bairroDivBh").style.display = 'none';
          document.getElementById("bairroDivBt").style.display = 'none';
          document.getElementById("bairroDivCt").style.display = 'none';

          document.getElementById("bairroDivSp1").style.display = 'none';
          document.getElementById("bairroDivSp2").style.display = 'none';
          document.getElementById("bairroDivSp3").style.display = 'none';

          document.getElementById("bairroDivRj1").style.display = 'none';
          document.getElementById("bairroDivRj2").style.display = 'block';
          document.getElementById("bairroDivRj3").style.display = 'none';

          
          document.getElementById("selectBRj2").disabled = false;
        }else if(x.value=='3'){
          document.getElementById("bairroDivBh").style.display = 'none';
          document.getElementById("bairroDivBt").style.display = 'none';
          document.getElementById("bairroDivCt").style.display = 'none';

          document.getElementById("bairroDivSp1").style.display = 'none';
          document.getElementById("bairroDivSp2").style.display = 'none';
          document.getElementById("bairroDivSp3").style.display = 'none';

          document.getElementById("bairroDivRj1").style.display = 'none';
          document.getElementById("bairroDivRj2").style.display = 'none';
          document.getElementById("bairroDivRj3").style.display = 'block';

          
          document.getElementById("selectBRj3").disabled = false;
        }
        break;
      default:
      return;
    }
  }

  function bairro(x){
    Vbairro = x.id;
  }
  function Sair(){
    window.location.href = "index.html";
  }
</script>
</html>