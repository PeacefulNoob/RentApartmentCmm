<footer class="">

    <div class="footer1 row paddinglra mx-0">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <ul class="list-unstyled footerLista">
                <li>
                    <h4>OUR SERVICES</h4>
                </li>
        
                <li>
                    <a href="/rent-a-car"> Car rental</a>
                </li>
                <li>
                    <a  href="/rent-a-yacht"> Yacht rental</a>
                </li>
                <li>
                    <a href="/transfers">Transfers</a>
                </li>
                <li>
                    <a  href="/excoursions"> Excursions </a>
                </li>
                <li>
                    <a href="/faqs"> FaQ </a>
                </li>
                <li>
                    <a target="_blank" href="/terms">Terms and Conditions</a>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <ul class="list-unstyled footerLista">
                <li>
                    <h4>INFORMATION </h4>
                </li>
                <li>
                    <div class="d-flex">
                        <div > <p class="bold pr-1"> Address:</p></div>
                        <div>
                            <p>Jadranski put b.b. Budva, Montenegro</p>
                            <p> Moscow, Russia</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex">
                        <div><p class="bold pr-1"> 
                            Telephone:</p></div>
                        <div>    <p> + 382 68 010 879</p></div>
                    </div>
                </li>
                <li>
                    <div class="d-flex">
                        <div><p class="bold pr-1"> Email address:</p></div>
                        <div>  <p>management@cmm-montenegro.com</p></div>
                    </div>
                </li>
            


            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <ul class="list-unstyled footerLista">
                <li>
                    <h4>USEFUL LINKS</h4>
                </li>
                <li>
                    <a target="_blank" href="https://mek.gov.me/en/ministry">Ministery of Economy</a>
                </li>
                <li>
                    <a target="_blank" href="https://www.mif.gov.me/en/ministry">Ministery of Finance </a>
                </li>
                 <li>
                    <ul>
                        <li class="bold"><a href="https://www.facebook.com/cmmrealestatemontenegro" target="_blank">Facebook</a> </li>
                        <li class="bold"><a href="https://www.instagram.com/challenge/?next=/cmm.home.management/" target="_blank">Instagram</a></li>
                        <li class="bold"><a href="https://www.linkedin.com/company/cmm-investment-consulting-group/" target="_blank">Linkedin</a></li>
                    </ul>
                </li>
   
            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <ul class="list-unstyled footerLista">
                <li>
                    <h4>LAST BLOGS</h4>
                </li>
                @if(count($blogs) > 0)
                <?php
					$colcount = count($blogs);
					$i = 1;
					?>
                @foreach($blogs as $blog)
                <li>
                    <a target="_blank" href="/single_news/{{$blog->id}}">{{$blog->title}}</a>
                </li>
                <?php	
                if ($i++ == 6)
                break;
              ?>
                @endforeach
                @else
                <li>
                    <a target="_blank" href="#">No blog</a>
                </li>
                @endif
            </ul>
        </div>

    </div>

    <div class="footer2">
        <div class="left_footer">
            <p>© Copyright 2011 - 2020. CMM Investment Consulting Group.
</p>
        </div>
        <div class="right_footer">
            <p>Made by QQRIQ</p>
        </div>
    </div>


</footer>
