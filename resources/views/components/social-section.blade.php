<!-- Container for demo purpose -->
<div class="flex justify-center pt-6 pb-24 mx-auto bg-gray-50 md:px-6">
<div class="container">
    <!-- Section: Design Block -->
    <style>
        #social-platforms{
            position: relative;
            font-size: 1rem;
            text-align: center;
            overflow: hidden;
        }
        .btn{
            clear: both;
            white-space: nowrap;
            font-size: 0.8rem;
            display: inline-block;
            border-radius: 5px;
            box-shadow: 0 1px 5px 0 rgba(0,0,0,0.35);
            margin: 2px;
            transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            overflow: hidden;
        }
        .btn:hover{
            box-shadow: 0 5px 15px 0 rgba(0,0,0,0.45);
        }
        .btn:focus{
            box-shadow: 0 3px 10px 0 rgba(0,0,0,0.4);
        }
        .btn > span, .btn-icon > i{
            float: left;
            padding: 13px;
            transition: all 0.5s;   
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            line-height: 1em;
        }
        .btn > span {
            padding: 14px 18px 16px;
            white-space: nowrap;
            color: white;
            background: #b8b8b8;
        }
        .btn:focus > span{
            background: #9a9a9a;
        }
        .btn-icon > i {
            border-radius: 5px 0 0 5px;
            position: relative;
            width: 36px;
            text-align: center;
            font-size: 1.3em;
            color: white;
            background: #212121;
        }
        .btn-icon > i::after{
            content: "";
            border: 8px solid;
            border-color: transparent transparent transparent #222;
            position: absolute;
            top: 13px;
            right:-15px;
        }
        .btn-icon:hover > i, .btn-icon:focus > i{
            color: white;
        }
        .btn-icon > span{
            border-radius: 0 5px 5px 0;
        }

        /* twitter */
        .btn-whatsapp:hover > i,
        .btn-whatsapp:focus > i{
            color: #25D366;
        }
        .btn-whatsapp > span{
            background: #075E54;
            width: 100px;
        }

        /* Medium */
        .btn-medium:hover > i,
        .btn-medium:focus > i{
            color: white;
        }
        .btn-medium > span{
            background: #4d4949;
            width: 100px;
    
        }

        /* Instagram */
        .btn-instagram:hover > i,
        .btn-instagram:focus > i{
            color: #ba3b99;
        }
        .btn-instagram > span{
            background: rgb(231 70 148);
            width: 100px;
        }

        /* Shopee */
        .btn-cart-shopping:hover > i,
        .btn-cart-shopping:focus > i{
            color: #ee4d2d;
        }
        .btn-cart-shopping > span{
            background: #ee4d2d;
            width: 100px;
        }
    </style>
    <script src="https://kit.fontawesome.com/2cb168df32.js" crossorigin="anonymous"></script>
    <section id="social" class="relative hidden text-gray-600 body-font">
        <div class="container py-4 mx-auto">
            <div class="flex flex-col w-full mb-8 text-center">
                <h2 class="text-3xl font-bold text-center text-black underline decoration-pink-500 font-Playfair">Find us on any of these platforms</h2>
            </div>
            <div id="social-platforms" class="justify-center">
                <div class="justify-center">
                    <button class="inline-flex px-6 py-2">
                        <a href="https://wa.me/85247096900" target="" class="btn btn-icon btn-whatsapp">
                            <i class="h-full fab fa-whatsapp"></i><span>Whatsapp</span>
                        </a>
                    </button>
                    <button class="inline-flex px-6 py-2">
                        <a href="https://vt.tiktok.com/ZSNsksnXw/" target="" class="btn btn-icon btn-medium">
                            <i class="h-full fab fa-tiktok"></i><span>Tiktok</span>
                        </a>
                    </button>
                    <button class="inline-flex px-6 py-2">
                        <a href="https://www.instagram.com/winterland.ina" target="" class="btn btn-icon btn-instagram">
                            <i class="h-full fab fa-instagram"></i><span>Instagram</span>
                        </a>
                    </button>
                    <button class="inline-flex px-6 py-2">
                        <a href="https://shp.ee/qnv5sia" target="" class="btn btn-icon btn-cart-shopping">
                            <i class="h-full fa-solid fa-cart-shopping"></i><span>Shopee</span>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="contacts" class="mt-10 text-center md:text-left">
        <div class="flex justify-center">
          <div class="mb-6 md:mb-0 ">
            <h2 class="px-10 mb-6 text-3xl font-bold text-center font-Playfair">
              Trusted by 1000+<br />
              <u class="decoration-pink-500">Satisfied Customers & Counting</u>
            </h2>
            <p class="px-10 mb-6 text-center text-gray-800 font-Urbanist dark:text-neutral-300">
                Start achieving your skin goals today!
            </p>

            <div class="flex justify-center px-4 flex-nowrap">
                <p class="font-semibold pr-2 inline-block rounded-full pt-3 pb-2.5 text-xs text-left sm:text-sm leading-normal">Order here <span>&rarr;</span>
                </p>
    
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <a href="https://wa.me/85247096900" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-xs sm:text-sm font-medium text-white bg-green-500 border border-gray-200 rounded-s-lg focus:z-10 focus:ring-2 focus:ring-[#25D366]">
                    Whatsapp
                    </a>
                    <a href="https://vt.tiktok.com/ZSNsksnXw/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-xs sm:text-sm font-medium text-white bg-black border-t border-b border-gray-200 focus:z-10 focus:ring-2 focus:ring-[#000000]">
                    Tiktok
                    </a>
                    <a href="https://shp.ee/qnv5sia" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 text-xs sm:text-sm font-medium text-white bg-orange-500 border border-gray-200 rounded-e-lg focus:z-10 focus:ring-2 focus:ring-[#EE4D2D]">
                    Shopee
                    </a>
                </div>    
            </div>
        </div>
      </section>
  </div>
  <!-- Container for demo purpose -->
</div>