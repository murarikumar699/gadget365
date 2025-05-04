@extends('layout.master')
@section('content')

<div class="bg-[#f0f8ff]">
    <div class="mx-auto">
        <div class="SmartPhones-Wrapper pt-[60px]">
            @if($products['smartphone'])
            <div class="SmartPhones-Container">
                <div class="SmartPhones-Flex">
                    <div class="SmartPhones-Flex1">
                        <div class="mb-4 flex justify-center image-container" style="position: relative;">
                            {{-- <img alt="LG GL-S382SPZY 360 L 5 Star Inverter Frost Free Double Door Refrigerator large view" id="productimage" class="rounded-lg shadow-lg object-cover max-w-4xl h-auto" src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-1.jpg"> --}}
                            <img id="mainImage" alt="LG GL-S382SPZY 360 L 5 Star Inverter Frost Free Double Door Refrigerator large view"          style="width: 500px;" id="productimage" class="rounded-lg shadow-lg object-cover max-w-4xl h-auto " src="{{$products['smartphone']['image'][0]}}">
                            <div id="lens" style="display:none;position: absolute; border: 1px solid #d4d4d4; width: 200px; height: 200px; opacity: 0.4; background: #fff;"></div>
                           
                        </div>
                        
                        {{-- <div class="flex flex-wrap justify-center">
                            @foreach ($products['smartphone']['image'] as $image) --}}
                            {{-- <img src="{{$image}}"   onclick="document.getElementById('productimage').src = $image" alt="{{$products['smartphone']['title']}}" class="rounded-lg shadow-md object-contain w-24 h-24 m-1 cursor-pointer p-1 ring-4 ring-blue-500"> --}}
                            {{-- <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-1.jpg"   onclick="document.getElementById('productimage').src = 'https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-1.jpg'" alt="LG GL-S382SPZY 360 L 5 Star Inverter Frost Free Double Door Refrigerator view 1" class="rounded-lg shadow-md object-contain w-24 h-24 m-1 cursor-pointer p-1 ring-4 ring-blue-500">
                            <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-2.jpg"  onclick="document.getElementById('productimage').src = 'https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-2.jpg'" alt="LG GL-S382SPZY 360 L 5 Star Inverter Frost Free Double Door Refrigerator view 3" class="rounded-lg shadow-md object-contain w-24 h-24 m-1 cursor-pointer p-1 hover:ring-2 hover:ring-blue-300">
                            <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-3.jpg"  onclick="document.getElementById('productimage').src = 'https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-3.jpg'" alt="LG GL-S382SPZY 360 L 5 Star Inverter Frost Free Double Door Refrigerator view 4" class="rounded-lg shadow-md object-contain w-24 h-24 m-1 cursor-pointer p-1 hover:ring-2 hover:ring-blue-300">
                            <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-4.jpg"  onclick="document.getElementById('productimage').src = 'https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-4.jpg'" alt="LG GL-S382SPZY 360 L 5 Star Inverter Frost Free Double Door Refrigerator view 5" class="rounded-lg shadow-md object-contain w-24 h-24 m-1 cursor-pointer p-1 hover:ring-2 hover:ring-blue-300">
                            <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-5.jpg"   onclick="document.getElementById('productimage').src = 'https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/598639-137-5.jpg'" alt="LG GL-S382SPZY 360 L 5 Star Inverter Frost Free Double Door Refrigerator view 6" class="rounded-lg shadow-md object-contain w-24 h-24 m-1 cursor-pointer p-1 hover:ring-2 hover:ring-blue-300"> --}}
                            {{-- @endforeach
                            
                        </div> --}}
                    </div>
                    <div class="SmartPhones-Flex2">
                        <div id="result" style="display:none;width: 700px; height: 500px;border: 1px solid #d4d4d4; background-repeat: no-repeat;"></div>
                        <div class="SmartPhones-title-heading">
                            {{ str_replace('Sponsored Ad -', '', $products['smartphone']['title']) }}
                        </div>
                        <div class=" flex flex-col gap-3 mt-6">
                            <div class="SmartPhones-store-bg">
                                <div class="SmartPhones-store-name"> Amazon</div>
                                <div class="SmartPhones-store-price">₹{{$products['smartphone']['productPricing'][0]['price']}}</div>
                                <div class="SmartPhones-store-links">
                                    <a href="{{$products['smartphone']['productPricing'][0]['link']}}" target="_blank" rel="noopener noreferrer" class="text-white">View Store
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- 000 --}}

                <div class="overflow-x-auto MuiBox-root css-0">
                    <div class="categoriesHeadings22">
                        <div class="categoriesHeading1">Explore Top Features</div>
                        <div class="categoriesHeading2">All Top Features</div>
                    </div>
                    <div class="MuiGrid-root MuiGrid-container MuiGrid-spacing-xs-1 css-tuxzvu">
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-8 MuiGrid-grid-md-4 css-1kyptnz">
                            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-gvlowt">
                                <h6 class="MuiTypography-root MuiTypography-h6 css-1anx036 text-center">ITEM DETAILS</h6>
                            </div>
                            @php
                                $chunks = array_chunk($products['smartphone']['productDescription'], ceil(count($products['smartphone']['productDescription']) / 2), true);
                            @endphp

                            <div style="display: flex; gap: 30px;">
                                @foreach ($chunks as $chunk)
                                    <div class="MuiBox-root css-1ynyhby">
                                        @foreach ($chunk as $key => $value)
                                            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                                <p class="MuiTypography-root MuiTypography-body1 css-4janfi">{{ $key }}</p>
                                                <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">{{ $value }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-8 MuiGrid-grid-md-4 css-1kyptnz">
                            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-gvlowt">
                                <h6 class="MuiTypography-root MuiTypography-h6 css-1anx036">DESIGN</h6>
                            </div>
                            <div class="MuiBox-root css-1ynyhby">
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Color</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">, Shiny Steel</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Handle</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">Yes</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Handle Type</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">Pocket</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Exterior Display</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Shelf Bottle</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">Yes</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Shelf Material</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Tempered Glass</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Interiors Lamp</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-8 MuiGrid-grid-md-4 css-1kyptnz">
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-gvlowt">
                                    <h6 class="MuiTypography-root MuiTypography-h6 css-1anx036">FREEZER</h6>
                                </div>
                                <div class="MuiBox-root css-1ynyhby">
                                    <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                        <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Freezer Location</p>
                                        <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">Top</p>
                                    </div>
                                    <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                        <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Capacity(Freezer)</p>
                                        <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                    </div>
                                    <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                        <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Shelf Material(Freezer)</p>
                                        <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                    </div>
                                    <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                        <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Freezer Lamp</p>
                                        <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                    </div>
                                    <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                        <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Icemaker Type</p>
                                        <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">Movable, Single Twist</p>
                                    </div>
                                </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-8 MuiGrid-grid-md-4 css-1kyptnz">
                            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-gvlowt">
                                <h6 class="MuiTypography-root MuiTypography-h6 css-1anx036">FEATURES</h6>
                            </div>
                            <div class="MuiBox-root css-1ynyhby">
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Deodorizer</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">Yes</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Door Lock</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Door Alarm</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Power Supply</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">230 V</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Gasket Type</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">Anti - Bacterial</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Additional Features</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-8 MuiGrid-grid-md-4 css-1kyptnz">
                            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-gvlowt">
                                <h6 class="MuiTypography-root MuiTypography-h6 css-1anx036">SERVICES</h6>
                            </div>
                            <div class="MuiBox-root css-1ynyhby">
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Height</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">1760 mm</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Width</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">700 mm</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Depth</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">680 mm</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Warranty</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">1 Year</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Package Contents</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">1 Refrigerator Unit, User Manual</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Compressor Warranty</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">10 Years</p>
                                </div>
                            </div>
                        </div>
                        <div class="MuiGrid-root MuiGrid-item MuiGrid-grid-xs-8 MuiGrid-grid-md-4 css-1kyptnz">
                            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-gvlowt">
                                <h6 class="MuiTypography-root MuiTypography-h6 css-1anx036">OTHERS</h6>
                            </div>
                            <div class="MuiBox-root css-1ynyhby">
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Noise Level</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Refrigerant</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">Ecofriendly Refrigerant</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Stabilizer Free Operation</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">Yes</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Super Cool Function</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">Temperature Control</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">N/A</p>
                                </div>
                                <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                    <p class="MuiTypography-root MuiTypography-body1 css-4janfi">No. Of Compressors</p>
                                    <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai">1</p>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div>
                    <div class="categoriesHeadings22">
                        <div class="categoriesHeading1">Want to Explore More?</div>
                        <div class="categoriesHeading2">Similar Products</div>
                    </div>
                    <div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            @foreach ($products['similarSmartphones'] as  $product)
                            @if ($product['image'])
                            <a class="product-link" href="/productDetails/?name={{ str_replace(' ', '+', $product['title']) }}&productId={{$product['_id']}}">
                                <div class="product-card">
                                    <img src="{{$product['image'][0]}}" alt="{{$product['title']}}" class="product-image">
                                    <div class="product-details">
                                        <h3 class="product-title">{{$product['title']}}</h3>
                                        <p class="product-brand">{{$product['brand']}}</p>
                                        <div class="priceUpperLine">
                                        </div>
                                        <p class="product-price">₹{{$product['productPricing'][0]['price']}}</p>
                                    </div>
                                </div>
                            </a>
                            @endif
                            @endforeach
                            
                            {{-- <a class="product-link" href="/smartphones/Samsung-Galaxy-F15/6635e5dd4b9dce01d205d0d7">
                                <div class="product-card">
                                    <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/23729-215-1.jpg" alt="Samsung Galaxy F15" class="product-image">
                                    <div class="product-details">
                                        <h3 class="product-title">Samsung Galaxy F15</h3>
                                        <p class="product-brand">Samsung</p>
                                        <div class="priceUpperLine">
                                        </div>
                                        <p class="product-price">₹12,999</p>
                                    </div>
                                </div>
                            </a>
                            <a class="product-link" href="/smartphones/Samsung-Galaxy-F15/6635e5dd4b9dce01d205d0d7">
                                <div class="product-card">
                                    <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/23441-287-1.jpg" alt="Samsung Galaxy F15" class="product-image">
                                    <div class="product-details">
                                        <h3 class="product-title">Samsung Galaxy F15</h3>
                                        <p class="product-brand">Samsung</p>
                                        <div class="priceUpperLine">
                                        </div>
                                        <p class="product-price">₹12,999</p>
                                    </div>
                                </div>
                            </a>
                            <a class="product-link" href="/smartphones/Samsung-Galaxy-F15/6635e5dd4b9dce01d205d0d7">
                                <div class="product-card">
                                    <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/23908-35-1.jpg" alt="Samsung Galaxy F15" class="product-image">
                                    <div class="product-details">
                                        <h3 class="product-title">Samsung Galaxy F15</h3>
                                        <p class="product-brand">Samsung</p>
                                        <div class="priceUpperLine">
                                        </div>
                                        <p class="product-price">₹12,999</p>
                                    </div>
                                </div>
                            </a>
                            <a class="product-link" href="/smartphones/Samsung-Galaxy-F15/6635e5dd4b9dce01d205d0d7">
                                <div class="product-card">
                                    <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/22820-16-1.jpg" alt="Samsung Galaxy F15" class="product-image">
                                    <div class="product-details">
                                        <h3 class="product-title">Samsung Galaxy F15</h3>
                                        <p class="product-brand">Samsung</p>
                                        <div class="priceUpperLine">
                                        </div>
                                        <p class="product-price">₹12,999</p>
                                    </div>
                                </div>
                            </a>
                            <a class="product-link" href="/smartphones/Samsung-Galaxy-F15/6635e5dd4b9dce01d205d0d7">
                                <div class="product-card">
                                    <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/23729-215-1.jpg" alt="Samsung Galaxy F15" class="product-image">
                                    <div class="product-details">
                                        <h3 class="product-title">Samsung Galaxy F15</h3>
                                        <p class="product-brand">Samsung</p>
                                        <div class="priceUpperLine">
                                        </div>
                                        <p class="product-price">₹12,999</p>
                                    </div>
                                </div>
                            </a>
                            <a class="product-link" href="/smartphones/Samsung-Galaxy-F15/6635e5dd4b9dce01d205d0d7">
                                <div class="product-card">
                                    <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/23441-287-1.jpg" alt="Samsung Galaxy F15" class="product-image">
                                    <div class="product-details">
                                        <h3 class="product-title">Samsung Galaxy F15</h3>
                                        <p class="product-brand">Samsung</p>
                                        <div class="priceUpperLine">
                                        </div>
                                        <p class="product-price">₹12,999</p>
                                    </div>
                                </div>
                            </a>
                            <a class="product-link" href="/smartphones/Samsung-Galaxy-F15/6635e5dd4b9dce01d205d0d7">
                                <div class="product-card">
                                    <img src="https://assets.mspimages.in/c/tr:w-375,h-300,c-at_max/23908-35-1.jpg" alt="Samsung Galaxy F15" class="product-image">
                                    <div class="product-details">
                                        <h3 class="product-title">Samsung Galaxy F15</h3>
                                        <p class="product-brand">Samsung</p>
                                        <div class="priceUpperLine">
                                        </div>
                                        <p class="product-price">₹12,999</p>
                                    </div>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                </div>
                {{-- news --}}
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
           @endif
        </div>
    </div>
</div>
<script>
    window.onload = function() {
        imageZoom("mainImage", "result");
    };
    
    function imageZoom(imgID, resultID) {
        var img = document.getElementById(imgID);
        var result = document.getElementById(resultID);
        var lens = document.getElementById("lens");
    
        result.style.backgroundImage = "url('" + img.src + "')";
        result.style.backgroundSize = (img.width * 2) + "px " + (img.height * 2) + "px";
    
        lens.addEventListener("mousemove", moveLens);
        img.addEventListener("mousemove", moveLens);
        lens.addEventListener('mouseleave', () => {
            result.style.display = 'none';
            lens.style.display = 'none';
        });
    
        function moveLens(e) {
            e.preventDefault();
            var pos = getCursorPos(e);
            var x = pos.x - (lens.offsetWidth / 2);
            var y = pos.y - (lens.offsetHeight / 2);
    
            if (x > img.width - lens.offsetWidth) { x = img.width - lens.offsetWidth; }
            if (x < 0) { x = 0; }
            if (y > img.height - lens.offsetHeight) { y = img.height - lens.offsetHeight; }
            if (y < 0) { y = 0; }
    
            lens.style.left = x + "px";
            lens.style.top = y + "px";
    
            result.style.backgroundPosition = "-" + (x * 2) + "px -" + (y * 2) + "px";
            result.style.display = 'block';
            lens.style.display = 'block';
        }
    
        function getCursorPos(e) {
            var a = img.getBoundingClientRect();
            var x = e.pageX - a.left - window.pageXOffset;
            var y = e.pageY - a.top - window.pageYOffset;
            return { x: x, y: y };
        }
    }
    </script>
@endsection
