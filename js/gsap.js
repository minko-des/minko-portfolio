
const catchLogo = document.querySelector(".catch__logo");
const catchTitleName = document.querySelector(".catch-title__name .text");
const catchTitleSite = document.querySelector(".catch-title__site p");
const mvDescription = document.querySelector(".p-main-visual .description");

if (catchLogo) {
    gsap.to(catchLogo, {
        keyframes: {
            "0%": { opacity: 0, filter: "blur(2px)" },
            "50%": { opacity: 0.7, filter: "blur(1px)" },
            "100%": { opacity: 0.25, filter: "blur(1px)" },
        },
        duration: 2.5,
    });
}

if (catchTitleName) {
    gsap.fromTo(".catch-title__name .text",
        {
            opacity: 0,
            filter: "blur(2px)"
        },
        {
            opacity: 1,
            duration: 1,
            filter: "blur(0px)",
            stagger: 0.1
        }
    );
}

if (catchTitleSite) {
    gsap.fromTo(".catch-title__site p",
        {
            opacity: 0,
            filter: "blur(2px)",
        },
        {
            opacity: 1,
            delay: 0.5,
            duration: 1.5,
            filter: "blur(0px)",
            stagger: 0.3,
        },
    );
}

if (mvDescription) {
    gsap.fromTo(".p-main-visual .description",
        {
            opacity: 0,
            filter: "blur(1px)",
        },
        {
            opacity: 0.9,
            delay: 0.6,
            duration: 1.5,
            filter: "blur(0px)",
        },
    );
}

document.querySelectorAll(".scroll-fadeIn").forEach((fadeInItem) => {
    gsap.fromTo(fadeInItem,
        {
            opacity: 0,
        },
        {
            opacity: 1,
            duration: 1.5,
            scrollTrigger: {
                trigger: fadeInItem,
                start: '30% bottom',
            },
        },
    );
});


const designView = document.querySelector(".designview");

if(designView) {
    gsap.fromTo(".designcomp__img",
        {
            opacity: 0,
        },
        {
            opacity: 1,
            duration: 1.5,
            delay: 0.4,
            scrollTrigger: {
                trigger: ".designcomp-wrap",
                start: 'top bottom',
            },
        },
    );
}

document.querySelectorAll(".scroll-fadeOut").forEach((fadeOutItem) => {
    gsap.to(fadeOutItem, {
        keyframes: {
            "0%": { opacity: 0.8, filter: "blur(1px)" },
            "80%": { opacity: 0.1, filter: "blur(0.5px)" },
            "100%": { opacity: 0.25, filter: "blur(0px)" },
        },
        duration: 2,
        scrollTrigger: {
            trigger: fadeOutItem,
            start: 'center bottom'
        }
    });
});


const flowItem = document.querySelector(".flow__item");

if (flowItem) {
    gsap.fromTo(".flow__item",
        {
            opacity: 0,
        },
        {
            opacity: 1,
            duration: 2,
            stagger: 0.2,
            scrollTrigger: {
                trigger: ".flow__item",
                start: 'center bottom'
            }
        }
    );
}