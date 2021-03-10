<footer class="">

    <div class="footer1 row paddinglra mx-0">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <ul class="list-unstyled footerLista">
                <li>
                    <h4>{{__('footer_var.our_service_title')}}</h4>
                </li>
        
                <li>
                    <a href="/{{app()->getLocale()}}/rent-a-car">{{__('footer_var.car_rental_link')}}</a>
                </li>
                <li>
                    <a  href="/{{app()->getLocale()}}/rent-a-yacht">{{__('footer_var.yacht_rental_link')}}</a>
                </li>
                <li>
                    <a href="/{{app()->getLocale()}}/transfers">{{__('footer_var.transfers_link')}}</a>
                </li>
                <li>
                    <a  href="/{{app()->getLocale()}}/excoursions">{{__('footer_var.excursions_link')}}</a>
                </li>
                <li>
                    <a href="/{{app()->getLocale()}}/faqs">{{__('footer_var.faq_link')}}</a>
                </li>
                <li>
                    <a target="_blank" href="/{{app()->getLocale()}}/terms">{{__('footer_var.terms_link')}}</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <ul class="list-unstyled footerLista">
                <li>
                    <h4>{{__('footer_var.information_title')}}</h4>
                </li>
                <li>
                    <div class="d-flex">
                        <div > <p class="bold pr-1">{{__('footer_var.info_address')}}</p></div>
                        <div>
                            <p>{{__('footer_var.address_1')}}</p>
                            <p>{{__('footer_var.address_2')}}</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex">
                        <div><p class="bold pr-1"> 
                        {{__('footer_var.info_telephone')}}</p></div>
                        <div>    <p>{{__('footer_var.telephone')}}</p></div>
                    </div>
                </li>
                <li>
                    <div class="d-flex">
                        <div><p class="bold pr-1">{{__('footer_var.info_email')}}</p></div>
                        <div>  <p>{{__('footer_var.email')}}</p></div>
                    </div>
                </li>
            


            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <ul class="list-unstyled footerLista">
                <li>
                    <h4>{{__('footer_var.useful_link_title')}}</h4>
                </li>
                <li>
                    <a target="_blank" href="https://mek.gov.me/en/ministry">{{__('footer_var.ministery_1')}}</a>
                </li>
                <li>
                    <a target="_blank" href="https://www.mif.gov.me/en/ministry">{{__('footer_var.ministery_2')}}</a>
                </li>
                 <li>
                    <ul>
                        <li class="bold"><a href="https://www.facebook.com/cmmrealestatemontenegro" target="_blank">{{__('footer_var.facebook')}}</a> </li>
                        <li class="bold"><a href="https://www.instagram.com/challenge/?next=/cmm.home.management/" target="_blank">{{__('footer_var.instagram')}}</a></li>
                        <li class="bold"><a href="https://www.linkedin.com/company/cmm-investment-consulting-group/" target="_blank">{{__('footer_var.linkedin')}}</a></li>
                    </ul>
                </li>
   
            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <ul class="list-unstyled footerLista">
                <li>
                    <h4>{{__('footer_var.last_blogs_title')}}</h4>
                </li>
                @if(count($blogs) > 0)
                <?php
					$colcount = count($blogs);
					$i = 1;
					?>
                @foreach($blogs as $blog)
                <li class="translate">
                    <a target="_blank" href="/{{app()->getLocale()}}/single_news/{{$blog->id}}">{{$blog->title}}</a>
                </li>
                <?php	
                if ($i++ == 6)
                break;
              ?>
                @endforeach
                @else
                <li>
                    <a target="_blank" href="#">{{__('footer_var.no_blog_message')}}</a>
                </li>
                @endif
            </ul>
        </div>

    </div>

    <div class="footer2">
        <div class="left_footer">
            <p>{{__('footer_var.copyright')}}
</p>
        </div>
        <div class="right_footer">
            <p>{{__('footer_var.made_by_qqriq')}}</p>
        </div>
    </div>


</footer>
