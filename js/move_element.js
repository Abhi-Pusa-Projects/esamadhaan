//alert("we are able to access this file");

$('#industrial_det').click(function(){
    $('#slide_det').slideToggle(500);
    //alert("we are able to listen to the click");
});


$(document).ready(function () {
                            $("#demo1 .stars").click(function () {
                              $('#rate_val').text($(this).val());
                            });
                        });

$('#feedback_prev').click(function(){

    console.log( $("table tr:last").find("td").last().text());
    var first_timestamp = $("table tr:last").find("td").last().text();
    //alert(first_timestamp);
    $.post('get_next_feedback.php',{"data_flow":"prev","timestamp":first_timestamp},function(data){
      console.log(data);
      $('#feedback_data').html(data);
    })
});

$('#feedback_next').click(function(){
    //alert('right feedback button clicked');
    console.log($("table tr:last").find("td").last().text());
    var last_timestamp= $("table tr:last").find("td").last().text();
    //alert(last_timestamp);
    $.post('get_next_feedback.php',{"data_flow":"next","timestamp":last_timestamp},function(data){
      console.log(data);
      $('#feedback_data').html(data);
    })
});

$('#services_prev').click(function(){
    //alert("we are in function");
    console.log( $("#services_det_table table tr:last").find("td").last().text());
    var first_timestamp = $("#services_det_table table tr:last").find("td").last().text();
    //alert(first_timestamp);
    $.post('get_next_services.php',{"data_flow":"prev","timestamp":first_timestamp},function(data){
      console.log(data);
      $('#services_det_table').html(data);
    })
});

$('#services_next').click(function(){
    //alert('right services button clicked');
    console.log($("#services_det_table table tr:last").find("td").last().text());
    var last_timestamp= $("#services_det_table table tr:last").find("td").last().text();
    //alert(last_timestamp);
    $.post('get_next_services.php',{"data_flow":"next","timestamp":last_timestamp},function(data){
      console.log(data);
      $('#services_det_table').html(data);
    })
});

$('#industrial_header').on('click',function(){
    $('#industrial_panel_div').slideToggle(500);
});

$('#industrial_header1').on('click',function(){
    $('#industrial_panel_div1').slideToggle(500);
});

$('#industrial_header2').on('click',function(){
    $('#industrial_panel_div2').slideToggle(500);
});

$('#industrial_header3').on('click',function(){
    $('#industrial_panel_div3').slideToggle(500);
});

$('#industrial_header4').on('click',function(){
    $('#industrial_panel_div4').slideToggle(500);
});

$('#industrial_header5').on('click',function(){
    $('#industrial_panel_div5').slideToggle(500);
});

$('#domestic_header').on('click',function(){
    $('#domestic_panel_div').slideToggle(500);
});

$('#domestic_header1').on('click',function(){
    $('#domestic_panel_div1').slideToggle(500);
});
// $('#industrial_header').on('',function(){
//     $('#industrial_panel_div').slideUp(500);
// });
