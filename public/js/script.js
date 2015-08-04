$("#record").click(function(){
    var data = $("#genre").val();
    var route = "http://tests.dev/genre";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'POST',
        dataType: 'json',
        data:{
            genre: data
        },
        success:function(){
            $("#msj-success").fadeIn();
        }
    });
});
