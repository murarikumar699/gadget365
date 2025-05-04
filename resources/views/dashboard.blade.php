@extends('layout.master')
@section('content')
  <div class="mx-auto">
  
  </div>
  
  {{-- Top Categories       --}}
  <div>
    <div class="categoriesWrapper">
      <div class="categoriesContainer">
        <div class="categoriesHeadings">
          <div class="categoriesHeading1">Explore Top Categories</div>
          <h1 class="categoriesHeading2">Top Categories</h1>
        </div>
        <div class="categoriesCards">
          <a href="/s?category=mobile">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Best Deals</div>
                <div class="categoriesHead2">Get your bestest deal</div>
              </div>
              <div class="categoriesImg">
                <img src="https://www.dealsbajaar.com/static/media/handshake.2118a3bc3c835aba036d.png" alt="best deal">
              </div>
            </div>
          </a>
          <a href="/s?category=mobile">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Mobile Phones</div>
                <div class="categoriesHead2">Get your best mobile</div>
              </div>
              <div class="categoriesImg">
                <img src="{{url('images/Samsung.118478e3cc88915cc69d.png')}}" alt="mobile">
              </div>
            </div>
          </a>
          <a href="/s?category=laptop">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Laptops</div>
                <div class="categoriesHead2">Get your best Laptop</div>
              </div>
              <div class="categoriesImg">
                <img src="{{url('images/laptop.602417ffa6a18008a5da.png')}}" alt="laptop">
              </div>
            </div>
          </a>
          <a href="/s?category=tv">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">TVs</div>
                <div class="categoriesHead2">Get your best TV</div>
              </div>
              <div class="categoriesImg">
                <img src="{{url('images/TV.18454a120b07c7d2b455.png')}}" alt="television">
              </div>
            </div>
          </a>
          <a href="/s?category=pc">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Computers</div>
                <div class="categoriesHead2">Get your best PC</div>
              </div>
              <div class="categoriesImg">
                <img src="{{url('images/computer.7fad20e9d7feca05379f.png')}}" alt="computers">
              </div>
            </div>
          </a>
          <a href="/s?category=tablets">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Tablets</div>
                <div class="categoriesHead2">Get your best tablet</div>
              </div>
              <div class="categoriesImg">
                <img src="{{url('images/tablet.6a3a72c3958b57a81dd2.png')}}" alt="tablet"></div>
              </div>
          </a>
          <a href="/s?category=ac">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Air Conditioners</div>
                <div class="categoriesHead2">Get your best AC</div>
              </div>
              <div class="categoriesImg"><img src="{{url('images/ac.02509ac04eb7309303cb.png')}}" alt="AC"></div>
            </div>
          </a>
          <a href="/s?category=WashingMachine">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Washing Machines</div>
                <div class="categoriesHead2">Get your best washmachine</div>
              </div>
              <div class="categoriesImg">
                <img src="{{url('images/washingmachine.77daac45dc14ff9a3df3.png')}}" alt="washing machine"></div>
              </div>
            </a>
        </div>
      </div>
    </div>
  </div>


  <div>
    <div class="categoriesWrapper">
      <div class="categoriesContainer">
        <div class="categoriesHeadings">
          <div class="categoriesHeading1">Explore Top Mobile Brands</div>
          <h1 class="categoriesHeading2">Top Mobile Brands</h1>
        </div>
        <div class="categoriesCards">
          <a href="/s?category=mobile&brands=oppo">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Oppo</div>
                <div class="categoriesHead2">Get your bestest deal</div>
              </div>
              <div class="categoriesImg">
                <img src="{{ url('assets/images/oppo.svg')}}" alt="best deal">
              </div>
            </div>
          </a>
          <a href="/s?category=mobile&brands=vivo">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Vivo</div>
                <div class="categoriesHead2">Get your best mobile</div>
              </div>
              <div class="categoriesImg">
                <img src="{{ url('assets/images/vivo.svg')}}" alt="mobile">
              </div>
            </div>
          </a>
          <a href="/s?category=mobile&brands=apple">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Apple</div>
                <div class="categoriesHead2">Get your best Laptop</div>
              </div>
              <div class="categoriesImg">
                <img src="{{ url('assets/images/apple.svg')}}" alt="mobile">
              </div>
            </div>
          </a>
          <a href="/s?category=mobile&brands=tv">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Samsung</div>
                <div class="categoriesHead2">Get your best TV</div>
              </div>
              <div class="categoriesImg">
                <img src="{{ url('assets/images/samsung.svg')}}" alt="mobile">
              </div>
            </div>
          </a>
          <a href="/s?category=mobile&brands=realme">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Realme</div>
                <div class="categoriesHead2">Get your best PC</div>
              </div>
              <div class="categoriesImg">
                <img src="{{ url('assets/images/realme.png')}}" alt="mobile">
              </div>
            </div>
          </a>
          <a href="/s?category=mobile&brands=iqoo">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Iqoo</div>
                <div class="categoriesHead2">Get your best tablet</div>
              </div>
              <div class="categoriesImg">
                <img src="{{ url('assets/images/iqoo.png')}}" alt="mobile">
              </div>
              </div>
          </a>
          <a href="/s?category=mobile&brands=poco">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Poco</div>
                <div class="categoriesHead2">Get your best AC</div>
              </div>
              <div class="categoriesImg">
                <img src="{{ url('assets/images/poco.svg')}}" alt="mobile">
              </div>
            </div>
          </a>
          <a href="/s?category=mobile&brands=google">
            <div class="categoriesCardsWrapper">
              <div class="categoriesCardHead">
                <div class="categoriesHead1">Google</div>
                <div class="categoriesHead2">Get your best washmachine</div>
              </div>
              <div class="categoriesImg">
                <img src="{{ url('assets/images/google.svg')}}" alt="mobile">
              </div>
              </div>
            </a>
        </div>
      </div>
    </div>
  </div>


  <div class="my-5">
    <div class="p-6 min-h-screen">
      <div class="max-w-7xl mx-auto">
        <h2 class="latest-product-heading">Latest Product</h2>
        <div class="mb-6 flex justify-start space-x-4">
          <button class="category-button active" data-category="smartphones">Popular Smartphones</button>
          <button class="category-button" data-category="laptops">Popular Laptops</button>
          <button class="category-button" data-category="acs">Popular ACs</button>
          <button class="category-button" data-category="washing">Popular Washing Machines</button>
          {{-- <button class="category-button" data-category="earbuds">Popular Earbudss</button>
          <button class="category-button" data-category="tablets">Popular Tablets</button> --}}
        </div>
        <div class="product-category" data-category="smartphones">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
          @foreach ($products['mobiles'] as $mobile)
              <a class="product-link" href="/productDetails/?name={{ str_replace(' ', '+', $mobile['title']) }}&productId={{$mobile['_id']}}">
                  <div class="product-card">
                      @if ($mobile['image'])
                        <img src="{{$mobile['image'][0]}}" alt="Samsung Galaxy F15" class="product-image">
                      @endif
                      <div class="product-details">
                          <h3 class="product-title" >{{$mobile['title']}}</h3>
                          <p class="product-brand">{{$mobile['brand']}}</p>
                          <div class="priceUpperLine">
                          </div>
                          <p class="product-price">₹{{$mobile['productPricing'][0]['price']}}</p>
                      </div>
                  </div>
              </a>
            @endforeach
          </div>
        </div>
        <div class="product-category hidden" data-category="laptops">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products['laptops'] as $laptop)
                <a class="product-link" href="/productDetails/?name={{ str_replace(' ', '+', $laptop['title']) }}&productId={{$mobile['_id']}}">
                    <div class="product-card">
                        @if ($laptop['image'])
                          <img src="{{$laptop['image'][0]}}" alt="{{$laptop['title']}}" class="product-image">
                        @endif
                        <div class="product-details">
                            <h3 class="product-title" >{{$laptop['title']}}</h3>
                            <p class="product-brand">{{$laptop['brand']}}</p>
                            <div class="priceUpperLine">
                            </div>
                            <p class="product-price">₹{{$mobile['productPricing'][0]['price']}}</p>
                        </div>
                    </div>
                </a>
              @endforeach
            </div>
        </div>
        <div class="product-category hidden" data-category="acs">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products['ac'] as $ac)
                <a class="product-link" href="/productDetails/?name={{ str_replace(' ', '+', $ac['title']) }}&productId={{$ac['_id']}}">
                    <div class="product-card">
                        @if ($ac['image'])
                          <img src="{{$ac['image'][0]}}" alt="{{$ac['title']}}" class="product-image">
                        @endif
                        <div class="product-details">
                            <h3 class="product-title" >{{$ac['title']}}</h3>
                            <p class="product-brand">{{$ac['brand']}}</p>
                            <div class="priceUpperLine">
                            </div>
                            <p class="product-price">₹{{$ac['productPricing'][0]['price']}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
          </div>
        </div>
        <div class="product-category hidden" data-category="washing">
          <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products['washingMachine'] as $washingMachine)
                <a class="product-link" href="/productDetails/?name={{ str_replace(' ', '+', $washingMachine['title']) }}&productId={{$washingMachine['_id']}}">
                    <div class="product-card">
                        @if ($washingMachine['image'])
                          <img src="{{$washingMachine['image'][0]}}" alt="{{$washingMachine['title']}}" class="product-image">
                        @endif
                        <div class="product-details">
                            <h3 class="product-title" >{{$washingMachine['title']}}</h3>
                            <p class="product-brand">{{$washingMachine['brand']}}</p>
                            <div class="priceUpperLine">
                            </div>
                            <p class="product-price">₹{{$washingMachine['productPricing'][0]['price']}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
          </div>
        </div>
        <div class="product-category hidden" data-category="earbuds">
         <h1>earbuds</h1>
        </div>
        <div class="product-category hidden" data-category="tablets">
         <h1>tablets</h1>
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
  const buttons = document.querySelectorAll('.category-button');
  const categories = document.querySelectorAll('.product-category');

  buttons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove active from all buttons
      buttons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      const selected = button.getAttribute('data-category');

      // Hide all product categories
      categories.forEach(cat => {
        if (cat.getAttribute('data-category') === selected) {
          cat.classList.remove('hidden');
        } else {
          cat.classList.add('hidden');
        }
      });
    });
  });
</script>
@endsection