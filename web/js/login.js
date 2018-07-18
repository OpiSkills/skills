$(document).ready(function() {
    $('.slideshow').cycle({
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });

    var username = $('#_usr_');
    var password = $('#_pwd_');
    var btnLogin = $('#submit-login');

    btnLogin.on('click', function() { login(); });

    function login()
    {
    	usr = jQuery.trim(username.val());
    	pwd = jQuery.trim(password.val());
    	if (usr == '' || pwd == '') return false;

    	console.log(usr, pwd);

    	$.ajax({  
           	url:        'login/ajax',  
           	type:       'POST',   
           	dataType:   'json',  
           	async:      true,
           	data: {
           		username: usr,
           		password: pwd
           	},
           
           	success: function(data, status) {  
              	
			},  
			
			error : function(xhr, textStatus, errorThrown) {  
			  	alert('Ajax request failed.');  
			}  
        });  
    }
});