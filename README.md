# simple
тестовое задание

Тестовое задание

Создать страницу с формой регистрацией
В форме должны быть следующие поля:
- имя
- фамилия
- email
- пароль
- повтор пароля
Реализовать отправку этой формы при помощи AJAX.
Реализовать обработку AJAX запроса на php.
В обработчике нужно:
 1) провести валидацию
email содержит @
пароли совпадают
При желании эти валидации можно также продублировать еще на клиенте (js)
 2) задать некий массив уже существующих юзеров (получать его из какой-либо базы данных не требуется). В массиве должны присутствовать поля email, id, name.
 3) Провести проверку есть ли в этом массиве элемент с заполненным юзером емейлом.
 4) Результат проверки должен логироваться в файл в любом формате

При успешной проверке (пользователь не найден) - форма должна скрываться, а пользователю должно выводиться сообщение об успешной регистрации. 
При неудачной проверке (например, пользователь уже был зарегистрирован) - пользователю должна выводиться соответствующая ошибка над формой.

Создать публичный репозиторий на github и загрузить туда весь исходный код задания. Файлы-логи не должны попадать в репозиторий.
В качестве результата передать ссылку на этот репозиторий.

Можно использовать любые javascript библиотеки.
Для стилизации страницы использовать https://getbootstrap.com/ .
