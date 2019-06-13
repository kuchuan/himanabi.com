    $(document).ready(function(){
$('#action_menu_btn').click(function(){
    $('.action_menu').toggle();
});
    });

    $(function() {
    $('.input-group-text send_btn').on('click', function(){
        var message_text = $('#message-text').val();
        if(message_text !== ''){
            $(".row:last").after('<div class="row"><div class="message message-out pull-right">'+message_text+'</div></div>');
            $('#message-text').val('');
        }
    });
    