
var xhttp = new XMLHttpRequest;

function xmlHttpGet(url, callback, parameters='')
{
    xhttp.onreadystatechange = callback;
    xhttp.open('GET', url + '.php' + parameters, true);
    xhttp.send();
}

function xmlHttpPost(url, callback, parameters='')
{
    xhttp.onreadystatechange = callback;
    xhttp.open('POST', url + '.php', true);

    //Caso os parametros não sejam obj (FormData)
    if(typeof(parameters) != 'object')
    {
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
    
    xhttp.send(parameters);
}

function beforeSend(callback)
{
    //console.log(this.readyState); //Verifica estados da requisisão
    //console.log(this.status); //Verifica status da requisisão

    //Chama icone de loading
    if(xhttp.readyState < 4){
        callback();
        //div_users.innerHTML = `<i class="fa fa-refresh fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>`;
    }
}

function success(callback)
{
    if(xhttp.readyState == 4 && xhttp.status == 200)
    {
        callback();
    }
}

function error(callback)
{
    xhttp.onerror = callback();
}