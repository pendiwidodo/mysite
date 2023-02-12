// const { getOption } = require("browser-sync");

$(window).on("load", function () {
    $(".owl-carousel-dual").owlCarousel({
        loop: true,
        center: true,
        margin: 10,
        nav: true,
        dots: true,
        autoHeight: true,
        autoWidth: false,
        stagePadding: 120,
        lazyLoad: true,
        lazyLoadEager: 3,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        navText: [$(".next-dual"), $(".prev-dual")],
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: false,
                stagePadding: 30,
                center: false,
            },
            640: {
                items: 1,
                nav: false,
                dots: false,
            },
            1024: {
                items: 3,
            },
        },
    });

    $(".owl-carousel-multi").owlCarousel({
        center: true,
        loop: true,
        margin: 20,
        nav: true,
        lazyLoad: true,
        lazyLoadEager: 3,
        autoHeight: true,
        autoWidth: true,
        navContainer: $(".nav-multi"),
        navElement: "div",
        navText: [$(".next-multi"), $(".prev-multi")],
        responsive: {
            0: {
                items: 1,
            },
            640: {
                items: 3,
            },
            1024: {
                items: 3,
            },
        },
    });
});
const containerCard = document.querySelector(".container_card");
const cardTemplate = document.getElementById("card_template");
const cardLoad = document.querySelector(".containerLoad");
//berfungsi untuk memparsing dan menampilkan data content
function displayJson(startNum, endNum) {
    //mengambil data dari json
    fetch("js/data.json")
        .then((response) => response.json())
        .then((data) => {
            function displayData(startNum, endNum) {
                // console.log({ startNum, endNum });
                // const startNum = 0;
                // const endNum = 2;
                const dataSlice = data.slice(startNum, endNum);
                dataSlice.forEach((data) => {
                    // console.log(data);
                    const div = cardTemplate.content.cloneNode(true);
                    const getId = div.getElementById("card_items_template");
                    getId.classList.replace("loading", "loaded");
                    div.getElementById("judul_content").textContent = data.id;
                    containerCard.append(div);
                });
                cardLoad.append(cardTemplate.content.cloneNode(true));
                renderCard();
            }
            displayData(startNum, endNum);
        });
}
lazyLoadImg = () => {
    const targets = document.querySelectorAll(".loaded");
    targets.forEach((target) => {
        //menggambil data image
        const targetimg = target.querySelectorAll("img");
        const lazyLoad = (target) => {
            const io = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        const src = img.getAttribute("data-src");
                        img.setAttribute("src", src);
                        observer.disconnect();
                    }
                });
            });
            io.observe(target);
        };
        targetimg.forEach(lazyLoad);
    });
};
renderCard = () => {
    const loaded = document.querySelectorAll(".loaded");
    loaded.forEach((loaded) => {
        let skeleton_animasi = loaded.querySelectorAll(".skeleton_animasi");
        skeleton_animasi.forEach((skeletons_remover) => {
            skeletons_remover.classList.remove("animate-pulse");
            const skeleton_remover_class = skeletons_remover.querySelectorAll(
                ".hidden,.bg-gray-300"
            );
            skeleton_remover_class.forEach((skeleton_remover_class) => {
                skeleton_remover_class.classList.remove("hidden");
                skeleton_remover_class.classList.remove("bg-gray-300");
            });
        });
    });
};
function lazyGetData() {
    const target = document.querySelector(".containerLoad");
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                startNum += 10;
                endNum += 10;
                function delskeleton() {
                    const containerLoad =
                        document.querySelector(".containerLoad");
                    containerLoad.innerHTML = "";
                }
                console.log(startNum, endNum);
                displayJson(startNum, endNum);
                setTimeout(() => {
                    delskeleton();
                }, 3000);
                // observer.disconnect();
            }
        });
    });
    observer.observe(target);
}
let startNum = 0;
let endNum = 10;
// displayJson(startNum, endNum);
// lazyGetData();
