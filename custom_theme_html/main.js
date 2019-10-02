
// for scroll
// init controller
var controller = new ScrollMagic.Controller();

// tweens
var tween0 = TweenMax.from('.portfolio-aveda-img', 2, { opacity:0, ease:Circ.easeOut })
var tween = TweenMax.from('.portfolio-chevron-img', 1, {x:-1000, opacity:0, ease:Circ.easeOut })
var tween2 = TweenMax.from('.portfolio-pandora-img', 1, {x:1000, opacity:0, ease:Circ.easeOut, delay: .5})
var tween3 = TweenMax.from('.portfolio-mcd-img', 1, {x:-1000, opacity:0, ease:Circ.easeOut })
var tween4 = TweenMax.from('.portfolio-steph-img', 1, {x:1000, opacity:0, ease:Circ.easeOut, delay: .5})
var tween5 = TweenMax.from('.portfolio-nba-img', 2, { opacity:0, ease:Circ.easeOut })

// timelines 
var tl = new TimelineLite();

tl.from(".portfolio-hero-img", 2, {opacity:0, ease: Circ.easeOut, y: -500})
    .from('.portfolio-h5-featured', .50, {y:-25, scale:0, ease:Back.easeOut},"-=.5")
    .from('.portfolio-icon-chev', .50, {y:25, scale:0, ease:Back.easeOut}, "-=.25");

var tl2 = new TimelineLite();

tl2.from('.portfolio-h2-text-container', 2, {x:250, scale:0, ease:Circ.easeOut})
    .from('.footer-icon-social-movement', 1, {x:-500, scale:0, ease:Circ.easeOut}, "-=1.5")
    .from('.footer-info-text-movement', 1, {x:500, scale:0, ease:Circ.easeOut}, "-=1")

new ScrollMagic.Scene({
    triggerElement: "#trigger1",
    triggerHook: 0.9, // show, when scrolled 10% into view
    // duration: "80%", // hide 10% before exiting view (80% + 10% from bottom)
    offset: 50, // move trigger to center of element,
    reverse:false
})
.setTween(tween0) // add class to reveal
// .addIndicators() // add indicators (requires plugin)
.addTo(controller);


new ScrollMagic.Scene({
    triggerElement: "#trigger2",
    triggerHook: 0.9, // show, when scrolled 10% into view
    offset: 50, // move trigger to center of element,
    reverse:false
})
.setTween(tween)
.addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#trigger2",
    triggerHook: 0.9, // show, when scrolled 10% into view
    offset: 50, // move trigger to center of element,
    reverse:false
})
.setTween(tween2)
.addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#trigger3",
    triggerHook: 0.9, // show, when scrolled 10% into view
    offset: 50, // move trigger to center of element,
    reverse:false
})
.setTween(tween5)

.addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#trigger4",
    triggerHook: 0.9, // show, when scrolled 10% into view
    offset: 50, // move trigger to center of element,
    reverse:false
})
.setTween(tween3)
.addTo(controller);

new ScrollMagic.Scene({
    triggerElement: "#trigger4",
    triggerHook: 0.9, // show, when scrolled 10% into view
    offset: 50, // move trigger to center of element,
    reverse:false
})
.setTween(tween4)
.addTo(controller);

// bottom text & footer

new ScrollMagic.Scene({
    triggerElement: "#trigger5",
    triggerHook: 0.9, // show, when scrolled 10% into view
    offset: 50, // move trigger to center of element,
    reverse:false
})
.setTween(tl2)
.addTo(controller);