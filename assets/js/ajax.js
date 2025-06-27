$(document).ready( function()
{
    $("#accountSettingsBtn").click( function()
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

    $("#productSettingsBtn").click( function()
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

    $("#allUsers").click( function()
    {
        $.ajax({
            type: 'POST',
            url: '../../display/userList.php',
            success: function(data)
            {
                $("#settingsWindow").html(data);
            }
        });
    });


    $(".editProduct").click( function()
    {
        let id = $(this).attr('data-product-id');

        $.ajax({
            type: 'POST',
            url: '../../database/product_edit.php?id='+id,
            success: function( data )
            {
                $("#settingsWindow").html(data);
            }
        });
    });

    $(".deleteProduct").click( function()
    {
        let id = $(this).attr('data-product-id');

        $.ajax({
            type: 'POST',
            url: '../../database/product_delete.php?id='+id,
            beforeSend:function()
            {
                return confirm("Proceed to delete product?");
            },
            success: function( data )
            {
                $("#settingsWindow").html(data);
            }
        });
    });

    $(".deleteProdFeed").click( function()
    {
        let id = $(this).attr('data-product-id');

        $.ajax({
            type: 'POST',
            url: '../../database/product_delete.php?id='+id,
            beforeSend:function()
            {
                return confirm("Proceed to delete product?");
            },
            success: function( data )
            {
                window.location.reload();
            }
        });
    });

});


