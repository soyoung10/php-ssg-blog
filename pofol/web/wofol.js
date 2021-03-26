const markers = true;

gsap.from(".section-intro > .mockup-in", {
  y: -200,
  opacity: 0,
  duration: 2,
  markers: markers,
  scrollTrigger: {
    trigger: ".mockup-in",
    start: "10% 85%",
    end: "bottom center",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section-main > .mockup-mn", {
  y: 200,
  opacity: 0,
  duration: 2,
  markers: markers,
  scrollTrigger: {
    trigger: ".mockup-mn",
    start: "10% 85%",
    end: "bottom center",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section01 > .mockup01", {
  x: -200,
  opacity: 0,
  duration: 2,
  markers: markers,
  scrollTrigger: {
    trigger: ".mockup01",
    start: "10% 85%",
    end: "bottom center",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section02 > .mockup02", {
  x: 200,
  opacity: 0,
  duration: 2,
  markers: markers,
  scrollTrigger: {
    trigger: ".mockup02",
    start: "10% 85%",
    end: "bottom center",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section03 > .mockup03", {
  x: -200,
  opacity: 0,
  duration: 2,
  markers: markers,
  scrollTrigger: {
    trigger: ".mockup03",
    start: "10% 85%",
    end: "bottom center",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section04 > .mockup04", {
  x: 200,
  opacity: 0,
  duration: 2,
  markers: markers,
  scrollTrigger: {
    trigger: ".mockup04",
    start: "10% 85%",
    end: "bottom center",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section05 > .mockup05", {
  x: -200,
  opacity: 0,
  duration: 2,
  markers: markers,
  scrollTrigger: {
    trigger: ".mockup05",
    start: "10% 85%",
    end: "bottom center",
    toggleActions: "restart none none none"
  }
});

gsap.from(".section06 > .mockup06-1", {
  x: 300,
  opacity: 0,
  duration: 1,
  markers: markers,
  scrollTrigger: {
    trigger: ".mockup06",
    start: "top 95%",
    end: "bottom center",
    scrub: true
  }
});