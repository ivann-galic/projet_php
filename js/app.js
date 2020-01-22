/* Displays the window menu when the button menu is clicked*/
$(document).ready(function () {
    $('.btn-navigation').click(function () {
        $(this).find('.barre').toggleClass('white'); /* Change the color of the button menu to black when the menu is open*/
        $('.navigation').toggleClass('isOpen'); /* Class the open state*/
    });
});