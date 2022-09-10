<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leanity</title>
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-white-700 text-black">
    <header class="bg-white-700 ">
      
    <div class="container w-full max-w-7xl">
            <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl p-8 mx-auto md:items-center md:justify-between md:flex-row md:px-8 lg:px-24">
              <div class="flex flex-row items-center justify-between lg:justify-start">
                <a href="/" class="text-lg font-bold tracking-tighter text-blue-600 transition duration-500 ease-in-out transform tracking-relaxed lg:pr-8"> 
              <img class="h-20 w-50" src="{{asset('images/iqretail-logo.png')}}" alt=""> </a>
                <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                  <svg fill="currentColor" viewBox="0 0 20 20" class="w-8 h-8">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none"></path>
                  </svg>
                </button>
              </div>
              <nav :class="{'flex': open, 'hidden': !open}" class="flex-col items-center flex-grow hidden pb-4 border-blue-600 md:pb-0 md:flex md:justify-center md:flex-row lg:border-l-2 lg:pl-2 gap-4">
                <a href="solutions"> <button class="" data-dropdown-toggle="dropdown"> SOLUTIONS</button> </a>
                <a href="" button>SERVICES</button></a>
                <button>TRAINING</button>
                <button>CONTACT US</button>
                <button>ABOUT US</button>
                <button>NEWS</button>
                
              </nav>
              <img class="h-20 w-50 " src="{{asset('images/kerridge-commercial-systems.png')}}" alt="">
            </div>
              
          </div>
        
    </header>
    <main>
        @yield('page-content')
    </main>
    <footer class="bg-blue-900" aria-labelledby="footer-heading">
    <div>
           <div class=" w-full mx-auto pt-16 pr-24 pb-16 pl-24 container">
  <nav class="w-full bg-top bg-cover">
    <div class="max-w-screen-2xl md:flex-row flex w-full justify-between mt-auto mr-auto mb-auto ml-auto">
      <div class="flex flex-row justify-center items-center"><a class="flex font-bold text-xl items-center
          text-grey-800 false tracking-wide no-underline hover:no-underline cursor-pointer"><img class="h-20 w-50 " src="{{asset('images/kcs-footer-logo.png')}}" alt=""></a></div>
      <div class="md:m-0 md:flex flex flex-row justify-between items-center mt-2 mb-2 ml-0"><a
          class="hover:text-gray-600 font-semibold text-base 
          text-center text-white block cursor-pointer" style="font-family: Raleway;" href="#">SOLUTIONS</a><a
          class="hover:text-gray-600 font-semibold text-base mr-6 ml-6 
          text-center text-white block cursor-pointer" style="font-family: Raleway;" href="#">SERVICES</a><a
          class="hover:text-gray-600 font-semibold text-base mr-6 ml-6 
          text-center text-white block cursor-pointer" style="font-family: Raleway;" href="#">TRAINING</a><a
          class="hover:text-gray-600 font-semibold text-base mr-6 ml-6 
          text-center text-white block cursor-pointer" style="font-family: Raleway;" href="#">CONTACT US</a><a
          class="hover:text-gray-600 font-semibold text-base mr-6 ml-6 
          text-center text-white block cursor-pointer" style="font-family: Raleway;" href="#">ABOUT US</a><a
          class="hover:text-gray-600 font-semibold text-base 
          text-center text-white block cursor-pointer" style="font-family: Raleway;" href="#">NEWS</a></div>
     
      <div class="md:m-0 md:flex flex flex-row justify-center items-center"><a href="https://www.facebook.com/IQRetailSA/" class="mr-2 ml-2
          block cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z"/></svg></a>
          <a href="https://twitter.com/IQ_Retail" class="mr-4
          ml-4 block cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6.5 8.778c-.441.196-.916.328-1.414.388.509-.305.898-.787 1.083-1.362-.476.282-1.003.487-1.564.597-.448-.479-1.089-.778-1.796-.778-1.59 0-2.758 1.483-2.399 3.023-2.045-.103-3.86-1.083-5.074-2.572-.645 1.106-.334 2.554.762 3.287-.403-.013-.782-.124-1.114-.308-.027 1.14.791 2.207 1.975 2.445-.346.094-.726.116-1.112.042.313.978 1.224 1.689 2.3 1.709-1.037.812-2.34 1.175-3.647 1.021 1.09.699 2.383 1.106 3.773 1.106 4.572 0 7.154-3.861 6.998-7.324.482-.346.899-.78 1.229-1.274z"/></svg></svg></a>
          <a href="https://www.linkedin.com/company/iq-retail-pty-ltd/" class="mr-2 ml-2 block cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 8c0 .557-.447 1.008-1 1.008s-1-.45-1-1.008c0-.557.447-1.008 1-1.008s1 .452 1 1.008zm0 2h-2v6h2v-6zm3 0h-2v6h2v-2.861c0-1.722 2.002-1.881 2.002 0v2.861h1.998v-3.359c0-3.284-3.128-3.164-4-1.548v-1.093z"/></svg>
        </a>
          <a href="https://www.youtube.com/channel/UCkfRg6YqWvRolgeAqYOCVaQ" class="mr-2 ml-2 block cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.326 6h.721l.493 1.851.458-1.851h.727l-.832 2.752v1.878h-.716v-1.878l-.851-2.752zm3.297 1.187c-.56 0-.931.37-.931.917v1.675c0 .602.314.916.931.916.511 0 .913-.342.913-.916v-1.675c0-.535-.398-.917-.913-.917zm.266 2.563c0 .186-.095.323-.266.323-.176 0-.277-.144-.277-.323v-1.589c0-.187.086-.326.265-.326.194 0 .278.134.278.326v1.589zm2.364-2.535v2.593c-.077.097-.25.256-.374.256-.135 0-.169-.093-.169-.23v-2.619h-.635v2.855c0 .337.103.61.443.61.192 0 .459-.1.734-.426v.377h.635v-3.416h-.634zm1.101 6.929c-.224 0-.271.158-.271.382v.329h.535v-.329c.001-.221-.046-.382-.264-.382zm-2.351.02l-.125.099v2.027l.144.115c.099.05.242.054.31-.034.034-.046.052-.121.052-.224v-1.68c0-.11-.021-.193-.064-.25-.074-.096-.211-.107-.317-.053zm2.413-2.598c-1.301-.089-5.533-.088-6.833 0-1.406.097-1.572.947-1.583 3.184.011 2.233.175 3.087 1.583 3.184 1.3.088 5.532.089 6.833 0 1.407-.096 1.573-.946 1.584-3.184-.011-2.233-.175-3.087-1.584-3.184zm-6.162 5.344h-.681v-3.77h-.705v-.64h2.091v.64h-.705v3.77zm2.424 0h-.605v-.359c-.111.132-.228.233-.348.302-.326.187-.773.183-.773-.477v-2.72h.604v2.494c0 .131.032.219.161.219.118 0 .282-.151.355-.244v-2.47h.605v3.255zm2.328-.675c0 .403-.15.716-.553.716-.222 0-.406-.081-.575-.292v.25h-.61v-4.409h.61v1.42c.137-.167.322-.304.538-.304.443 0 .59.374.59.815v1.804zm2.235-.876h-1.157v.614c0 .244.021.455.265.455.255 0 .271-.172.271-.455v-.226h.622v.244c0 .627-.269 1.007-.906 1.007-.577 0-.873-.421-.873-1.007v-1.46c0-.565.373-.957.919-.957.58 0 .86.369.86.957v.828zm-4.241-13.359c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12z"/></svg>
        </a></div>
    </div>
    <div class="">
    <div class="max-w-screen-2xl flex w-full flex-col justify-between mt-auto mr-auto mb-auto ml-auto">
      <div class="bg-blue-900 md:m-0 hidden md:flex flex flex-row justify-center items-center mt-2 mb-2 ml-0"><a
          class="hover:text-gray-600 font-semibold text-sm text-center text-white block
          hover:-translate-y-1 cursor-pointer" style="font-family: Raleway;" href="#">PRIVACY POLICY </a>|<a
          class="hover:text-gray-600 font-semibold text-sm mr-2 ml-2 
          text-center text-red-600 block hover:-translate-y-1 cursor-pointer" style="font-family: Raleway;"
          href="https://www.iqretail.co.za/sites/default/files/IQ%20Retail%20Standard%20Software%20Terms%20&%20Conditions%20.pdf">SOFTWARE T&C'S</a> | <a class="hover:text-gray-600 font-semibold text-sm mr-2 ml-2 pt-0
           text-center text-red-600 block hover:-translate-y-1 cursor-pointer" style="font-family:
          Raleway;" href="https://www.iqretail.co.za/sites/default/files/LMS%20Schedule%20and%20Agreement%202021v3.pdf">LMS T&C'S </a> |<a class="hover:text-red-600 font-semibold text-sm text-center
          text-red-600 block hover:-translate-y-1 cursor-pointer" style="font-family: Raleway;" href="https://www.iqretail.co.za/sites/default/files/KCS%20Modern%20Slavery%20Statement.pdf"> ANTI SLAVERY STATEMENT</a>
    </div>
        </div>
      </nav>
    </div> 
    </div>
            
  </footer>
  <script>
const btn = document.querySelector(".mobile-menu-button");
const menu = document.querySelector(".mobile-menu");
btn.addEventListener("click", () => {
menu.classList.toggle("hidden");
});
</script>
    
</body>
</html>