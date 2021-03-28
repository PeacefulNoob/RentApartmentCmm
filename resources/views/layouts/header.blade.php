<div class="header">

        <div class="header2 ">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <a class="nav-link navbar-brand mobile " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <h5>  {{__('others.tourist')}}</h5>  <h5>{{__('others.corner')}}</h5>  
                </a>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/{{app()->getLocale()}}/rent-a-car"><h5>{{__('others.car_rental')}}</h5></a>
                  <a class="dropdown-item" href="/{{app()->getLocale()}}/rent-a-yacht"><h5>{{__('others.yacht_rental')}}</h5></a>
                   <a class="dropdown-item" href="/{{app()->getLocale()}}/excoursions"><h5>{{__('others.exc')}}</h5></a>
                 <a class="dropdown-item" href="/{{app()->getLocale()}}/transfers"><h5>{{__('others.transf')}}</h5></a>

                </div>
          <a class="navbar-brand" href="/{{app()->getLocale()}}/"><img src="/assets/images/logo1.png" alt=""></a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
               
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto my-2">
            <li class="nav-item dropdown desktop">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{__('others.tourist_corner')}}

                </a><span class="caret"></span>
                <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/{{app()->getLocale()}}/rent-a-car"><h5>{{__('others.car_rental')}}</h5></a>
                  <a class="dropdown-item" href="/{{app()->getLocale()}}/rent-a-yacht"><h5>{{__('others.yacht_rental')}}</h5></a>
                   <a class="dropdown-item" href="/{{app()->getLocale()}}/excoursions"><h5>{{__('others.exc')}}</h5></a>
                 <a class="dropdown-item" href="/{{app()->getLocale()}}/transfers"><h5>{{__('others.transf')}}</h5></a>

                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/{{app()->getLocale()}}/rentProperty"><h5>{{__('others.rent_property')}}</h5></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="/{{app()->getLocale()}}/news"><h5>{{__('others.news')}}</h5></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="https://www.cmm-montenegro.com/" target="_blank"><h5> {{__('others.p_fo_sale')}}</h5></a>
              </li> 
            
            </ul>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link" href="/{{app()->getLocale()}}/about"><h5>{{__('others.about')}} </h5></a>
              </li>
           {{--    <li class="nav-item">
                <a class="nav-link" href="/{{app()->getLocale()}}/about#about_contact"><h5>{{__('others.contact')}}</h5></a>
              </li> --}}
              @foreach (config('app.languages') as $locale)
                    @if($locale == "rus")
                                    <li class="nav-item flags">
                                        <a class="nav-link"
                                            href="{{ route('setLocaleRout', $locale) }}"
                                            @if (app()->getLocale() == $locale) style="border: 2px solid #1D4C81 ; " @endif>
                                            <img src="/assets/images/ru.svg" alt="rus">
                                          </a>
                                    </li> 
                    @elseif($locale == "en")

                                    <li class="nav-item flags">
                                        <a class="nav-link"
                                            href="{{ route('setLocaleRout', $locale) }}"
                                            @if (app()->getLocale() == $locale) style="border: 2px solid #1D4C81 ; " @endif>   
                                                             <img src="/assets/images/en.svg" alt="en">
                                          </a>
                                    </li> 
                      
                    @endif
              @endforeach
            </ul>
       
          </div>
        </nav>
    </div>
  </div>
