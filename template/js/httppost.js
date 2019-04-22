    var ajax_url = "https://bsp-dev-api.sf-express.com.tw/sf_express_accept/ajax_httppost.php";
    //var ajax_url = "http://192.168.245.129/sf_express_accept/ajax_httppost.php";
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
                    acceptword:$("#acceptword").val(),
                    chkword:$("#chkword").val(),
                    OrderService_Mode:$("#OrderService_Mode").val()
                },
                success:function(exe){
                    $("#loadbox").hide();
                    $("#OrderService_ANS").html(exe);
                }
            });
        }   

    }

    function OrderFilterService(){
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
                    action:"OrderFilterService",
                    search_orderid:$("#search_orderid").val(),
                    search_d_address:$("#search_d_address").val(),
                    search_d_tel:$("#search_d_tel").val(),
                    search_j_custid:$("#search_j_custid").val(),
                    search_j_address:$("#search_j_address").val(),
                    search_j_tel:$("#search_j_tel").val(),
                    acceptword:$("#acceptword").val(),
                    chkword:$("#chkword").val(),
                    OrderFilterService_Mode:$("#OrderFilterService_Mode").val()
                },
                success:function(exe){
                    $("#loadbox").hide();
                    $("#OrderFilterService_ANS").html(exe);
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
                    acceptword:$("#acceptword").val(),
                    chkword:$("#chkword").val(),
                    OrderSearchService_Mode:$("#OrderSearchService_Mode").val()
                },
                success:function(exe){
                    $("#loadbox").hide();
                    $("#OrderSearchService_ANS").html(exe);
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
                    acceptword:$("#acceptword").val(),
                    chkword:$("#chkword").val(),
                    RouteService_Mode:$("#RouteService_Mode").val()
                },
                success:function(exe){
                    $("#loadbox").hide();
                    $("#RouteService_ANS").html(exe);
                }
            });
        }    
    }
