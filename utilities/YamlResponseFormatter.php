<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 21.02.2015
 * Time: 21:03
 */

namespace app\utilities;


use Symfony\Component\Yaml\Yaml;
use yii\web\Response;
use yii\web\ResponseFormatterInterface;

class YamlResponseFormatter implements ResponseFormatterInterface {

    const FORMAT = 'yaml';

    /**
     * Formats the specified response.
     * @param Response $response the response to be formatted.
     */
    public function format($response)
    {
        $response->headers->set('Content-Type: application/yaml');
        $response->headers->set('Content-Disposition: inline');
        $response->content = Yaml::dump($response->data);
    }
}