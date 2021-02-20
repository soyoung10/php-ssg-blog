gsap.from(".section01 > .mockup01", {
  y: -500,
  opacity: 0,
  duration: 4,
  scrollTrigger: {
    trigger: ".mockup01",
    markers: true,
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section03 > .mockup03", {
  x: -700,
  opacity: 0,
  duration: 6,
  scrollTrigger: {
    trigger: ".mockup03",
    markers: true,
    start: "top bottom",
    end: "bottom center",
    scrub: true
  }
});


const Timeline__Section4__1 = gsap.timeline({
  scrollTrigger: {
    trigger: '.section04',
    markers:true,
    start:'top 70%',
    end:'bottom top',
    toggleActions: "restart none none none"
  }
});

Timeline__Section4__1.from('.section04 > .mockup04-a', {
  opacity:0,
  y:-300,
  duration:2
});

Timeline__Section4__1.from('.section04 > .mockup04-b', {
  opacity:0,
  y:300,
  duration:3
}, "-=0.5");


gsap.from(".section05 > .mockup05-a", {
  x: -100,
  opacity: 0,
  duration: 1,
  scrollTrigger: {
    trigger: ".mockup05-a",
    markers: true,
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section05 > .mockup05-b", {
  x: -200,
  opacity: 0,
  duration: 2,
  scrollTrigger: {
    trigger: ".mockup05-b",
    markers: true,
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section05 > .mockup05-c", {
  x: -250,
  opacity: 0,
  duration: 3,
  scrollTrigger: {
    trigger: ".mockup05-c",
    markers: true,
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});


gsap.from(".section06 > .mockup06-1", {
  x: 400,
  opacity: 0,
  duration: 3,
  scrollTrigger: {
    trigger: ".mockup06-1",
    markers: true,
    start: "10% bottom",
    end: "80% center",
    scrub: true
  }
});

gsap.from(".section06 > .mockup06-2", {
  x: -400,
  opacity: 0,
  duration: 3,
  scrollTrigger: {
    trigger: ".mockup06-2",
    markers: true,
    start: "10% bottom",
    end: "80% center",
    scrub: true
  }
});


gsap.from(".section07 > .text07", {
  y: -300,
  opacity: 0,
  duration: 3,
  scrollTrigger: {
    trigger: ".text07",
    markers: true,
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});


gsap.from(".section08 > .text08-a", {
  x: -500,
  opacity: 0,
  duration: 3,
  scrollTrigger: {
    trigger: ".text08-a",
    markers: true,
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section08 > .text08-b", {
  x: 500,
  opacity: 0,
  duration: 3,
  scrollTrigger: {
    trigger: ".text08-b",
    markers: true,
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});


gsap.from(".section09 > .mockup09", {
  y: -200,
  opacity: 0,
  duration: 6,
  scrollTrigger: {
    trigger: ".mockup09",
    markers: true,
    start: "top 20%",
    end: "bottom center",
    scrub: true
  }
});


gsap.from(".section10 > .text10", {
  x: -500,
  opacity: 0,
  duration: 3,
  scrollTrigger: {
    trigger: ".text10",
    markers: true,
    start: "50% bottom",
    toggleActions: "restart none none none"
  }
});