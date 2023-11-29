<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have stored your OpenAI API key securely on the server
    $apiKey = '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';

    // Get the user's question from the POST request
    $question = $_POST['question'];

    // Create a request to the OpenAI API
    $url = 'https://api.openai.com/v1/completions';
    $headers = array(
        'Content-Type: application/json',
        'Authorization: Bearer ' . $apiKey
    );

    $data = array(
        'model' => 'text-davinci-003',
        'prompt' => $question,
        'max_tokens' => 4000,
        'temperature' => 0
    );

    $options = array(
        'http' => array(
            'header' => implode("\r\n", $headers),
            'method' => 'POST',
            'content' => json_encode($data)
        )
    );

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) {
        echo json_encode(array('response' => 'Failed to load response.'));
    } else {
        $responseArray = json_decode($result, true);
        $response = $responseArray['choices'][0]['text'];
        echo json_encode(array('response' => $response));
    }
    exit;  // Stop further execution of PHP after sending the response
} else {
    $response = 'Invalid request method.';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo romusha.png" type="image/x-icon">
    <title>Chat</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        #recycler_view {
            max-height: 400px;
            overflow-y: auto;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .sent-by-bot {
            background-color: #d1f1ff; /* Ganti warna sesuai keinginan */
        }
    </style>
</head>

<body>
    <section style="background-color: #ffff;">
        <div class="container py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center p-3"
                            style="border-top: 4px solid #ffa900;">
                            <h5 class="mb-0">Chat messages</h5>
                            <div class="d-flex flex-row align-items-center">
                                <span class="badge bg-warning me-3">20</span>
                                <i class="fas fa-minus me-3 text-muted fa-xs"></i>
                                <i class="fas fa-comments me-3 text-muted fa-xs"></i>
                                <i class="fas fa-times text-muted fa-xs"></i>
                            </div>
                        </div>
                        <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
                            <!-- Chat messages will be displayed here -->
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" id="message_edit_text" placeholder="Type message"
                                    aria-label="Recipient's username" aria-describedby="button-addon2" />
                                <button class="btn btn-warning" type="button" id="button-addon2"
                                    style="padding-top: .55rem;" onclick="sendMessage();">
                                    Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
        function addToChat(message, sentBy) {
            var recycler_view = document.querySelector(".card-body");
            var div = document.createElement("div");
            div.className = "d-flex flex-row justify-content-" + (sentBy === "SENT_BY_ME" ? "end" : "start");
            div.innerHTML = '<div><p class="small p-2 ' + (sentBy === "SENT_BY_ME" ? "me-3" : "ms-3") +
                ' mb-3 rounded-3 ' + (sentBy === "SENT_BY_BOT" ? "sent-by-bot" : "") + '">' + message + '</p></div>';
            recycler_view.appendChild(div);
            recycler_view.scrollTop = recycler_view.scrollHeight;
        }

        function sendMessage() {
            var question = document.getElementById('message_edit_text').value.trim();
            addToChat(question, 'SENT_BY_ME');

            // Make an AJAX request to the same PHP file
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = JSON.parse(xhr.responseText);
                    addToChat(response.response, 'SENT_BY_BOT');
                }
            };
            xhr.send('question=' + encodeURIComponent(question));

            document.getElementById('message_edit_text').value = '';
        }
    </script>
</body>

</html>