<?php 
session_start();
header("Content-Type:text/html; charset=utf-8");
// Cross-Origin Resource Sharing Header
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

define('_ROOT', str_replace("\\", '/', dirname(__FILE__)));

require_once (_ROOT."/class/BFforHttpPost.class.php");


?>


<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">        
        <title>順豐接口</title>
        <link rel="stylesheet" href="template/style/common.css" media="screen"/>
        <script type="text/javascript" src="template/js/jquery.js"></script>
        <script type="text/javascript" src="template/js/httppost.js"></script>


                
    </head>

    <body>
        <p id="res"></p>

        <div id="loadbox">
            <div id="loadboxer">
                <div id="load_ico">
                    <div id="load_icoimg"><img src="template/images/loading.gif" width="100%" height="100%" /></div>
                </div>
                <div id="load_content">
                    正在傳遞信息
                </div>
            </div>
        </div>
        <div class="main">
            <div class="testtitle">順豐接口</div>
                <table><tr><td>接入碼：<input type="input" id="clientCode" name="clientCode" value="" class="inputstyle" maxlength="4">4碼</td></tr>
                <tr><td>檢驗碼：<input type="input" id="checkword" name="checkword" value="" class="inputstyle" maxlength="32" size="35">32碼</td></tr>
                </table>
            <div class="testbox">
                <div class="que_title"><span>下訂單接口（OrderService）</span></div>

                <div class="que_content">
                    <table width="100%">
                        <tr>
                            <td align="right" width="80px"><b>訂單號：</b></td>
                            <td><input type="input" id="orderid" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>快件類型：</b></td>
                            <td>
                                <select class="inputstyle" id="express_type">
                                    <option value="1" selected="true">標準快遞 </option>
                                    <option value="2">顺豐特惠</option>
                                    <option value="3">電商特惠</option>
                                    <option value="7">電商速配</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td height="20" colspan="2"></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>寄件方公司：</b></td>
                            <td><input type="input" id="j_company" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>寄件方姓名：</b></td>
                            <td><input type="input" id="j_contact" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>寄件方電話：</b></td>
                            <td><input type="input" id="j_tel" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>寄件省市區：</b></td>
                            <td>
                                <input type="input" id="j_province" style="width:60px" value="" class="inputstyle" />
                                <input type="input" id="j_city" style="width:60px" value="" class="inputstyle" />
                                <input type="input" id="j_qu" style="width:60px" value="" class="inputstyle" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>寄件方地址：</b></td>
                            <td><input type="input" id="j_address" style="width:240px" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td height="20" colspan="2"></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>到件方公司：</b></td>
                            <td><input type="input" id="d_company" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>到件方姓名：</b></td>
                            <td><input type="input" id="d_contact" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>到件方電話：</b></td>
                            <td><input type="input" id="d_tel" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>到件省市區：</b></td>
                            <td>
                                <input type="input" id="d_province" style="width:60px" value="" class="inputstyle" />
                                <input type="input" id="d_city" style="width:60px" value="" class="inputstyle" />
                                <input type="input" id="d_qu" style="width:60px" value="" class="inputstyle" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>到件方地址：</b></td>
                            <td><input type="input" id="d_address" style="width:240px" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td height="20" colspan="2"></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>付款方式：</b></td>
                            <td>
                                <select class="inputstyle" id="pay_method">
                                    <option value="1" selected="true">寄付月结 </option>
                                    <option value="2">收方付款</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>付款帳號：</b></td>
                            <td><input type="input" id="custid" style="width:120px" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>代收金額：</b></td>
                            <td><input type="input" id="daishou" style="width:240px" value="0" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td height="20" colspan="2"></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>物品：</b></td>
                            <td><input type="input" id="things" style="width:240px" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>數量：</b></td>
                            <td><input type="input" id="things_num" style="width:240px" value="1" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>申明價值：</b></td>
                            <td><input type="input" id="declared_value" style="width:240px" value="100.00" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>幣別：</b></td>
                            <td>
                                <select id="declared_value_currency">
                                    <option value="USD">美元</option>
                                    <option value="NTD">新台幣</option>
                                    <option value="CNY">人民幣</option>
                                    <option value="HKD">港幣</option>
                                    <option value="RUB">盧布</option>
                                    <option value="EUR">歐元</option>
                                    <option value="MOP">澳門元</option>
                                    <option value="SGD">新元</option>
                                    <option value="JPY">日元</option>
                                    <option value="KRW">韓元</option>
                                    <option value="MYR">馬幣</option></option>
                                    <option value="VND">越南盾</option>
                                    <option value="THB">泰銖</option>
                                    <option value="AUD">澳大利亞元</option>
                                    <option value="MNT">圖格里克</option>
                                </select>
                            </td>
                        </tr>                        


                        <tr>
                            <td align="right" width="80px"><b>備註：</b></td>
                            <td><input type="input" id="remark" style="width:240px" value="精密儀器，小心輕拿輕放~" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td height="20" colspan="2"></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>數據格式：</b></td>
                            <td height="20" colspan="2">
                                <select class="inputstyle" id="OrderService_Mode">
                                    <option value="XML" selected="true">XML</option>
                                    <option value="JSON">JSON</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="button" class="btn" value="確定" onclick="OrderService();" /></td>
                        </tr>
                    </table>
                </div>

                <div class="que_ant">回饋結果：</div>
                <div class="que_ans" id="OrderService_ANS"></div>
            </div>
             <div class="testbox">
                <div class="que_title"><span>路由查询（RouteService）</span></div>
                <div class="que_content">
                    <table width="100%">
                        <tr>
                            <td align="right" width="80px"><b>查詢號類别：</b></td>
                            <td>
                                <select id="tracking_type" class="inputstyle">
                                    <option value="1">順豐運單號</option>
                                    <option value="2">客戶訂單號</option>
                                    <option value="3">逆向單原始訂單號</option>
                                </select>    
                            </td>
                        </tr>

                        <tr>
                            <td align="right" width="80px"><b>依查詢號類别輸入單號</b></td>
                            <td><input type="input" id="route_mailno" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>數據格式：</b></td>
                            <td height="20" colspan="2">
                                <select class="inputstyle" id="RouteService_Mode">
                                    <option value="XML" selected="true">XML</option>
                                    <option value="JSON">JSON</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="button" class="btn" value="確定" onclick="RouteService();" /></td>
                        </tr>
                    </table>
                </div>
                <div class="que_ant">回饋結果：</div>
                <div class="que_ans" id="RouteService_ANS"></div>
            </div>

 
        </div>
