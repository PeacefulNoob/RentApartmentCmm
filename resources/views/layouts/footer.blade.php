<footer class="">

    <div class="footer1 row paddinglra mx-0">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <ul class="list-unstyled footerLista">
                <li>
                    <h4>OUR SERVICES</h4>
                </li>
        
                <li>
                    <a target="_blank" href="/rent-a-car"> Car rental</a>
                </li>
                <li>
                    <a target="_blank" href="/rent-a-yacht"> Yacht rental</a>
                </li>
                <li>
                    <a target="_blank" href="/transfers">Transfers</a>
                </li>
                <li>
                    <a target="_blank" href="/excoursions"> Excursions </a>
                </li>
                <li>
                    <a target="_blank" href="/faqs"> FaQ </a>
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
                        <div > <p class="bold pr-1"> Adress:</p></div>
                        <div>
                            <p>Jadranski put b.b. Budva, Montenegro</p>
                            <p> Adress 2, Moskow, Russia</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="d-flex">
                        <div><p class="bold pr-1"> Telefon:</p></div>
                        <div>    <p> + 382 68 010 879</p></div>
                    </div>
                </li>
                <li>
                    <div class="d-flex">
                        <div><p class="bold pr-1"> Email adresa:</p></div>
                        <div>  <p>office@cmm-montenegro.com</p></div>
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
                    <a target="_blank" href="#">Ministery of Economy</a>
                </li>
                <li>
                    <a target="_blank" href="#">Ministery of Finance </a>
                </li>
                 <li>
                    <ul>
                        <li class="bold">Facebook</li>
                        <li class="bold">Instagram</li>
                        <li class="bold">Twitter</li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <ul class="list-unstyled footerLista">
                <li>
                    <h4>LAST BLOGS</h4>
                </li>
                @foreach($blogs as $blog)
                <li>
                    <a target="_blank" href="/single_news/{{$blog->id}}">{{$blog->title}}</a>
                </li>
                @endforeach
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
