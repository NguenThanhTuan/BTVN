"use strict"
$(document).ready(function () {
    $('#list').html(localStorage.getItem('listItems'));
    $('.header').submit(function(event) 
    {
        event.preventDefault();
        var item = $('#input').val();
        if(item) 
        {
            $('#list').append("<li><input class='checkbox' type='checkbox'/>" + item + "<a class='remove'>X</a></li>");
            localStorage.setItem('listItems', $('#list').html());   
            $('#input').val("");
        }
        if(item ==='')
        {
            alert("Hãy nhập công việc của bạn");
        }
    });
    $(document).on('change', '.checkbox', function() 
    {
        if($(this).attr('checked')) 
        {
            $(this).removeAttr('checked');
        } 
        else 
        {
            $(this).attr('checked', 'checked');
        }
        $(this).parent().toggleClass('completed');
        localStorage.setItem('listItems', $('#list').html());
    });
    $(document).on('click', '.remove', function() 
    {
        $(this).parent().remove();
        localStorage.setItem('listItems', $('#list').html());
    });
});
