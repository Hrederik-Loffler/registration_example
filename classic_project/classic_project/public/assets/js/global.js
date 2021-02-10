
(function ($) {
  'use strict'
  /* ==================================================================
        [ Daterangepicker ] */
  try {
    $('.js-datepicker').daterangepicker({
      singleDatePicker: true,
      showDropdowns: true,
      autoUpdateInput: false,
      locale: {
        format: 'YYYY/MM/DD'
      }
    })

    var myCalendar = $('.js-datepicker')
    var isClick = 0

    $(window).on('click', function () {
      isClick = 0
    })

    $(myCalendar).on('apply.daterangepicker', function (ev, picker) {
      isClick = 0
      $(this).val(picker.startDate.format('YYYY/MM/DD'))
    })

    $('.js-btn-calendar').on('click', function (e) {
      e.stopPropagation()

      if (isClick === 1) {
        isClick = 0
      } else if (isClick === 0) {
        isClick = 1
      }

      if (isClick === 1) {
        myCalendar.focus()
      }
    })

    $(myCalendar).on('click', function (e) {
      e.stopPropagation()
      isClick = 1
    })

    $('.daterangepicker').on('click', function (e) {
      e.stopPropagation()
    })
  } catch (er) { console.log(er) }
  /* [ Select 2 Config ]
        =========================================================== */

  try {
    var selectSimple = $('.js-select-simple')

    selectSimple.each(function () {
      var that = $(this)
      var selectBox = that.find('select')
      var selectDropdown = that.find('.select-dropdown')
      selectBox.select2({
        dropdownParent: selectDropdown
      })
    })
  } catch (err) {
    console.log(err)
  }
})(jQuery)

$(document).ready(function () {
  $('#share').addClass('none')
  $('#first').removeClass('none')
  $(function () {
    $('#phone').mask('+9(999) 999-9999')
  })

  $(document).on('submit', '#first', function (e) {
    e.preventDefault()

    $.ajax({

      url: 'main',
      type: 'POST',
      dataType: 'json',
      data: new FormData(this),
      processData: false,
      contentType: false,
      success: function (data) {
        if (data.status) {
          $.cookie('form', '2', 10)
          $.cookie('id_member', data.id_member)
          $('#first').addClass('none')
          $('#second').removeClass('none')
        } else {
          if (data.message.firstname) {
            $('input[name="firstname"]').addClass('error')
            $('#nameError').removeClass('none').text(data.message.firstname)
          } else {
            $('input[name="firstname"]').removeClass('error')
            $('#nameError').addClass('none')
          }
          if (data.message.lastname) {
            $('input[name="lastname"]').addClass('error')
            $('#lastnameError').removeClass('none').text(data.message.lastname)
          } else {
            $('input[name="lastname"]').removeClass('error')
            $('#lastnameError').addClass('none')
          }
          if (data.message.email) {
            $('input[name="email"]').addClass('error')
            $('#emailError').removeClass('none').text(data.message.email)
          } else {
            $('input[name="email"]').removeClass('error')
            $('#emailError').addClass('none')
          }
          if (data.message.birthdate) {
            $('input[name="birthdate"]').addClass('error')
            $('#birthError').removeClass('none').text(data.message.birthdate)
          } else {
            $('input[name="birthdate"]').removeClass('error')
            $('#birthError').addClass('none')
          }
          if (data.message.country) {
            $('#country').addClass('error')
            $('#countryError').removeClass('none').text(data.message.country)
          } else {
            $('#country').removeClass('error')
            $('#countryError').addClass('none')
          }
          if (data.message.phone) {
            $('input[name="phone"]').addClass('error')
            $('#phoneError').removeClass('none').text(data.message.phone)
          } else {
            $('input[name="phone"]').removeClass('error')
            $('#phoneError').addClass('none')
          }
          if (data.message.reportSubject) {
            $('input[name="reportSubject"]').addClass('error')
            $('#subError').removeClass('none').text(data.message.reportSubject)
          } else {
            $('input[name="reportSubject"]').removeClass('error')
            $('#subError').addClass('none')
          }
          $('#msg').removeClass('none').text('Check your fields')
        }
      }

    })// close first ajax
  })// close first bnt

  function checkPhoto () {
    const photo = $('input[name="photo"]').val()
    const extension = photo.split('.').pop().toUpperCase()
    if (extension !== 'PNG' && extension !== 'JPG' && extension !== 'GIF' && extension !== 'JPEG') {
      $('input[name="photo"]').addClass('error')
      $('#photoError').removeClass('none').text('Invalid file format!')
    } else {
      $('input[name="photo"]').removeClass('error')
      $('#photoError').addClass('none')
    }
  }

  $(document).on('submit', '#second', function (event) {
    event.preventDefault()
    $.ajax({
      url: $(this).attr('action'),
      type: $(this).attr('method'),
      dataType: 'JSON',
      data: new FormData(this),
      processData: false,
      contentType: false,
      success: function (data) {
        if (data.status === true) {
          $.cookie('form', '1', 10)
          $('#second').addClass('none')
          $('#share').removeClass('none')
          $('#link').removeClass('none')
        } else {
          $('input[name="photo"]').addClass('error')
          $('#photoError').removeClass('none').text(data.message.photo)
          checkPhoto()
        }
      }
    })
  })
  if ($.cookie('form') === '2') {
    $('#first').addClass('none')
    $('#second').removeClass('none')
  } else {
    if ($.cookie('form') === '1') {
      $('#first').removeClass('none')
      $('#second').addClass('none')
    }
  }
})
