/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(e) {

    $('.report').on('click', function () {

        var form = $("#report");
        var dataform = form.serialize();
        $.ajax({
            beforeSend: function () {
                $(".loading").empty();
                $(".loading").html(
                        '<p class="loading"><img src="/y/images/loading.gif" /> csv wird generiert .....</p>'
                        );
                $("#csv").prop("disabled", true);
            },
            url: "/y/jrk/auswertung/csv",
            type: "POST",
            data: dataform,
            xhrFields: {
                responseType: "blob"
            },
            success: function (data) {
                /**
                 * Download der CSV aus dem Request
                 * @type {HTMLAnchorElement}
                 */
                var a = document.createElement("a");
                var url = window.URL.createObjectURL(data);
                a.href = url;
                a.download = "Jugendauswertung.csv";
                document.body.append(a);
                a.click();
                a.remove();
                window.URL.revokeObjectURL(url);
                $(".loading").empty();
                $(".loading").html(
                        '<div class="alert alert-success" role="alert">' +
                        "Das Csv wurde heruntergeladen!" +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                        '    <span aria-hidden="true">&times;</span>\n' +
                        "  </button></div>"
                        );
                $("#csv").prop("disabled", false);
            }
        });
    });
});
