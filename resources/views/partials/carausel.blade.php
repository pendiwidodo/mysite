<!-- start carausel  -->
<div class="flex flex-col space-y-10 w-full">
    <!-- caraousel dual items -->
    <div class="flex relative w-full mx-auto">
        <div class="flex relative w-[80%] mx-auto mt-8">
            <ul class="owl-carousel-dual owl-carousel owl-theme owl-loaded owl-drag">
                @for ($i = 1; $i < 10; $i++) <li class="items flex relative">
                    <div class="items-dalam">
                        <div class="paling-dalam">
                            <img class="owl-lazy rounded-lg bg-no-repeat" data-src="{{ asset('image/car.jpg') }}"
                                alt="Sunset in the mountains " />

                            <a class="absolute w-full h-full text-transparent top-0 z-10" href="#"
                                alt="nothing">HEHE</a>
                        </div>
                    </div>
                    </li>
                    @endfor
            </ul>
        </div>
        <!-- navigation carausel dual items  -->
        <div class="flex absolute justify-between h-0 w-full">
            <div class="absolute flex h-[80%] w-fit next-dual btn-nav items-center top-0 left-0">
                <span class="w-20 h-20 rounded-full mx-2">
                    <img class="w-full h-full" src="{{ asset('icon/before-round.png') }}" alt="kiri">
                </span>
            </div>
            <div class="absolute flex h-[80%] w-fit prev-dual btn-nav items-center top-0 right-0">
                <span class="w-20 h-20 rounded-full mx-2">
                    <img class="w-full h-full" src="{{ asset('icon/next-round.png') }}" alt="kanan">
                </span>
            </div>
        </div>
    </div>


    <!--  carausel multi items -->
    <div class="flex-col relative w-full mx-auto">
        <!-- carausel navigation multi items  -->
        <div class="flex flex-row relative h-16 w-[80%] mx-auto justify-end">
            <div class="flex w-full h-full items-center">
                <p class="text-4xl">
                    Produk kami
                </p>
            </div>
            <div class="flex flex-row relative space-x-2 my-auto items-center h-full w-fit nav-multi">
                <div class="h-10 w-10 next-multi btn-nav" alt="tombol kiri">
                    <img class="w-full h-full" src="{{ asset('icon/before-round.png') }}" alt="kiri">
                </div>
                <div class="h-10 w-10 prev-multi btn-nav" alt="tombol kanan">
                    <img class="w-full h-full" src="{{ asset('icon/next-round.png') }}" alt="kanan">
                </div>
            </div>
        </div>
        <div class="flex relative w-[80%] mx-auto ">
            <ul class="owl-carousel-multi owl-carousel owl-theme owl-loaded owl-drag my-2">
                @for ($i = 1; $i < 10; $i++) <li class="items-multi flex shadow-xl h-80 w-72 my-8 rounded-lg ">
                    <div class="flex flex-col w-full h-full">
                        <div class="flex relative h-40 m-2">
                            <img class="owl-lazy h-full w-full rounded-lg" data-src="{{ asset('image/car.jpg') }}"
                                alt="">
                            <div class="absolute bottom-2 left-[35%] mx-auto">
                                <img class="w-20 h-20 rounded-full bg-no-repeat" src="{{ asset('image/avatar.jpg') }}"
                                    alt="avatar">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 justify-items-center">
                            <span class=" inline-block font-bold text-lg">Produk {{ $i }}</span>
                            <span class=" inline-block text-md justify-self-start ml-4">Harga Rp.{{ $i }}K</span>
                        </div>
                    </div>
                    </li>
                    @endfor
            </ul>
        </div>
    </div>
</div>