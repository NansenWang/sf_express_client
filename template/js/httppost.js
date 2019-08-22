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
                    things_num:$("#things_num").val(),
                    remark:$("#remark").val(),
                    clientCode:$("#clientCode").val(),
                    checkword:$("#checkword").val(),
                    declared_value:$("#declared_value").val(),
                    declared_value_currency:$("#declared_value_currency").val(),
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
                    route_mailno:$("#route_mailno").val(),
                    tracking_type:$("tracking_type").val(),
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





    
