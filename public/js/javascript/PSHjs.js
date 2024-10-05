// let menuToggle=document.querySelector('.mnubtn');
// const mobilemenu=document.getElementsByClassName('mblMenu');

// menuToggle.onclick = function(){
//     menuToggle.classList.toggle('active')

//     /*for (let i = 0; i < mobilemenu.length; i++) {
//         if (mobilemenu[i].style.display === 'flex')
//             {mobilemenu[i].style.display = 'none';}
//         else { mobilemenu[i].style.display = 'flex';}
//     }*/
//    for (let i = 0; i < mobilemenu.length; i++) {
//         mobilemenu[i].classList.toggle('show');
//     };
// };
document.addEventListener("DOMContentLoaded", function () {
    let menuToggle = document.querySelector(".mnubtn");
    const mobilemenu = document.getElementsByClassName("mblMenu");

    menuToggle.onclick = function () {
        menuToggle.classList.toggle("active");
        for (let i = 0; i < mobilemenu.length; i++) {
            mobilemenu[i].classList.toggle("show");
        }
    };
});

// img click home page
document.addEventListener("DOMContentLoaded", function () {
    const imgClick = document.querySelector(".MenuLogo");
    if (imgClick) {
        imgClick.addEventListener("click", function () {
            window.location.href = "./PhoenixSheater";
        });
    }
});

//scroll hiihed menu heseg garch ireh method
document.addEventListener("DOMContentLoaded", function () {
    let lastScrollTop = 0;
    const navbar = document.querySelector(".navi");
    const mblnavbar = document.querySelector(".mblMenu");

    window.addEventListener("scroll", function () {
        let scrollTop = window.scrollY || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // Downscroll
            if (navbar) navbar.classList.add("hidden");
            if (mblnavbar) mblnavbar.classList.add("hidden");
        } else {
            // Upscroll
            if (navbar) navbar.classList.remove("hidden");
            if (mblnavbar) mblnavbar.classList.remove("hidden");
        }
        lastScrollTop = scrollTop;
    });
});

//buypage deh heater songoltiin function()
document.addEventListener("DOMContentLoaded", function () {
    const selections = document.querySelectorAll(".selections");
    selections.forEach(function (selection) {
        selection.addEventListener("click", function () {
            // Remove the border from all selections
            selections.forEach(function (otherSelection) {
                otherSelection.style.border = "1.7px solid var(--shadowClr)";
            });
            // Add the border to the clicked selection
            selection.style.border = "1.7px solid #2d2d2d";
        });
    });
});

//buypage deh jijig zurag songolt
document.addEventListener("DOMContentLoaded", function () {
    const littleIMGs = document.querySelectorAll(".mnimgs");

    littleIMGs.forEach((littleIMG) => {
        littleIMG.addEventListener("click", () => {
            // Reset all images' styles
            littleIMGs.forEach((img) => {
                img.style.opacity = "0.7";
                img.style.border = "1px solid var(--shadowClr)";
            });
            // Set clicked image's styles
            littleIMG.style.opacity = "1";
            littleIMG.style.border = "1px solid var(--fontCdark)";
        });
    });
});

//effect for carousel
document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: "true",
        fade: "true",
        grabCursor: "true",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            900: {
                slidesPerView: 2,
            },
            1400: {
                slidesPerView: 3,
            },
        },
    });
});

