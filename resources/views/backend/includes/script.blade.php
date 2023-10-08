<!-- BEGIN: Vendor JS-->

<script src="{{ url('public/backend/app-assets/vendors/js/vendors.min.js') }}"></script>

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('public/backend/app-assets/vendors/js/charts/leaflet/leaflet.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/extensions/jquery.knob.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/charts/raphael-min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/charts/morris.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/charts/jquery.sparkline.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/extensions/unslider-min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/charts/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/charts/apexcharts/apexcharts.min.js') }}"></script>

<!-- END: Page Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('public/backend/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/tables/buttons.flash.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/tables/jszip.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/tables/pdfmake.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/tables/vfs_fonts.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/tables/buttons.html5.min.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/tables/buttons.print.min.js') }}"></script>
{{--<script src="{{ url('public/backend/app-assets/js/scripts/tables/datatables/datatable-advanced.js') }}"></script>--}}
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ url('public/backend/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ url('public/backend/app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ url('public/backend/app-assets/js/scripts/pages/dashboard-fitness.js') }}"></script>
<script src="{{ url('public/backend/app-assets/js/scripts/pages/app-invoice.js') }}"></script>


<script src="{{ url('public/backend/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>

<script src="{{ url('public/backend/app-assets/js/scripts/tables/datatables/datatable-basic.js') }}"></script>

<script src="{{ url('public/backend/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>

<script src="{{ url('public/backend/app-assets/js/scripts/forms/form-login-register.js') }}"></script>
<script src="{{ url('public/backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>

<script src="{{ url('public/backend/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>




<!-- END: Page JS-->
<script>
    $(document).ready(function() {
$('#type').on('change', function() {
var type_id = this.value;
$("#supplier").html('');
$.ajax({
    url:"{{url('get-supplier-by-type')}}",
    type: "POST",
    data: {
        type_id: type_id,
        _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){
        $('#supplier').html('<option value="">اختار المورد</option>');
        $('#brand').html('<option value="0">اختار المنتج</option>');

        $.each(result.AllSuppliers,function(key,value){
            $("#supplier").append('<option value="'+value.id+'">'+value.name+'</option>');
        });
        $.each(result.Allbrands,function(key,value){
            $("#brand").append('<option value="'+value.id+'">'+value.name+'</option>');
        });







        $("#push").click(function(){
           let a = $("#brand option:selected").text();
           let d = $("#brand option:selected").val();
           let b = $("#owner_price").val();
           let z = $("#student_price").val();
           let c = $("#quan").val();


           let total = b * c ;

if(b > 1 ){
           $("#put").append('<tr><td><input type="hidden" name="name[]" value="'+d+'">'+a+'</td><td>'+b+'<input type="hidden" name="owner_price[]" value="'+b+'"><input type="hidden" name="student_price[]" value="'+z+'"></td><td>'+c+'<input type="hidden" name="quantity[]" value="'+c+'"></td><td><input type="hidden" class="force"  name="single_total[]" value="'+total+'">'+total+'</td><td><button type="button"  class="remove btn btn-float btn-float-sm btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td></tr>');
}

           $('#type option:not(:selected)').attr('disabled',true);
           $('#supplier option:not(:selected)').attr('disabled',true);
           $("#owner_price").val('0');
           $("#student_price").val('0');
           $("#quan").val('0');
           $("#brand").val('0');
           $(".remove").click(function(){

          $(this).parent().parent().remove();
          $(".total").val(0);
          $('#remaning').val(0);

          //get total
          var temp = 0;
          $('#put td:nth-child(4)').each(function(){
           var tdTxt = $(this).text();
         temp+= parseFloat(tdTxt);
          $(".total").val(temp);
          //remining
         let t = $('.total').val();
         let p = $('#paid').val();
         $('#remaning').val(t - p);

});

      });

      var temp = 0;
$('#put td:nth-child(4)').each(function(){

var tdTxt = $(this).text();

       temp+= parseFloat(tdTxt);
        $(".total").val(temp);

        //remining
    let t = $('.total').val();
    let p = $('#paid').val();
     $('#remaning').val(t - p);
});

 $("#paid").change(function(event) {
    let t = $('.total').val();
    let p = $('#paid').val();
            $('#remaning').val(t - p);
        });

        });

    }
});
});
});
</script>












