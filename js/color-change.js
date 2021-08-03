"use strict";





$(() => {
  colorChangingButton();
  console.log(localStorage.getItem('style'));
  if (localStorage.getItem('style') == null) {
    $('.wrapper').addClass('night-vision');
  }
  else if ( localStorage.getItem('style') == 'background-color-change' ) {
    colorChange.bgcc = true;
    $('.wrapper').addClass('background-color-change');
    console.log('style not set');
    colorChangeBackground();
  } else {
    removeClasses();
    $('.wrapper').addClass(localStorage.getItem("style"));
  }
});

const colorChange = {

  colorChangeButton: document.querySelector('.color-change-button').style,
  navStyle: document.querySelector('.main-navigation').style,
  // Colors that the background changes through
  c: ['#FFEBEB',
    '#FFF0EB',
    '#FFF1EB',
    '#FFF8EB',
    '#FFFBEB',
    '#FFFFEB',
    '#F9FFEB',
    '#EEFFEB',
    '#EBFFF0',
    '#EBFFF8',
    '#EBFFFD',
    '#EBFAFF',
    '#EBF3FF',
    '#EBEDFF',
    '#F0EBFF',
    '#F7EBFF',
    '#FEEBFF',
    '#FFEBFA',
    '#FFEBF1',
    '#FFEBEB',
  ],
  i: 0,
  // checking to see if the background color change is active or not
  bgcc: true,
  pathName: window.location.pathname,
  colorChangeInterval: null,
};

// Kicks off the colour changing and sets the interval
function colorChangeBackground() {
  if (colorChange.bgcc == true) {
    let bgStyle = document.querySelector('.background-color-change').style;
    colorChange.colorChangeInterval = setInterval(
      function () {
        bgStyle.transition = "background-color 2s ease-in-out";
        bgStyle.backgroundColor = colorChange.c[colorChange.i];
        colorChange.i = (colorChange.i + 1) % colorChange.c.length;
      }, 1500
    );
  } 
  return;
}

// An attempt to stop the color changing. I don't call this anywhere but kept it incase it might be useful eventually
function stopColorChange() {
  clearInterval(colorChange.colorChangeInterval);
  let bgStyle = document.querySelector('.wrapper').style;
  bgStyle.transition = 'none !important';
  colorChange.bgcc = false;
  setInterval(colorChangeBackground, 10000000000000);

  return;

}

// This just shows the color changing on the button a user would click to change the style (this works well)
function colorChangingButton() {
  setInterval(
    function () {
      colorChange.colorChangeButton.transition = "background-color .5s ease-in-out";
      colorChange.colorChangeButton.backgroundColor = colorChange.c[colorChange.i];
      colorChange.i = (colorChange.i + 1) % colorChange.c.length;
    }, 1500);
}


//   remove all classes from the wrapper every time a new style is chosen so the new styles don't compete with the previous one (this seems to work well too)
function removeClasses() {
    $('.wrapper').removeClass('background-color-change');
    $('.wrapper').removeClass('night-vision');
    $('.wrapper').removeClass('red-black');
    $('.wrapper').removeClass('soft-colors');
}

// $(document).ready(function(){
$('.color-button').click(function () {
  var clickBtnValue = $(this).val();
  localStorage.setItem("style", clickBtnValue);
  $('.wrapper').addClass(clickBtnValue);
  if (clickBtnValue === 'background-color-change') {
    colorChange.bgcc = true;
    colorChangeBackground();
  } else {
    console.log('not bg color change');
    clearInterval(colorChange.colorChangeInterval);
    removeClasses();
    if (clickBtnValue === 'soft-colors') {
        $('.wrapper').append('<?php require("flower-background.php");');
      }
  }

// Adds class to the wrapper that controls the style that displays across the site
  if (localStorage.getItem("style") != 'background-color-change') {
    colorChange.bgcc = false;
    clearInterval(colorChange.colorChangeInterval);
    removeClasses();
    $('.wrapper').attr('style','');
    $('.wrapper').addClass(localStorage.getItem("style"));


// fixing a bug that only applied when the color changing background was selected. Classes weren't being removed properly.
  }else {
    $('.wrapper').removeClass('night-vision')
    $('.wrapper').removeClass('red-black')
    $('.wrapper').removeClass('soft-colors')
  }

  
});

// Adding help hover/button to explain colour changing buttons.


