<?php

function getVideos($method) {
       
        // obtain data from database
        $aData = "SELECT * FROM s189_videos";
		$aData = mysql_query($aData);
		//$aData = mysql_fetch_array($aData);
		
        // output in necessary format
        switch ($method) {
            case 'json': // gen JSON result
                // you can uncomment it for Live version
                // header('Content-Type: text/xml; charset=utf-8');
                if (count($aData)) {
				
				$emparray = array();
				while($row =mysql_fetch_assoc($aData))
				{
					$emparray[] = $row;
				}
					//echo '<pre>';
					//print_r($emparray);
                    echo json_encode($emparray);
                } else {
				
                    echo json_encode(array('data' => 'Nothing found'));
                }
                break;
            case 'xml': // gen XML result
                $ab = $sCode = '';
				$myFile = "rss.xml";
				$fh = fopen($myFile, 'w') or die("can't open file");
                if (count($aData)) {
				$rss_txt = "";
				$rss_txt .= '<?xml version="1.0" encoding="utf-8"?>';
				$rss_txt .= "<rss version='2.0'>";
					$rss_txt .= "<unit>";
                    while($aRecords = mysql_fetch_array($aData)) {
					
					
					$rss_txt .= '<id>' .$aRecords['id']. '</id>';
					$rss_txt .= '<title>' .$aRecords['title']. '</title>';
					$rss_txt .= '<author>' .$aRecords['author']. '</author>';
					$rss_txt .= '<image>' .$aRecords['thumb']. '</image>';
					$rss_txt .= '<views>' .$aRecords['views']. '</views>';
					
					}
					$rss_txt .= "</unit>";
					$rss_txt .= '</rss>';
					
					fwrite($fh, $rss_txt);
					fclose($fh);
					
					$file = file_get_contents('rss.xml');
					
					echo $file;
					//header('Content-Type: text/xml;');
					}
                break;
            case 'html': // gen HTML result
                $sCode = '';
                if (count($aData)) {
				
                    while($aRecords = mysql_fetch_array($aData)) {
                        $sCode .= <<<EOF
<div>
    <img src="{$aRecords['thumb']}" style="float:left;margin-right:10px;" />
    <p>Title: {$aRecords['title']}</p>
    <p>Author: {$aRecords['author']}</p>
    <p>Views: {$aRecords['views']}</p>
</div>
EOF;
                    }
                } else {
                    $sCode = '<div>Nothing found</div>';
                }

                header('Content-Type: text/html; charset=utf-8');
                echo $sCode;
                break;
        }
    }


?>