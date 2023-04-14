<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">        
        <title>順豐接口</title>
        <link rel="stylesheet" href="template/style/common.css" media="screen"/>
        <script type="text/javascript" src="template/js/jquery.js"></script>
        <script type="text/javascript" src="template/js/httppost_iuop.js"></script>
                
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
                <!-- value="4MKj3nt17uQ_Xb" -->
                <table><tr><td>接入碼：<input type="input" id="clientCode" name="clientCode" value="" class="inputstyle"></td></tr>
                    <!-- value="u9mGVb0jwPyCZSk7Eho8iqtna2f5xdLr" -->
                <tr><td>檢驗碼：<input type="input" id="checkword" name="checkword" value="" class="inputstyle" maxlength="32" size="35">32碼</td></tr>
                </table>
            <div class="testbox">
                <div class="que_title"><span>下訂單接口（OrderService）</span></div>

                <div class="que_content">
                    <table width="100%">
                        <tr>
                            <td align="right" width="80px"><b>訂單號：</b></td>
                            <td><input type="input" id="customerOrderNo" value="" class="inputstyle" /><select id="orderOperateType" class="inputstyle">
                                <option value="1" selected>新增</option>
                                <option value="5">修改</option>
                                </select>
                            </td>
                        </tr>
                        <tr>

                            <td align="right" width="80px"><b>運單號：</b></td>
                            <td><input type="input" id="mailno" value="" class="inputstyle" />(預給號必填)</td>
                        </tr>
                        
                        <tr>
                            <!-- 可以联系相关的业务负责人增加配置 汪路英679054 或者 胡祖光01403747-->
                            <td align="right" width="80px"><b>快件類型：</b></td>
                            <td>
                                <select class="inputstyle" id="cargoTypeCode">
                                    <option value="INT0005">順豐特快</option>
                                    <option value="INT0011">順豐標快</option>
                                    <option value="INT0054">國際小包</option>
                                    <option value="INT0013">國際特惠-檔</option>
                                    <option value="INT0014">國際特惠-包裹</option>
                                    <option value="INT0255">國際電商專遞-標準</option>
                                    <option value="INT0001">E順遞</option>
                                    <option value="INT0006">順豐特快（D類）</option>
                                    <option value="INT0007">國際標快-檔</option>
                                    <option value="INT0008">國際標快-包裹</option>
                                    <option value="INT0275">國際重貨-門到門</option>
                                    <option value="INT0173">國際標快-BD2</option>
                                    <option value="INT0174">國際標快-BD3</option>
                                    <option value="INT0175">國際標快-BD4</option>
                                    <option value="INT0176">國際標快-BD5</option>
                                    <option value="INT0177">國際標快-BD6</option>
                                    <option value="INT0172">國際標快-BDE</option>
                                    <option value="INT0280">國際特惠-FBA</option>
                                    <option value="INT0201">集貨轉運</option>
                                    <option value="INT0282">國際重貨-港到港</option>
                                    <option value="INT0137">國際標快(+)- 檔</option>
                                    <option value="INT0139">國際標快(+)- 包裹</option>
                                    <option value="INT0263">國際電商專遞-CD</option>
                                    <option value="INT0010">陸運包裹</option>
                                    <option value="INT0257">國際電商專遞-快速</option>
                                    <option value="INT0009">電商標快</option>
                                    <option value="INT0248">自貿區特配</option>

