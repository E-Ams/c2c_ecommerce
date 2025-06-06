$(document).ready( function()
{
    $("#accountSettingsBtn").click( function ()
    {
        $.ajax({
            type: 'POST',
            url: '../../display/account_settings.php',
            success: function(data)
            {
                $("#settingsWindow").html(data);
            }
        });
    });

    $("#productSettingsBtn").click( function ()
    {
        $.ajax({
            type: 'POST',
            url: '../../display/product_settings.php',
            success: function(data)
            {
                $("#settingsWindow").html(data);
            }
        });
    });

    $(".editProduct").click( function()
    {
        // let id = $(this).parent().parent().attr('id');

        let id = $(this).attr('data-product-id');

       $.ajax({
           type: 'POST',
           url: '../../display/product_edit.php?id='+id,
           success: function( data )
           {
               $("#settingsWindow").html(data);
           }
       });
    });
});