$(function(){
    var pesquisa = "";

    var dados = {
        palavra : pesquisa
    }
    $.post('actions/posts.php', dados, function(retorna){
        $("#conteudo").html(retorna);
    });
        
});

$(function(){
    $("#pesquisa").keyup(function(){
        var pesquisa = $(this).val();

        var dados = {
            palavra : pesquisa
        }
        $.post('actions/posts.php', dados, function(retorna){
            $("#conteudo").html(retorna);
        });
        
    });
});