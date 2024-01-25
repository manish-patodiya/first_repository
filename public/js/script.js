$(function () {

    $("#frm-login").submit(function (event) {
        event.preventDefault();

        let options = {
            "url": "http://localhost/first_repository/server/login.php",
            "method": "post",
            "data": $("#frm-login").serialize(),
            "success": function (res) {
                let response = JSON.parse(res);
                if (response.status == 1) {
                    //get the user detail 
                    console.log(response.user_detail);
                    window.location.reload();

                    //Replace 
                    // $("#mdl-login").modal('hide');
                    // $('.modal-backdrop').remove();
                    // $("#header-buttons").html(`<button class="btn btn-outline-light"> Log Out</button>`);
                } else {
                    $("#error-msg").show();
                    $("#error-msg").html(response.message);
                    console.log(response.message);
                }
            },

            "error": function (err) {
                console.log(err.statusText);
            }

        };
        $.ajax(options);
    });

    $("#frm-logout").submit(function (event) {
        event.preventDefault();
        let options = {
            "url": "http://localhost/first_repository/server/login.php",
            "method": "post",
            "data": $("#frm-logout").serialize(),
            "success": function (res) {
                console.log(res);
                window.location.reload();
                console.log("after reload");
            },

            "error": function (err) {
                console.log(err.statusText);
            }

        };
        $.ajax(options);
    });
    $("#mdl-login").val(null).trigger("change");

});