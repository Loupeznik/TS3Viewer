<?php
require 'init.php';
use Symfony\Component\Yaml\Yaml;

class Bot {

    private $env;

    public function __construct()
    {
        $this->env = Yaml::parseFile(__DIR__ . '/../../.env.yml');
    }

    private function init() {

        $token = $this->env['ts3audiobot_token'];
        $ch = curl_init();
        $token = str_replace(":ts3ab:", ":", $token);
        $headers = array(
            'Content-Type:application/json',
            'Authorization: Basic ' . base64_encode($token)
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        return $ch;

    }

    public function command($type, $arg) {
        $ch = $this->init();
        $typeraw = rawurlencode($type);
        $argraw = rawurlencode($arg);
        if ($arg != '0') curl_setopt($ch, CURLOPT_URL, 'http://' . $this->env['server_ip'] . ':' . $this->env['ts3audibot_port'] . '/api/bot/use/0(/' . $typeraw . '/' . $argraw); 
        else curl_setopt($ch, CURLOPT_URL, 'http://127.0.0.1:58913/api/bot/use/0(/' . $typeraw . '/)');
        try {
            curl_exec($ch);
        } catch (Exception $e) {
            print 'An error has occured. Exception ' . $e->getMessage();
        }

        curl_close($ch);
    }

    public function status() {
        $ch = $this->init();
        curl_setopt($ch, CURLOPT_URL, 'http://' . $this->env['server_ip'] . ':' . $this->env['ts3audibot_port'] . '/api/bot/use/0(/song');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            try {
                $final = curl_exec($ch);
                $json = json_decode($final,true);
                if ($json['Title']) print $json['Title']; else print 'Bot is inactive';
            } catch (Exception $e) {
                print 'An error has occured. Exception: ' . $e->getMessage();
            }

            curl_close($ch);
    }

}
