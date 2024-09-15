// This is the JavaScript for rentalapp.php. It contains all of the
// content '<section id="tables">'.

// Start of the JavaScript

// Clear invalid

function clearInvalid(self) {
  $(self).removeClass('invalid');
  $(self).data('invalid', false);
}

// Set invalid

function setInvalid(self) {
  $(self).addClass('invalid');
  $(self).data('invalid', true);
}

function doDate(self, e) {
  const original = $(self).val();
  const inputValue = original.replace(/\D/g, '');
  let day;

  // We have removed any /s so d=1, dd=2, m=3, mm=4, y=5, yy=6, yyy=7 and yyyy=8

  if(e.key == "Backspace") {
    self.value = self.value.slice(0);
    return false;
  }

  // Validation before formatting

  // Check if self year is before the current date or after the current year

  const propName = $(self).attr("when");
  const month = parseInt(inputValue.slice(0, 2));

  let sliceValue = parseInt(inputValue.slice(0, 1));

  if(sliceValue > 1) {
    setInvalid(self);
    return false;
  }

  sliceValue = parseInt(inputValue.slice(0, 2));

  if(sliceValue > 12) {
    setInvalid(self);
    return false;
  }

  const dayTens = parseInt(inputValue.slice(2, 3));

  if(dayTens && dayTens > daysInMonth[month -1].slice(0, 1)) {
    setInvalid(self);
    return false;
  }

  day = parseInt(inputValue.slice(2, 4));

  if(day && day > daysInMonth[month -1]) {
    setInvalid(self);
    return false;
  }

  if(month !== 0 && propName === "current") {
    const currMo = new Date().getMonth() + 1; // Month 1-12, getMonth() is zero bassed.
    if(month !== currMo) {
      setInvalid(self);
      return false;
    }
  }

  if(inputValue.length === 8) {
    const currDate = new Date().getFullYear();
    let startDate, endDate;

    if(propName === "after") {
      startDate = currDate;
      endDate = 2050;
    } else if(propName === "before") {
      startDate = 1900;
      endDate = currDate;
    } else if(propName === "current") {
      startDate = currDate;
      endDate = currDate + 1;
    }

    const year = parseInt(inputValue.slice(4));

    if(year < startDate || year >= endDate) {
      setInvalid(self);
      return false;
    }

    // Now check for leep year

    let leap;

    if(year % 4 === 0 && (year % 100 !== 0 || year % 400 === 0)) {
      leap = true;
    } else {
      leap = false;
    }

    // Check the day again

    if(month === 2) {
      if(leap && day > 29) {
        setInvalid(self);
        return false;
      } else if(!leap && day > 28) {
        setInvalid(self);
        return false;
      }
    } else if(day > daysInMonth[month -1]) {
      setInvalid(self);
      return false;
    }
  }
  return true;
}

const dateRegex = /^(0[1-9]|1[0-2])\/(0[1-9]|1\d|2\d|3[01])\/(19|20)\d{2}$/; 
const daysInMonth = ["31", "29", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];

jQuery(document).ready(function($) {
  // First we need to display the css and tables.

  $("#tables").html(thisPage);

  // This looks through each 'select' and looks to see if the selectAr array for the name of the
  // select is set to a state name.
  // If it finds the name we then look through all of the options for the text of the state name.
  // If we find it we set the property to 'selected'. Really pretty simple once you figure it out.
  // All of the rest of the PHP logic uses the variable send from the 'dontsend' post. Only the
  // radio buttons and state selections need special treatment. I do the radios in PHP but this
  // must be done in JavaScript.

  $("select").each(function() {
    const selectName = $(this).attr('name');
    if(selectAr[selectName]) {
      let stateName = selectAr[selectName];

      $(this).find("option").each(function() {
        if($(this).text() === stateName) {
          $(this).prop('selected', true);
          return false; // Break out of the inner loop once the option is found
        }
      });
    }
  });

  // Set up the mask data
  
  $(".phone").mask("(999) 999-9999");
  $(".ss").mask("999-99-9999");
  $(".date").mask("99/99/9999");
  $(".zip").mask("99999");

  // Do the date class
  
  $(".date").on("keyup", function(e) {
    const original = $(this).val();
    const inputValue = original.replace(/\D/g, '');;

    if(doDate(this, e) === true) {
      clearInvalid(this);
    }

    if(inputValue.length === 8 && doDate(this, e)) {
      // Additional check to clear invalid class if the full date is valid

      if(dateRegex.test(original)) {
        clearInvalid(this);
      }
    }
  });

  // Social Security, phone and zip class
  
  $('.ss, .phone, .zip').on("keyup", function(e) {
    clearInvalid(this);
  });

  // This is the on blur  for all classes
  
  $('.phone, .ss, .date, .money, .zip').on('blur', function(e) {
    if($(this).data('invalid') === true) return;

    let parts = $(this).val().split(".");
    let dec = parts[1]

              let inputValue = $(this).val().replace(/\D/g, '');
    let len;

    if(inputValue == '') {
      return;
    }

    if($(this).hasClass('ss')) {
      len = 9;
    } else if($(this).hasClass('phone')) {
      len = 10;
    } else if($(this).hasClass('date')) {
      len = 8;
    } else if($(this).hasClass('zip')) {
      len = 5;
    } else if($(this).hasClass('money')) {
      if(dec.length < 2) {
        setInvalid(this);
      }
      return;
    }

    if(inputValue.length < len) {
      setInvalid(this);
      return;
    } else if(len === 5 && inputValue === "00000") {
      setInvalid(this);
      return;
    }

    clearInvalid(this);
  });

  // Format for money, $ and cents

  $('.money').on("keyup", function(e) {
    let parts = $(this).val().split(".");
    let v = parts[0].replace(/\D/g, ""),
      dec = parts[1];

    clearInvalid(this);

    let calc_num = Number((dec !== undefined ? v + "." + dec : v));

    // use this for numeric calculations
    // console.log('number for calculations: ', calc_num);

    let n = new Intl.NumberFormat('en-EN').format(v);
    n = dec !== undefined ? n + "." + dec.slice(0, 2) : n;
    $(this).val('$' + n);
  });

  // Auto Yr

  $(".autoYr").on("keyup", function(e) {
    let inputValue = $(this).val().replace(/\D/g, '');

    clearInvalid(this);

    const currDate = new Date().getFullYear() +1;

    if(inputValue.length === 4) {
      if(inputValue < 1900 || inputValue > currDate) {
        setInvalid(this);
      }
    }

    this.value = inputValue.slice(0, 4);
  });

  // When the form is submited

  $("form").on("submit", function(e) {
    $(this).trigger("blur");
    let invalid = $('.phone, .date, .ss, .money').filter(function() {
      return $(this).data('invalid');
    });

    if(invalid.length) {
      $("#errorMessage").show();
      return false;
    } else {
      $("#errorMessage").hide();
    }
  });
});
