




$("#user").change( function(){
    $.ajax({
        url: "/pweb161/project/ajax/cekuser",
        data: { "namausernya" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warning_user_name").html( "Username sudah terdaftar" );
            } else {
                $("#warning_user_name").html( "Username OK" );
            }
        }
    });
} );

$("#email").change( function(){
    $.ajax({
        url: "/pweb161/project/ajax/cekemail",
        data: { "emailaddr" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warningemail").html( "Email sudah pernah terdaftar" );
            } else {
                $("#warningemail").html( "Email OK" );
            }
        }
    });
} );
