const rainbowRect = document.querySelector('.rainbow-rect');
const stripes = document.querySelectorAll('.stripe');

// Animate rainbow rectangle
gsap.to(rainbowRect, {
    backgroundPositionX: '200%',
    duration: 8,
    repeat: -1,
    ease: 'linear'
});

// Animate stripes
stripes.forEach((stripe, index) => {
    gsap.to(stripe, {
        y: '110%',
        duration: 10,
        delay: index * 2,
        repeat: -1,
        ease: 'linear'
    });
});
