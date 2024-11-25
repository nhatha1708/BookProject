@extends('layout')

@section('title' ,'Homepage')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZTQ6W10FCD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-ZTQ6W10FCD');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bookstore</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="css/menu.css">
    @vite('resources/css/app.css')
    @stack('styles')

    <style>
        .cute-font-regular {
            font-family: sans-serif;
            font-size: 80px;
            font-weight: bold;
            font-style: normal;
        }
    </style>
</head>

<body>

    <div class="scroll-smooth scroll-snap-y scroll-snap-mandatory overflow-y-scroll h-screen relative">
        <section
            class="s-one flex justify-center items-center scroll-snap-align-start h-screen bg-[url('../img/bg.png')] bg-center bg-cover bg-no-repeat relative">
            <div class="absolute inset-0 bg-black/50"></div> 
            <header class="relative mx-auto px-6 pt-20 grid md:grid-cols-2 items-center gap-8 z-10">
                <div class="animated delay-1 flex justify-center">
                    <img src="./img/header.png" alt="header"
                        class="rounded-lg hover:scale-105 transition-transform duration-500" />
                </div>

                <div class="header__content text-left relative text-white">
                    <h2
                        class="relative inline-block mb-4 text-3xl md:text-4xl font-medium text-green-400 animated delay-2">
                        Amplify Your Story, One Book at a Time
                    </h2>
                    <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold leading-tight animated delay-3">
                        <span class="block text-green-400">ECHOLIBRARY</span>
                        <span class="block text-3xl md:text-4xl lg:text-5xl text-[#a7f3d0]">with</span>
                        <span class="block text-2xl md:text-3xl lg:text-4xl font-light mt-4 text-green-200">our
                            Website</span>
                    </h1>
                    <p class="mb-8 text-gray-300 text-lg md:text-xl leading-relaxed mr-0 md:mr-8 animated delay-4">
                        Let's Make Your Digital Bookshelf a Reality. Welcome to Echo Library, your premier online
                        bookstore developed by VNUK - student. Echo Library ensures that all books are fully compliant
                        with copyright laws, providing you with a secure and trustworthy shopping experience.
                    </p>
                    <div class="header__btn mb-8 animated delay-5">
                        <button
                            class="py-3 px-8 text-lg md:text-xl text-white bg-green-600 rounded-full shadow-lg hover:bg-green-700 transition-colors focus:outline-none">
                            Learn More
                        </button>
                    </div>
                    <ul class="flex items-center justify-start gap-4 md:gap-8 pb-8 animated delay-6">
                        <li>
                            <a href="#" class="text-4xl md:text-5xl text-white hover:text-green-400 transition-colors">
                                <i class="ri-facebook-circle-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-4xl md:text-5xl text-white hover:text-green-400 transition-colors">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-4xl md:text-5xl text-white hover:text-green-400 transition-colors">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </header>
        </section>

        <section class="s-two h-screen flex justify-center items-center scroll-snap-align-start pt-40 bg-gray-100">
            <div class="h-[90%] w-[90%] m-auto bg-green-50 shadow-xl border rounded-xl p-8">
                <h1
                    class="text-center text-4xl text-green-700 font-extrabold cute-font-regular drop-shadow-md tracking-wide mb-6">
                    SUMMER PROMOTION
                </h1>

                <p class="text-center text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                    The Online Bookshop of EchoLibrary is excited to announce a special summer promotion! For a limited
                    time, we
                    are offering a generous <span class="font-bold text-green-600">20% discount</span> on all
                    publications. This
                    is the perfect opportunity to stock up on your favorite books or explore new genres at a reduced
                    price.
                </p>

                <div class="relative">
                    <div class="overflow-hidden relative w-full h-[400px]">
                        <div id="carousel-images" class="flex transition-transform ease-in-out duration-700">
                            <img src="./img/promotion_1.jpg" alt="First slide"
                                class="w-full h-full object-cover flex-shrink-0 rounded-lg">
                            <img src="./img/SALE.png" alt="Second slide"
                                class="w-full h-full object-cover flex-shrink-0 rounded-lg">
                            <img src="./img/SALE_1.png" alt="Third slide"
                                class="w-full h-full object-cover flex-shrink-0 rounded-lg">
                        </div>
                    </div>

                    <div class="absolute bottom-4 left-0 right-0 flex justify-center space-x-2">
                        <button data-slide-to="0"
                            class="indicator w-3 h-3 bg-gray-700 rounded-full focus:outline-none"></button>
                        <button data-slide-to="1"
                            class="indicator w-3 h-3 bg-gray-400 rounded-full focus:outline-none"></button>
                        <button data-slide-to="2"
                            class="indicator w-3 h-3 bg-gray-400 rounded-full focus:outline-none"></button>
                    </div>

                    <button id="prev"
                        class="absolute top-1/2 left-2 -translate-y-1/2 bg-gray-700 text-white p-3 rounded-full shadow-md hover:bg-gray-600 focus:outline-none">
                        &lt;
                    </button>
                    <button id="next"
                        class="absolute top-1/2 right-2 -translate-y-1/2 bg-gray-700 text-white p-3 rounded-full shadow-md hover:bg-gray-600 focus:outline-none">
                        &gt;
                    </button>
                </div>
            </div>
        </section>

        <section
            class="s-three h-screen justify-center scroll-snap-align-start pb-8 flex flex-col items-center bg-gray-100">
            <div class="h-[90%] w-[90%] m-auto mx-auto bg-white shadow-md border rounded-xl">
                <div id="trending-container" class="text-center">
                    <h1 class="text-4xl text-[var(--text-green)] pt-16 text-shadow-lg font-extrabold mb-4">Trending
                        Books</h1>
                    <div class="swiper trending-slider h-[40rem] py-8 relative">
                        <button
                            class="icon-left z-[100] bg-gray-700 text-white p-3 rounded-full cursor-pointer absolute left-4 top-1/2 transform -translate-y-1/2 hover:bg-gray-600">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </button>
                        <button
                            class="icon-right z-[100] bg-gray-700 text-white p-3 rounded-full cursor-pointer absolute right-4 top-1/2 transform -translate-y-1/2 hover:bg-gray-600">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </button>
                        <div class="swiper-wrapper flex gap-4">
                        </div>
                        <div class="trending-slider-control relative -bottom-12 flex items-center justify-center p-3">
                            <div class="swiper-pagination flex gap-2">
                                <span
                                    class="swiper-pagination-bullet w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
                                <span class="swiper-pagination-bullet-active w-3 h-3 bg-green-600 rounded-full"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            const books = [
                {
                    imgSrc: "img/book/lichsutinhduc1khatkhaoduocbiet.jpg",
                    price: "$20",
                    title: "Bộ ba phép thuật: Gấu Hoggs dũng cảm",
                    author: "Stefanie Dahle",
                    rating: 4.0,
                },
                {
                    imgSrc: "./img/book/bobaphepthuatgauhoggsdungcamco.jpg",
                    price: "$20",
                    title: "Bộ ba phép thuật: Gấu Hoggs dũng cảm",
                    author: "Stefanie Dahle",
                    rating: 4.0,
                },
            ];

            const renderStars = (rating) => {
                const fullStars = Math.floor(rating);
                const hasHalfStar = rating % 1 !== 0;
                return `
                ${'<ion-icon name="star"></ion-icon>'.repeat(fullStars)}
                ${hasHalfStar ? '<ion-icon name="star-outline"></ion-icon>' : ""}
                ${'<ion-icon name="star-outline"></ion-icon>'.repeat(5 - fullStars - (hasHalfStar ? 1 : 0))}
              `;
            };

            const swiperWrapper = document.querySelector(".swiper-wrapper");
            books.forEach((book) => {
                swiperWrapper.innerHTML += `
                <div class="swiper-slide w-[22rem] h-[32rem] flex flex-col items-center bg-white rounded-xl shadow-lg overflow-hidden relative hover:scale-105 transition-transform duration-300">
                <div class="trending-slide-img w-full h-[65%] relative">
                    <img 
                        src="${book.imgSrc}" 
                        alt="${book.title}" 
                        class="w-full h-full object-cover">
                    <div class="absolute top-2 right-2 bg-green-500 text-white text-sm px-3 py-1 rounded-full shadow-md font-bold">
                        ${book.price}
                    </div>
                </div>
                <div class="flex flex-col justify-center items-center text-center p-4 bg-gradient-to-b from-white via-gray-100 to-gray-200 w-full h-[35%]">
                    <h2 class="text-lg font-bold text-gray-800">${book.title}</h2>
                    <h3 class="text-sm font-medium text-gray-600 mb-2">${book.author}</h3>
                    <div class="flex items-center justify-center gap-2 text-yellow-400">
                        ${renderStars(book.rating)}
                        <span class="text-gray-700 text-sm">${book.rating}</span>
                    </div>
                </div>
            </div>
              `;
            });
        </script>

        <section class="s-four flex flex-col bg-gray-100 pb-8">
            <div
                class="m-0 h-4/5 w-9/10 bg-[url('mockup/img/bg-collection1.png')] bg-cover bg-center bg-fixed flex flex-col justify-center items-center shadow-lg rounded-3xl">
                <div class="text-4xl font-bold text-gray-900 text-center mb-6">Collection Book</div>
                <div
                    class="photo-slider w-full max-w-6xl mx-auto overflow-x-auto p-6 space-x-6 flex justify-start items-center scroll-smooth">
                    <div class="slider-content flex space-x-6">
                        <script>
                            const bookList = [
                                { img: "./img/book/bobaphepthuatumbalaanhsanghien.jpg", title: "Bộ ba phép thuật úm ba la ánh sáng hiện ra" },
                                { img: "./img/book/bobaphepthuatgauhoggsdungcamco.jpg", title: "Bộ ba phép thuật úm ba la ánh sáng hiện ra" },
                                { img: "./img/book/bobaphepthuatumbalabienranhasa.jpg", title: "Bộ ba phép thuật úm ba la ánh sáng hiện ra" },
                                { img: "./img/book/bongdembatxichmon01e1717383369.jpg", title: "Bộ ba phép thuật úm ba la ánh sáng hiện ra" },
                                { img: "./img/book/conthonguyenrua011e17173832478.jpg", title: "Bộ ba phép thuật úm ba la ánh sáng hiện ra" },
                                { img: "./img/book/dinhluatmurphy01e1716776653238.jpg", title: "Bộ ba phép thuật úm ba la ánh sáng hiện ra" },
                                { img: "./img/book/hondonvakhuvuon01e171766606841.jpg", title: "Bộ ba phép thuật úm ba la ánh sáng hiện ra" },
                                { img: "./img/book/ketinhnghihoanmy01e17163433481.jpg", title: "Bộ ba phép thuật úm ba la ánh sáng hiện ra" },
                                { img: "./img/book/vaitientruongan01e171677668510.jpg", title: "Bộ ba phép thuật úm ba la ánh sáng hiện ra" },
                                { img: "./img/book/lichsutinhduc1khatkhaoduocbiet.jpg", title: "Bộ ba phép thuật úm ba la ánh sáng hiện ra" },
                            ];

                            document.write(
                                bookList.map(book => `
                                    <div class="photo-item flex-shrink-0 w-[22vh] h-[32vh] rounded-xl overflow-hidden shadow-md">
                                        <div class="photo-content w-full h-full relative transform transition-all duration-300">
                                            <img class="w-full h-full object-cover rounded-xl" src="${book.img}" alt="">
                                            <div class="photo-overlay absolute bottom-0 left-0 w-full h-[50px] bg-gradient-to-t from-black to-transparent text-white p-2 flex justify-between items-center">
                                                <div class="truncate text-sm font-semibold">${book.title}</div>
                                            </div>
                                        </div>
                                    </div>
                                `).join('')
                            );
                        </script>
                    </div>
                </div>
            </div>
        </section>

        <section id="authors" class="s-five h-screen pb-[300px] flex flex-col items-center bg-gray-100">
            <div class="h-[80%] w-[90%] mx-auto bg-white shadow-lg border rounded-xl overflow-hidden">
                <h3 class="text-center text-4xl text-[var(--text-green)] pt-16 text-shadow-lg font-extrabold py-4">
                    Famous Author</h3>
                <div class="flex justify-center items-center space-x-4 my-8">
                    <button id="prevBtn"
                        class="text-green-400 focus:outline-none px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 transition-colors">
                        <i class="fa-solid fa-chevron-left" style="font-size: 30px;"></i>
                    </button>
                    <div id="authorList" class="flex justify-center items-center overflow-x-auto space-x-8 w-full px-4">
                        <script>
                            const authors = [
                                { name: "Nguyễn Vĩnh Tiến", img: "./img/author/nguyenvinhtien.webp" },
                                { name: "Lee Jin Song", img: "./img/author/Anomyous.webp" },
                                { name: "Lightman", img: "./img/author/lightman.webp" },
                                { name: "Richard", img: "./img/author/Richard.webp" },
                                { name: "Perec", img: "./img/author/perec.webp" },
                                { name: "Urakami Tetsuya", img: "./img/author/UrakamiTetsuya.webp" },
                                { name: "Nhóm tư vấn Từ Mạn Mạn", img: "./img/author/Anomyous.webp" },
                                { name: "Caryl Férey", img: "./img/author/Caryl.webp" },
                                { name: "Chí Tinh", img: "./img/author/Anomyous.webp" },
                                { name: "Marnie Old", img: "./img/author/Anomyous.webp" },
                            ];

                            const authorListContainer = document.getElementById('authorList');

                            authors.forEach(author => {
                                const authorDiv = document.createElement('div');
                                authorDiv.className = "author flex-shrink-0 text-center transition-transform duration-300 transform hover:scale-110";

                                authorDiv.innerHTML = `
                                    <img src="${author.img}" alt="${author.name}" class="rounded-full w-40 h-40 mx-auto shadow-lg">
                                    <p class="mt-4 text-lg font-medium text-gray-800">${author.name}</p>
                                `;

                                authorListContainer.appendChild(authorDiv);
                            });

                        </script>
                    </div>
                    <button id="nextBtn"
                        class="text-green-400 focus:outline-none px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 transition-colors">
                        <i class="fa-solid fa-chevron-right" style="font-size: 30px;"></i>
                    </button>
                </div>
            </div>
        </section>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="module" src="./js/slider.2.js"></script>

    <script>
        document.querySelector('#scrollToAuthors').addEventListener('click', (event) => {
            event.preventDefault();
            document.querySelector('#authors').scrollIntoView({
                behavior: 'smooth',
                block: 'start' // Ensures smooth scroll aligns the target at the top of the viewport
            });
        });
    </script>


    <script>
        // Carousel Functionality
        const carousel = document.querySelector('#carousel-images');
        const indicators = document.querySelectorAll('[data-slide-to]');
        const prevButton = document.querySelector('#prev');
        const nextButton = document.querySelector('#next');

        let currentIndex = 0;
        const totalSlides = carousel.children.length;

        const updateCarousel = (index) => {
            const offset = -index * 100;
            carousel.style.transform = `translateX(${offset}%)`;

            indicators.forEach((indicator, i) => {
                indicator.classList.toggle('bg-gray-700', i === index);
                indicator.classList.toggle('bg-gray-400', i !== index);
            });
        };

        // Event listeners for buttons
        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel(currentIndex);
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel(currentIndex);
        });

        // Event listeners for indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel(currentIndex);
            });
        });

        // Auto-slide functionality
        const autoSlideInterval = 3000;
        const slideAuto = () => {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel(currentIndex);
        };

        setInterval(slideAuto, autoSlideInterval);
    </script>


    <script>
        const slider = document.querySelector(".photo-slider");
        const form = document.querySelector(".slider-content");

        let mouseDownAt = 0;
        let left = 0;
        let keyDown = false;
        let keySpeed = 0;
        let isMouseDown = false;

        // Mouse events for dragging the slider
        slider.addEventListener('mousedown', (e) => {
            isMouseDown = true;
            mouseDownAt = e.clientX;
            slider.style.userSelect = 'none';
            slider.style.cursor = 'grab';
            form.style.pointerEvents = 'none';
        });

        slider.addEventListener('mouseup', () => {
            isMouseDown = false;
            mouseDownAt = 0;
            slider.style.userSelect = 'unset';
            slider.style.cursor = 'unset';
            form.style.pointerEvents = 'unset';
            form.classList.remove('left', 'right');
        });

        slider.addEventListener('mouseleave', () => {
            if (isMouseDown) {
                slider.dispatchEvent(new MouseEvent('mouseup'));
            }
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isMouseDown) return;

            const movement = (e.clientX - mouseDownAt) * 0.6;
            let newLeft = left + movement;
            const leftLimit = form.offsetWidth - slider.offsetWidth / 2;

            if (newLeft < 0 && Math.abs(newLeft) < leftLimit) {
                left = newLeft;
                form.style.transform = `translateX(${left}px)`;
            }

            form.classList.toggle('left', movement > 0);
            form.classList.toggle('right', movement <= 0);

            mouseDownAt = e.clientX;
        });

        // Keyboard events for slider movement using arrow keys
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
                keyDown = true;
                keySpeed = e.key === 'ArrowLeft' ? -10 : 10;
                form.style.pointerEvents = 'none';
                slider.style.cursor = 'grab';
            }
        });

        document.addEventListener('keyup', (e) => {
            if (e.key === 'ArrowLeft' || e.key === 'ArrowRight') {
                keyDown = false;
                keySpeed = 0;
                form.style.pointerEvents = 'unset';
                slider.style.cursor = 'unset';
                form.classList.remove('left', 'right');
            }
        });

        function moveSlider() {
            if (keyDown) {
                left += keySpeed;
                const leftLimit = form.offsetWidth - slider.offsetWidth / 2;

                if (left < 0 && Math.abs(left) < leftLimit) {
                    form.style.transform = `translateX(${left}px)`;
                }

                form.classList.toggle('left', keySpeed < 0);
                form.classList.toggle('right', keySpeed >= 0);
            }

            requestAnimationFrame(moveSlider);
        }

        // Start the animation loop
        moveSlider();

        // Swiper initialization for trending slider
        const trendingSlider = new Swiper('.trending-slider', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.icon-right',
                prevEl: '.icon-left',
            }
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // IntersectionObserver for fade-in animations
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.animated').forEach(element => {
                observer.observe(element);
            });

            // Smooth horizontal scrolling for author lists
            const scrollAmount = 300;
            const authorLists = [
                { list: document.getElementById('authorList'), prevBtn: document.getElementById('prevBtn'), nextBtn: document.getElementById('nextBtn') },
                { list: document.getElementById('authorList2'), prevBtn: document.getElementById('prevBtn2'), nextBtn: document.getElementById('nextBtn2') }
            ];

            authorLists.forEach(({ list, prevBtn, nextBtn }) => {
                prevBtn.addEventListener('click', () => {
                    list.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                });
                nextBtn.addEventListener('click', () => {
                    list.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                });
            });
        });
    </script>

</body>

</html>
@endsection