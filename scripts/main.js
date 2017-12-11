$(document).ready(function () {
  $('.btnsend').click(function () {
    $('.popup__form .item').val($(this).data('item'));
  });

  $('[data-toggle="tooltip"]').tooltip();

  $('.popup-with-form').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#name',

    // When elemened is focused, some mobile browsers in some cases zoom in
    // It looks not nice, so we disable it:
    callbacks: {
      beforeOpen: function beforeOpen() {
        if ($(window).width() < 700) {
          this.st.focus = false;
        } else {
          this.st.focus = '#name';
        }
      }
    }
  });

  $('.file-inputs').bootstrapFileInput();

  $(document).on('click focus', '.is-invalid', function () {
    $(this).removeClass('is-invalid');
    $(this).prop('placeholder', $(this).data('old-placeholder'));
  });
  $.fn.si_show_message = function (text) {
    return this.each(function () {
      var old_placeholder = $(this).prop('placeholder');
      $(this).addClass('is-invalid');
      $(this).data('old-placeholder', old_placeholder);
      $(this).prop('placeholder', text);
    });
  };

  $('.send-form').submit(function () {
    var name = $(this).find('.client-name');
    var phone = $(this).find('.client-phone');
    var town = $(this).find('.client-town');
    var store = $(this).find('.client-store');
    var image = $(this).find('.client-image');

    send = 1;

    if (name.val() == '') {
      name.si_show_message('Укажите ваше имя');
      send = 0;
    }
    if (phone.val() == '') {
      phone.si_show_message('Укажите ваш телефон');
      send = 0;
    }
    if (town.val() == '') {
      town.si_show_message('Укажите ваш город');
      send = 0;
    }
    if (store.val() == '') {
      store.si_show_message('Напишите название магазина');
      send = 0;
    }
    if (image.val() == '') {
      alert('Выберите файл');
      image.si_show_message('Выберите файл');
      send = 0;
    }
    if (send == 0) return false;
    $.post($(this).prop('action'), $(this).serialize(), function (res) {
      if (res.success == 1) {

        $('.oksend').addClass('active');

        $('.client-name').val('');
        $('.client-phone').val('');
        $('.client-town').val('');
        $('.client-store').val('');
        $('.client-image').val('');
        $('.file-input-name').hide();

      } else {
        alert(res.text);
      }
    }, 'json');
    return false;
  });
});