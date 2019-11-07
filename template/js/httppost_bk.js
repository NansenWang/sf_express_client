    var ajax_url = "/sf_express_accept/ajax_httppost.php";
    function OrderService(){
        var chkrlt=AcceptWord();
        if (chkrlt==0){
            alert("接入編碼或檢驗碼錯誤!");
        }else{    
            $.ajax({
                url:ajax_url,
                type:"POST",
                dataType:"text",
                beforeSend :function(){
                    $("#loadbox").show();
                },
                data:{
                    action:"OrderService",
                    orderid:$("#orderid").val(),
                    express_type:$("#express_type").val(),
                    j_company:$("#j_company").val(),
                    j_contact:$("#j_contact").val(),
                    j_tel:$("#j_tel").val(),
                    j_province:$("#j_province").val(),
                    j_city:$("#j_city").val(),
                    j_qu:$("#j_qu").val(),
                    j_address:$("#j_address").val(),
                    d_company:$("#d_company").val(),
                    d_contact:$("#d_contact").val(),
                    d_tel:$("#d_tel").val(),
                    d_province:$("#d_province").val(),
                    d_city:$("#d_city").val(),
                    d_qu:$("#d_qu").val(),
                    d_address:$("#d_address").val(),
                    pay_method:$("#pay_method").val(),
                    custid:$("#custid").val(),
                    daishou:$("#daishou").val(),
                    things: $("#things").val(),
                    count:$("#things_num").val(),
                    remark:$("#remark").val(),
                    clientCode:$("#clientCode").val(),
                    checkword:$("#checkword").val(),
                    declared_value:$("#declared_value").val(),
                    currency:$("#declared_value_currency").val(),
                    OrderService_Mode:$("#OrderService_Mode").val()
                },
                success:function(exe){
                    $("#loadbox").hide();
                    $("#OrderService_ANS").html(exe);
                }
            });
        }   

    }
    function RouteService(){
        var chkrlt=AcceptWord();
        if (chkrlt==0){
            alert("接入編碼或檢驗碼錯誤!");
        }else{ 
            $.ajax({
                url:ajax_url,
                type:"POST",
                dataType:"text",
                beforeSend :function(){
                    $("#loadbox").show();
                },
                data:{
                    action:"RouteService",
                    tracking_type:$("#tracking_type").val(),
                    tracking_number:$("#tracking_number").val(),
                    method_type:$("#method_type").val(),
                    reference_number:$("#reference_number").val(),
                    clientCode:$("#clientCode").val(),
                    checkword:$("#checkword").val(),
                    RouteService_Mode:$("#RouteService_Mode").val()
                },
                success:function(exe){
                    $("#loadbox").hide();
                    $("#RouteService_ANS").html(exe);
                }
            });
        }    
    } 

    function OrderSearchService(){
        var chkrlt=AcceptWord();
        if (chkrlt==0){
            alert("接入編碼或檢驗碼錯誤!");
        }else{ 
            $.ajax({
                url:ajax_url,
                type:"POST",
                dataType:"text",
                beforeSend :function(){
                    $("#loadbox").show();
                },
                data:{
                    action:"OrderSearchService",
                    search_orderid:$("#search_orderid").val(),
                    search_type:$("search_type").val(),
                    clientCode:$("#clientCode").val(),
                    checkword:$("#checkword").val(),
                    OrderSearchService_Mode:$("#OrderSearchService_Mode").val()
                },
                success:function(exe){
                    $("#loadbox").hide();
                    $("#OrderSearchService_ANS").html(exe);
                }
            });
        }
    }






    
