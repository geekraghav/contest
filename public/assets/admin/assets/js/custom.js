//ajax request to get actions based on controller ID
$('[id^="controller"]').on("click", function(){
    $('.emptythisto').empty();
    controller_id = $(this).data('id');
    $('#appendactionhere').empty();
    $.ajax({
        url: '/api/ajax/getaction/' + controller_id,
        type: "GET",
        datatype: "json",
        success: function(response) {
            $.each(JSON.parse(response), function(key, value) {
                $('#appendactionhere').append('<li class="mdc-list-item"  data-value="' + value.id + '">' + value.action_name + '</li>');
            });
        }
    });
});
//ajax request to get permissions based on ROLE ID
$('[id^="rolelist"]').on("click", function()
{
    $('#appendhere').empty();
    roleid = $(this).data('value');
    $.ajax({
    type: "GET",
    url: "/api/ajax/getpermission/" + roleid,
    dataType: "json",
    success: function(response)
    {
        $.each(response, function(key, value)
        {
            $('#appendhere').append('<input type="checkbox" name="permission_id[]" value="'+value.id+'" '+value.check+'> '+value.permission_name+'');
        });
    }
    });
});
//ajax request to get store details
$('[id^="getDetails"]').on("click", function()
{
    $("#appendulhere").empty();
    storeID = parseInt($(this).data('id'));
    $.ajax({
    type: "GET",
    url: "/api/ajax/getstoredetails/" + storeID,
    dataType: "json",
    success: function(response)
    {
        console.log(response);
        $.each(response,function(k,v)
        {

            $("#appendulhere").append('<li class="list-group-item tt">'+  k.split("_").join(" ") + ': <span class="value">'+ v +'</span></li>');
        });
        $('#storeDetails').modal();
    }
    });
});


$(document).ready(function () {
    $('select').selectize({
        sortField: 'text'
    });
});
