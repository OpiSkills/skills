$(document).ready(function() {
    $('.slideshow').cycle({
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });

    //define vars
    var username = $('#_usr_');
    var password = $('#_pwd_');
    var btnLogin = $('#submit-login');

    //clicked on submit button
    btnLogin.on('click', function() { login(); });

    //checks username and password
    function login()
    {
        //remove error classes...
        $('input').removeClass('login-input-error');

        //yes: trim the spaces and check if user enters username and password
        usr = jQuery.trim(username.val());
        pwd = jQuery.trim(password.val());

        //somethings missin: set error classes and return false
        if (usr == '' || pwd == '') {
            if (usr == '') username.addClass('login-input-error');
            if (pwd == '') password.addClass('login-input-error');
            return false;
        }

        var loginAttempts = 0;
        
        $.ajax({
            url:        'login/ajax',  
            type:       'POST',   
            dataType:   'json',  
            async:      true,
            data: {
                username: usr,
                password: pwd,
                login_attempts: loginAttempts
            },
           
            success: function(data, status) {
                if (data === false)
                {
                    $('.loginform-errormessages').html('Ongeldige inlog').show();
                }
                else
                {
                    //redirect to home route...
                    window.location.href = 'home';
                }
            },  
            
            error : function(xhr, textStatus, errorThrown) {  
                alert('Ajax request failed.');  
            }  
        });  
    }
});