<script>
    $(document).ready(function() {

$('#typee').on('change', function() {
var type_id = this.value;
$("#class").html(' ');
$.ajax({
    url:"{{url('get-class-by-type')}}",
    type: "POST",
    data: {
        type_id: type_id,
        _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){
        $('#class').html('<option value="0">اختار الصنف</option>');

        $.each(result.AllClass,function(key,value){
            $("#class").append('<option  value="'+value.id+'">'+value.name+'</option>');


        });
        $("#more").click(function(){
           let a = $("#class option:selected").text();
           let d = $("#class option:selected").val();
           let b = $("#request_price").val();
           let c = $("#paid").val();
           let total = b - c ;
if (d > 0 ) {
    $("#buy").append('<tr><td><input type="hidden" name="class[]" value="' + d + '">' + a + '</td><td>' + b + '<input type="hidden" name="paid[]" value="' + b + '"></td><td>' + c + '<input type="hidden" name="discount[]" value="' + c + '"></td><td><input type="hidden" name="total[]" value="' + total + '">' + total + '</td><td><button type="button"  class="remove btn btn-float btn-float-sm btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td></tr>');
}
            $('#typee option:not(:selected)').attr('disabled',true);
            $("#class").val("0").change();
           $("#paid").val('0');
           $("#class").val('0');
           $("#request_price").val('0');
           //get total
          var temp = 0;
          $('#buy td:nth-child(4)').each(function(){
           var tdTxt = $(this).text();
         temp+= parseFloat(tdTxt);
          $(".finaltotal").val(temp);

});

           $(".remove").click(function(){

          $(this).parent().parent().remove();
          $(".finaltotal").val(0);

          //get total
          var temp = 0;
          $('#buy td:nth-child(4)').each(function(){
           var tdTxt = $(this).text();
         temp+= parseFloat(tdTxt);
          $(".finaltotal").val(temp);

});

      });

});


    }

});
});
});

</script>


<script>
    $(document).ready(function() {

$('#class').on('change', function() {
var type_id = this.value;
var typee_id = $('#typee').val();

$("#request_price").html('');
$.ajax({
    url:"{{url('get-price')}}",
    type: "POST",
    data: {
        type_id: type_id,
        typee_id: typee_id,
        _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){
        $.each(result.AllPrices,function(key,value){
            $("#request_price").val(value.student_price);
            $("#request_quantity").val(value.quantity);

        });

    }
});
});
});

</script>




