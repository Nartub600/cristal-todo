$(function () {

    $('#login-form').on('submit', function (e) {
        e.preventDefault();

        $(this).ajaxSubmit({
            beforeSubmit: function () {
                $('#login-info').addClass('hidden');
            },
            success: function (response) {
                if (response.status == 'accepted') {
                    window.location = response.next;
                } else {
                    $('#login-info').removeClass('hidden');
                }
            }
        });
    });

    $('.done-form').on('submit', function (e) {
        e.preventDefault();

        $(this).ajaxSubmit({
            success: function (response) {
                if (response.status == 'ok') {
                    $('.status-label[data-task-id=' + response.task.id +']').text('Hecha').removeClass('label-danger').addClass('label-success');
                    $('.done-form[data-task-id=' + response.task.id + ']').remove();
                    $('.edit-btn[data-task-id=' + response.task.id + ']').remove();
                }
            }
        })
    });

    $('#query').autocomplete({
        serviceUrl: $('#searchUrl').val(),
        deferRequestBy: 500,
        onSelect: function (suggestion) {
            $('.view-btn[data-task-id=' + suggestion.data +']')[0].click();
        }
    });

});
