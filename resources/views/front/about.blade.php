@extends('front.layouts.app')
@section('content')

  <div id="header" class="bg-[#F6F7FA] relative">
    <x-nav/>

    <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
    
      <div class="flex flex-col gap-[50px] items-center py-20">
        <h2 class="font-bold text-4xl leading-[45px] text-center">Since Beginning We Only <br> Want to Make World Better</h2>
      </div>
    </div>

  </div>

  <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">
    
    @forelse ($abouts as $about)
    <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">  
      <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
        <img src="{{ Storage::url($about->thumbnail) }}" class="w-full h-full object-contain" alt="thumbnail">
      </div>

      <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
        <p class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">{{ $about->type }}</p>

        <div class="flex flex-col gap-[10px]">
          <h2 class="font-bold text-4xl leading-[45px]">{{ $about->name }}</h2>
            
          <div class="flex flex-col gap-5">
            
            @forelse ($about->keypoints as $keypoint)
            <div class="flex items-center gap-[10px]">
              <div class="w-6 h-6 flex shrink-0">
                <img src="{{asset('images//icons/tick-circle.svg')}}" alt="icon">
              </div>
              <p class="leading-[26px] font-semibold">{{ $keypoint->keypoint }}</p>
            </div>
            @empty   
            @endforelse
          </div>

        </div>
      </div>
    </div>

    @empty
    <p>Belum ada data ditambahkan</p>
    @endforelse
  
  </div>
  
  <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
    <h2 class="font-bold text-lg">Lebih dari +500 Klien Terkemuka Telah Mempercayai Kami</h2>
    <div class="logo-container flex flex-wrap gap-5 justify-center">
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-54.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-52.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-55.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-44.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-51.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-55.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-52.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-54.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-51.svg')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
    </div>
  </div>
  
  
 <x-footer/>

@endsection