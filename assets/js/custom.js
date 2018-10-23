function notif(type, title, to) {
    swal({
        type: type,
        title: "<b><h3>"+ title +"</h3></b>",
        text: "",
        timer: 1500,
        showConfirmButton: false,
        html : true
    }, function () {
        document.location.href = to
    });
}