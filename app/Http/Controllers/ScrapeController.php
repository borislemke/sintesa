<?php

namespace App\Http\Controllers;

use Illuminate\Database\Connectors\Connector;
use PHPHtmlParser\Dom;

use File;
use Illuminate\Http\Request;

use App\Http\Requests;

class ScrapeController extends Controller
{
    //
    public function index()
    {
        $start_time = microtime(true);
        $json = File::get(storage_path('province.json'));

        $data = json_decode($json);
        $prefix = $data->prefix;

        ini_set('max_execution_time', 2000000); //300 seconds = 5 minutes

        $options = array(
            'http' => array(
                'method' => "GET",
                'header' => "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36"
            )
        );
        $context = stream_context_create($options);

        $infoUrls = [];

        foreach ($data->provinces as $province) {
            $url = $prefix . $province;
            $website = file_get_contents($url, false, $context);

            echo "Fetching data for province $province from url: $url<br>";

            $dom = new Dom;
            $dom->loadStr($website, []);
            $paginator = $dom->find('.pagination')->find('a');
            $linksCompiled = '';

            foreach ($paginator as $page) {
                $linksCompiled .= $page->getAttribute('href');
            }
            $linkChunks = explode('=', $linksCompiled);
            $pageNumber = end($linkChunks);
            File::put(storage_path("province_pages/$province" . "_$pageNumber.txt"), '');

            for ($i = 1; $i <= $pageNumber; $i++) {
                $pageUrl = "$url?page=$i";
                $pageString = file_get_contents($pageUrl);

                $provincePage = new Dom;
                $provincePage->loadStr($pageString, []);
                $linkWrappers = $provincePage->find('.companytitle');

                foreach($linkWrappers as $wrapper) {
                    $link = $wrapper->find('a');
                    $infoUrl = "http:" . $link->getAttribute('href') . "/info";
                    $infoUrls[] = $infoUrl;
                }
                $infoUrls = array_unique($infoUrls);
            }
            File::put(storage_path("provinces_data/$province.json"), json_encode($infoUrls));
            File::put(storage_path("completed/$province.txt"), (microtime(true) - $start_time));
        }
        echo 'Finished in ' . (microtime(true) - $start_time);
        File::put(storage_path("all_completed.txt"), (microtime(true) - $start_time));
    }
}
