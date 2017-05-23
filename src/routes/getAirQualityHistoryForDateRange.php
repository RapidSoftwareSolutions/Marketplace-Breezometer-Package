<?php

$app->post('/api/Breezometer/getAirQualityHistoryForDateRange', function ($request, $response) {

    $settings = $this->settings;
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','coordinates', 'start_datetime', 'end_datetime']);

    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    $apiKey = $post_data['args']['apiKey'];
    $coordinates = $post_data['args']['coordinates'];

    $latitude = trim(explode(",",$coordinates)[0]);
    $longitude = trim(explode(",",$coordinates)[0]);

    $start_datetime = $post_data['args']['start_datetime'];
    $end_datetime = $post_data['args']['end_datetime'];

    $strTime =  strtotime($start_datetime);
    $start_datetime = date('Y-m-d',$strTime)."T".date('H:i:s',$strTime);

    $strTime =  strtotime($end_datetime);
    $end_datetime = date('Y-m-d',$strTime)."T".date('H:i:s',$strTime);


    $query_str = $settings['baqi_url'];
    $client = $this->httpClient;


    $data = array("lat"=>$latitude ,"lon"=>$longitude, "key"=>$apiKey, "start_datetime"=>$start_datetime, "end_datetime"=>$end_datetime);

    if(isset($post_data['args']['lang']))
    {
        $data['lang'] = $post_data['args']['lang'];
    }

    if(isset($post_data['args']['interval']))
    {
        $data['interval'] = $post_data['args']['interval'];
    }

    try {

        $resp = $client->get($query_str, [
            'query' => $data
        ]);
        $responseBody = $resp->getBody()->getContents();

        if(in_array($resp->getStatusCode(), ['200', '201', '202', '203', '204'])) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
            if(empty($result['contextWrites']['to'])) {
                $result['contextWrites']['to']['status_msg'] = "Api return no results";
            }
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody()->getContents();
        if(empty(json_decode($responseBody))) {
            $out = $responseBody;
        } else {
            $out = json_decode($responseBody);
        }
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'API_ERROR';
        $result['contextWrites']['to']['status_msg'] = $out;

    } catch (GuzzleHttp\Exception\ConnectException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to']['status_code'] = 'INTERNAL_PACKAGE_ERROR';
        $result['contextWrites']['to']['status_msg'] = 'Something went wrong inside the package.';

    }

    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});
