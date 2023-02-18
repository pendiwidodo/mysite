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
let startNum = 0;
let endNum = 10;
//menampilkan skeleton loading
function displayLoading(parentPlaceLoad,childContentLoad,Boolean,jumlahContent){
    for (let i = 0; i < jumlahContent; i++) {
        parentPlaceLoad.append(childContentLoad.content.cloneNode(Boolean));
    }
};
// displayLoading(containerCard,cardTemplate,true,10)
//berfungsi untuk memparsing dan menampilkan data content
function getDataContent(startNum, endNum) { 
    //mengambil data dari json
    fetch("js/data.json")
        .then((response) => {
                if (!response.ok) {
                    throw new Error('Network response was not OK');
                }
                return response;
            })
        .then((response) => response.json())
        .then((data) => {
            const dataSlice = data.slice(startNum, endNum);
            // containerCard.innerHTML = "";
            dataSlice.forEach((data) => {
                // console.log(data)
                const div = cardTemplate.content.cloneNode(true);
                const getDiv = div.querySelector(".card");
                getDiv.classList.replace("loading", "loaded");
                div.getElementById("judul_content").textContent = data.id;
                containerCard.append(div);
            });
                if(endNum > data.length){
                    console.log("true",endNum)
                    return hapusLoading();
                }else{
                    console.log("false",endNum)
                    hapusLoading();
                    lazyGetData();
                }
            displayLoading(cardLoad,cardTemplate,true,2);
            setTimeout(function(){
                renderCard();
            }, 2000);
        })
         .catch((error) => {
            console.error('There has been a problem with your fetch operation:', error);
        });
};


function lazyLoadImg (){
    const imgTargets = document.querySelectorAll(".loaded");
    imgTargets.forEach((target) => {
        //menggambil data image
        const targetImg = target.querySelectorAll("img");
        const lazyLoad = (target) => {
            const io = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        renderCard();
                        const img = entry.target;
                        const src = img.getAttribute("data-src");
                        img.setAttribute("src", src);
                        observer.disconnect();
                    }
                });
            });
            io.observe(target);
        };
        targetImg.forEach(lazyLoad);
    });
};

function lazyGetData (){
    const target = cardLoad;
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                startNum+=10;
                endNum+=10;
                getDataContent(startNum,endNum);
                observer.disconnect();
                console.log("lazydata aktive")
            }
        });
    });
    observer.observe(target);
};

function renderCard (){
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

function hapusLoading(){
    setTimeout(() => {
        cardLoad.innerHTML="";
    }, 3000);
}
getDataContent(startNum,endNum);