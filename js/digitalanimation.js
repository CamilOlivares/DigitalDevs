const stage = document.querySelector('.stage');
const bg = document.querySelector('.bg');
const word = document.querySelector('.word');
const nClones = 12;

if (stage && bg && word) {
  for (let i = 0; i < nClones; i++) {
    const clone1 = word.cloneNode(true);
    const clone2 = word.cloneNode(true);

    clone1.classList.add('clone');
    clone2.classList.add('clone');

    const fragment = document.createDocumentFragment();
    fragment.append(clone1, clone2);
    bg.prepend(fragment);

    gsap.timeline({
      repeat: -1,
      onRepeat: () => { bg.append(clone1, clone2); }
    })
    .fromTo([clone1, clone2], {
      position: 'absolute',
      scaleY: 0.7
    }, {
      duration: 4,
      y: (j) => (j % 2) ? 200 : -200,
      scaleY: 1.2,
      ease: 'power3'
    })
    .play(i / nClones * 4);
  }
} else {
  console.error("Error: No se encontraron los elementos en el DOM.");
}
