/**
 * Created by sallalji on 16/02/2016.
 */

$( document ).ready(function() {

    if (window.location.hash) {
        $(window.location.hash).show();
    }
    $("#team").hide();
    $(".legend").hide();
    $("#pub").hide();
    $("#locations").hide();

    $(window).on("hashchange", function(){
        var hash = window.location.hash.substring(1); // hash part of url withou the first letter (#)
        $("#team").show();
        $("#"+hash).show();
    });
    $(".team_id").click(function(){
        $("#team").show();
        $("#intro").hide();
        // $("#fund").hide();
    });

    $(".locations_id").click(function(){
        $("#locations").show();
        $("#team").hide();
        //$("#intro").hide();
        $("#fund").hide();
        showmap();

    });

    $(".intro_id").click(function(){
        $("#intro").show();
        $("#team").hide();

    });
    $(".fund_id").click(function(){
        $("#fund").show();
        $("#intro").hide();
        $("#team").hide();
    });
    $(".pub_id").click(function(){
        $("#pub").show();
        $("#team").hide();
    });
    $(".hover_effect").click(function(){
        $("#steps").toggle();

    });

    $("#submit_btn").click(function() {

        var proceed = true;

        $("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
            $(this).css('border-color','');
            if(!$.trim($(this).val())){ //if this field is empty
                $(this).css('border-color','red'); //change border color to red
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red
                proceed = false; //set do not proceed flag
            }
        });

        if(proceed) //everything looks good! proceed...
        {

            //get input field values data to be sent to server
            post_data = {
                'user_name'	: $('input[name=user_name]').val(),
                'user_email'	: $('input[name=user_email]').val(),
                'user_msg'	: $('textarea[name=user_msg]').val(),
                'mysecret'   : $('input[name=mysecret]').val()
            };

            //Ajax post data to server
            $.post('send.php', post_data, function(response){
                if(response.type == 'error'){ //load json data from server and output message
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                    output = '<div class="success">'+response.text+'</div>';
                    //reset values in all input fields
                    $("#contact_form  input[required=true], #contact_form textarea[required=true]").val('');
                    $("#contact_form #contact_body").slideUp(); //hide form after success
                }
                $("#contact_form #contact_results").hide().html(output).slideDown();
            }, 'json');
            $('input[name=user_name]').val('');
            $('input[name=user_email]').val('');
            $('textarea[name=user_msg]').val('');
            alert('Your email was sent');

        }

    });

// Read a page's GET URL variables and return them as an associative array.
    function getUrlVars()
    {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }
    $('.form-inline').submit(function(e){
        e.preventDefault();
        makeAjaxRequest();
        return false;
    });

/*
* find Pharm site number to verify it exists. Success change border color green else white
 */
    function makeAjaxRequest() {
        $.ajax({
            url: 'pharmNo.php',
            type: 'post',
            data: {name: $('input#name').val()},
            cache: false,
            success: function(result) {


                var response = result;
                if(response != 0){

                    $('input#name').css('border-color', /*'green'*/'#c1dcd0'); //green
                    $('input#name').css('background-color',/*'red'*/'#fff'); //white
                    response = response+"?phar=true";

                    var url = window.location.href+"cinfo/"+response;
                    $(location).attr('href',url);

                }
                else{
                    $('input#name').css('border-color',/*'red'*/'red'); //red
                    $('input#name').css('background-color',/*'red'*/'#dcc1c1'); //red

                }


            }

        });
    }


});




