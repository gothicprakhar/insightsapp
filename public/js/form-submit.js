$("form").submit(function(e) {
        e.preventDefault();
        $(':input[type=submit]').attr('disabled', 'disabled');
        $(':input[type=submit]').val('Analyzing...');
        $('strong').css('color', 'red');

        var self = this;

        var name = /^[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,6}$/;

        if( $(':input[id=regular1]').val().match(name) )
            self.submit();
        else
        {
            $(':input[type=submit]').removeAttr('disabled');
            $(':input[type=submit]').val('Analyze');
            $('#error').html('Invalid domain name.');
        }
    });
