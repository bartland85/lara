/**
 * Created by Bart on 30.05.15.
 */

jQuery(document).ready(function($){

    $('.user-edit-button').magnificPopup({
        type: 'ajax',
        width: 500,
        height:500,
        closeBtnInside: true,
        showCloseBtn: true

    });

    $(document).on('click', '#user-edit-save', function(){

        var data = $('#user-edit-form').serializeArray();
        var url = $('#user-edit-form').attr('action');

        $.ajax({

            url: url,
            method: 'PUT',
            data: data,
            success:function(){

            }

        });

    });

    $('#text').summernote({
        height: 300,                 // set editor height

        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor

        focus: false

    });

    $('.adult_confirm_button').on('click', function(){

        $.ajax({
            'method': 'GET',
            'url': '/lara/public/admin/user/adult'

        })

    });

    $('#language-change-select').change(function(){
        $('#language-form').submit();

    });

    $('.lang-download').click(function(){

        var link = $(this);

        $.ajax({
            method: 'GET',
            url: '/lara/public/scripts/translate/' + link.attr('data-lang'),
            success:function(response){

                    if(response == 'success'){
                    link.remove();
                    console.log($('#languages[' + link.attr('data-lang') + ']'));
                    console.log('#languages[' + link.attr('data-lang') + ']');
                    $('#languages_' + link.attr('data-lang')).prop("disabled", false);
                    }

            }


        });
    });

    $(document).on('submit', '#comment-form', function(event){
        event.preventDefault();

        $.ajax({
            'url': $(this).attr('action'),
            'method': $(this).attr('method'),
            'data': $(this).serialize()
        });
    });

});
