// public/js/app.js

class DynamicRenderer {
    constructor() {
        this.apiUrl = 'http://localhost:3000/api/smartphones';
        this.filterProduct = []
        this.searchProductList = []
        const params = new URLSearchParams(window.location.search);
        if(params.get("category")){
            this.filter = {category:params.get("category")}
        }
        if(params.get("brands")){
            this.filter = {...this.filter,brands:params.get("brands")}
        }
    }

    render(brands,val) {
        if (!Array.isArray(this.filter[brands])) {
            this.filter[brands] = [];
        }
    
        const index = this.filter[brands].indexOf(val);
    
        if (index === -1) {
            // Value not found, so add it
            this.filter[brands].push(val);
        } else {
            // Value found, so remove it
            this.filter[brands].splice(index, 1);
        }
        
        this.callApi();
        console.log("this",this.filter)
    } 
    filterByPrice(minPrice,maxPrice){
        this.filter = {...this.filter,minPrice: '1',maxPrice: maxPrice};
        console.log("this.filter===",this.filter);
        this.callApi();
    }

    callApi() {
        const params = new URLSearchParams();
       
        // Convert filter object to query params
        for (const key in this.filter) {
            console.log("ttttttt===",this.filter[key] );
            if (this.filter[key].length > 0) {
               
                if(Array.isArray(this.filter[key])){
                    params.append(key, this.filter[key]?.join(','));
                }else{
                   
                    params.append(key, this.filter[key]);
                }
            }
        }

        fetch(`${this.apiUrl}?${params.toString()}`)
            .then(res => res.json())
            .then(data => {
                console.log("Fetched data:", data);
                this.filterProduct = data; // optional
                this.updateFilterProduct()
            })
            .catch(err => console.error("API error:", err));
    }