<script>
    $(document).ready(function() {
        $('#item').on('change', function() {
            var val = this.value;

            $.ajax({
                url:"{{url('get-priceee')}}",
                type: "POST",
                data: {
                    val: val,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(result){
                    $.each(result.Prices,function(key,value){
                        $("#owner_price").val(value.student_price);

                    });


                    $("#addmore").click(function(){
                        let a = $("#item option:selected").text();
                        let d = $("#item option:selected").val();
                        let b = $("#owner_price").val();
                        let c = $("#quan").val();
                        let total = b * c ;
                        if (b > 0 ){
                            $("#shop").append('<tr><td><input type="hidden" name="name[]" value="'+d+'">'+a+'</td><td>'+b+'<input type="hidden" name="owner_price[]" value="'+b+'"></td><td>'+c+'<input type="hidden" name="quantity[]" value="'+c+'"></td><td><input type="hidden" class="force"  name="single_total[]" value="'+total+'">'+total+'</td><td><button type="button"  class="remove btn btn-float btn-float-sm btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td></tr>');
                        }
                        $("#owner_price").val('0');
                        $("#quan").val('0');
                        $("#item").val('0');
                        $(".remove").click(function(){

                            $(this).parent().parent().remove();
                            $(".total").val(0);
                            $('#remaning').val(0);

                            //get total
                            var temp = 0;
                            $('#shop td:nth-child(4)').each(function(){
                                var tdTxt = $(this).text();
                                temp+= parseFloat(tdTxt);
                                $(".total").val(temp);

                            });
                        });

                        var temp = 0;
                        $('#shop td:nth-child(4)').each(function(){

                            var tdTxt = $(this).text();

                            temp+= parseFloat(tdTxt);
                            $(".total").val(temp);


                        });



                    });

                }
            });



});
    });




</script>


<script>
    $(document).ready(function() {

$('#location').on('change', function() {
var val = this.value;

$.ajax({
    url:"{{url('get-pricee')}}",
    type: "POST",
    data: {
        val: val,
        _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){
        $.each(result.Prices,function(key,value){
            console.log(value.price);
            $("#price").val(value.price);

        });

    }
});
});
});

</script>

<script>

$(document).ready(function() {

  $('#edafa').on('click', function() {
   let a = $("#drivename option:selected").text();
   let d = $("#location option:selected").text();
   let z = $("#price").val();
   let c = $("#quan").val();


   let total = z * c ;

   $("#edafaa").append('<tr><td><input type="hidden" name="price[]" value="'+z+'"><input type="hidden" name="drivename[]" value="'+a+'">'+a+'</td><td>'+d+'<input type="hidden" name="location[]" value="'+d+'"></td><td>'+c+'<input type="hidden" name="quantity[]" value="'+c+'"></td><td><input type="hidden" class="force"  name="single_total[]" value="'+total+'">'+total+'</td><td><button type="button"  class="remove btn btn-float btn-float-sm btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td></tr>');

   //get total
  var temp = 0;
  $('#edafaa td:nth-child(4)').each(function(){
   var tdTxt = $(this).text();
 temp+= parseFloat(tdTxt);
  $(".total").val(temp);
   //remining
   let t = $('.total').val();
         let p = $('#paid').val();
         $('#remaning').val(t - p);

});

   $(".remove").click(function(){

  $(this).parent().parent().remove();
  $(".total").val(0);
  $('#remaning').val(0);

  //get total
  var temp = 0;
  $('#edafaa td:nth-child(4)').each(function(){
   var tdTxt = $(this).text();
 temp+= parseFloat(tdTxt);
  $(".total").val(temp);
   //remining
   let t = $('.total').val();
         let p = $('#paid').val();
         $('#remaning').val(t - p);
});

});
$("#paid").change(function(event) {
    let t = $('.total').val();
    let p = $('#paid').val();
            $('#remaning').val(t - p);
        });
});
});

</script>



<script>
    $(document).ready(function() {

$('#location').on('change', function() {
var location_id = this.value;
$("#class").html(' ');
$.ajax({
    url:"{{url('get-location-price')}}",
    type: "POST",
    data: {
        location_id: location_id,
        _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){

        $.each(result.AllPrices,function(key,value){
            $("#request_price").val(value.price);
            $("#finaltotal").val(value.price);
            $("#remining").val(value.price);
            $("#discounttt").val('0');





        });


        $('#discounttt').on('change', function() {

            let dis = $("#discounttt").val();
            let tot = $("#request_price").val();
            $("#finaltotal").val(tot - dis);
            $("#remining").val(tot - dis);
        });


        $('#paiddd').on('change', function() {
                let aa = $("#paiddd").val();
                let bb = $("#finaltotal").val();
                $("#remining").val(bb - aa);
            });





                $("#sub").click(function(){
           let a = $("#location option:selected").text();
           let d = $("#location option:selected").val();
           let b = $("#request_price").val();
           let c = $("#discounttt").val();
           let total = $("#finaltotal").val();
           let r = $("#remining").val();
           let p = $("#paiddd").val();



                    if(p > 0 ){
            $("#subscrip").append('<tr><td><input type="hidden" name="location" value="'+d+'">'+a+'</td><td>'+b+'<input type="hidden" name="price" value="'+b+'"></td><td>'+c+'<input type="hidden" name="discount" value="'+c+'"></td><td><input type="hidden" name="total" value="'+total+'">'+total+'</td><td><input type="hidden" name="paid" value="'+p+'">'+p+'</td><td><input type="hidden" name="remaning" value="'+r+'">'+r+'</td><td><button type="button"  class="remove btn btn-float btn-float-sm btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td></tr>');
            }
            $("#discounttt").val('0');
           $("#request_price").val('0');
           $("#remining").val('0');
            $("#paiddd").val('0');
            $("#finaltotal").val('0');
            $("#done").attr("hidden",true);
         $(".remove").click(function(){
          $(this).parent().parent().remove();
             $("#location").val('0');

             $("#done").attr("hidden",false);

      });

});




    }

});
});
});

</script>


<script>

    $(document).ready(function() {
        let tot = $("#tot").val();
        $("#requested").val(tot);




$('#discountt').on('change', function() {

    let dis = $("#discountt").val();
    let tot = $("#tot").val();

    $("#requested").val(tot - dis);

});


        $('#sure').on('click', function() {
       let a = $("#student_id option:selected").val();
       let o = $("#student_id option:selected").text();
       let d = $("#tot").val();
       let z = $("#discountt").val();
       let c = $("#requested").val();
       let e = $("#paid").val();
       let r = c - e;

       $("#msrwfat").append('<tr><td><input type="hidden" name="student_id" value="'+a+'">'+o+'</td><td>'+c+'<input type="hidden" name="requested" value="'+c+'"></td><td>'+z+'<input type="hidden" name="discount" value="'+z+'"></td><td><input type="hidden" name="paid" value="'+e+'">'+e+'</td><td>'+r+'<input type="hidden" name="remainig" value="'+r+'"></td><td><button type="button"  class="remove btn btn-float btn-float-sm btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td></tr>');
       $("#discountt").val(0);
       $('#requested').val(tot);
       $('#paid').val(0);
       $("#donee").attr("hidden",true);

       $(".remove").click(function(){
      $(this).parent().parent().remove();

      $("#donee").attr("hidden",false);

    });
    });
});


    </script>



<script>
    $(document).ready(function() {

$('#employee').on('change', function() {
var employee_id = this.value;
$.ajax({
    url:"{{url('get-salary')}}",
    type: "POST",
    data: {
        employee_id: employee_id,
        _token: '{{csrf_token()}}'
    },
    dataType : 'json',
    success: function(result){
        $.each(result.salary,function(key,value){
            $("#salary").val(value.salary);


        });
        $("#doit").click(function(){
           let a = $("#employee option:selected").text();
           let d = $("#employee option:selected").val();
           let b = $("#salary").val();
           let c = $("#disc").val();
           let total = b - c ;

           $("#doitmore").append('<tr><td><input type="hidden" name="employee_id" value="'+d+'">'+a+'</td><td>'+b+'<input type="hidden" name="salary" value="'+b+'"></td><td>'+c+'<input type="hidden" name="discount" value="'+c+'"></td><td><input type="hidden" name="total" value="'+total+'">'+total+'</td><td><button type="button"  class="remove btn btn-float btn-float-sm btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td></tr>');
           $("#donee").attr("hidden",true);


           $(".remove").click(function(){

          $(this).parent().parent().remove();
          $("#donee").attr("hidden",false);



      });

});


    }

});
});
});

</script>


<script>
    $(document).ready(function() {

                    $("#yalla").click(function(){
                        let a = $("#quranstudent option:selected").text();
                        let d = $("#quranstudent option:selected").val();
                        let b = $("#price").val();
                        let c = $("#disc").val();
                        let total = b - c ;

                        $("#doitmore").append('<tr><td><input type="hidden" name="quran_student_id" value="'+d+'">'+a+'</td><td>'+b+'<input type="hidden" name="price" value="'+b+'"></td><td>'+c+'<input type="hidden" name="discount" value="'+c+'"></td><td><input type="hidden" name="total" value="'+total+'">'+total+'</td><td><button type="button"  class="remove btn btn-float btn-float-sm btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td></tr>');
                        $("#donee").attr("hidden",true);


                        $(".remove").click(function(){

                            $(this).parent().parent().remove();
                            $("#donee").attr("hidden",false);

                        });

                    });
    });

</script>




<script>
    $(document).ready(function() {

        $('#classes').on('change', function() {
            var type_id = this.value;

            $.ajax({
                url:"{{url('get-book')}}",
                type: "POST",
                data: {
                    type_id: type_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(result){
                    $.each(result.AllPrices,function(key,value){
                        $("#price").val(value.student_price);

                    });

                    $("#more").click(function(){
                        let a = $("#classes option:selected").text();
                        let d = $("#classes option:selected").val();
                        let b = $("#price").val();
                        let c = $("#paid").val();
                        let total = b - c ;
                        if (d > 0 ) {
                            $("#buy").append('<tr><td><input type="hidden" name="class[]" value="' + d + '">' + a + '</td><td>' + b + '<input type="hidden" name="paid[]" value="' + b + '"></td><td>' + c + '<input type="hidden" name="discount[]" value="' + c + '"></td><td><input type="hidden" name="total[]" value="' + total + '">' + total + '</td><td><button type="button"  class="remove btn btn-float btn-float-sm btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td></tr>');
                        }
                        $("#paid").val('0');
                        $("#classes").val('0');
                        $("#price").val('0');
                        //get total
                        var temp = 0;
                        $('#buy td:nth-child(4)').each(function(){
                            var tdTxt = $(this).text();
                            temp+= parseFloat(tdTxt);
                            $(".finaltotal").val(temp);

                        });

                        $(".remove").click(function(){

                            $(this).parent().parent().remove();
                            $(".finaltotal").val(0);

                            //get total
                            var temp = 0;
                            $('#buy td:nth-child(4)').each(function(){
                                var tdTxt = $(this).text();
                                temp+= parseFloat(tdTxt);
                                $(".finaltotal").val(temp);

                            });

                        });

                    });

                }
            });
        });
    });

</script>


<script>
    $(document).ready(function() {


        let dr =  $("#dr1").val();
        let dr2 =  $("#dr2").val();
        let totaldr = Number(dr) + Number(dr2) ;
        $("#totaldr").val(totaldr);


        $('#disdr').on('change', function() {

         let tottt =    $("#totaldr").val();
         let dissss =   $("#disdr").val();
         let disst = Number(tottt) - Number(dissss) ;

            $("#disst").val(disst);


        });
    });

</script>


<script>
    $(document).ready(function() {
        $('#detailgo').on('click', function(event) {
            event.preventDefault();
            $("#remove").empty();
            $(".income").val(0);
            $(".outgoing").val(0);
            $("#ownerdetails").append('<td colspan="6" id="helllo" class="text-center">انتظر حتي يتم تحميل البيانات</td>')
            var from = $("#from").val();
            var to = $("#to").val();
            var safe = $("#safe").val();
            $.ajax({
                url:"{{url('/dashboard/detailsfilter')}}",
                type: "POST",
                data: {
                    from: from,
                    to: to,
                    safe: safe,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(result){
                    var num = 0;
                    $("#helllo").remove();
                    $.each(result.Alldetails,function(key,value){
                        $("#ownerdetails").append('<tr><td>'+num+++'</td><td>'+value.income+'</td><td>'+value.outgoings+'</td><td>'+value.balance+'</td><td>'+value.note+'</td><td>'+value.created_at+'</td></tr>');
                    });

                    //get total
                    var income = 0;
                    var outgoing = 0;
                    $('#ownerdetails td:nth-child(2)').each(function(){
                        var tdTxt = $(this).text();
                        income+= parseFloat(tdTxt);
                        $(".income").val(income);
                    });

                    $('#ownerdetails td:nth-child(3)').each(function(){
                        var tdTxt1 = $(this).text();
                        outgoing+= parseFloat(tdTxt1);
                        $(".outgoing").val(outgoing);
                    });

                    var finalprice = $(".income").val() - $(".outgoing").val();
                    $(".finalprice").val(finalprice);

                    $(".yasm").val(from);
                    $(".yas").val(to);

                }
            });
        });
    });
</script>


<script>
    $(document).ready(function() {

        $('#typee').on('change', function() {
            var type_id = this.value;
            $("#class").html(' ');
            $.ajax({
                url:"{{url('get-class-by-type')}}",
                type: "POST",
                data: {
                    type_id: type_id,
                    _token: '{{csrf_token()}}'
                },
                dataType : 'json',
                success: function(result){

                    $.each(result.AllClass,function(key,value){
                        $("#class").append('<option  value="'+value.id+'">'+value.name+'</option>');
                    });
                    $("#moreee").click(function(){
                        let a = $("#class option:selected").text();
                        let d = $("#class option:selected").val();
                        let b = $("#request_price").val();
                        let z = $("#quantityy").val();
                        let zz = $("#request_quantity").val();
                        let c = $("#paid").val();
                        let total = b*z - c ;

                            $("#buyy").append('<tr><td><input type="hidden" name="class[]" value="' + d + '">' + a + '</td><td>' + b + '<input type="hidden" name="paid[]" value="' + b + '"></td><td><input type="hidden" name="quantity[]" value="' + z + '">' + z + '</td><td>' + c + '<input type="hidden" name="discount[]" value="' + c + '"></td><td><input type="hidden" name="total[]" value="' + total + '">' + total + '</td><td><button type="button"  class="remove btn btn-float btn-float-sm btn-sm btn-danger"><i class="fa fa-trash"></i> </button></td></tr>');

                        $('#typee option:not(:selected)').attr('disabled',true);
                        $("#paid").val('0');
                        $("#class").val("0").change();
                        $("#request_quantity").val('0');
                        $("#request_price").val('0');
                        $("#quantityy").val('1');
                        //get total
                        var temp = 0;
                        $('#buyy td:nth-child(5)').each(function(){
                            var tdTxt = $(this).text();
                            temp+= parseFloat(tdTxt);
                            $(".finaltotal").val(temp);

                        });

                        $(".remove").click(function(){

                            $(this).parent().parent().remove();
                            $(".finaltotal").val(0);

                            //get total
                            var temp = 0;
                            $('#buyy td:nth-child(5)').each(function(){
                                var tdTxt = $(this).text();
                                temp+= parseFloat(tdTxt);
                                $(".finaltotal").val(temp);

                            });

                        });

                    });


                }

            });
        });
    });

</script>


















