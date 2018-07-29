//focus on the searchbar when start up the tool
$(document).ready(function() {
	$('#search-text').focus();

    $('.menubar-option').on('click', function() {
        var option = $(this).attr('option');
        switch (option)
        {
            case 'home':
                window.location.href = 'home';
            break;

            case 'users':
                window.location.href = 'users';
            break;

            case 'profiles':
                window.location.href = 'profiles';
            break;

            case 'groups':
                window.location.href = 'groups';
            break;

            case 'skills':
                window.location.href = 'skills';
            break;
        }
    });

    //logout
    $('#logout').on('click', function(e) {
        console.log('logout');
        e.preventDefault(); //destroy session
        console.log(e);

        $.ajax({  
            url:        'logout/ajax',  
            type:       'POST',   
            dataType:   'json',  
            async:      true,
            
            success: function(data, status) {
                //redirect to home route...
                window.location.href = 'home';
            },  
            
            error : function(xhr, textStatus, errorThrown) {  
                alert('Ajax request failed.');  
            }  
        });
    });

    var activePage = $('.crudbar').attr('active-page');
    
    $('.crudbar input[type="button"').on('click', function() {
        switch (activePage) {
            case 'users':
                if ($(this).attr('id') == 'crud-create') {
                    window.location.href = 'usersform';
                }
            break;
        }
    });
});

