$("#textchat").submit(function(e) {  // <-- ensure form's HTML is ready
        e.preventDefault();
        if($("#textchat").valid()){
            $("#messages").append("<li>Me: "+$("#messageinput").val()+"</li>")
            $( "<p>Writing...</p>" ).insertBefore( ".form-control" );
            $.ajax({
                type: "POST",
                url: 'index.php',
                success: function(response)
                {
     
                    // user is logged in successfully in the back-end
                    // let's redirect
                    if (response.success == "1")
                    {
                        console.log("log in")
                    }
                    else
                    {
                        alert('Invalid Credentials!');
                    }
               }
           });
        }
    });
    $("#textchat").validate({
        rules: {
            message: { required: true}
        },
        messages: {
            message: "El campo es obligatorio."
        }
    });
