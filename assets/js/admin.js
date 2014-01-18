$(document).ready(function(){
    $(".editable").each(function(){
        $(this).click(function(e){
            e.preventDefault()
            
            var that = $(this)

            $.ajax({
                url: window.base_url + 'admin/' + $(this).attr('data-id') + '/edit/',
                type: 'POST',
                dataType: 'html',
                success: function(html){
                    that.replace(html)
                }
            })
        })
    })
})