(function () {
  var layers = [
    { el: document.querySelector('.star-layer-far'), speed: 0.15 },
    { el: document.querySelector('.star-layer-mid'), speed: 0.35 },
    { el: document.querySelector('.star-layer-near'), speed: 0.6 }
  ].filter(function (layer) {
    return layer.el;
  });

  if (!layers.length) return;

  var reduceMotion = window.matchMedia &&
    window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (reduceMotion) return;

  var ticking = false;

  function update() {
    var y = window.scrollY || window.pageYOffset || 0;
    layers.forEach(function (layer) {
      layer.el.style.backgroundPosition = '0px ' + (-y * layer.speed) + 'px';
    });
    ticking = false;
  }

  function onScroll() {
    if (!ticking) {
      window.requestAnimationFrame(update);
      ticking = true;
    }
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  update();
})();
