
// Установка персонализированных полей ввода
// $(' input').styler();
// $(' input[type="radio"]').styler();



// Анимация блоков при скроллинге
function scrollingAnimation(section) {

  let options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.5,
  };

  let callback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Элемент виден внутри области наблюдения.
        // Выполните необходимые действия.
        document.querySelector(`${section}`).classList.add('scrolled');
      } else {
        // Элемент скрыт вне области наблюдения.
        // Выполните необходимые действия.
      }

    });
  };
  let observer = new IntersectionObserver(callback, options);

  let target = document.querySelector(`${section}`);
  observer.observe(target);
}
if (document.querySelector('.homepage')) {
  scrollingAnimation('.header__slider');
  scrollingAnimation('.catalogue__section');
  scrollingAnimation('.banner-conf__section');
  scrollingAnimation('.furniture__section');
  scrollingAnimation('.banner-part__section');
  scrollingAnimation('.exclusive__section');
  scrollingAnimation('.collection__section');
  scrollingAnimation('.trust__section');
}



// Обычный слайдер SwiperJS
if (document.querySelector(".reviews__bottom-items")) {
  var swiperDes = new Swiper(".reviews__bottom-items", {
    slidesPerView: "1.3",
    spaceBetween: 20,
    breakpoints: {
      550: {
        slidesPerView: "2.3",
        spaceBetween: 20,
      },
      650: {
        slidesPerView: "3",
        spaceBetween: 20,
      },
      800: {
        slidesPerView: "4",
        spaceBetween: 20,
      },
      1050: {
        slidesPerView: "5",
        spaceBetween: 20,
      },
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    keyboard: {
      enabled: true,
      onlyInViewport: false
    },
    loop: true,
  });
};


if ($('.questions__item')) {
  $('.questions__item').each(function () {
    $(this).on('click', function () {
      $(this).find('.questions__item-bottom-white').slideToggle('slow');
      $(this).toggleClass('active');
    });
  });
}


// Устанавливаем конечную дату один раз
let countDate = new Date().getTime() + 24 * 60 * 60 * 1000; // Текущее время + 24 часа в миллисекундах

const countdown = () => {
  const now = new Date().getTime();
  const gap = countDate - now;

  // Если время завершилось, останавливаем отсчет
  if (gap < 0) {
    document.getElementById('hours').innerText = '00';
    document.getElementById('minutes').innerText = '00';
    document.getElementById('seconds').innerText = '00';
    clearInterval(countdownInterval); // Останавливаем setInterval
    return;
  }

  const second = 1000;
  const minute = second * 60;
  const hour = minute * 60;
  const day = hour * 24;

  const hours = Math.floor((gap % day) / hour);
  const minutes = Math.floor((gap % hour) / minute);
  const seconds = Math.floor((gap % minute) / second);

  document.getElementById('hours').innerText = String(hours).padStart(2, '0');
  document.getElementById('minutes').innerText = String(minutes).padStart(2, '0');
  document.getElementById('seconds').innerText = String(seconds).padStart(2, '0');
};

// Запуск отсчета каждую секунду
const countdownInterval = setInterval(countdown, 1000);






// Устанавливаем конечную дату один раз
let countDate1 = new Date().getTime() + 24 * 60 * 60 * 1000; // Текущее время + 24 часа в миллисекундах

const countdown1 = () => {
  const now = new Date().getTime();
  const gap = countDate1 - now;

  // Если время завершилось, останавливаем отсчет
  if (gap < 0) {
    document.getElementById('hours1').innerText = '00';
    document.getElementById('minutes1').innerText = '00';
    document.getElementById('seconds1').innerText = '00';
    clearInterval(countdownInterval1); // Останавливаем setInterval
    return;
  }

  const second = 1000;
  const minute = second * 60;
  const hour = minute * 60;
  const day = hour * 24;

  const hours1 = Math.floor((gap % day) / hour);
  const minutes1 = Math.floor((gap % hour) / minute);
  const seconds1 = Math.floor((gap % minute) / second);

  document.getElementById('hours1').innerText = String(hours1).padStart(2, '0');
  document.getElementById('minutes1').innerText = String(minutes1).padStart(2, '0');
  document.getElementById('seconds1').innerText = String(seconds1).padStart(2, '0');
};

// Запуск отсчета каждую секунду
const countdownInterval1 = setInterval(countdown1, 1000);




$(window).on('load', function () {
  AOS.init({
   
    once: true, // whether animation should happen only once - while scrolling down
    
  });

  document.querySelector('.add__close').addEventListener('click', function () {
    document.querySelector('.add').classList.add('close');
  })



})



// Слайдер появляется при определенной ширине SwiperJS


function swiperDoors() {
  if (document.querySelector(".catalogue__items") && window.matchMedia('(max-width: 800px)').matches) {

    document.querySelector('.catalogue__items').classList.add('swiper');
    document.querySelector('.catalogue__items > div').classList.add('swiper-wrapper');
    document.querySelectorAll('.catalogue__item').forEach(el => el.classList.add('swiper-slide'));

    var swiperDoors = new Swiper(".catalogue__items", {
      slidesPerView: "1.3",
      spaceBetween: 30,
      breakpoints: {

        640: {
          slidesPerView: "2",
          spaceBetween: 30,
          loop: true,
        },


      },
      navigation: {
        nextEl: ".catalogue__section .swiper-button-next",
        prevEl: ".catalogue__section .swiper-button-prev",
      },
      keyboard: {
        enabled: true,
        onlyInViewport: false
      },
      loop: true,
      // spaceBetween: 30,

    });
    window.addEventListener('resize', function () {
      swiperDoors.update(); // Обновляем Swiper
    });

  }
  if (document.querySelector(".catalogue__items") && window.matchMedia('(min-width: 801px)').matches) {
    document.querySelector('.catalogue__items').classList.remove('swiper');
    document.querySelector('.catalogue__items > div').classList.remove('swiper-wrapper');
    document.querySelectorAll('.catalogue__item').forEach(el => el.classList.remove('swiper-slide'));

  }
};
swiperDoors();



// Объекту присваивается или удаляется active при наведении/отдалении
$(".socialmedia__block-vk").on("mouseover", function () {
  $('.socialmedia__block-vk').addClass('active')
});
$(".socialmedia__block-vk").on("mouseout", function () {
  $('.socialmedia__block-vk').removeClass('active')

});




// Плавная прокрутка на ссылках по якорям
const anchors = document.querySelectorAll('a[href*="#"]')
for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    const blockID = anchor.getAttribute('href').substr(1)

    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}



