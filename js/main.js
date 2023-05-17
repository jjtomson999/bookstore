const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  effect: "coverflow",
  slideShadows:false,
  centeredSlides: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  on: {  
    reachEnd: function () {  //reachEnd イベントに以下を登録
      this.autoplay.stop();  //自動再生を停止
      // または自動再生を解除  this.autoplay = false; 
    },
  },
  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
  },
})