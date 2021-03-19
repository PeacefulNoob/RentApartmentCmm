<div class="modal fade bd-example-modal-lg p-0" id="excoursions_cetinje_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl m-0" role="document">
      <div class="modal-content modal-image-full">
    <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cetinje and Mountain Lovćen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> 
        <div class="modal-body  pt-2">
            <div class="">
                <h3 class="title py-2">Cetinje and Mountain Lovćen</h3>
                <h5 class="text py-2">
                  The center of Montenegrin authenticity and heritage.
                </h5>
                <p>Lorem ipsum dolor sit amet, ex veri liberavisse duo. Vivendo qualisque voluptatum duo id. His omittam accusata at. Veri primis eum an, eu eos tota aliquip molestie, duo vide minimum efficiantur an. Ad mucius pertinacia incorrupte duo, alienum repudiare eu sed. Duo id debitis efficiantur, suavitate voluptatum adversarium ea cum. Erant assentior ea usu. Has ea quis torquatos, eum no errem causae persius. Eu vix quem graeci, ex vis omnium definitionem, mel no tantas omnesque facilisis. Voluptua conceptam adversarium ne his, modus partem tincidunt est ea, mei essent tritani et. Eum ne justo ubique aperiam, eum erat assum laboramus at. Assum dolore volutpat ad usu, est stet magna assum ex. Duo et latine suscipit. Ut discere albucius facilisi sea. Vix ferri inermis complectitur no. Quem alii oporteat has no, at option voluptua delicatissimi cum. Mel noster impedit pericula eu, mea autem prompta comprehensam in. Ea eum offendit interesset, ea enim dicat vim. Ludus nullam primis eos ad, nonumy aliquando incorrupte at vis, probo dicta legimus ea vis. Pri et elitr minimum, vel ex mucius posidonium, id repudiare patrioque nec. Vim ceteros gloriatur in, ex dicant euripidis percipitur usu. No bonorum fastidii moderatius nam. Sumo prompta volumus cum ex. An usu simul omnium. Sale doming elaboraret ea sit.</p>
            </div>
            <div class="row">
              <div class="col-12 col-xl-6 col-lg-6">
                <h3>Included in price</h3>
                <p>Ea eum offendit interesset, ea enim dicat vim. Ludus nullam primis eos ad, nonumy aliquando incorrupte at vis, probo dicta legimus ea vis. Pri et elitr minimum, vel ex mucius posidonium, id repudiare patrioque nec. Vim ceteros gloriatur in, ex dicant euripidis percipitur usu. No bonorum fastidii moderatius nam. Sumo prompta volumus cum ex. An usu simul omnium. Sale doming elaboraret ea sit.</p>
              </div>
              <div class="col-12 col-xl-6 col-lg-6 p-0">
                <form action="{{ route('contact.store.main') }}" method="POST" class="form-property">
                    {{ csrf_field() }}
                    <input type="hidden" class="form-control" name="title" id="title" value="Cetinje Excoursion">

                    <div class="firstCarForm">
                        <div class="form-group text-center">
                            <h3> Find a perfect car for your stay in Montenegro </h3>
                        </div>
                        <div class="form_inquiry">
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left">
                                    <label for="pud">PICK-UP DATE</label>
                                    <input type="date" class="form-control" name="pud" id="pud"
                                        placeholder="Put the pick up date">
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right ">
                                    <label for="dofd">DROP-OFF DATE</label>
                                    <input type="date" class="form-control" name="dofd" id="dofd"
                                        placeholder="Put the drop off date">
                                </div>
                            </div>
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left border-top">
                                    <label for="put">PICK-UP TIME</label>
                                    <input type="time" class="form-control" name="put" id="put"
                                        placeholder="Put the pick up time">
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="doft">DROP-OFF TIME</label>
                                    <input type="time" class="form-control" name="doft" id="doft"
                                        placeholder="Put the drop off time">
                                </div>
                            </div>
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left border-top">
                                    <label for="pul">{{__('others.pickupl')}}</label>
                                    <input type="text" class="form-control" name="pul" id="pul"
                                        placeholder="{{__('others.pickupl')}}">
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="dofl">{{__('others.dropupl')}}</label>
                                    <input type="text" class="form-control" name="dofl" id="dofl"
                                        placeholder="{{__('others.dropupl')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group btnI text-center">
                          <div  class="btn btn-inquiry nextCarForm">BOOK YOUR CAR</div>
                          <p>Book your stay through email</p>
                      </div>
                    </div>
                      <div class="secondCarForm">
                        <div class="topForm stepBackCar"><p>step back</p></div>
                       <div class="form-group text-center">
                            <h3> Just one more step and you are done. Afterwards, we will contact you back. </h3>
                        </div>
                        <div class="form_inquiry">
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left">
                                    <label for="name">NAME</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="{{__('others.real_name')}}" required> 
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right ">
                                    <label for="surname">SURNAME</label>
                                    <input type="text" class="form-control" name="surname" id="surname"
                                        placeholder="{{__('others.surname')}}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                </div>
                            </div>
                            <div class="form-row m-0">
                                <div class="form-group col-md-6 form_inquiry_left border-top">
                                    <label for="phoneNo">PHONE NUMBER</label>
                                    <input type="text" class="form-control" name="phoneNo" id="phoneNo"
                                        placeholder="{{__('others.phone_no_f')}}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                </div>
                                <div class="form-group col-md-6 form_inquiry_right border-top">
                                    <label for="email">E-MAIL</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="{{__('others.e-adress')}}" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group btnI text-center">
                          <button type="submit" class="btn btn-inquiry sendInq" >SEND INQURY</button>
                          <p>Our representative will contact you back through e-mail with the confirmation as soon as possible.</p>
                      </div>

                      </div>

                     

                </form>
            </div>
            </div>
            <h1>Lovcen Mountain brings the authentic spirit of Montenegrin people.</h1>

        </div>
          <button type="button" class="btn modal-button " data-dismiss="modal">BACK TO ALL EXCURSIONS</button>
      </div>
    </div>
  </div>