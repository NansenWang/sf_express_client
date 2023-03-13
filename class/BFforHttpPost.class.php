<?php

$_SESSION["ip"]=$_SERVER['SERVER_ADDR'];

class BFapi {

    var $client_id = '2D5270D8-5675-438E-B030-5AED9DCEE658';
    var $official_account_id = '7310917e39724f4d8c6bc9bfb0dcf6a6_oa';
    var $official_account_access_token = 'e0a2c8fdeaa247a083189421be0c0e74_oat';

    var $_IP='';
    var $_getOpenidUrl = ''; 

    public function __construct() {
        $this->_IP=$_SESSION['ip'];
        switch ($this->_IP) {
            //Develop & test
            case ($this->_IP=="192.168.150.128" || $this->_IP=="10.66.10.108" || $this->_IP=="219.87.80.21"):

               $this->_getOpenidUrl ='https://stgapi.beanfun.com/v1/openid/token/verification?token='.$official_account_access_token; 
               break;
            //formal
            case ($this->_IP=="10.66.0.96" || $this->_IP=="10.66.0.98" || $this->_IP=="219.87.80.8"):
                     
              $this->_getOpenidUrl = 'https://stgapi.beanfun.com/v1/openid/token/verification?token='.$official_account_access_token; 
              break;

            default:
              break;
        }
    }



    var $_XML = "";
    var $_RES = "";





    function XML($xmltext) {
        $this->_XML = $xmltext;

        return $this;
    }

    function Send() {

         $date = Date('D, d M Y H:i:s e');
        if ($this->_XML == "") {
            return $this;
        } else {
            $newbody = $this->_XML . $this->_CHECKBODY;

            $md5 = md5($newbody, true);
            $verifyCode = base64_encode($md5);

            $PostData = array(
                 "xml" => $this->_XML,
                 "verifyCode" => $verifyCode
            );

            $this->_RES = $this->HTTP_POST($this->_getOpenidUrl, $PostData);
            return $this;
        }
    }

    private function HTTP_POST($url, $param) {
        $oCurl = curl_init(); //Initialize a cURL session
        //stripos:Find the position of the first occurrence of a case-insensitive substring in a string
        if (stripos($url, "https://") !== FALSE) {
            //curl_setopt:Set an option for a cURL transfer
                                //CURLOPT_SSL_VERIFYPEER:verify the peer's SSL certificate
            curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, false);
            //https://www.php.net/manual/en/function.curl-setopt.php
        }

        $strPOST = http_build_query($param); //Generate URL-encoded query string

        curl_setopt($oCurl, CURLOPT_getOpenidUrl, $url);
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($oCurl, CURLOPT_POST, true);
        curl_setopt($oCurl, CURLOPT_POSTFIELDS, $strPOST);
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, true);
        $sContent = curl_exec($oCurl); //Perform a cURL session
        $aStatus = curl_getinfo($oCurl); //Get information regarding a specific transfer
        curl_close($oCurl); 
    //Closes a cURL session and frees all resources. The cURL handle, ch, is also deleted.
        return $sContent;
    }

    function View() {
        return $this->_RES;
    }

    function webView() {
        $res = str_replace("<", "&lt", $this->_RES);
        $res = str_replace(">", "&gt", $res);
        $res = str_replace("'", "&quot;", $res);
        return $res;
    }



    function readJSON() {

        header("Content-type: text/html; charset=utf-8");
        $res = array(
            "data" => $this->XML2Array($this->_RES)
        );

        $res = $this->LockCode($res);
        $res = json_encode($res);
        $res = urldecode($res);
        return $res;
    }

    private function LockCode($_Arrray){
        $Res_Array = array();
        foreach ($_Arrray as $K => $Dom) {
            if(is_array($Dom)){
                $Res_Array[$K] = $this->LockCode($Dom);
            }else{
                $Res_Array[$K] = urlencode($Dom);
            }
        }
        return $Res_Array;
    }

    function XML2Array($xmltext) {
        $xml = new XMLReader();
        $xml->XML($xmltext);
        $assoc = $this->xml2assoc($xml);
        $xml->close();
        return $assoc;
    }

    function xml2assoc($xml) {
        $tree = null;
        while ($xml->read()) {
            if ($xml->nodeType == XMLReader::END_ELEMENT) {
                return $tree;
            } else if ($xml->nodeType == XMLReader::ELEMENT) {
                $node = array();
                $node['tag'] = $xml->name;
                if ($xml->hasAttributes) {
                    $attributes = array();
                    while ($xml->moveToNextAttribute()) {
                        $attributes[$xml->name] = $xml->value;
                    }
                    $node['attr'] = $attributes;
                }
                if (!$xml->isEmptyElement) {
                    $childs = $this->xml2assoc($xml);
                    $node['childs'] = $childs;
                }
                $tree[] = $node;
            } else if ($xml->nodeType == XMLReader::TEXT) {
                $node = array();
                $node['text'] = $xml->value;
                $tree[] = $node;
            }
        }
        return $tree;
    }

}

?>
