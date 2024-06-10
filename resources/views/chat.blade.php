<!DOCTYPE html>
<html>

<head>
    <title>Chatbot</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div id="chat">
        <div id="chat-history"></div>
        <input type="text" id="user-input" placeholder="Ketik pesan Anda di sini...">
        <button onclick="sendMessage()">Kirim</button>
    </div>

    <script>
        function sendMessage() {
            var userInput = $('#user-input').val();

            $.ajax({
                type: 'POST',
                url: '/chatbot',
                data: {
                    _token: '{{ csrf_token() }}',
                    message: userInput
                },
                success: function(response) {
                    $('#chat-history').append('<div><strong>Bot:</strong> ' + response.reply + '</div>');
                    $('#user-input').val('');
                }
            });
        }
    </script>
</body>

</html>