//ene hesegt advice page deh medeellig delgerengui uzeh bolon haahad zoriulagdsan code bgaa
function More1() {
    var pelement = document.querySelector("#card1 p");
    var buttonname = document.getElementById("More1");
    if (pelement.style.overflow === "visible") {
        buttonname.innerHTML = "Дэлгэрэнгүй...";
        pelement.style.overflow = "hidden";
        pelement.style.height = "50px";
    } else {
        buttonname.innerHTML = "Нуух";
        pelement.style.overflow = "visible";
        pelement.style.height = "auto";
    }
}
function More2() {
    var pelement = document.querySelector("#card2 p");
    var buttonname = document.getElementById("More2");
    if (pelement.style.overflow === "visible") {
        buttonname.innerHTML = "Дэлгэрэнгүй...";
        pelement.style.overflow = "hidden";
        pelement.style.height = "50px";
    } else {
        buttonname.innerHTML = "Нуух";
        pelement.style.overflow = "visible";
        pelement.style.height = "auto";
    }
}
function More3() {
    var pelement = document.querySelector("#card3 p");
    var buttonname = document.getElementById("More3");
    if (pelement.style.overflow === "visible") {
        buttonname.innerHTML = "Дэлгэрэнгүй...";
        pelement.style.overflow = "hidden";
        pelement.style.height = "50px";
    } else {
        buttonname.innerHTML = "Нуух";
        pelement.style.overflow = "visible";
        pelement.style.height = "auto";
    }
}
function More4() {
    var pelement = document.querySelector("#card4 p");
    var buttonname = document.getElementById("More4");
    if (pelement.style.overflow === "visible") {
        buttonname.innerHTML = "Дэлгэрэнгүй...";
        pelement.style.overflow = "hidden";
        pelement.style.height = "50px";
    } else {
        buttonname.innerHTML = "Нуух";
        pelement.style.overflow = "visible";
        pelement.style.height = "auto";
    }
}
function More5() {
    var pelement = document.querySelector("#card5 p");
    var buttonname = document.getElementById("More5");
    if (pelement.style.overflow === "visible") {
        buttonname.innerHTML = "Дэлгэрэнгүй...";
        pelement.style.overflow = "hidden";
        pelement.style.height = "50px";
    } else {
        buttonname.innerHTML = "Нуух";
        pelement.style.overflow = "visible";
        pelement.style.height = "auto";
    }
}
function More6() {
    var pelement = document.querySelector("#card6 p");
    var buttonname = document.getElementById("More6");
    if (pelement.style.overflow === "visible") {
        buttonname.innerHTML = "Дэлгэрэнгүй...";
        pelement.style.overflow = "hidden";
        pelement.style.height = "50px";
    } else {
        buttonname.innerHTML = "Нуух";
        pelement.style.overflow = "visible";
        pelement.style.height = "auto";
    }
}

//buyPage ruu shiljih code
document.addEventListener("DOMContentLoaded", function () {
    const buypageJump2 = document.querySelectorAll(".VMore");
    const buyPageJump = document.querySelector(".fnctbtn");
    buypageJump2.forEach(function (element) {
        element.addEventListener("click", function () {
            window.location.href = "/BuyPage";
        });
    });
    if (buyPageJump) {
        buyPageJump.addEventListener("click", function () {
            window.location.href = "/BuyPage";
        });
    }
});

//shoppingCart code
document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("complaintBtn")
        .addEventListener("click", function () {
            document.getElementById("complaintPopup").style.display = "flex";
            document.body.classList.add("no-scroll");
        });
    document
        .getElementById("closeComplaintPopup")
        .addEventListener("click", function () {
            document.getElementById("complaintPopup").style.display = "none";
            document.body.classList.remove("no-scroll");
        });
    window.addEventListener("click", function (event) {
        const popup = document.getElementById("complaintPopup");
        if (event.target === popup) {
            popup.style.display = "none";
            document.body.classList.remove("no-scroll");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Attach event listeners to all plus and minus buttons
    document.querySelectorAll(".selectionByOrder").forEach(function (card) {
        // Get the base price from the existing price element
        let priceElement = card.querySelector(".price");
        let basePrice = parseInt(priceElement.innerText.replace(/[^\d]/g, "")); // Extract numeric value

        let quantity = card.querySelector(".quantity");

        // Minus button functionality
        card.querySelector(".minus").addEventListener("click", function () {
            if (quantity.innerText > 1) {
                quantity.innerText = parseInt(quantity.innerText) - 1;
                updatePrice(priceElement, quantity.innerText, basePrice);
            }
        });

        // Plus button functionality
        card.querySelector(".plus").addEventListener("click", function () {
            quantity.innerText = parseInt(quantity.innerText) + 1;
            updatePrice(priceElement, quantity.innerText, basePrice);
        });
    });
    function updatePrice(priceElement, quantity, basePrice) {
        let newPrice = basePrice * quantity;
        priceElement.innerText = `${newPrice}₮`;
    }
    //delete section
    document.querySelectorAll(".close-btn").forEach(function (button) {
        button.addEventListener("click", function () {
            let sectionToRemove = button.closest(".selectionByOrder");
            sectionToRemove.remove();
        });
    });
});

// calculate page code
