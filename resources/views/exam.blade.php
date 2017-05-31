<!DOCTYPE html>
<html>
<head>
	<title>Fuck</title>
</head>
<body>
<?php
  include(app_path().'\Libs\PHPCrawler\libs\PHPCrawler.class.php');
  include(app_path().'\Libs\DOMParser\simple_html_dom.php');
  class MyCrawler extends PHPCrawler {
    function handleDocumentInfo(PHPCrawlerDocumentInfo $DocInfo)  { 
        echo "Page requested: ".$DocInfo->url.'</br>';
        $html = file_get_html($DocInfo->url);
        if(is_object($html)) {
            // $t = $html->find("title", 0);
            // if($t){
            //   $title = $t->innertext;
            // }
          
            //echo "Title: ".$title."</br></br></br>";

            $img = $html->find('<div>');
            foreach ($img as $element) {
              echo $element->class.'<br>';
            }
            $html->clear(); 
            unset($html);
        }
  
    flush();
    }
  
}

  $crawler = new MyCrawler();
  $crawler->setURL("vnexpress.net"); 
  $crawler->addContentTypeReceiveRule("#text/html#");
  $crawler->addURLFilterRule("#\.(jpg|jpeg|gif|png)$# i"); 
  $crawler->enableCookieHandling(true); 
  $crawler->setTrafficLimit(1000 * 1024);
  $crawler->go(); 
  $report = $crawler->getProcessReport(); 

  if (PHP_SAPI == "cli") $lb = "\n"; 
  else $lb = "<br />"; 
  echo "Summary:".$lb; 
  echo "Links followed: ".$report->links_followed.$lb; 
  echo "Documents received: ".$report->files_received.$lb; 
  echo "Bytes received: ".$report->bytes_received." bytes".$lb; 
  echo "Process runtime: ".$report->process_runtime." sec".$lb; 

?>
</body>
</html>