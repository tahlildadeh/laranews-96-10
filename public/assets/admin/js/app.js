$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function setupChangePassword(url) {
    var modal = jQuery('#changePasswordModal'),
        submit = modal.find('button[type=submit]');

    modal.find('form').on('submit', function (e) {
        e.preventDefault();
        submit.prop('disabled', true);
        modal.find('.help-block').remove();
        jQuery('#changePasswordModal .help-block').remove();
        var currentPassword = jQuery('[name=current_password]').val(),
            newPassword = jQuery('[name=new_password]').val(),
            newPasswordConfirmation = jQuery('[name=new_password_confirmation]').val();

        jQuery.ajax({
            url: url,
            type: 'POST',
            data: JSON.stringify({
            current_password: currentPassword,
            new_password: newPassword,
            new_password_confirmation: newPasswordConfirmation}),
            contentType: 'application/json',
            dataType: 'json',
    })
        .done(function(data, textStatus, jqXHR){
            modal.modal('hide');
        })
            .fail(function(jqXHR, textStatus, errorThrown ){
                var errors = jqXHR.responseJSON.errors || {};
                for(var item in errors){
                    if(errors.hasOwnProperty(item)){
                        modal.find('[name='+ item +']').after('<span class="help-block"><strong>'+ (errors[item][0] || 'Unkknown Error' )+ '</strong></span>')
                    }
                }
            })
            .always(function(dataOrJqXHR, textStatus, jqXHROrErrorThrown){
                submit.prop('disabled', false);
            });
    })
}

jQuery(function () {
    jQuery('.destroy-model').on('click', function (e) {
        e.preventDefault();
        var url = jQuery(this).data('destroy-url');
        if (!confirm('Are yousure that you want to remove this record')) {
            return;
        }
        var token = jQuery('meta[name="csrf-token"]').attr('content');
        var html = '<form method="post" action="' + url + '">' +
            '<input type="hidden" name="_token" value="'+ token +'" >' +
            '<input type="hidden" name="_method" value="DELETE" >' +
            '</form>';
        var form = jQuery(html);
        jQuery('body').append(form);
        setTimeout(function () {
            form.submit()
        }, 100);
    })
});