$(document).ready(function() {
    $('#acronym').on('blur', function() {
        var acronym = $(this).val();

        $.ajax({
            url: 'back.php',
            type: 'POST',
            data: { acronym: acronym },
            success: function(data) {
                $('#result').html(data);
            },
            error: function(xhr, status, error) {
                console.error('Error fetching acronym:', error);
                $('#result').html('Error fetching acronym. Please try again later.');
            }
        });
    });
});