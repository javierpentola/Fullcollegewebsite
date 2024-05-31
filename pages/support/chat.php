<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <link rel="stylesheet" href="/College%20campus/assets/css/styles.css?v=1.0">
    <title>Support Chat</title>
    <style>
        .container {
            width: 80%;
            margin: auto;
        }
        .chat-window {
            border: 2px solid #000000;
            padding: 10px;
            background-color: #c0c0c0;
            height: 400px;
            overflow-y: scroll;
            margin-bottom: 20px;
        }
        .chat-input {
            display: flex;
        }
        .chat-input input {
            width: 80%;
            padding: 10px;
            border: 2px solid #000000;
        }
        .chat-input button {
            width: 20%;
            background-color: #004080;
            color: white;
            border: 2px solid #000000;
            padding: 10px;
            cursor: pointer;
        }
        .chat-input button:hover {
            background-color: #ffffff;
            color: black;
        }
        .message {
            padding: 5px;
            margin-bottom: 5px;
            border-bottom: 1px solid #000000;
        }
        .message .user {
            font-weight: bold;
        }
        .message .time {
            font-size: small;
            color: gray;
        }
    </style>
</head>
<body class="window">
    <?php include('../../includes/navbar.php'); ?>
    <div class="container window">
        <div class="title-bar">
            <div class="title-bar-text">Support Chat</div>
        </div>
        <div class="window-body">
            <h1 style="text-align: center;">Support Chat</h1>
            <div class="chat-window" id="chat-window">
                <div class="message">
                    <span class="user">Support:</span>
                    <span class="time">10:00 AM</span>
                    <p>Hello! How can I assist you today?</p>
                </div>
            </div>
            <div class="chat-input">
                <input type="text" id="chat-input" placeholder="Type your message here...">
                <button onclick="sendMessage()">Send.</button>
            </div>
        </div>
    </div>
    <?php include('../../includes/footer.php'); ?>

    <script>
        function sendMessage() {
            var input = document.getElementById('chat-input');
            var message = input.value;
            if (message.trim() !== '') {
                var chatWindow = document.getElementById('chat-window');
                var newMessage = document.createElement('div');
                newMessage.className = 'message';
                newMessage.innerHTML = '<span class="user">You:</span> <span class="time">' + new Date().toLocaleTimeString() + '</span><p>' + message + '</p>';
                chatWindow.appendChild(newMessage);
                chatWindow.scrollTop = chatWindow.scrollHeight;
                input.value = '';
            }
        }
    </script>
</body>
</html>
