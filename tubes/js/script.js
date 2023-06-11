$(document).ready(function() {
    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        $.get('ajax/search.php?keyword=' + $('#keyword').val(), function(data) {
            $('#container').html(data);
        });
    });
});