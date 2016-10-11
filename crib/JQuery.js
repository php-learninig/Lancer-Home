// JQuery Script Document
$('p'); // Выбрать все тэги абзаца "p"
$('#id'); // Выбрать все тэги с идентификатором #id
$('.class'); // Выбрать все тэги с классом .class
$('#div img'); // Выбрать все тэги картинок вложеные в идентификатор #div (не только чисто дочерних) по всему DOM
$('#div + img'); // Выбрать следующий тэг картинки стоящего после идентификатора #div
$('#div > img'); // Выбрать все чисто дочерние тэги картинок родителя #div

//////////////////////////////////////////////////////////////////
////////////////////////////* ВЫБОРКА ПО АТРИБУТАМ *//////////////
//////////////////////////////////////////////////////////////////

$('img[width = 200]'); // Выбрать все картинки с шириной 200px
$('a[href  ^= http]'); // Выбрать все ссылки со страницы у которых атрибут href начинается с http
$('img[src $= .jpg]'); // Выбрать все картинки со страницы у которых атрибут src заканчивается на .jpg
$('img[src *= moto]'); // Выбрать все картинки со страницы у которых атрибут src содержит (в любом месте) слово moto
$('#form input:even||odd'); // Выбрать все четные||нечетные input в форме
$('img:not(form)'); // Выбрать все картинки, кроме, картинок в форме
$('div:has(form)'); // Выбрать все теги div содержащие формы
$('li').not(':has(a#myId') // Выбери все <li> которые не(not) содержат(:has) в себе <a id="myId">
$('p:contains(мотоцикл)'); // Выбрать все абзацы содержащие слово "мотоцикл"
$('form input:first||last'); // Выбрать первый||последний input в форме
$('div:visibility||hidden'); // Выбрать все видимые||скрытые блоки div ()||(display:none; type:none; width && height == 0)
$('div:contains("какойто Текст")'); // Выбрать все div которые содержат в себе текст "какойто Текст"

//////////////////////////////////////////////////////////////////
////////////////////////////* ФУНКЦИИ *///////////////////////////
//////////////////////////////////////////////////////////////////

$('p').text("Измененный текст"); // Вытащить/изменить текст из параграфа

$('img').hide(3000, function () {
}); // Заставить картинки исезнуть и после выполнить функцию
$('img').show(3000, function () {
}); // Заставить картинки повиться и после выполнить функцию

$('img').width(2000); // Узнать ширину картинки и изменить на 2000px
$('img').height(2000); // Узнать высоту картинки и изменить на 2000px

$('#div').html('<p>Измененный html</p>'); // узнать||изменить  html DOM блока #div

$('#div').fadeIn(2000, function () {
}); // Плавное появление блока div за 2 сек и выполнить функцию
$('#div').fadeOut(2000, function () {
}); // Плавное исчезновение блока div за 2 сек и выполнить функцию
$('#img').fadeTo(2000, 0.5); // плавное исчезновение картинки за 2 сек до opacity 0.5

$('#img').slideUp(2000); // плавный слайд вверх
$('#img').slideDown(2000); // плавный слайд вниз

$('#img').attr('width', 640); // узнать атрибут ширины у картинки и изменить||добавить на 640px
$('#img').removeAttr('title'); // удалить атрибут title у картинки

$('input').addClass('new'); // Добавить класс new
$('input').removeClass('new'); // Удалить класс new

$('p').css('font-size', '13px'); // Узнать значение css и изменить на 13px
$('p').css({'color': '#cecece', 'font-size': '25px'}); // Узнать значениЯ css и изменить

$('#img').animate({'width': '450px'}, 4000, function () {
}); // изенить ширину за 4 сек и запустить функцию

$('#form').before('<p>Вставленный абзац</p>'); // вставить html код перед html кодом #form
$('#form').after('<p>Вставленный абзац</p>'); // вставить html код после html кодом #form

$('#form').prepend('<p>Вставленный абзац</p>'); // вставить html код внутрь #form до первого html кода
$('#form').append('<p>Вставленный абзац</p>'); // вставить html код внутрь #form после последнего html кода

$('img').each(function () { 		// Выбрать все картинки
    if ($(this).width > 400) { 		// полуавтоматический цикл => если ширина текущей картинки больше 400
        $(this).fadeOut(3000) 	// скрыть за три секунды эту текущую картинку
    }
});
;

$('#img').clone(); // копировать картинку в переменную
$('#img').remove(); // вырезать картинку в переменную

$('div:first').is('.myClass');	// Иммет ли первый div класс .myClass (boolean)
$('div').filter('.myClass');	// Выбрать все div содержащие класс .myClass (object)
$('div').not('.myClass');		// Выбрать все div не содержащие класс .myClass (object)

$('div').each(function (index, element) { // В первый параметр(index) each вернет индекс текущего элемента, а во второй html елемента

});
//////////////////////////////////////////////////////////////////
////////////////////////////* СОБЫТИЯ *///////////////////////////
//////////////////////////////////////////////////////////////////

$('#input').mouseover(); // Навод курсора
$('#input').mouseout(); // Уход курсора

$('#input').dblclick(); // Двойной клик

$('#input').mousemove(); // Передвигание курсора

$('#input').mousedown(); // Нажатая кнопка мыши
$('#input').mouseup(); // Отпущеная кнопка мыши

$('#input').submit(); // Отпущеная кнопка мыши

$('#input').focus(); // Сфокусированный объект
$('#input').blur(); // Потеря фокуса
$('#input').change(); // Изменение элемента (например переключили радиокнопку)

$('#input').reset(); // Сброс формы

$('#input').keypress(); // Нажатая кнопка клавиатуры (вытащить код нажатой кнопки)
$('#input').keydown(); // Зажатая кнопка клавиатуры
$('#input').keyup(); // Отпущеная кнопка клавиатуры

$('#input').load(); // Событие когда вся страница заружена полностью
$('#input').resize(); // Размер окна браузера
$('#input').scroll(); // События изменения скрола
$('#input').unload(); // Закрытие страницы || переход на другую страницу

$(''); //
$(''); //
$(''); //
$(''); //
$(''); //
$(''); //