    updateFilterProduct(){
        let filterUi = '';
        for(let product of this.filterProduct){
            if(product['image'].length>0){
                let ui = `<div class="SmartPhonesListsAll-Container">
                <div class="SmartPhonesListsAll-Images relative">
                <img src="${product['image'][0]}" alt=${product['title']} class="h-[70%] w-[70%] object-contain mr-4 align-middle">
                <style>
                    @media screen and (max-width: 768px) {
                    .SmartPhonesListsAll-Images {
                        text-align: center;
                    }
    
                    .SmartPhonesListsAll-Images img {
                        width: 100%;
                        height: auto;
                        max-width: 250px;
                        margin-right: 0;
                    }
    
                    .absolute {
                        position: relative;
                        top: auto;
                        left: auto;
                        margin-top: 10px;
                    }
                    }
                </style>
            </div>
            <div class="SmartPhonesListsAll-Card-body">
                <div class="SmartPhonesListAll-Card-body-container">
                    <div class="flex justify-between">
                        <a href="/productDetails/?name=${product['title'].replace(/ /g, '+')}&productId=${product['_id']}" target="_blank">
                            <div class="SmartPhonesListAll-Card-body-title">${product['title']}</div>
                        </a>
                        <div class="SmartPhonesListAll-Card-body-price">₹${product['productPricing'][0]['price']}</div>
                    </div>
                    <div class="flex gap-5 mt-2" style="background-color: aliceblue; height: 50px; border-radius: 10px;">
                        <div class="flex gap-1 items-center shareClass">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style="color: rgb(28, 97, 231); font-size: 18px;">
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"></path>
                            </svg>
                            <span class="text-[15px] font-semibold cursor-pointer">Share</span>
                        </div>
                    </div>
                    <div class="flex flex-wrap mt-2">
                        <div class="SmartPhonesListAll-Card-body-details-description">
                        
                            <div class="flex gap-4">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" color="grey" height="20" width="20" xmlns="http://www.w3.org/2000/svg" style="color: grey;">
                                    <path d="M228.844 32.22v114.218h17.687V32.218h-17.686zm-108.25.624c-15.507 0-28.094 12.586-28.094 28.093C92.5 76.444 105.087 89 120.594 89c12.655 0 23.34-8.372 26.844-19.875h44.937v77.313h17.688v-95H147.03c-3.888-10.837-14.262-18.593-26.436-18.593zm193.25 0c-15.507 0-28.063 12.586-28.063 28.093 0 12.124 7.677 22.45 18.44 26.376v59.124h17.655V87.844c11.596-3.452 20.063-14.193 20.063-26.906 0-15.508-12.587-28.094-28.094-28.094zM266.124 92.5v53.938h17.657V92.5h-17.655zm188.532 4.03c-15.507 0-28.094 12.588-28.094 28.095 0 13.083 8.948 24.074 21.063 27.188v27.468h-92.938v17.657h110.624v-46.342c10.223-4.192 17.407-14.233 17.407-25.97 0-15.507-12.557-28.094-28.064-28.094zM30.187 123.657v17.688H96.75v55.594h62.814V179.28h-45.126v-55.624h-84.25zm147.032 40.47v159.718h159.81v-159.72H177.22zm17.56 15.655h17.657v78.595l32.407 32.406h75.28v17.658H237.5l-2.594-2.594-10.75-10.75c-1.033 7.385-7.36 13.062-15.03 13.062-8.392 0-15.19-6.796-15.19-15.187 0-7.682 5.696-13.98 13.095-15l-9.655-9.658-2.594-2.593V179.78zm54.94.157h17.686v55.313h52.53l.002 17.688H249.72v-73zM53.124 217.375V307.344c-11.49 3.512-19.844 14.198-19.844 26.844 0 15.505 12.557 28.093 28.064 28.093s28.093-12.587 28.093-28.092c0-12.195-7.79-22.564-18.656-26.438v-72.72h88.782v-17.655H53.124zm301.563 0v17.656h53.968v-17.655h-53.97zm99.968 21.97c-10.898 0-20.342 6.21-25 15.28h-74.97l.002 17.688H427c2.325 13.168 13.824 23.187 27.656 23.187 15.507 0 28.063-12.588 28.063-28.094 0-15.507-12.557-28.062-28.064-28.062zm-349.062 15.28v17.688h53.97v-17.688h-53.97zm17.156 36.47v84.217c-11.498 3.513-19.875 14.2-19.875 26.844 0 15.506 12.587 28.094 28.094 28.094 15.506 0 28.06-12.588 28.06-28.094 0-12.194-7.766-22.564-18.624-26.437v-66.94h19.156v-17.686H122.75zm231.938 0v17.686h45.156v95.283c-11.323 3.624-19.53 14.26-19.53 26.78-.002 15.506 12.585 28.063 28.092 28.063 15.507 0 28.063-12.557 28.063-28.062 0-12.32-7.935-22.778-18.97-26.563V291.095h-62.814zM192.375 341.53v54.033h17.688V341.53h-17.688zm36.47 0v86.564c-11.013 3.794-18.94 14.233-18.94 26.53 0 15.506 12.588 28.095 28.095 28.095s28.063-12.59 28.063-28.095c0-12.53-8.203-23.14-19.532-26.75V341.53h-17.686zm37.28 0v54.033h17.688l-.032-54.032h-17.655zm38.094 0v140.064h17.655V341.53H304.22z"></path>
                                </svg>
                                <span>Discount  <span style="color:red">${product['productPricing'][0]['discountPercentage'] ?? 'N/A'}</span></span>
                            </div>
                            <div class="flex gap-4"> 
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="grey" height="20" width="20" xmlns="http://www.w3.org/2000/svg" style="color: grey;">
                                    <path fill="none" stroke-width="2" d="M8,23 L16,23 L16,12 L8,12 L8,23 Z M8,16 L16,16 M12,12 L12,16 M6,6 L6,5 C6,2 7.5,1 10,1 L14,1 C16.5,1 18,2.5 18,5 L18,6 C21,6 23,8 23,11 C23,14 21,16 18,16 M14,6 L6,6 C3,6 1,7.5 1,11 C1,14.5 3,16 6,16"></path>
                                </svg>
                                <span>Brand - ${product['brand'] ?? 'N/A' }</span>
                            </div>
                            <div class="flex gap-4">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" color="grey" height="20" width="20" xmlns="http://www.w3.org/2000/svg" style="color: grey;">
                                    <path d="M48 322.3V189.7A29.74 29.74 0 0 1 77.7 160h137.44l24.4-32H77.7A61.77 61.77 0 0 0 16 189.7v132.6A61.77 61.77 0 0 0 77.7 384h96.85a22.57 22.57 0 0 1 .26-7.32l.15-.75.21-.73 6.5-23.2H77.7A29.74 29.74 0 0 1 48 322.3zM386.3 128h-98.64a22.69 22.69 0 0 1-.27 7.2l-.15.74-.21.73-6.54 23.33H386.3a29.74 29.74 0 0 1 29.7 29.7v132.6a29.74 29.74 0 0 1-29.7 29.7H247l-24.42 32H386.3a61.77 61.77 0 0 0 61.7-61.7V189.7a61.77 61.77 0 0 0-61.7-61.7z">
                                    </path>
                                    <path d="M162.65 294.16a24.37 24.37 0 0 1-21.56-13 25 25 0 0 1 1.42-25.83l.31-.46.33-.44L197.62 183H89.69a20 20 0 0 0-20 20v106a20 20 0 0 0 20 20h98.42l9.78-34.86z">
                                    </path>
                                    <path d="m276.07 280.89 27.07-35.49a5.2 5.2 0 0 0 .77-1.91 5 5 0 0 0 .08-.66 5 5 0 0 0-.08-1.29 5.11 5.11 0 0 0-.68-1.75 4.76 4.76 0 0 0-.78-.95 3.48 3.48 0 0 0-.48-.38 4 4 0 0 0-1.11-.55 4.28 4.28 0 0 0-1.31-.2h-61.62l12.12-43.21 3.23-11.5 6.21-22.16.51-1.84 7.79-27.76a3.51 3.51 0 0 0 .05-.55v-.16c0-.05 0-.26-.05-.38s0-.09 0-.14a2.2 2.2 0 0 0-.17-.45 3.77 3.77 0 0 0-.26-.39l-.09-.1a2.73 2.73 0 0 0-.25-.23l-.1-.08a3.14 3.14 0 0 0-.39-.24 2 2 0 0 0-.41-.14h-.59a2.3 2.3 0 0 0-.45 0 1.9 1.9 0 0 0-.42.15l-.13.07-.3.21-.11.1a2.4 2.4 0 0 0-.36.41l-18 23.63-13.14 17.22-9.85 12.83-63.71 83.55a5.72 5.72 0 0 0-.44.8 4.78 4.78 0 0 0-.35 1.09 4.7 4.7 0 0 0-.08 1.29 4.86 4.86 0 0 0 2 3.71 4.74 4.74 0 0 0 .54.31 4.31 4.31 0 0 0 1.89.43h61.62L194.42 380.6a3.64 3.64 0 0 0 0 .56v.15a2.32 2.32 0 0 0 .06.38.58.58 0 0 0 0 .14 2.2 2.2 0 0 0 .17.45 3.62 3.62 0 0 0 .26.38l.09.1.25.24a.39.39 0 0 1 .1.08 2.22 2.22 0 0 0 .39.23 2.83 2.83 0 0 0 .41.14h.13a1.86 1.86 0 0 0 .33 0h.13a2.32 2.32 0 0 0 .45-.06 2.05 2.05 0 0 0 .41-.16l.13-.07.3-.21.11-.09a2.4 2.4 0 0 0 .36-.41L221.82 352l17.53-23z">
                                    </path>
                                    <path d="m319.5 256.93-.46.6L264.51 329h109.8a20 20 0 0 0 20-20V203a20 20 0 0 0-20-20H274.05l-9.74 34.73h35.24A24.35 24.35 0 0 1 321 230.5a25.21 25.21 0 0 1-1 25.79zM480 202.67a16 16 0 0 0-16 16v74.66a16 16 0 0 0 32 0v-74.66a16 16 0 0 0-16-16z">
                                    </path>
                                </svg>
                                <span>Batteries - ${product['productDescription']['Batteries'] ?? 'N/A'}</span>
                            </div>
                            <div class="flex gap-4"> 
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="grey" height="20" width="20" xmlns="http://www.w3.org/2000/svg" style="color: grey;">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path d="m9.4 10.5 4.77-8.26a9.984 9.984 0 0 0-8.49 2.01l3.66 6.35.06-.1zM21.54 9c-.92-2.92-3.15-5.26-6-6.34L11.88 9h9.66zm.26 1h-7.49l.29.5 4.76 8.25A9.91 9.91 0 0 0 22 12c0-.69-.07-1.35-.2-2zM8.54 12l-3.9-6.75A9.958 9.958 0 0 0 2.2 14h7.49l-1.15-2zm-6.08 3c.92 2.92 3.15 5.26 6 6.34L12.12 15H2.46zm11.27 0-3.9 6.76a9.984 9.984 0 0 0 8.49-2.01l-3.66-6.35-.93 1.6z"></path>
                                </svg>
                                <span>Connectivity technologies - ${product['productDescription']['Connectivity technologies'] ?? 'N/A'}</span>
                            </div>
                            <div class="flex gap-4">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" color="grey" height="20" width="20" xmlns="http://www.w3.org/2000/svg" style="color: grey;">
                                    <g id="Mobile_4">
                                        <g>
                                        <circle cx="12.003" cy="18.937" r="1"></circle>
                                        <path d="M16.725,2.065H7.275a2.386,2.386,0,0,0-2.24,2.5v14.87a2.386,2.386,0,0,0,2.24,2.5h9.45a2.379,2.379,0,0,0,2.24-2.5V4.565A2.379,2.379,0,0,0,16.725,2.065Zm1.24,17.37a1.384,1.384,0,0,1-1.24,1.5H7.275a1.391,1.391,0,0,1-1.24-1.5v-2.5h11.93Zm0-3.5H6.035V4.565a1.391,1.391,0,0,1,1.24-1.5h9.45a1.384,1.384,0,0,1,1.24,1.5Z"></path>
                                        </g>
                                    </g>
                                </svg>
                                <span>Device interface - primary - ${product['productDescription']['Device interface - primary'] ?? 'N/A'}</span>
                            </div>
                            <div class="flex gap-4">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" color="grey" height="20" width="20" xmlns="http://www.w3.org/2000/svg" style="color: grey;">
                                    <path d="M685.904 383.184l275.264-273.572-.896 155.072c-.289 12.928 9.967 24.176 22.912 23.888l16.416-.016c12.944-.304 23.648-8 23.92-20.928l.672-231.008c0-.223-.88-.399-.88-.623l1.264-11.712c.128-6.496-1.391-12.288-5.584-16.431-4.143-4.176-9.951-6.72-16.4-6.544l-11.696.272c-.223 0-.399.08-.64.113L760.77.687c-12.928.288-23.632 10.976-23.92 23.92l-.032 16.417c1.967 15.248 13.952 24.16 26.88 23.872l151.248.4L640.657 337.92c-12.496 12.496-12.496 32.752 0 45.264 12.496 12.48 32.752 12.48 45.247 0zM339.088 640.812L63.825 913.532l.88-154.224c.304-12.944-9.969-24.192-22.897-23.904l-17.423.032c-12.96.32-23.649 8-23.921 20.944l-.672 231.008c0 .224.88.367.88.623l-1.264 11.68c-.144 6.496 1.376 12.32 5.584 16.433 4.128 4.192 9.952 6.72 16.384 6.56l11.712-.288c.223 0 .383-.096.64-.096l230.495 1.008c12.928-.32 23.617-11.009 23.92-23.936l.032-16.432c-1.967-15.216-13.952-24.16-26.88-23.872l-151.247-.4L384.32 686.076c12.496-12.497 12.496-32.752 0-45.248s-32.737-12.512-45.233-.016zm685.122 346.56l-.672-231.01c-.288-12.944-10.992-20.624-23.92-20.944l-16.416-.032c-12.944-.289-23.184 10.975-22.912 23.903l.896 155.072-275.28-273.552c-12.496-12.496-32.752-12.496-45.248 0s-12.496 32.752 0 45.248L914.93 958.649l-151.232.4c-12.928-.288-24.912 8.657-26.88 23.872l.032 16.432c.304 12.944 11.008 23.633 23.92 23.936l229.504-1.007c.24 0 .416.095.64.095l11.696.288c6.448.16 12.272-2.368 16.4-6.56 4.193-4.128 5.696-9.936 5.584-16.432l-1.263-11.68c0-.255.88-.399.88-.622zM110.049 65.321l151.264-.397c12.928.288 24.912-8.64 26.88-23.873l-.032-16.431C287.84 11.677 277.15.972 264.24.7l-230.512.992c-.256-.032-.416-.112-.64-.112l-11.712-.273C14.945 1.132 9.105 3.676 4.992 7.851.784 11.995-.735 17.787-.592 24.283L.672 35.995c0 .223-.88.384-.88.624l.672 231.008c.288 12.928 10.977 20.624 23.921 20.928l17.424.015c12.928.288 23.183-10.96 22.895-23.888l-.88-154.224 275.264 272.72c12.48 12.497 32.753 12.497 45.25 0s12.496-32.768 0-45.264z"></path>
                                </svg>
                                <span>Battery Power Rating - ${product['productDescription']['Battery Power Rating'] ?? 'N/A'}</span>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>`
                filterUi +=ui
            }
        }
        // console.log("filterUi==",filterUi)
        document.getElementById('filterProductListing').innerHTML = ''
        document.getElementById('filterProductListing').innerHTML = filterUi
    }

