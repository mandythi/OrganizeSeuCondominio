<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .table#table-head th:nth-child(1), 
         table#table-head td:nth-child(1),
        .table#table-body th:nth-child(1), 
         table#table-body td:nth-child(1){
             width: 350px; 
        }

        .table#table-head th:nth-child(2), 
         table#table-head td:nth-child(2),
        .table#table-body th:nth-child(2), 
         table#table-body td:nth-child(2){
             width: 300px; 
        }

        .table-scroll-y {
            display: block;
            max-height: 300px;
            overflow-y: auto;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
    </style>
</head>
<body>
    
    <div class="container">

        <div class="row">
            <!-- Conteudo das tabs -->
            <div class="tab-content col-12">
                <br>
                <!-- Tabs -->
                <ul class="nav nav-tabs">
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#cidades">Cidades</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#home">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Busca</a>
                    </li>
                </ul>

                <br>

                <!-- Cidades -->
                <div id="cidades" class="tab-pane fade in active">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <select id="select-estados" class="form-control">
                                <option value="" selected="selected">Escolha um estado</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select id="select-cidades" class="form-control">
                                <option value="">Escolha uma cidade</option>
                            </select>
                        </div>
                    </form>
                </div>

                <!-- Users -->
                <div id="home" class="tab-pane fade in active">
                    <button id="btn-users" class="btn btn-outline-secondary btn-sm">Listar Users</button>
                    <br><br>
                    <div id="div-users"></div>
                </div>

                <!-- Cadastrar -->
                <div id="menu1" class="tab-pane fade in active">

                    <div id="div-create" class="alert" role="alert" style="display: none;"></div>

                    <form role="form" id="form-cadastrar" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="" class="text-secondary font-weight-bold">Nome</label>
                            <input id="txt_nome" type="text" name="name" class="form-control" placeholder="Nome">
                        </div>

                        <div class="form-group">
                            <label for="" class="text-secondary font-weight-bold">Email</label>
                            <input id="txt_email" type="text" name="email" class="form-control" placeholder="Email">
                        </div>

                        <button class="btn btn-outline-secondary btn-sm">Cadastrar</button>
                    </form>
                </div>

                <!-- Busca -->
                <div id="menu2" class="tab-pane fade in active">
                    <form role="form" id="form-buscar" enctype="multipart/form-data">
                        <input type="text" name="name">
                        <button class="btn btn-outline-secondary btn-sm">Buscar</button>
                    </form>

                    <br>

                    <div id="div-busca-msg" class="alert" role="alert" style="display: none;"></div>
                    <div id="div-busca"></div>
                </div>
                
            </div>
        </div>
    </div>


    <!--- Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/xhttp.js"></script>
    <script src="assets/js/generic.js"></script>
    <script src="assets/js/user.js"></script>
</body>
</html>