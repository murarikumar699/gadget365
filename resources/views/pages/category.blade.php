@extends('layout.master')
@section('content')

<div class="bg-[#f0f8ff]">
    <div class="mx-auto">
        <div class="HomeWrapper">
            <div class="HomeContainer">
                <div class="mx-auto">
                    <div class="max-w-6xl mx-auto px-4 py-6 flex flex-col">
                        {{-- <div class="features-filter-container items-start">
                            <div class="featuresheading">
                                <div class="featuresheadings">Choose By Price</div>
                            </div>
                        </div>
                        <div class="flex justify-center gap-2 mb-4 flex-wrap">
                            <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">₹10000 - ₹15000</button>
                            <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">₹15000 - ₹20000</button>
                            <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">₹20000 - ₹25000</button>
                            <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">₹25000 - ₹35000</button>
                            <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">₹35000 - ₹45000</button>
                            <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">₹45000 - ₹55000</button>
                            <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">₹55000 - ₹65000</button>
                            <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">₹65000 - ₹75000</button>
                            <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">₹75000 - ₹85000</button>
                            <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">₹85000 - ₹95000</button>
                        </div> --}}
                        {{-- <div class="features-filter-container items-start">
                            <div class="featuresheading">
                                <div class="featuresheadings">Choose By Feature</div>
                            </div>
                            <div class="flex justify-center gap-2 mb-4 flex-wrap">
                                <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">8 GB RAM</button>
                                <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">6 GB RAM</button>
                                <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">Android v13 OS</button>
                                <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">iPadOS v15</button>
                                <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">128GB Storage</button>
                                <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">256GB Storage</button>
                                <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">5G Network</button>
                                <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">Rear Single Camera Setup</button>
                                <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">Rear Double Camera Setup</button>
                                <button class="bg-[#F1F5F9] text-[#333] font-sans text-sm py-2 px-4 rounded" style="font-family: Onest, sans-serif;">Android v12 OS</button>
                            </div>
                        </div> --}}
                        <div class="flex gap-4 mt-8 max-sm">
                            <div class="w-[30%] p-4">
                                <div class="mb-4 text-lg font-semibold text-white rounded-lg shadow-lg border border-opacity-5 p-4 text-center bg-[#1c61e7] flex gap-1 items-center justify-center"><span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 32 32" color="white" height="20" width="20" xmlns="http://www.w3.org/2000/svg" style="color: white;"><path d="M 5 4 L 5 6.34375 L 5.21875 6.625 L 13 16.34375 L 13 28 L 14.59375 26.8125 L 18.59375 23.8125 L 19 23.5 L 19 16.34375 L 26.78125 6.625 L 27 6.34375 L 27 4 Z M 7.28125 6 L 24.71875 6 L 17.53125 15 L 14.46875 15 Z M 15 17 L 17 17 L 17 22.5 L 15 24 Z"></path></svg></span>Filters
                                </div>
                                <div class="mb-4 text-lg font-semibold text-white rounded-lg shadow-lg border border-opacity-5 p-4 text-center bg-[#cb2000] flex gap-1 items-center justify-center">
                                    <button onclick="productRenderer.reset()"  class="flex items-center gap-2"><span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="white" height="20" width="20" xmlns="http://www.w3.org/2000/svg" style="color: white;"><path fill="none" stroke-width="2" d="M20,8 C18.5974037,5.04031171 15.536972,3 12,3 C7.02943725,3 3,7.02943725 3,12 C3,16.9705627 7.02943725,21 12,21 L12,21 C16.9705627,21 21,16.9705627 21,12 M21,3 L21,9 L15,9"></path></svg></span>Reset Filters
                                    </button>
                                </div>
                                <div class="mb-4 rounded-lg shadow-lg border border-l-blue-700 p-4">
                                    <div class="fb-heading">Price Range</div>
                                    <form>
                                    <input type="range" name="amountRange" style="width:100%" min="0" max="500000" value="100000" oninput="this.form.amountInput.value=this.value" onclick="productRenderer.filterByPrice(0,this.value)"/>
                                    <span>RS. </span><input type="number" style="width:100px" name="amountInput" min="0" max="500000" value="100000" oninput="this.form.amountRange.value=this.value" />
                                    </form>
                                    {{-- <input type="range" style="width:100%" min="0" max="65000" value="30000" class="slider" id="myRange" onchange="getSlideValue()">
                                    <p>RS. <span id="demo">30000</span></p> --}}
                                </div>
                                <div class="mb-4 rounded-lg shadow-lg border border-l-blue-700 p-4 overflow-y-auto" style="max-height: 300px;">
                                    <h3 class="fb-heading">Brands</h3>
                                    
                                    @foreach($category as $cat)
                                        <label class="w-[90%] mx-auto flex items-center mt-4">
                                            <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;" onclick="productRenderer.render('brands','{{$cat}}')">
                                            <span class="ml-2 text-gray-700 cursor-pointer">{{$cat}}</span>
                                        </label>    
                                    @endforeach
                                </div>

                                {{-- <div class="mb-4 rounded-lg shadow-lg border border-l-blue-700 p-4">
                                    <h3 class="fb-heading">RAM</h3>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;" onclick="productRenderer.render('RAM','2 GB')">
                                        <span class="ml-2 text-gray-700 cursor-pointer">2 GB</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;" onclick="productRenderer.render('RAM','4 GB')">
                                        <span class="ml-2 text-gray-700 cursor-pointer">4 GB</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;" onclick="productRenderer.render('RAM','6 GB')">
                                        <span class="ml-2 text-gray-700 cursor-pointer">6 GB</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;" onclick="productRenderer.render('RAM','8 GB')">
                                        <span class="ml-2 text-gray-700 cursor-pointer">8 GB</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;" onclick="productRenderer.render('RAM','12 GB')">
                                        <span class="ml-2 text-gray-700 cursor-pointer">12 GB</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;" onclick="productRenderer.render('RAM','16 GB')">
                                        <span class="ml-2 text-gray-700 cursor-pointer">16 GB</span>
                                    </label>
                                </div>
                                <div class="mb-4 rounded-lg shadow-lg border border-l-blue-700 p-4">
                                    <h3 class="fb-heading">Internal Storage</h3>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;" onclick="productRenderer.render('RAM','64 GB')">
                                        <span class="ml-2 text-gray-700 cursor-pointer">64 GB</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;" onclick="productRenderer.render('RAM','128 GB')">
                                        <span class="ml-2 text-gray-700 cursor-pointer">128 GB</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;" onclick="productRenderer.render('RAM','256 GB')">
                                        <span class="ml-2 text-gray-700 cursor-pointer">256 GB</span>
                                    </label>
                                </div> --}}
                                {{-- <div class="mb-4 rounded-lg shadow-lg border border-l-blue-700 p-4 overflow-y-auto" style="max-height: 300px;">
                                    <h3 class="fb-heading">Processor Chipset</h3>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Apple M1</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Apple M2</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Apple A14 Bionic</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">MediaTek MT8735</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Qualcomm Snapdragon 680</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">MediaTek</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">MediaTek Helio G80</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">MediaTek Helio G99</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Qualcomm Snapdragon 695</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Apple A10X Fusion</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Apple A12Z Bionic</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Apple A12X Bionic</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Apple A12 Bionic</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Samsung Exynos 1380</span>
                                    </label>
                                    <label class="w-[90%] mx-auto flex items-center mt-4">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" style="cursor: pointer;">
                                        <span class="ml-2 text-gray-700 cursor-pointer">Qualcomm Snapdragon 8 Gen 2</span>
                                    </label>
                                </div> --}}
                            </div>
                            <div class="flex flex-col gap-4 w-[70%]">
                                <div class="SmartPhonesListsAll-Wrapper" id="filterProductListing">
                                    @foreach ($products as $product)
                                    @if ($product['image'])
                                    <div class="SmartPhonesListsAll-Container" >
                                        <div class="SmartPhonesListsAll-Images relative">
                                            <img src="{{$product['image'][0] ?? null}}" alt="{{$product['title']}}" class="h-[70%] w-[70%] object-contain mr-4 align-middle">
                                        </div>
                                        <div class="SmartPhonesListsAll-Card-body">
                                            <div class="SmartPhonesListAll-Card-body-container">
                                                <div class="flex justify-between">
                                                    <a href="/productDetails/?name={{ str_replace(' ', '+', $product['title']) }}&productId={{$product['_id']}}" target="_blank">
                                                        <div class="SmartPhonesListAll-Card-body-title">
                                                            <h1>{{$product['title']}}</h1>
                                                        </div>
                                                    </a>
                                                    <div class="SmartPhonesListAll-Card-body-price">₹{{$product['productPricing'][0]['price']}}</div>
                                                </div>
                                                <div class="flex gap-5 mt-2 sharebackground">
                                                    {{-- <div class="flex gap-1 items-center ml-5">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" color="#1C61E7" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(28, 97, 231);"><path d="M320 488c0 9.5-5.6 18.1-14.2 21.9s-18.8 2.3-25.8-4.1l-80-72c-5.1-4.6-7.9-11-7.9-17.8s2.9-13.3 7.9-17.8l80-72c7-6.3 17.2-7.9 25.8-4.1s14.2 12.4 14.2 21.9v40h16c35.3 0 64-28.7 64-64V153.3C371.7 141 352 112.8 352 80c0-44.2 35.8-80 80-80s80 35.8 80 80c0 32.8-19.7 61-48 73.3V320c0 70.7-57.3 128-128 128H320v40zM456 80a24 24 0 1 0 -48 0 24 24 0 1 0 48 0zM192 24c0-9.5 5.6-18.1 14.2-21.9s18.8-2.3 25.8 4.1l80 72c5.1 4.6 7.9 11 7.9 17.8s-2.9 13.3-7.9 17.8l-80 72c-7 6.3-17.2 7.9-25.8 4.1s-14.2-12.4-14.2-21.9V128H176c-35.3 0-64 28.7-64 64V358.7c28.3 12.3 48 40.5 48 73.3c0 44.2-35.8 80-80 80s-80-35.8-80-80c0-32.8 19.7-61 48-73.3V192c0-70.7 57.3-128 128-128h16V24zM56 432a24 24 0 1 0 48 0 24 24 0 1 0 -48 0z"></path></svg>
                                                        <a href="/tablets/comparison">
                                                            <span class="text-[15px] font-semibold">Compare</span>
                                                        </a>
                                                    </div> --}}
                                                    {{-- <div class="flex gap-1 items-center shareClass">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" color="#1C61E7" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(28, 97, 231);"><path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"></path></svg>
                                                        <span class="text-[15px] font-semibold">Like</span>
                                                    </div>
                                                    <div class="flex gap-1 items-center ">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" color="#1C61E7" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(28, 97, 231);">
                                                            <path d="M144 208c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zm112 0c-17.7 0-32 14.3-32 32s14.3 32 32 32 32-14.3 32-32-14.3-32-32-32zM256 32C114.6 32 0 125.1 0 240c0 47.6 19.9 91.2 52.9 126.3C38 405.7 7 439.1 6.5 439.5c-6.6 7-8.4 17.2-4.6 26S14.4 480 24 480c61.5 0 110-25.7 139.1-46.3C192 442.8 223.2 448 256 448c141.4 0 256-93.1 256-208S397.4 32 256 32zm0 368c-26.7 0-53.1-4.1-78.4-12.1l-22.7-7.2-19.5 13.8c-14.3 10.1-33.9 21.4-57.5 29 7.3-12.1 14.4-25.7 19.9-40.2l10.6-28.1-20.6-21.8C69.7 314.1 48 282.2 48 240c0-88.2 93.3-160 208-160s208 71.8 208 160-93.3 160-208 160z"></path>
                                                        </svg>
                                                        <span class="text-[15px] font-semibold">Comment</span>
                                                    </div> --}}
                                                    <div class="flex gap-1 items-center shareClass" onclick="productRenderer.copyToClipboard(`productDetails/?name={{ str_replace(' ', '+', $product['title']) }}&productId={{$product['_id']}}`,this)">
                                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(28, 97, 231); font-size: 18px;">
                                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                                            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"></path>
                                                        </svg>
                                                        <span class="text-[15px] font-semibold cursor-pointer">Share</span>
                                                    </div>
                                                    <span class="copy-msg" style="display: none; color: green; margin-left: 10px;">Copied!</span>
                                                </div>
                                                @if (request()->input('category') == 'mobile')
                                                    @include("../pages/mobile",['product' => $product])
                                                @elseif (request()->input('category') == 'laptop')
                                                    @include("../pages/laptop",['product' => $product])    
                                                @elseif (request()->input('category') == 'tv')
                                                    @include("../pages/tv",['product' => $product])    
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                   
                                    @endforeach
                                </div>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5">
            <div class="popularPriceWrapper">
              <div dir="ltr" aria-roledescription="carousel">
                <div class="my-5">
                  <div class="newsCardWrapper">
                    <div class="newsCardContainer">
                      <div class="newsCardHeadings">
                        <div class="newsCardHeading1">Top News</div>
                        <div class="newsCardHeading2">Latest News</div>
                      </div>
                      <div class="newsCardTop">
                        <div class="newsCardLargeImage">
                          <a href="https://www.indiatoday.in/technology/news/story/nothing-phone-2a-india-pricing-has-leaked-ahead-of-the-official-launch-on-march-5-2502450-2024-02-15" target="_blank" rel="noopener noreferrer">
                            <img src="https://i0.wp.com/www.smartprix.com/bytes/wp-content/uploads/2024/01/Nothing-Phone-2a.jpg?ssl=1&amp;quality=80&amp;w=f" alt="Nothing's upcoming Phone 2a's pricing details have been leaked ahead of its official India launch on March 5.">
                            <p>Nothing's upcoming Phone 2a's pricing details have been leaked ahead of its official India launch on March 5.</p>
                          </a>
                        </div>
                        <div class="newsCardSideImages">
                          <div class="newsCardSmallImage">
                            <a href="https://news.abplive.com/technology/gadgets/asus-unveils-rog-zephyrus-g16-gaming-laptop-india-price-specs-availability-rog-strix-scar-16-rog-strix-scar-18-rog-g22-desktop-1664697" target="_blank" rel="noopener noreferrer">
                              <img src="https://i0.wp.com/www.smartprix.com/bytes/wp-content/uploads/2024/02/Slipper-Clutch-2.jpg?ssl=1&amp;quality=80&amp;w=f" alt="Asus Unveils ROG Zephyrus G16 Gaming Laptop in India; Check Price, Specs &amp; Availability">
                              <p>Asus Unveils ROG Zephyrus G16 Gaming Laptop in India; Check Price, Specs &amp; Availability</p>
                            </a>
                          </div>
                          <div class="newsCardSmallImage">
                            <a href="https://www.androidpolice.com/samsung-galaxy-z-fold-6-could-get-galaxy-s24-ultra-camera/#:~:text=The%20Galaxy%20Z%20Fold%206,get%20a%20new%20camera%20sensor." target="_blank" rel="noopener noreferrer">
                              <img src="https://i0.wp.com/www.smartprix.com/bytes/wp-content/uploads/2024/02/Nvidias-Chat-with-RTX-7.png?ssl=1&amp;quality=80&amp;w=f" alt="The Galaxy Z Fold 6 might use the same 200MP camera sensor as the Galaxy S24 Ultra, indicating a potential camera upgrade.">
                              <p>The Galaxy Z Fold 6 might use the same 200MP camera sensor as the Galaxy S24 Ultra, indicating a potential camera upgrade.</p>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="newsCardBottom">
                        <div class="newsCardBottomImage">
                          <a href="https://www.indiatoday.in/technology/news/story/display-issues-on-samsung-galaxy-s24-some-users-complain-of-grainy-screen-2501601-2024-02-13" target="_blank" rel="noopener noreferrer">
                            <img src="https://i0.wp.com/www.smartprix.com/bytes/wp-content/uploads/2024/01/Samsung-Bixby-1.png?ssl=1&amp;quality=80&amp;w=f" alt="Display issues on Samsung Galaxy S24? Some users complain of grainy screen.">
                            <p>Display issues on Samsung Galaxy S24? Some users complain of grainy screen.</p>
                          </a>
                        </div>
                        <div class="newsCardBottomImage">
                          <a href="https://www.livemint.com/technology/gadgets/redmi-a3-with-mediatek-helio-g36-soc-launched-in-india-price-starts-at-rs-7-299-all-you-need-to-know-11707901247404.html#:~:text=Redmi%20A3%20features%20'Halo'%20design,the%20sub%2D10k%20smartphone%20segment." target="_blank" rel="noopener noreferrer">
                            <img src="https://i0.wp.com/www.smartprix.com/bytes/wp-content/uploads/2024/02/2024-iPad-Air-lineup-4.png?ssl=1&amp;quality=80&amp;w=f" alt="Back Back Redmi A3 with MediaTek Helio G36 SoC launched in India, price starts at ₹7,299: All you need to know">
                            <p>Back Back Redmi A3 with MediaTek Helio G36 SoC launched in India, price starts at ₹7,299: All you need to know</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
<script>
    function getSlideValue(){
        var slider = document.getElementById("myRange");
        var output = document.getElementById("demo");
        output.innerHTML = slider.value;
        slider.oninput = function() {
            if(slider.value >= 65000){
                output.innerHTML = "More then " + this.value;
            }else{
                output.innerHTML = this.value;
            }
        }
    }
    
</script>
@endsection
