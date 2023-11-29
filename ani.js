// banner文字動畫
// Wrap every letter in a span
var textWrapper = document.querySelector(".ml16");
textWrapper.innerHTML = textWrapper.textContent.replace(
  /\S/g,
  "<span class='letter'>$&</span>"
);

anime
  .timeline({ loop: false })
  .add({
    targets: ".ml16 .letter",
    translateY: [-100, 0],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 30 * i,
  })
  .add({
    // targets: ".ml16",
    // opacity: 0,
    // duration: 1000,
    // easing: "easeOutExpo",
    // delay: 1000,
  });

// Brands圖片動畫
AOS.init();