<!--                                    <option value="C201"><font color="red">順風快遞[formal-TW-TW，TW-HK，TW-MO]</font></option>
                                    <option value="C223"><font color="red">國際特惠-B類包裹[test-SG-TW]</font></option>
                                    <option value="C901"><font color="red">國際標快-文件[test-TW-SG]</font></option>
                                    <option value="C902">國際標快-B類包裹</option>
                                    <option value="C903">國際標快-D類包裹</option>
                                    <option value="C904">國際重貨-門到門</option>
                                    <option value="C909">國際標快-FBA</option>
                                    <option value="C910">國際特惠-FBA</option>
                                    <option value="C911">國際重貨-豐翼速配</option>
                                    <option value="C912">國際重貨-港到港</option>
                                    <option value="C919">標快+（國際）-文件</option>
                                    <option value="C920">標快+（國際）-D類包裹</option>
                                    <option value="C921">標快+（國際）-B類包裹</option>
                                    <option value="C924">國際重貨-陸運</option>
                                    <option value="C940">國際电商專遞-CD</option>
                                    <option value="SP60401">BDE(33 x 24.5cm)</option>
                                    <option value="SP60405">BD5(53 x 32 x 23cm)</option>
                                    <option value="C101">國際特惠-文件</option>
                                    <option value="C15">國際特惠(保稅)</option>
                                    <option value="C936">國際海運</option>
                                    <option value="C93802">國際本地件（包裹)</option>

           <!--                     <option value="C939">國際电商專遞-SC</option>
                                    <option value="C17">國際特惠-商家代理</option>
                                    <option value="C13">國際特惠-試點</option>
                                    <option value="C21">國際直送</option>
                                    <option value="C913">國際重貨-海快船+派</option>
                                    <option value="C914">國際重貨-海普船+派</option>
                                    <option value="C926">國際重貨-海外仓海+派</option> 
                                    <option value="C918">跨境直邮-個人行邮</option> 
                                    <option value="C917">跨境直邮-直購進口</option> 
                                    <option value="SP60408">國際特惠-BD2</option>
                                    <option value="SP60409">國際特惠-BD3</option>
                                    <option value="SP60410">國際特惠-BD4</option>
                                    <option value="SP60411">國際特惠-BD5</option>
                                    <option value="SP60412">國際特惠-BD6</option>
                                    <option value="SP60407">國際特惠-BDE</option>
            -->
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td height="20" colspan="2"></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>寄件方國別：</b></td>
                            <td>
                                <select name="j_country" id="j_country">
                                    <option value="TW" selected>台湾</option>
                                    <option value="CN">中国内地</option>
                                    <option value="HK">中国香港</option>
                                    <option value="MO">中国澳门</option>
                                    <option value="AU">澳大利亚</option>
                                    <option value="BD">孟加拉国</option>
                                    <option value="IN">印度</option>
                                    <option value="ID">印度尼西亚</option>
                                    <option value="JP">日本</option>
                                    <option value="KR">韩国</option>
                                    <option value="MY">马来西亚</option>
                                    <option value="NZ">新西兰</option>
                                    <option value="SG">新加坡</option>
                                    <option value="TH">泰国</option>
                                    <option value="US">美国</option>
                                    <option value="VN">越南</option>
                                    <option value="AT">奥地利</option>
                                    <option value="BE">比利时</option>
                                    <option value="BG">保加利亚</option>
                                </select>
                             </td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>寄件郵遞區號:</b></td>
                            <td><input type="input" id="j_post_code" name="j_post_code" class="inputstyle" onkeyup="value=value.replace(/[^\d]/g,'')" maxlength="5" value="" />
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
                                <input type="input" id="j_county" style="width:60px" value="" class="inputstyle" />
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
                            <td align="right" width="80px"><b>到件方國別：</b></td>
                            <td>
                                <select name="d_country" id="d_country">
                                    <option value="CN">中国内地</option>
                                    <option value="HK">中国香港</option>
                                    <option value="TW">台湾</option>
                                    <option value="MO">中国澳门</option>
                                    <option value="AU">澳大利亚</option>
                                    <option value="BD">孟加拉国</option>
                                    <option value="IN">印度</option>
                                    <option value="ID">印度尼西亚</option>
                                    <option value="JP">日本</option>
                                    <option value="KR">韩国</option>
                                    <option value="MY">马来西亚</option>
                                    <option value="NZ">新西兰</option>
                                    <option value="SG" selected>新加坡</option>
                                    <option value="TH">泰国</option>
                                    <option value="US">美国</option>
                                    <option value="VN">越南</option>
                                    <option value="AT">奥地利</option>
                                    <option value="BE">比利时</option>
                                    <option value="BG">保加利亚</option>
                                </select>
                             </td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>到件郵遞區號:</b></td>
                            <td><input type="input" id="d_post_code" name="d_post_code" class="inputstyle" onkeyup="value=value.replace(/[^\d]/g,'')" maxlength="10" />
                        </tr>

                        <tr>
                            <td align="right" width="80px"><b>進口報關說明</b></td>
                            <td>
                                <select name="importDeclarationMethod" id="importDeclarationMethod">
                                    <option value="" selected></option>
                                    <option value="1">简易报关</option>
                                    <option value="2">正式报关</option>
                                    <option value="4">个人物品</option>
                                    <option value="5">简易-销售（台湾出口用）</option>
                                    <option value="6">简易-样品（台湾出口用）</option>
                                    <option value="7">跨境直邮</option>
                                    <option value="8">跨境保税</option>
                                    <option value="9">个人行李</option>
                                    <option value="10">自清关</option>
                                    <option value="3">海运报关</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>出口報關說明</b></td>
                            <td>
                                <select name="exportDeclarationMethod" id="exportDeclarationMethod">
                                    <option value="" selected></option>
                                    <option value="2">正式报关</option>
                                    <option value="5">简易-销售（台湾出口用）</option>
                                    <option value="6">简易-样品（台湾出口用）</option>
                                </select>

                            </td>
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
                                <input type="input" id="d_county" style="width:60px" value="" class="inputstyle" />
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
                                <select class="inputstyle" id="payMethod">
                                    <option value="1" selected="true">寄付月结 </option>
                                    <option value="2">收方付款</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>付款帳號：</b></td>
                            <td><input type="input" id="custid" style="width:120px" value="9999999999" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>代收金額：</b></td>
                            <td><input type="input" id="daishou" style="width:240px" value="0" class="inputstyle"/></td>
                        </tr>
                        <tr>
                            <td height="20" colspan="2"></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>物品：</b></td>
                            <td><input type="input" name='commodityName' style="width:240px" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>件數：</b></td>
                            <td><input type="input" id="parcelNum" style="width:240px" value="1" class="inputstyle" /></td>
                        </tr>
                        <input type="hidden" name="unit" value="台">
                        <input type="hidden" name="amount" value="100">
                        <input type="hidden" name="originCountry" value="TW">
                        <input type="hidden" name="commodityNum" value="10">
                        <tr>
                            <td align="right" width="80px"><b>總重：</b></td>
                            <td><input type="input" id="cargo_total_weight" style="width:60px" value="1" class="inputstyle" />kg</td>
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
                            <td>
                                <input type="button" class="btn" value="確定" onclick="OrderService();" />
                                <input type="hidden" id="IP" name="IP" value="<?php echo $_SERVER['SERVER_ADDR']; ?>">　

                            </td>
                        </tr>
                    </table>
                </div>

                <div class="que_ant">回饋結果：</div>
                <div class="que_ans" id="OrderService_ANS"></div>
            </div>
            <!--  //option value="3">逆向單原始訂單號</option--> 
