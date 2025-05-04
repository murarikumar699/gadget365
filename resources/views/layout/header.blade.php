
<div class="navbarwrapper">
  <div class="navbarContainer">
      <div class="navbarTopBar">
          <div class="navbarLogo">
          <a href="/">Gadget<span style="color: rgb(28, 97, 231);">365</span></a>
          </div>
          <div class="navbarTopSearchbar" id="navbarTopSearchbar">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="search-icon" color="#1C61E7" height="30" width="30" xmlns="http://www.w3.org/2000/svg" style="color: rgb(28, 97, 231);"><path d="M256 64C150.13 64 64 150.13 64 256s86.13 192 192 192 192-86.13 192-192S361.87 64 256 64zm80 294.63-54.15-54.15a88.08 88.08 0 1 1 22.63-22.63L358.63 336z"></path><circle cx="232" cy="232" r="56"></circle></svg>
          <input type="text" placeholder="Search Product Here" class="search-box" value="" id="" onkeyup="productRenderer.searchProduct(this.value)">

            <div class="dropdownss" id="searchProduct"></div>
          
          </div>
          <div></div>
          <div></div>
          {{-- <div class="navbarTopLeftContent">
              <div class="navbarContact">
                  <a href="/login">
                  <button class="bg-transparent hover:bg-[#1C61E7] text-[#1C61E7] font-semibold hover:text-white py-1 px-3 border border-[#1C61E7] hover:border-transparent rounded transition-all"><div class="flex items-center gap-1">
                      <span>Login</span>
                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="25" width="25" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg>
                  </div>
                  </button>
                  </a>
              </div>
              <div class="navbarEmail">
                      <a href="/signup">
                      <button class="bg-black hover:bg-transparent text-white hover:text-black font-bold py-1 px-3 border border-black rounded transition-all"><div class="flex items-center gap-1"><span>Signup</span>
                          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="25" width="25" xmlns="http://www.w3.org/2000/svg"><path d="M295.6 163.7c-5.1 5-5.1 13.3-.1 18.4l60.8 60.9H124.9c-7.1 0-12.9 5.8-12.9 13s5.8 13 12.9 13h231.3l-60.8 60.9c-5 5.1-4.9 13.3.1 18.4 5.1 5 13.2 5 18.3-.1l82.4-83c1.1-1.2 2-2.5 2.7-4.1.7-1.6 1-3.3 1-5 0-3.4-1.3-6.6-3.7-9.1l-82.4-83c-4.9-5.2-13.1-5.3-18.2-.3z"></path></svg>
                      </div>
                      </button>
                  </a>
              </div>
          </div> --}}
      </div>
      <div class="navbarbottomBarWrapping">
      {{-- <div class="navbarBottomBar">
          <div class="navbarLeftCont"><div class="navbarIcon">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" color="#1C61E7" height="30" width="30" xmlns="http://www.w3.org/2000/svg" style="color: rgb(28, 97, 231);"><path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm-88 302a24 24 0 1 1 24-24 24 24 0 0 1-24 24zm0-71a24 24 0 1 1 24-24 24 24 0 0 1-24 24zm0-73a24 24 0 1 1 24-24 24 24 0 0 1-24 24zm184 135H224a16 16 0 0 1 0-32h128a16 16 0 0 1 0 32zm0-71H224a16 16 0 0 1 0-32h128a16 16 0 0 1 0 32zm0-72H224a16 16 0 0 1 0-32h128a16 16 0 0 1 0 32z"></path>
          </svg>
          <p>All Categories</p>
          </div>
          <div class="navbarBottomText">
          <a href="/">Home</a>
          <a href="/about">About Us</a>
          <a href="/contact">Contact Us</a>
          <div>Shop</div>
          <a href="/blogs">Blogs</a>
          <div class="navbarDropdown z-10">
              <a href="/">News &amp; Reviews</a>
              <div class="navbarDropdownContent z-10">
              <a href="/news">News</a>
              <a href="/reviews">Reviews</a>
              </div>
          </div>
          </div>
      </div>
      <div class="compareWrapper">
          <div class="compareBtn">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" color="#1C61E7" height="25" width="25" xmlns="http://www.w3.org/2000/svg" style="color: rgb(28, 97, 231);"><path d="M257 8C120 8 9 119 9 256s111 248 248 248 248-111 248-248S394 8 257 8zm-49.5 374.8L81.8 257.1l125.7-125.7 35.2 35.4-24.2 24.2-11.1-11.1-77.2 77.2 77.2 77.2 26.6-26.6-53.1-52.9 24.4-24.4 77.2 77.2-75 75.2zm99-2.2l-35.2-35.2 24.1-24.4 11.1 11.1 77.2-77.2-77.2-77.2-26.5 26.5 53.1 52.9-24.4 24.4-77.2-77.2 75-75L432.2 255 306.5 380.6z"></path>
          </svg>
          <span>Compare</span>
          </div>
              <div class="compareSubMenu ">
              <a href="/mobiles/comparison">Mobiles</a>
              <a href="/tablets/comparison">Tablets</a>
              <a href="/laptops/comparison">Laptops</a>
              <a href="/televisions/comparison">TVs</a>
              <a href="/pcs/comparison">Computers</a>
              <a href="/air_conditioners/comparison">ACs</a>
              <a href="/refrigerators/comparison">Fridges</a>
              <a href="/washing_machines/comparison">Washing</a>
              </div>
          </div>
          </div>
      </div> --}}
  </div>
</div>