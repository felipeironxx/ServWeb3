function win(enderecoURL,w,h){
    
    $.fancybox({
        'padding': 20,
        'autoScale':true,
        'overLayShow': false,
        'transitionIn': 'elastic',
        'transitionOut' : 'elastic',
        'width': w,
        'height': h,
        'href' : enderecoURL,
        'type': 'iframe'
    });
}

function alerts(obj1, obj2){
    if(obj1 == 1){
        alert("Antes de concluir deve iniciar o serviço!!!!");
        window.location.reload();
    }else if(obj2 == 'N'){
        alert("Serviço ainda em andamento");
    }
}