<button class='openid'>todobutton</button>

    </body>


<script language="javascript">

function AcceptWord(){

    var clientCode=$("#clientCode").val();
    var checkword=$("#checkword").val();


    if ((clientCode.length!=4)||(checkword.length!=32)){
        return 0;
    }else{
        return 1;
    }
}
</script>

</html>
<?php 

        // $BF = new BFapi();
        // $data = $BF->OrderService($post_data)->Send()->readJSON();
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://beangostg.blob.core.windows.net/beango-static-stg/sdk/beango_stg.min.js"></script>  
<script>

   


// https://stg-api.beanfun.com/official_account/7310917e39724f4d8c6bc9bfb0dcf6a6_oa/token?secret=2b92531a580843f898729919143cdc50_oas&v=2.0

    var widget_id = '5d1de784dde81a0007a16bbf';
    var $client_id = '2D5270D8-5675-438E-B030-5AED9DCEE658';
    var $official_account_id = '7310917e39724f4d8c6bc9bfb0dcf6a6_oa';
    var $official_account_access_token = 'e0a2c8fdeaa247a083189421be0c0e74_oat';
    var secret ='2b92531a580843f898729919143cdc50_oas';
    var $access_token;


    // BGO.init({ 
    // token: $official_account_access_token,
    // official_account_id: $official_account_id
    // });



    // $('.todo').on('click', function () {
    //     //請將code內容第三項與第四項貼入至此
    //     var client_id=$client_id; //須要向BeanGo! 申請取得。
    //     var redirect_uri=''; //請先填 "" (empty string) 尚未開放，預留欄位
    //     // 1.call sdk
    //     BGO.get_me_openid_access_token(client_id, redirect_uri, callback);

    //     // 2.call api
    //     // var callback = function (data) {
    //         // console.log(data);
    //         //getopenid請用server to server 取得資料(https://stg-api.beanfun.com/v1/openid/token/verification?token={{data.access_token}})
    //     // };
    //     var callback = function (data) {
    //     //alert(data);  
    //         console.log(JSON.stringify(data));  //callback回傳皆為JSON格式
    //         //$access_token=data.me_profile.access_token;
    //         //alert($access_token);
    //         // $getOpenidUrl = 'https://stgapi.beanfun.com/v1/openid/token/verification?token='+$access_token;
    //         // checkUser();
    //     };
    //     /*舉個例子：(請參考"開啟beanfun! APP QRcode頁面")
    //     var style = {  //beanfun! APP QRcode 頁面可客制化的部份(目前僅支援Android客製化)
    //         'title': '我是標題',
    //         'color': 'DB440C'
    //     }
    //     BGO.scan_qr_code(style, callback);*/
    // })

    function get_openid_access_token() {

        BGO.init({
            token: $official_account_access_token,
            official_account_id:$official_account_id
        });

        BGO.get_me_openid_access_token($client_id, '', callback);
    };


    var callback = function (data) { 
        console.log(data); 

        getOpenidUrl = 'https://stg-api.beanfun.com/v1/openid/token/verification?token=${data.access_token}';
        //e0a2c8fdeaa247a083189421be0c0e74_oat
        checkUser(); 
    };



    var  checkUser = function () {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                var res = this.responseText.split(",");

                //alert(res[4]);
                $('.openid').text(res[4]);
            }
        }; 
        console.log(getOpenidUrl);
        xhttp.open("GET",getOpenidUrl , true); 
        xhttp.send(); 
    }


    $(document).ready(function () { 
        get_openid_access_token();    
    });








</script>  

<script src="https://beangochat.blob.core.windows.net/beango-static-prod/sdk/vconsole.min.js">
</script>
<script>VConsole = new VConsole;</script>  