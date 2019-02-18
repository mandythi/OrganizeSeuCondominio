
window.onload = function()
{
    var btn_users = document.querySelector("#btn-users");

    var div_users = document.querySelector("#div-users");
    var div_create = document.getElementById("div-create");
    var div_busca = document.getElementById("div-busca");
    var div_busca_msg = document.getElementById("div-busca-msg");

    var form_cadastrar = document.querySelector("#form-cadastrar");
    var form_buscar = document.querySelector("#form-buscar");

    var alertClass;

    /*** Busacar ***/
    form_buscar.addEventListener('submit', function(event)
    {
        event.preventDefault();

        var form = new FormData(form_buscar);

        xmlHttpPost('ajax/buscar', function()
        {
            beforeSend(function()
            {
                div_busca_msg.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>`;
            });

            success(function()
            {
                if(xhttp.responseText == 'nouser')
                {
                    div_busca.innerHTML = '';
                    displaysMessage(div_busca_msg, "alert-warning", "Nenhum usuário encontrado");
                    hiddenMessage(div_busca_msg, "alert-warning", 5); //Fecha mensagem apos 3 segundos
                }
                else
                {
                    var users = JSON.parse(xhttp.responseText);

                    div_busca.innerHTML = createTableUsers(users);
                }
            });

        }, form);

    });

    /*** Cadastro ***/
    form_cadastrar.onsubmit = function(event)
    {
        event.preventDefault();

        //Pega POSTs do formulário
        var form = new FormData(form_cadastrar);
        
        xmlHttpPost('ajax/create', function()
        {
            //Icone de aguarde
            beforeSend(function(){
                div_create.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>`;
            });

            success(function()
            {
                var response = xhttp.responseText;

                if(response == 'Cadastrado')
                {
                    alertClass = "alert-success";
                    displaysMessage(div_create, alertClass, "Cadastrado com sucesso !");
                }
                else if(response == 'Erro')
                {
                    alertClass = "alert-danger";
                    displaysMessage(div_create, alertClass, "Ocorreu um erro, tente novamente !");
                }

            });

        }, form);

        hiddenMessage(div_create, alertClass, 3); //Fecha mensagem apos 3 segundos

        clearFields(form_cadastrar); //Limpa campos
    }

    /*** Listar Usuários ***/
    btn_users.onclick = function()
    {
        //callback é um função passada como parametro para outra função
        xmlHttpGet('ajax/user', function()
        {
            //Icone de aguarde
            beforeSend(function(){
                div_users.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>`;
            });
             
            success(function()
            {
                var users = JSON.parse(xhttp.responseText);

                div_users.innerHTML = createTableUsers(users);
            });

            //error(function(){div_users.innerHTML = "Ocorreu um erro";});

        }, '?id=1');
    }

}