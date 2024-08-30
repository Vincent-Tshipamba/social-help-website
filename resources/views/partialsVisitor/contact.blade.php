<section class="appointment" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mt-3">
                    <h2>Prenez contact avec nous pour plus d'informations</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <form class="form" action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="nom" type="text" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Adresse e-mail">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="téléphone" type="text" placeholder="Téléphone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0"><span
                                        class="current">Département</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">Département</li>
                                        <li data-value="2" class="option">Clinique cardiaque</li>
                                        <li data-value="3" class="option">Neurologie</li>
                                        <li data-value="4" class="option">Dentisterie</li>
                                        <li data-value="5" class="option">Gastro-entérologie</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0"><span
                                        class="current">Médecin</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">Médecin</li>
                                        <li data-value="2" class="option">Dr. Akther Hossain</li>
                                        <li data-value="3" class="option">Dr. Dery Alex</li>
                                        <li data-value="4" class="option">Dr. Jovis Karon</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input type="text" placeholder="Date" id="datepicker">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Écrivez votre message ici....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Prendre un rendez-vous</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="{{ asset('img/helpinghands.png') }}" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
