$(document).ready(function() {

    $(".modal-first").each(function() {
        $(this).on('click', function(){
            $('#exampleModal').modal('show')

            $.ajax({
                url: $(this).attr('href'), //'view-devices?id=3', //
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('.modal-body').html(data);
                }
            });     

            return false; 
        });
    });

});