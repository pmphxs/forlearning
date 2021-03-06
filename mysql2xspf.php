<?php
  //从mysql读取数据并生成xspf  
   header("Content-Type:text/xml;charset:utf-8");

   $xspf = new DOMdocument("1.0","utf-8");

   function creEle(&$parent,$eleName="")
   {
       global $xspf;
       // because the key word gloabal $xspf i worng a long time;
       $tem = $xspf->createElement($eleName);
       $parent->appendChild($tem);
       return 0;
   }

   function creAttr(&$parent,$eleName="",$value="")
   {
       global $xspf;
       $tem = $xspf->createAttribute($eleName);
       $tem->value = $value;
       $parent->appendChild($tem);
       return 0;
   }

   function creTextNode(&$parent,$value="")
   {
       global $xspf;
       $tem =$xspf->createTextNode($value);
       $parent->appendChild($tem);
       return 0;
   }

   //playlist node generate
   $playlist = $xspf->createElement("playlist");
  
   $pl_attr_xlmns = $xspf->createAttribute("xmlns");
   $pl_attr_xlmns->value = "http://xspf.org/ns/0/";
   $playlist->appendChild($pl_attr_xlmns);

   $pl_attr_version = $xspf->createAttribute("version");
   $pl_attr_version->value = "1";
   $playlist->appendChild($pl_attr_version);
  

   //title
   creEle(&$playlist,"title");
   creTextNode($playlist->lastChild,"TvList");
   // <creator>
  
   creEle(&$playlist,"creator");
   creTextNode($playlist->lastChild,"soul11201");
  
   //<info>http://soul11201.eu.nu</info>
   creEle(&$playlist,'info');
   creTextNode($playlist->lastChild,'http://soul11201.eu.nu');
  
   //trackList
   creEle(&$playlist,"trackList");
   $trackList = $playlist->lastChild;


  
   //////////////////////////////////////////////////////////////////////////////
   //mysql;

   $handle=mysql_connect("127.0.0.1","root","123a123a") or die(mysql_error());
   mysql_select_db("yz",$handle) or die(mysql_error());
  
   $select = "select * from track";
   $result = mysql_query($select);
   while($row= mysql_fetch_row($result))
   {
       //echo $row[2].'<br/>';

       //var_dump($row[2]);


       //track
       creEle($trackList,'track');
       $currentTrack = $trackList->lastChild;
       //locatiion
       creEle($currentTrack,'location');
       creTextNode($currentTrack->lastChild,$row[2]);
       creEle($currentTrack,'title');
       creTextNode($currentTrack->lastChild,$row[3]);
       ///////////////////////////


   }
   mysql_free_result($result);
   mysql_close($handle);
   //debug result

   //////////////////////////////////////////////////////////////////////////



   $xspf->appendChild($playlist);
   $xspf->save("yz.xspf");
   echo $xspf->saveXML($playlist);

?>
