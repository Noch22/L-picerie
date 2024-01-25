const text = new SplitType('#homepage_title')
const desc = new SplitType('#homepage_paragraph')


gsap.to('#homepage_title .word', {
    y: 0,
    rotation: 0,
    stagger: 0.05,
    delay: .5,
    duration: .3,
    opacity: 1
});

gsap.to('#homepage_paragraph .word', {
    opacity: 1,
    delay: 1,
    duration: .1,
    stagger: 0.05
})