<x-layout>
    <x-slot:title>
        Kosapp - Dashboard page
        </x-slot>

        <div class="flex items-end -mx-10 p-10 px-20">
            <div class="flex-auto w-128 p-10">
                <h1 class="font-semibold text-5xl text-gray-800 leading-tight">
                    Hello World!
                </h1>
                <p>Ini Adalah Halaman utamaa</p>
                <p>Selamat datang !</p>
            </div>
            <div class="flex-auto w-8">
                <figure><img src="images/residential-kosapp.jpg" alt="residential-kosapp" /> </figure>
            </div>
        </div>
        <hr>

        <div class="carousel w-full py-5 px-30 h-1/4 gap-4">
            <div id="slide1" class="carousel-item relative w-auto">
                <img src="https://daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" class="w-full" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide4" class="btn btn-circle">❮</a>
                    <a href="#slide2" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide2" class="carousel-item relative w-auto">
                <img src="https://daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg" class="w-full" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide1" class="btn btn-circle">❮</a>
                    <a href="#slide3" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide3" class="carousel-item relative w-auto">
                <img src="https://daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" class="w-full" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide2" class="btn btn-circle">❮</a>
                    <a href="#slide4" class="btn btn-circle">❯</a>
                </div>
            </div>
            <div id="slide4" class="carousel-item relative w-auto">
                <img src="https://daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" class="w-full" />
                <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide3" class="btn btn-circle">❮</a>
                    <a href="#slide1" class="btn btn-circle">❯</a>
                </div>
            </div>
        </div>

        <hr>

        <div class="join p-10">
            <div>
                <input class="input input-bordered join-item" placeholder="Search" />
            </div>
            <select class="select select-bordered join-item">
                <option>Semua Tipe Kos</option>
                <option>Putra</option>
                <option>Putri</option>
                <option>Campur</option>
            </select>
            <div class="join">
                <div class="dropdown outline outline-1 outline-gray-300">
                    <div tabindex="0" role="button" class="btn btn-ghost rounded-none">
                        <span class="inline-block px-2"> Harga </span>
                    </div>
                    <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-96 bg-base-100 shadow">
                        <div class="flex card-body">
                            <label class="form-control">
                                <div class="flex items-center">
                                    <div class="flex-1 w-full max-w-xs">
                                        <div class="label">
                                            <span class="label-text">Minimal</span>
                                        </div>
                                        <div class="relative">
                                            <input type="text" class="input input-bordered w-full max-w-xs ps-7" />
                                            <span class="absolute left-1 bottom-4">Rp.</span>
                                        </div>
                                    </div>
                                    <div class="flex-none p-2 pt-10">
                                        <span>-</span>
                                    </div>
                                    <div class="flex-1 w-full max-w-xs">
                                        <div class="label">
                                            <span class="label-text">Maksimal</span>
                                        </div>
                                        <div class="relative">
                                            <input type="text" class="input input-bordered w-full max-w-xs ps-7" />
                                            <span class="absolute left-1 bottom-4">Rp.</span>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                        <div class="card-actions justify-end pe-5 pb-5">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="join">
                <div class="dropdown outline outline-1 outline-gray-300">
                    <div tabindex="0" role="button" class="btn btn-ghost rounded-none">
                        <span class="inline-block px-2">Fasilitas</span>
                    </div>
                    <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-96 bg-base-100 shadow">
                        <div class="flex card-body">
                            <label class="form-control w-full max-w-xs">
                                <label class="label cursor-pointer grid grid-cols-2 gap-4 px-5">
                                    <div>
                                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary checkbox-xs" />
                                        <span class="label-text">Listrik</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary checkbox-xs" />
                                        <span class="label-text">Air</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary checkbox-xs" />
                                        <span class="label-text">Wifi</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary checkbox-xs" />
                                        <span class="label-text">AC</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary checkbox-xs" />
                                        <span class="label-text">Dapur</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" checked="checked" class="checkbox checkbox-primary checkbox-xs" />
                                        <span class="label-text">Jemuran</span>
                                    </div>
                                </label>
                            </label>
                        </div>
                        <div class="card-actions justify-end pe-5 pb-5">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="indicator">
                <button class="btn btn-primary w-32 join-item">Cari</button>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-8 p-10 py-20">
            @foreach($products as $product)
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">$product->name </div>
                        <div class="badge badge-outline">$product->description</div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Shoes!
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
        </div>

</x-layout>
