$(document).ready(function () {
    $(".markapproved").on('click', function () {
        var _this = this;
        var userID = $(this).attr('data-userid');
        var ID = $(this).attr('data-id');

        var AppendOnSuccess = $(this).attr('data-appendid');
        

        $(".loader").css("display", "block");
        $(_this).attr("disabled", "true");
        var id = 1;
        var userID = 1;
        $.ajax({
            type: "POST",
            url: markApprovedURL,
            data: { id: ID, userid: userID },
            success: function (response) {

                $.each(response, function (indexInArray, valueOfElement) {

                    if (valueOfElement.status == 200) {
                        swal("", valueOfElement.message, "success");
                        $(AppendOnSuccess).text(valueOfElement.approvalMessage);
                    } else {
                        swal("", "Something went wrong.", "error")
                    }
                });

                $(_this).attr("disabled", "false");
                $(".loader").css("display", "none");

            }
        });
    });
});
