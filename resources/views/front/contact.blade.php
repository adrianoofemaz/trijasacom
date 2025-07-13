@extends('front.layouts.app')
@section('content')

  <div id="header" class="bg-[#F6F7FA] relative h-[700px] -mb-[488px]">
    <x-nav/>
  </div>

  <div id="Contact" class="container max-w-[1130px] mx-auto flex flex-wrap xl:flex-nowrap justify-between gap-[50px] relative z-10">
    <div class="flex flex-col mt-20 gap-[50px]">
      <div class="breadcrumb flex items-center gap-[30px]">
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
        <span class="text-cp-light-grey">/</span>
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Product</p>
        <span class="text-cp-light-grey">/</span>
        <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Appointment</p>
      </div>
      <h1 class="font-extrabold text-4xl leading-[45px]">We Help You to Build Awesome Project</h1>
      <div class="flex flex-col gap-5">
        <div class="flex items-center gap-[10px]">
          <div class="w-6 h-6 flex shrink-0">
            <img src="{{asset('images//icons/global.svg')}}" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold">No 96, Anggapati Jakarta</p>
        </div>
        <div class="flex items-center gap-[10px]">
          <div class="w-6 h-6 flex shrink-0">
            <img src="{{asset('images//icons/call.svg')}}" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold">(021) 22081996</p>
        </div>
        <div class="flex items-center gap-[10px]">
          <div class="w-6 h-6 flex shrink-0">
            <img src="{{asset('images//icons/monitor-mobbile.svg')}}" alt="icon">
          </div>
          <p class="text-cp-dark-blue font-semibold">shaynacomp.com</p>
        </div>
      </div>
    </div>
    <form action="" class="flex flex-col p-[30px] rounded-[20px] gap-[18px] bg-white shadow-[0_10px_30px_0_#D1D4DF40] w-full md:w-[700px] shrink-0">
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Complete Name</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="{{asset('images//icons/profile.svg')}}" alt="icon">
            </div>
            <input type="text" name="" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="Write your complete name" required>
          </div>
        </div>
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Email Address</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="{{asset('images//icons/sms.svg')}}" alt="icon">
            </div>
            <input type="email" name="" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="Write your email address" required>
          </div>
        </div>
      </div>
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Phone Number</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="{{asset('images//icons/call-black.svg')}}" alt="icon">
            </div>
            <input type="tel" name="" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="Write your phone number" required>
          </div>
        </div>
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Meeting Date</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white relative">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="{{asset('images//icons/calendar.svg')}}" alt="icon">
            </div>
            <button type="button" id="dateButton" class="p-0 bg-transparent w-full text-left border-none outline-none">Choose the date</button>
            <input type="date" name="" id="dateInput" class="absolute opacity-0 -z-10">
          </div>
        </div>
      </div>
      <div class="flex items-center gap-[18px]">
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Your Interest</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="{{asset('images//icons/building-4-black.svg')}}" alt="icon">
            </div>
            <select name="" id="" class="appearance-none outline-none w-full invalid:font-normal font-semibold px-[10px] -mx-[10px]" required>
              <option value="" hidden>Choose a project</option>
              <option value="Residential Complex">Residential Complex</option>
              <option value="Commercial Building">Commercial Building</option>
              <option value="Mixed-Use Development">Mixed-Use Development</option>
              <option value="Office Tower">Office Tower</option>
              <option value="Industrial Facility">Industrial Facility</option>
              <option value="Retail Center">Retail Center</option>
              <option value="Healthcare Facility">Healthcare Facility</option>
              <option value="Hospitality Project">Hospitality Project</option>
              <option value="Civic Center">Civic Center</option>
              <option value="Transportation Hub">Transportation Hub</option>
            </select>
          </div>
        </div>
        <div class="flex flex-col gap-2 flex w-full">
          <p class="font-semibold">Budget Available</p>
          <div class="flex items-center gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
            <div class="w-[18px] h-[18px] flex shrink-0">
              <img src="{{asset('images//icons/dollar-square.svg')}}" alt="icon">
            </div>
            <input type="number" name="" id="" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full" placeholder="What is your budget" required>
          </div>
        </div>
      </div>
      <div class="flex flex-col gap-2 flex w-full">
        <p class="font-semibold">Project Brief</p>
        <div class="flex gap-[10px] p-[14px_20px] border border-[#E8EAF2] focus-within:border-cp-dark-blue transition-all duration-300 rounded-xl bg-white">
          <div class="w-[18px] h-[18px] flex shrink-0 mt-[3px]">
            <img src="{{asset('images//icons/message-text.svg')}}" alt="icon">
          </div>
          <textarea name="" id="" rows="6" class="appearance-none outline-none bg-white placeholder:font-normal placeholder:text-cp-black font-semibold w-full resize-none" placeholder="Tell us the project brief"></textarea>
        </div>
      </div>
      <button type="submit" class="bg-cp-dark-blue p-5 w-full rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Book Appointment</button>
    </form>
  </div>
 
 <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
    <h2 class="font-bold text-lg">Lebih dari +500 Klien Terkemuka Telah Mempercayai Kami</h2>
    <div class="logo-container flex flex-wrap gap-5 justify-center">
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-54.svg')}}')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-52.svg')}}')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-55.svg')}}')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-44.svg')}}')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-51.svg')}}')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-55.svg')}}')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-52.svg')}}')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-54.svg')}}')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
      <div class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
        <div class="overflow-hidden h-9">
          <img src="{{asset('images/logo/logo-51.svg')}}')}}" class="object-contain w-full h-full" alt="logo">
        </div>
      </div>
    </div>
  </div>
  
  <x-footer/>
  

  @endsection


  @push('after-script')

  <script src="js/contact-form.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- JavaScript -->
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
  <script src="js/carousel.js"></script>

    @endpush