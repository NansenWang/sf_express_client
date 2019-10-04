    var ajax_url = "/sf_express_accept/ajax_httppostall.php";
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
                    OrderService_Mode:$("#OrderService_Mode").val(),

                    // new added 
                    mailno:$("mailno").val(),
                    is_gen_bill_no:$("is_gen_bill_no").val(),  
                    j_mobile:$("j_mobile").val(),
                    j_shippercode:$("j_shippercode").val(),
                    j_country:$("j_country").val(),
                    j_county:$("j_county").val(),
                    j_post_code:$("j_post_code").val(),
                    d_deliverycode:$("d_deliverycode").val(),
                    d_country:$("d_country").val(),
                    d_company:$("d_company").val(),
                    d_mobile:$("d_mobile").val(),
                    d_county:$("d_county").val(),
                    d_post_code:$("d_post_code").val(),
                    cargo_length:$("cargo_length").val(),
                    cargo_width:$("cargo_width").val(),
                    cargo_height:$("cargo_height").val(),
                    volume:$("volume").val(),
                    cargo_total_weight:$("cargo_total_weight").val(),

                    customs_batchs:$("customs_batchs").val(),
                    sendstarttime:$("sendstarttime").val(),
                    is_docall:$("is_docall").val(),
                    need_return_tracking_no:$("need_return_tracking_no").val(),
                    return_tracking:$("return_tracking").val(),
                    d_tax_no:$("d_tax_no").val(),
                    tax_pay_type:$("tax_pay_type").val(),
                    tax_set_accounts:$("tax_set_accounts").val(),
                    original_number:$("original_number").val(),
                    payment_tool:$("payment_tool").val(),
                    payment_number:$("payment_number").val(),
                    goods_code:$("goods_code").val(),
                    in_process_waybill_no:$("in_process_waybill_no").val(),
                    brand:$("brand").val(),
                    specifications:$("specifications").val(),
                    temp_range:$("temp_range").val(),
                    order_name:$("order_name").val(),
                    order_cert_type:$("order_cert_type").val(),
                    order_cert_no:$("order_cert_no").val(),
                    order_source:$("order_source").val(),
                    template:$("template").val(),
                    oneself_pickup_flg:$("oneself_pickup_flg").val(),
                    dispatch_sys:$("dispatch_sys").val(),
                    parcel_quantity:$("parcel_quantity").val(),
                    is_gen_eletric_pic:$("is_gen_eletric_pic").val(),
                    waybill_size:$("waybill_size").val(),
                    filter_field:$("filter_field").val(),
                    total_net_weight:$("total_net_weight").val()
                    // 

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

    function OrderRvsCancelService(){
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
                    action:"OrderRvsCancelService",
                    orderid:$("#orderid").val(),
                    clientCode:$("#clientCode").val(),
                    checkword:$("#checkword").val(),                    
                    OrderRvsCancelService_Mode:$("#OrderRvsCancelService_Mode").val()
                },
                success:function(exe){
                    $("#loadbox").hide();
                    $("#OrderRvsCancelService_ANS").html(exe);
                }
            });
        }    
    } 




    
