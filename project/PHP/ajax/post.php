<?php


if (is_null($_SERVER['HTTP_User_Token'])) {

    header('user-token:' . time());
//    echo json_encode([
//       'stateCode' => 201,
//       'stateData' => time()
//    ]);

}
//else {
//
//    $token = intval($_SERVER['HTTP_USER_TOKEN']);
//    $limit = time() - $token;
//
//    if ($limit > 10) {
////        header('user-token' . time());
//        echo json_encode([
//            'stateCode' => 202,
//            'stateData' => time()
//        ]);
//
//
//    }
//}