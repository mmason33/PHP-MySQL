function submitForm() {
    var name = $("#name").val().trim();
    var position = $("#position").val().trim();
    var rating = $("#rating").val().trim();
    var rowNumb = parseInt($('.number').last().text()) + 1;

    $('.table').append(
        '<tr>' +
            '<th scope="row">' + rowNumb + '</th>' +
            '<td>' + name + '</td>' +
            '<td>' + position + '</td>' +
            '<td>' + rating + '</td>' +
        '</tr>'
    );

    $.ajax({
        type: "POST",
        url: "post.php",
        data: "name=" + name + "&position=" + position + "&rating=" + rating
    });

    $("#name").val('');
    $("#position").val('');
    $("#rating").val('');

}

$("form").submit(function(event){
    event.preventDefault();
    submitForm();
});