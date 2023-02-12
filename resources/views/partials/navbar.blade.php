<nav class="relative border-b border-gray-100 px-4 lg:px-6 py-2.5">
    <div class="flex flex-wrap justify-evenly items-center mx-auto max-w-screen-xl">
        <div class="flex items-center">
            <!-- <a href="#"><img src="/src/logo.png" class="mr-3 h-6 sm:h-9" alt="pictures"></a> -->
            <a href="#"
                class="text-6xl p-4 font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-500"
                title="GoArena">GoArena</a>
        </div>
        <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1">
            <ul class="flex flex-col mt-4 text-base font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                <li><a class=" hover:text-blue-400 {{ ($title===" Home" ? 'text-black' : 'text-gray-600' ) }}"
                        href="/">Home</a></li>
                <li><a class=" hover:text-blue-400 {{ ($title===" Produk" ? 'text-black' :'text-gray-600') }}"
                        href="/produk">Produk</a></li>
                <li><a class=" hover:text-blue-400 {{ ($title===" Contents" ? 'text-black' : 'text-gray-600' ) }}"
                        href="/contents">Contents</a></li>
                <li><a class=" hover:text-blue-400 {{ ($title==="" ? 'text-black': 'text-gray-600') }}"
                        href="#">Company</a></li>
            </ul>
        </div>
        <div class="flex items-center lg:order-2">
            <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-blue-500">Sign in</a>
            <a href="#"
                class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-400 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-500">Sign
                up</a>
        </div>
    </div>
</nav>