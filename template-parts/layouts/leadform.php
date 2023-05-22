<div class="container w-75">
    <div class="row py-5">
        <div class="col">
            <div class="h2 text-upper text-center">Ready für True Coffee?</div>
            <div class="p text-center">
                Schön, dass wir dich von uns überzeugen konnten! Jetzt fehlen nur noch drei kleine Schritte für dein individuelles Angebot und deinem True Coffee steht nichts mehr im weg. Leg los:
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col">
            <form id="leadform" action="">
                <div class="tab">
                    <div class="h3 text-uppercase text-center">
                        Wie viele Personen können sich über echten Kaffee freuen?
                    </div>
                    <div class="row pt-5">
                        <div class="col-4">
                            <div class="form-check text-center">
                                <input class="form-check-input d-none" type="radio" name="imgbackground" id="eins-bis-neunzehn" value="">
                                <label for="eins-bis-neunzehn">
                                    <img src="/wp-content/uploads/2023/03/leadform_1_19.png" alt="1-19">
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check text-center">
                                <input class="form-check-input d-none" type="radio" name="imgbackground" id="zwanzig-bis-fuenfzig" value="">
                                <label for="zwanzig-bis-fuenfzig">
                                    <img src="/wp-content/uploads/2023/03/leadform_20_50.png" alt="20-50">
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check text-center">
                                <input class="form-check-input d-none" type="radio" name="imgbackground" id="mehr-als-fuenfzig" value="">
                                <label for="mehr-als-fuenfzig">
                                    <img src="/wp-content/uploads/2023/03/leadform_mehr_als_50.png" alt="Mehr als 50">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="h4 text-center mt-5">Frage 1/3</div>
                </div>
                <div class="tab">
                    <div class="h3 text-uppercase text-center">
                        Wie viele Kaffeeautomaten werden benötigt?
                    </div>
                    <div class="row pt-5">
                        <div class="col-4">
                            <div class="form-check text-center">
                                <input class="form-check-input d-none" type="radio" name="imgbackground" id="eine" value="">
                                <label for="eine">
                                    <img src="/wp-content/uploads/2023/05/Bildschirm­foto-2023-05-05-um-14.10.24.png" alt="Eine">
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check text-center">
                                <input class="form-check-input d-none" type="radio" name="imgbackground" id="zweibisfunf" value="">
                                <label for="zweibisfunf">
                                    <img src="/wp-content/uploads/2023/05/Bildschirm­foto-2023-05-05-um-14.10.36.png" alt="Zwei bis Fünf">
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check text-center">
                                <input class="form-check-input d-none" type="radio" name="imgbackground" id="mehralsfunf" value="">
                                <label for="mehralsfunf">
                                    <img src="/wp-content/uploads/2023/05/Bildschirm­foto-2023-05-05-um-14.10.42.png" alt="Mehr als Fünf">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="h4 text-center mt-5">Frage 2/3</div>
                </div>
                
                <div class="tab">
                    <div class="h3 text-uppercase text-center">
                        Du hast es geschafft! Bei wem dürfen wir uns melden?
                    </div>
                    <div class="row pt-5">
                        <div class="col-6 d-flex justify-content-center align-items-center">
                            <img src="/wp-content/uploads/2023/03/leadform_coffee.png">
                        </div>
                        <div class="col-6">
                            <p><input type="text" placeholder="Firma"></p>
                            <p><input type="text" placeholder="Name"></p>
                            <p><input type="email" placeholder="E-Mail"></p>
                            <p><input type="number" placeholder="Telefonnummer"></p>
                            <button type="submit" class="btn btn-primary mt-5">Senden</button>
                        </div>
                    </div>
                    <div class="h4 text-center mt-5">Frage 3/3</div>
                </div>
                <div style="overflow:auto;">
                <div style="float:right;" class="d-none">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
                </div>
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </form>
        </div>
    </div>
</div>