// // "Показать еще" функция
// window.onload = function () {
//   var box = document.getElementsByClassName('works__line-blocks');
//   var btn = document.querySelector('.btn__block-more a');
//   for (let i = 2; i < box.length; i++) {
//     box[i].style.display = "none";
//   }

//   var countD = 2;
//   btn.addEventListener("click", function () {
//     var box = document.getElementsByClassName('works__line-blocks');
//     countD += 1;
//     if (countD <= box.length) {
//       for (let i = 0; i < countD; i++) {
//         $(box[i]).slideDown("slow");
//       }
//     }
//     if (countD == box.length) {
//       btn.style.display = "none";
//     }

//   })
// }




// Функция "Открыть фото в модальном окне" на весь экран
Fancybox.bind(".fancybox-open-img", {
  // Your options
});


// Открытие страницы "Спасибо" при отправке контактной формы
document.addEventListener('wpcf7mailsent', function (event) {
  location = 'https://example.com/thanks/';
}, false);



// Выборка бесконечного кол-ва элементов и изменения чего-либо внутри каждого из них при наведении на каждый 
document.querySelectorAll('.collection__item')
  .forEach(el => el.addEventListener('mouseover', function (e) {
    $(this.querySelector(".collection__item-hide-list")).slideDown('slow');
  }));

document.querySelectorAll('.collection__item')
  .forEach(el => el.addEventListener('mouseleave', function (e) {
    $(this.querySelector(".collection__item-hide-list")).slideUp('slow');
  }));




// Копирование текста при нажатии на него
/*
function copyText(elem) {
  const str = document.getElementById(elem).innerText;
  const el = document.createElement('textarea');
  el.value = str;
  el.setAttribute('readonly', '');
  el.style.position = 'absolute';
  el.style.left = '-9999px';
  document.body.appendChild(el);
  el.select();
  document.execCommand('copy');
  document.body.removeChild(el);
  $(`.${elem}`).addClass('copyied');
  setTimeout(function () {
      $(`.${elem}`).removeClass('copyied');
  }, 1500);
}
*/
