<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class CallAPI
{
    public function getStudentName($nim = null)
    {
        $url = "https://api.mercubuana.ac.id/akademik/esurat/$nim";
        $result = file_get_contents($url);
        $output = json_decode($result, true);
        return $output[0]['mhsnama'];
    }

    public function getScores($nim = null)
    {
        $url = "https://api.mercubuana.ac.id/akademik/transkripmhs/$nim";
        $options = [
            'http' => [
                'header' => "Content-Type: application/json\n" . "sia:mercubuana2017!\n"
            ]
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $output = json_decode($result, true);
        return $output;
    }

    public function getFinalProject($nim = null)
    {
        $studentName = $this->getStudentName($nim);
        $finalProjectResult = $this->getScores($nim);
        $finalProjectCheck = 0;
        foreach ($finalProjectResult as $key => $value) {
            if ($value['namamk'] == "TUGAS AKHIR" && $value['nhuruf'] != null)
                $finalProjectCheck = 1;
        }
        $output = [
            "nama" => $studentName,
            "status" => $finalProjectCheck
        ];
        return $output;
    }
}
