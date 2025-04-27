<?php $__env->startSection('content'); ?>

<div class="bg-[#f0f8ff]">
    <div class="mx-auto">
        <div class="SmartPhones-Wrapper pt-[60px]">
            <?php if($products['smartphone']): ?>
            <div class="SmartPhones-Container">
                <div class="SmartPhones-Flex">
                    <div class="SmartPhones-Flex1">
                        <div class="mb-4 flex justify-center">
                            
                            <img alt="LG GL-S382SPZY 360 L 5 Star Inverter Frost Free Double Door Refrigerator large view" id="productimage" class="rounded-lg shadow-lg object-cover max-w-4xl h-auto" src="<?php echo e($products['smartphone']['image'][0]); ?>">
                        </div>
                        
                            
                            
                            
                    </div>
                    <div class="SmartPhones-Flex2">
                        <div class="SmartPhones-title-heading">
                            <?php echo e(str_replace('Sponsored Ad -', '', $products['smartphone']['title'])); ?>

                        </div>
                        <div class=" flex flex-col gap-3 mt-6">
                            <div class="SmartPhones-store-bg">
                                <div class="SmartPhones-store-name"> Amazon</div>
                                <div class="SmartPhones-store-price">₹<?php echo e($products['smartphone']['productPricing'][0]['price']); ?></div>
                                <div class="SmartPhones-store-links">
                                    <a href="<?php echo e($products['smartphone']['productPricing'][0]['link']); ?>" target="_blank" rel="noopener noreferrer" class="text-white">View Store
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

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
                            <?php
                                $chunks = array_chunk($products['smartphone']['productDescription'], ceil(count($products['smartphone']['productDescription']) / 2), true);
                            ?>

                            <div style="display: flex; gap: 30px;">
                                <?php $__currentLoopData = $chunks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="MuiBox-root css-1ynyhby">
                                        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation1 css-1qf3taw">
                                                <p class="MuiTypography-root MuiTypography-body1 css-4janfi"><?php echo e($key); ?></p>
                                                <p class="MuiTypography-root MuiTypography-body2 max-w-[200px] m-auto font-bold css-1dmojai"><?php echo e($value); ?></p>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div>
                    <div class="categoriesHeadings22">
                        <div class="categoriesHeading1">Want to Explore More?</div>
                        <div class="categoriesHeading2">Similar Products</div>
                    </div>
                    <div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                            <?php $__currentLoopData = $products['similarSmartphones']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($product['image']): ?>
                            <a class="product-link" href="/productDetails/?name=<?php echo e(str_replace(' ', '+', $product['title'])); ?>&productId=<?php echo e($product['_id']); ?>">
                                <div class="product-card">
                                    <img src="<?php echo e($product['image'][0]); ?>" alt="<?php echo e($product['title']); ?>" class="product-image">
                                    <div class="product-details">
                                        <h3 class="product-title"><?php echo e($product['title']); ?></h3>
                                        <p class="product-brand"><?php echo e($product['brand']); ?></p>
                                        <div class="priceUpperLine">
                                        </div>
                                        <p class="product-price">₹<?php echo e($product['productPricing'][0]['price']); ?></p>
                                    </div>
                                </div>
                            </a>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
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
           <?php endif; ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/dealsbazzar/resources/views/pages/details.blade.php ENDPATH**/ ?>