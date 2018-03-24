            <section class="about-area" id="appoinment">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-end align-items-center">
                        <div class="col-lg-6 col-md-12 about-left no-padding">
                            <img class="img-fluid" src="img/about-img.jpg" alt="">
                        </div>
                        <div class="col-lg-6 col-md-12 about-right no-padding">
                            <h1>Предварительная запись на <br> прием</h1>
                            <form class="booking-form" id="myForm" action="donate.php">
                                    <div class="row">
                                        <div class="col-lg-12 d-flex flex-column">
                                            <input name="name" placeholder="Имя пациента" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Имя пациента'" class="form-control mt-20" required="" type="text" required>
                                        </div>
                                        <div class="col-lg-6 d-flex flex-column">
                                            <input name="phone" placeholder="Номер телефона" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Номер телефона'" class="form-control mt-20" required="" type="text" required>
                                        </div>
                                        <div class="col-lg-6 d-flex flex-column">
                                            <input id="datepicker2" name="app-date" class="single-in mt-20"  onblur="this.placeholder = 'Дата прихода'" type="text" placeholder="Дата прихода" required>
                                        </div>
                                        <div class="col-lg-12 flex-column">
                                            <textarea class="form-control mt-20" name="message" placeholder="Ваше послание" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ваше послание'" required=""></textarea>
                                        </div>

                                        <div class="col-lg-12 d-flex justify-content-end send-btn">
                                            <button class="submit-btn primary-btn mt-20 text-uppercase ">Запись<span class="lnr lnr-arrow-right"></span></button>
                                        </div>

                                        <div class="alert-msg"></div>
                                    </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>