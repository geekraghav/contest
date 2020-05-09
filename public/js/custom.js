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



    $("#getdropdowndata").on("change", function () {

        var timeSlot = $(this).val();
        window.location.href = "?data=timeslot&timing=" + timeSlot+"&"+checkPass;
        // $.ajax({
        //     type: "POST",
        //     url: dropdownDataURL,
        //     data: { timeSlot: timeSlot },
        //     success: function (response) {
        //         console.log(response);
        //     }
        // });

    });



    $("#winnerdata").on("click", function () {
        if (checkPass) {
            window.location.href = "?data=winner&" + checkPass;
        } else {
            window.location.href = "?data=winner";
        }

    });

    $("#currentdata").on("click", function () {
        if (checkPass) {
            window.location.href = "?data=current&" + checkPass;
        } else {
            window.location.href = "?data=current";
        }

    });

    $("#shareimage").on("click", function () {
        var imageURL = $(this).attr('data-imageurl');
        if (checkPass) {
            window.location.href = "share?url=" + imageURL + "&" + checkPass;
        } else {
            window.location.href = "share?url=" + imageURL;
        }

    });


    $(function () {
        $('.lazy').lazy();
    });

});
