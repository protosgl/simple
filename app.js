$(function () {

    $('form').on('submit', function (e) {
        //
        e.preventDefault();

        $.ajax({
            type: 'post', url: 'post.php', data: $('form').serialize(), success: function (response) {
                //Добавляем класс и текст
                $("#resultForm").addClass("alert alert-success").text("Регистрация прошла успешно!");
                //скрываем форму
                $("#formRegistration").hide();
                console.log(response);
            }, error: function (response) {
                //Добавляем класс и текст
                $("#resultForm").addClass("alert alert-warning").text("Пользователь не найден");
                console.log(response);
            }
        });

    });

});