jQuery(document).ready(function() {
  
  var header = jQuery(".wrapp_top_contakt"); // Меню
  var scrollPrev = 0 // Предыдущее значение скролла
  
  jQuery(window).scroll(function() {
    var scrolled = jQuery(window).scrollTop(); // Высота скролла в px
    var firstScrollUp = false; // Параметр начала сколла вверх
    var firstScrollDown = false; // Параметр начала сколла вниз
    
    // Если скроллим
    if ( scrolled > 0 ) {
      // Если текущее значение скролла > предыдущего, т.е. скроллим вниз
      if ( scrolled > scrollPrev ) {
        firstScrollUp = false; // Обнуляем параметр начала скролла вверх
        // Если меню видно
        if ( scrolled < header.height() + header.offset().top ) {
          // Если только начали скроллить вниз
          if ( firstScrollDown === false ) {
            var topPosition = header.offset().top; // Фиксируем текущую позицию меню
            header.css({
              "top": "-" + topPosition + "px"
            });
            firstScrollDown = true;
            jQuery('.navbar-toggle').css({'top':'15px'});
          }
          // Позиционируем меню абсолютно
          header.css({
            "position": "absolute"
          });
        // Если меню НЕ видно
        } else {
          // Позиционируем меню фиксированно вне экрана
          
          var scroll_height_plus = header.height() + 33 ;
          header.css({
            "position": "fixed",
            "top": "-" + scroll_height_plus + "px"
            
          });
          
        }
        
      // Если текущее значение скролла < предыдущего, т.е. скроллим вверх
      } else {
        firstScrollDown = false; // Обнуляем параметр начала скролла вниз
        // Если меню не видно
        if ( scrolled > header.offset().top ) {
          // Если только начали скроллить вверх
          if ( firstScrollUp === false ) {
            var topPosition = header.offset().top; // Фиксируем текущую позицию меню
            header.css({
              "top": topPosition + "px"
            });
            firstScrollUp = true;
            jQuery('.navbar-toggle').css({'top':'85px'});
          }
          // Позиционируем меню абсолютно
          header.css({
            "position": "absolute"
          });
        } else {
          // Убираем все стили
          header.removeAttr("style");
        }
      }
      // Присваеваем текущее значение скролла предыдущему
      scrollPrev = scrolled;
    } 
  });     
});

jQuery('.navbar-right li a').addClass('scroll');