$('.button-del').click(function(e) {
    e.preventDefault();
    const id = $(this).attr("id")
    const url = window.location.href + 'usuarios/' + 'del/' + id;
    console.log(url)
    
    if(window.confirm('Você realmente deseja excluir?')){
        document.getElementById(id).remove();
        $.ajax({
            type : 'DELETE',
            url : url,
            success: function(data) {
                console.log(data)
            }
        })
    }
})