  //var ajax_url = "/sf_express_accept/ajax_httppost.php";
  //var ajax_url = "https://bsp-dev-api.sf-express.com.tw/sf_express_accept/ajax_httppost.php";
   //var ajax_url = "http://192.168.150.128/sf_customers/api/ajax_httppost";
//var ajax_url ="http://192.168.150.128/sf_express_accept/ajax_httppost_iuop.php";
   //var ajax_url ="https://bsp-dev-api.sf-express.com.tw/sf_express_accept/ajax_httppost_iuop.php";
   //var ajax_url = "https://mainuser.sf-express.com.tw/sf_maincustomer/api/ajax_httppost";
   





    function OrderService(){

        var ip = $('#IP').val();
        var ajax_url='';
        
        switch (ip){
            //develop
            case '192.168.150.128' :
               ajax_url = 'http://develop/sf_maincustomer/api/ajax_httppost';
               break;
            //product   
            case '10.66.0.96':
            case '10.66.0.97':
            case '10.66.0.98':
                ajax_url = 'http://mainuser.sf-express.com.tw/sf_maincustomer/api/ajax_httppost';
                break;
            default: 
                //UAT測試機    
                ajax_url = 'http://'+ip+'/sf_maincustomer/api/ajax_httppost';
                break;
        }

        var chkrlt=AcceptWord();
        var Asendstarttime=$("#sendstarttime").val();

        var c_commodityName=[],c_commodityNum=[],c_unit=[],c_weight=[],c_amount=[],c_currency=[],c_originCountry=[];
        var c_product_record_no,c_good_prepard_no,c_tax_no,c_hs_code,c_manufacturer;
        var c_state_bar_code,c_product_category,c_productname_element;
        var c_production_marketincity,c_box_number,c_volume,c_item_no;
        var c_qty1,c_qty2,c_unit1,c_unit2;
        var routelabelForReturn,routelabelService;

        if (chkrlt==0){
            alert("接入編碼或檢驗碼錯誤!!");
        }else{ 

            $('input[name="commodityName"]').each(function(){
                 c_commodityName.push($(this).val());
            });


            $('input[name="commodityNum"]').each(function(){
                c_commodityNum.push($(this).val());
            });


            $('input[name="unit"]').each(function(){
                c_unit.push($(this).val());
            });

            $('input[name="weight"]').each(function(){
                c_weight.push($(this).val());
            });
            $('input[name="amount"]').each(function(){
                c_amount.push($(this).val());
            });

            $('select[name="currency"]').each(function(){
                c_currency.push($(this).val());
            });    
                

            $('input[name="originCountry"]').each(function(){
                c_originCountry.push($(this).val());
            });

            $('input[name="product_record_no"]').each(function(){
                c_product_record_no = $(this).val();
            });
            $('input[name="good_prepard_no"]').each(function(){
                c_good_prepard_no = $(this).val();
            });
            $('input[name="tax_no"]').each(function(){
                c_tax_no = $(this).val();
            });
            $('input[name="hs_code"]').each(function(){
                c_hs_code = $(this).val();
            });        
            $('input[name="manufacturer"]').each(function(){
                c_manufacturer = $(this).val();
            });
            $('input[name="state_bar_code"]').each(function(){
                c_state_bar_code = $(this).val();
            });
            $('input[name="product_category"]').each(function(){
                c_product_category = $(this).val();
            });
            $('input[name="productname_element"]').each(function(){
                c_productname_element = $(this).val();
            });
            $('input[name="production_marketincity"]').each(function(){
                c_production_marketincity = $(this).val();
            });
            $('input[name="box_number"]').each(function(){
                c_box_number = $(this).val();
            });
            $('input[name="volume"]').each(function(){
                c_volume = $(this).val();
            }); 
            $('input[name="item_no"]').each(function(){
                c_item_no = $(this).val();
            }); 
            $('input[name="qty1"]').each(function(){
                c_qty1 = $(this).val();
            }); 
            $('input[name="qty2"]').each(function(){
                c_qty2 = $(this).val();
            }); 
            $('input[name="unit1"]').each(function(){
                c_unit1 = $(this).val();
            }); 
            $('input[name="unit2"]').each(function(){
                c_unit2 = $(this).val();
            }); 


            if ($.trim(Asendstarttime)!=""){
               Asendstarttime=Asendstarttime +":00"; 
            } 


            //alert($('#importDeclarationMethod').val());


            $.ajax({
                url:ajax_url,
                type:"POST",
                dataType:"text",

                beforeSend :function(){
                    $("#loadbox").show();
                },
                data:{
                    action:"OrderService",
                    importDeclarationMethod:$('#importDeclarationMethod').val(),
                    exportDeclarationMethod:$('#exportDeclarationMethod').val(),
                    customerOrderNo:$("#customerOrderNo").val(),
                    orderOperateType:$("#orderOperateType").val(),
                    cargoTypeCode:$("#cargoTypeCode").val(),
                    j_company:$("#j_company").val(),
                    j_contact:$("#j_contact").val(),
                    j_tel:$("#j_tel").val(),
                    j_province:$("#j_province").val(),
                    j_city:$("#j_city").val(),
                    j_address:$("#j_address").val(),
                    d_post_code:$("#d_post_code").val(),
                    d_company:$("#d_company").val(),
                    d_contact:$("#d_contact").val(),
                    d_tel:$("#d_tel").val(),
                    d_province:$("#d_province").val(),
                    d_city:$("#d_city").val(),
                    d_address:$("#d_address").val(),
                    payMethod:$("#payMethod").val(),
                    custid:$("#custid").val(),
                    daishou:$("#daishou").val(),
                    parcelNum:$("#parcelNum").val(),
                    remark:$("#remark").val(),
                    clientCode:$("#clientCode").val(),
                    checkword:$("#checkword").val(),
                    declared_value:$("#declared_value").val(),
                    declared_value_currency:$("#declared_value_currency").val(),
                    mailno:$("#mailno").val(),                     // new added 
                    is_gen_bill_no:$("#is_gen_bill_no").val(),  
                    j_mobile:$("#j_mobile").val(),
                    j_shippercode:$("#j_shippercode").val(),
                    j_country:$("#j_country").val(),
                    j_county:$("#j_county").val(),
                    j_post_code:$("#j_post_code").val(),
                    d_deliverycode:$("#d_deliverycode").val(),
                    d_country:$("#d_country").val(),
                    d_company:$("#d_company").val(),
                    d_mobile:$("#d_mobile").val(),
                    d_county:$("#d_county").val(),
                    d_post_code:$("#d_post_code").val(),
                    cargo_length:$("#cargo_length").val(),
                    cargo_width:$("#cargo_width").val(),
                    cargo_height:$("#cargo_height").val(),
                    volume:$("#volume").val(),
                    cargo_total_weight:$("#cargo_total_weight").val(),
                    customs_batchs:$("#customs_batchs").val(),
                    sendstarttime:Asendstarttime,
                    is_docall:$("#is_docall").val(),
                    need_return_tracking_no:$("#need_return_tracking_no").val(),
                    return_tracking:$("#return_tracking").val(),
                    d_tax_no:$("#d_tax_no").val(),
                    taxPayMethod:$("#taxPayMethod").val(),
                    tax_set_accounts:$("#tax_set_accounts").val(),
                    original_number:$("#original_number").val(),
                    payment_tool:$("#payment_tool").val(),
                    payment_number:$("#payment_number").val(),
                    goods_code:$("#goods_code").val(),
                    in_process_waybill_no:$("#in_process_waybill_no").val(),
                    brand:$("#brand").val(),
                    specifications:$("#specifications").val(),
                    temp_range:$("#temp_range").val(),
                    order_name:$("#order_name").val(),
                    order_cert_type:$("#order_cert_type").val(),
                    order_cert_no:$("#order_cert_no").val(),
                    order_source:$("#order_source").val(),
                    template:$("#template").val(),
                    oneself_pickup_flg:$("#oneself_pickup_flg").val(),
                    dispatch_sys:$("#dispatch_sys").val(),
                    parcel_quantity:$("#parcel_quantity").val(),
                    is_gen_eletric_pic:$("#is_gen_eletric_pic").val(),
                    waybill_size:$("#waybill_size").val(),
                    filter_field:$("#filter_field").val(),
                    total_net_weight:$("#total_net_weight").val(),
                    send_remark_two:$("#send_remark_two").val(),
                    url_flag:$("#url_flag").val(),
                    special_delivery_type_code:$("#special_delivery_type_code").val(),
                    special_delivery_value:$("#special_delivery_value").val(),
                    realname_num:$("#realname_num").val(),
                    merchant_pay_order:$("#merchant_pay_order").val(),
                    routelabelForReturn:$("#routelabelForReturn").val(),
                    routelabelService:$("#routelabelService").val(),
                    j_tax_no:$("#j_tax_no").val(),
                    is_unified_waybill_no:$("#is_unified_waybill_no").val(),
                    pod_model_address:$("#pod_model_address").val(),
                    consign_emp_code:$("#consign_emp_code").val(),
                    sender_email:$("#sender_email").val(),
                    receiver_remark:$("#receiver_remark").val(),
                    sender_remark:$("#sender_remark").val(),
                    shop_code:$("#shop_code").val(),
                    send_cert_type:$("#send_cert_type").val(),
                    send_cert_no:$("#send_cert_no").val(),
                    other_fee_amt:$("#other_fee_amt").val(),
                    commodityName:c_commodityName,  // Order/Cargo
                    commodityNum:c_commodityNum,
                    unit:c_unit,
                    weight:c_weight,
                    amount:c_amount,
                    currency:c_currency,
                    originCountry:c_originCountry,
                    product_record_no:c_product_record_no,
                    good_prepard_no:c_good_prepard_no,
                    tax_no:c_tax_no,
                    hs_code:c_hs_code,
                    manufacturer:c_manufacturer,
                    state_bar_code:c_state_bar_code,
                    product_category:c_product_category,
                    productname_element:c_productname_element,
                    production_marketincity:c_production_marketincity,
                    box_number:c_box_number,
                    volume:c_volume,
                    item_no:c_item_no,
                    qty1:c_qty1,
                    qty2:c_qty2,
                    unit1:c_unit1,
                    unit2:c_unit2,
                    routelabelForReturn:$("#routelabelForReturn").val(),
                    routelabelService:$("#routelabelService").val(),
                    
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
                    orderid:$("#cancel_orderid").val(),
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




    