<!--             <div class="testbox">
                <div class="que_title"><span>路由查询（RouteService）</span></div>
                <div class="que_content">
                    <table width="100%">
                        <tr>
                            <td align="right" width="80px"><b>查詢號類别：</b></td>
                            <td>
                                <select id="tracking_type" class="inputstyle">
                                    <option value="1">順豐運單號</option>
                                    <option value="2">客戶訂單號</option>
                                    
                                </select>    
                            </td>
                        </tr>

                        <tr>
                            <td align="right" width="80px"><b>依查詢號類别輸入單號</b></td>
                            <td><input type="input" id="tracking_number" value="" class="inputstyle" /></td>
                        </tr>

                        <tr>
                            <td align="right" width="80px"><b>路由查詢類别：</b></td>
                            <td>
                            <select id="method_type" class="inputstyle">
                                <option value="1">標準路由</option>
                                <option value="2">定制路由</option>
                            </select>    
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>參考編碼</b></td>
                            <td><input type="input" id="reference_number" value="" class="inputstyle" placeholder="僅供亞馬遜客戶填寫" /></td>
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
            </div> -->

<!--             <div class="testbox">
                <div class="que_title"><span>訂單查询（OrderSearchService）</span></div>
                <div class="que_content">
                    <table width="100%">
                        <tr>
                            <td align="right" width="80px"><b>訂單號：</b></td>
                            <td><input type="input" id="search_orderid" value="" class="inputstyle" /></td>
                        </tr>
                        <tr>
                            <td align="right" width="80px"><b>查詢類型：</b></td>
                            <td>
                                <select class="inputstyle" id="search_type">
                                <option value="1" selected="true">正向單查詢</option>
                                <option value="2">退貨單查詢</option>
                                </select>                                

                            </td>
                        </tr>  


                        <tr>
                            <td align="right" width="80px"><b>數據格式：</b></td>
                            <td height="20" colspan="2">
                                <select class="inputstyle" id="OrderSearchService_Mode">
                                    <option value="XML" selected="true">XML</option>
                                    <option value="JSON">JSON</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><input type="button" class="btn" value="確定" onclick="OrderSearchService();" /></td>
                        </tr>
                    </table>
                </div>
                <div class="que_ant">回饋結果：</div>
                <div class="que_ans" id="OrderSearchService_ANS"></div>
            </div> -->

<!--           <div class="testbox">
            <div class="que_title"><span>退貨銷單（OrderRvsCancelService）</span></div>
            <div class="que_content">
                <table width="100%">
                <tr>
                    <td align="right" width="80px"><b>運單號</b></td>
                    <td><input type="input" id="cancel_orderid" value="" class="inputstyle" /></td>
                </tr>
                <tr>
                    <td align="right" width="80px"><b>數據格式：</b></td>
                    <td height="20" colspan="2">
                        <select class="inputstyle" id="OrderRvsCancelService_Mode">
                            <option value="XML" selected="true">XML</option>
                            <option value="JSON">JSON</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td><input type="button" class="btn" value="確定" onclick="OrderRvsCancelService();" /></td>
                </tr>
                </table>
            </div>
            <div class="que_ant">回饋結果：</div>
            <div class="que_ans" id="OrderRvsCancelService_ANS"></div>
          </div>  -->


        </div>
    </body>


<script language="javascript">

function AcceptWord(){

    var clientCode=$("#clientCode").val();
    var checkword=$("#checkword").val();

    if (checkword.length!=32){

        return 0;
    }else{
        return 1;
    }
}
</script>

</html>