    reset(){
        window.location.reload()
    }

    searchProduct(val){
        if(val.length > 0){
            fetch(`${this.apiUrl}?title=${val}`)
            .then(res => res.json())
            .then(data => {
                console.log("Fetched data:", data);
                this.searchProductList = data; // optional
                this.showSearchProduct();
            })
            .catch(err => console.error("API error:", err));
        }else{
            document.getElementById('searchProduct').style.height = 0
            document.getElementById('searchProduct').innerHTML = ""
        }
    }


    showSearchProduct(){
        let searchProduct = '';
        for(let product of this.searchProductList){
            if(product['image'].length > 0){
                let searchList = 
                ` <a href="/productDetails/?name=${product['title'].replace(/ /g, '+')}&productId=${product['_id']}" target="_blank">
                <div class="dropdownss-item">
                        <div class="flex items-center justify-start gap-5">
                            <img src="${product['image'][0]}" alt="">
                            <div>
                            <div class="text-[#000000] font-light text-xs">${product['title']}</div>
                            <div class="text-[#000000] font-light text-xs">${product['brand']}</div>
                        </div>
                        </div> 
                    </div>
                </div>
                </a>`
                searchProduct += searchList;
            }
        }
        if(this.searchProductList.length == 0){
            document.getElementById('searchProduct').style.height = 0
            document.getElementById('searchProduct').innerHTML = ""
        }else{
            document.getElementById('searchProduct').style.height = '584px'
            document.getElementById('searchProduct').innerHTML = searchProduct
        }
    }

    copyToClipboard(value,button) {
        navigator.clipboard.writeText(window.location.host+"/"+value)
        .then(() => {
            const msg = button.nextElementSibling;
            msg.style.display = 'inline';

            setTimeout(() => {
                msg.style.display = 'none';
            }, 1500); // Hide after 1.5 seconds
        })
        .catch(err => {
            console.error("Failed to copy: ", err);
        });
    }
}

// Make it accessible from outside
let productRenderer;

document.addEventListener('DOMContentLoaded', () => {
    productRenderer = new DynamicRenderer((val) =>
       val
    );
});

document.addEventListener('click', function(event) {
    const container = document.getElementById('navbarTopSearchbar');
    const dropdown = document.getElementById('searchProduct');
   

    if (!container.contains(event.target)) {
        dropdown.style.height = 0
        dropdown.innerHTML = '';
    }
});
