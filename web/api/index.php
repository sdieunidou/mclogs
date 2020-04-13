<?php

require_once("../../core/core.php");

switch ($_SERVER['REQUEST_URI']) {
    case "/api/":
        require_once("frontend/main.php");
        break;
    case "/api/1/log":
    case "/api/1/log/":
        require_once("endpoints/log.php");
        break;
    case "/api/1/errors/rate":
        require_once("endpoints/rate-error.php");
        break;
    default:
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        http_response_code(404);

        $out = new stdClass();
        $out->success = false;
        $out->error = "Could not find endpoint.";

        echo json_encode($out);
        break;
}
