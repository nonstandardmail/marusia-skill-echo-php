<?php

function create_echo_response($request_message)
{
    return [
        'response' => [
            'text' => $request_message['request']['original_utterance'],
            'tts' => $request_message['request']['original_utterance'],
            'end_session' => FALSE
        ],
        'session' => [
            'user_id' => $request_message['session']['user_id'],
            'session_id' => $request_message['session']['session_id'],
            'message_id' => $request_message['session']['message_id']
        ],
        'version' => $request_message['version']
    ];
}

$request_message = json_decode(file_get_contents('php://input'), true);
$response_message = create_echo_response($request_message);

header('Content-Type: application/json');
echo json_encode($response_message)

?>
