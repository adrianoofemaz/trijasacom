 <nav class="flex flex-wrap items-center justify-between bg-white/70 p-[20px_30px] gap-y-10 z-20 relative">
            <div class="flex items-center gap-3">
                <div class="flex shrink-0 h-[43px] overflow-hidden">
                    <img src="{{asset('images/logo/logo.svg')}}" class="object-contain w-full h-full" alt="logo">
                </div>
                <div class="flex flex-col">
                  <p id="CompanyName" class="font-extrabold text-xl leading-[30px]">Trijasa Sigma</p>
                  <p id="CompanyTagline" class="text-sm text-cp-light-grey">Build Futuristic Dreams</p>
                </div>
            </div>
            <ul class="flex flex-wrap items-center gap-[50px]">
              <li class=" {{request()->routeIs('front.index') ? 'text-cp-dark-blue':''}} font-semibold hover:text-cp-dark-blue  ">
                <a href="{{ route('front.index') }}">Beranda</a>
              </li>
              <li class="{{request()->routeIs('front.about') ? 'text-cp-dark-blue':''}} font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="{{ route('front.about') }}">Tentang Kami</a>
              </li>
              <li class=" font-semibold hover:text-cp-dark-blue ">
                <a href="">Layanan Servis</a>
              </li>
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="">Portofolio</a>
              </li>
              <li class="font-semibold hover:text-cp-dark-blue transition-all duration-300">
                <a href="">Sertifikasi & Legalitas</a>
              </li>
              <a href="{{ route('front.contact') }}" class="bg-stone-900 p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Kontak</a>
            </ul>
           
        </nav>