<?php include_once("./master/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="text-center my-5">
                <img src="<?= $base_url ?>/img/blood-donoers-mail.png" alt="" class="img-fluid">
            </div>
            <p>Provide your information</p>
            <div class="shadow border my-3 p-4">
                <form action="">
                    <div class="my-2">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="user_name" aria-describedby="username">
                    </div>
                    <div class="my-2">
                        <label for="">Mobile</label>
                        <input type="number" class="form-control" name="user_mobile" aria-describedby="mobile">
                    </div>
                    <div class="my-2">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="user_email" aria-describedby="email">
                    </div>
                    <div class="my-2">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="user_address" aria-describedby="address">
                    </div>
                    <div class="my-2">
                        <label for="">City</label>
                        <input type="text" class="form-control" name="user_city" aria-describedby="city">
                    </div>
                    <div class="my-2">
                        <label for="">State</label>
                        <input type="text" class="form-control" name="user_state" aria-describedby="state">
                    </div>
                    <div class="my-2">
                        <label for="">Blood Group</label>
                        <select class="form-control" name="blood_group" id="">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="A1+">A1+</option>
                            <option value="A1-">A1-</option>
                            <option value="A1B+">A1B+</option>
                            <option value="A1B-">A1B-</option>
                            <option value="A2+">A2+</option>
                            <option value="A2-">A2-</option>
                            <option value="A2B+">A2B+</option>
                            <option value="A2B-">A2B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="Bombay Blood Group">Bombay Blood Group</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="my-2">
                        <label for="">Message</label>
                        <textarea class="form-control" name="user_message" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="mt-5">
                <img src="<?= $base_url ?>img/Capture.jpg" alt="" class="img-fluid mt-5 pt-md-5">
            </div>
        </div>
        <div class="col-lg-6">
            <a href="https://chat.whatsapp.com/DNWYh9zlSsS2zRO8AFZOoQ"><p class="blood-donor-wh font-weight-bold text-center mt-5">Join - Blood Donor's Whatsapp Group <i class="fa fa-whatsapp" aria-hidden="true"></i></p></a>
            <p class="mt-5 font-weight-bold">Blood Donation Facts</p>
            <hr>
            <p class="text-danger my-2">Who needs blood?</p>
            <p class="text-justify bl-don-content">
                Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly. Patients suffering from trauma, anemia, and other surgeries require only red blood cells, which is separated from your blood. The procedure of splitting blood components is called Cytapheresis. Similarly blood platelets are used for cancer patients undergoing chemotherapy or for those undergoing treatment for dengue fever etc. Fresh frozen plasma is used for patients having massive transfusions, plasma is used for burns and cryoprecipitate is used for hemophilia.
            </p>
            <p class="text-danger my-2">When is blood needed?</p>
            <p class="text-justify bl-don-content">
                Blood is needed at regular intervals and at all times as it has only finite time of storage. Red blood cells can be stored for about 42 days, fresh frozen plasma and cryoprecipitate for 365 days and blood platelets for 5 days.
            </p>
            <p class="text-danger my-2">Who can donate blood?</p>
            <p class="text-justify bl-don-content">
                Anyone above 18 years weighing more than 50 kgs (110 lbs) can donate blood.
            </p>
            <p class="text-danger my-2">Eligibility</p>
            <p class="text-justify bl-don-content">
                You should not be suffering from any of the following diseases or taking medicines for them # Hepatitis B, C
            </p>
            <p class="text-justify bl-don-content"># AIDS #Diabetes (are you under medication currently?)</p>
            <p class="text-justify bl-don-content"># Fits/ Convulsions (are you under medication currently?)</p>
            <p class="text-justify bl-don-content"># Cancer #Leprosy or any other infectious diseases</p>
            <p class="text-justify bl-don-content"># Any allergies (Only if you are suffering from severe symptoms)</p>
            <p class="text-justify bl-don-content"># Hemophilia/ Bleeding problems</p>
            <p class="text-justify bl-don-content"># Kidney disease</p>
            <p class="text-justify bl-don-content"># Heart disease</p>
            <p class="text-justify bl-don-content"># Hormonal disorders</p>
            <p class="text-justify bl-don-content"># Any other type of Jaundice (within 5 years)</p>
            <p class="text-justify bl-don-content"># Tuberculosis (within 2 years)</p>
            <p class="text-justify bl-don-content"># Chicken Pox (within 1 year)</p>
            <p class="text-justify bl-don-content"># Malaria (within 1 year)</p>
            <p class="text-justify bl-don-content"># Organ Transplant (within one year)</p>
            <p class="text-justify bl-don-content"># Blood Transfusion (within the last 6 months)</p>
            <p class="text-justify bl-don-content"># Pregnancy (within the last 6 months)</p>
            <p class="text-justify bl-don-content"># Blood Donation (within the last 3 months)</p>
            <p class="text-justify bl-don-content"># Major Surgery (within the last 3 months)</p>
            <p class="text-justify bl-don-content"># Small Pox Vaccination (within the last 3 weeks)</p>
            <p class="text-justify bl-don-content"># Hemoglobin deficiency / Anemia (recently)</p>
            <p class="text-justify bl-don-content"># Drastic weight loss (recently)</p>
            <p class="text-danger my-2">Tips for Donating</p>
            <p class="text-justify bl-don-content"># Please have a good meal at least 3 hours before donating blood.</p>
            <p class="text-justify bl-don-content"># Please accept the snacks offered to you after the donation, it is vital you have them. You are recommended to have a good meal later.</p>
            <p class="text-justify bl-don-content"># Please avoid smoking on the day before donating. You can smoke 3 hours after donation.</p>
            <p class="text-justify bl-don-content"># You will not be eligible to donate blood if you have consumed alcohol 48 hours before donation</p>
            <p class="text-justify bl-don-content"># "MTCT Blood Donors Guild" provides a 360-degree solution to the problem of blood shortage. We work with the objective of saving lives. We act as a channel connecting voluntary donors with those who need blood. We maintain a network with patients, hospitals, and donors.</p>
            <p class="text-justify bl-don-content"># Most patients believe that it is their responsibility to organize blood donors to meet the need. In other words, the search for blood begins after the need has arisen. This naturally would put a lot of pressure on the patient.</p>
            <p class="text-justify bl-don-content"># This also compromises on the safety of blood. It is an established fact that a voluntary blood donor is the safest source of blood.</p>
            <p class="text-justify bl-don-content"># Ideally, the blood units should be present in the Blood Bank before the patient is admitted. Voluntary blood donation drives at venues convenient to donors can easily ensure that this objective is met. This is reassuring to the patient, easy for the donor, and, more importantly, ensures availability of safe blood.</p>
            <p class="text-justify bl-don-content"># Blood Donation gives a proud feeling of touching someone’s life in such a beautiful way. It is an experience that no words can describe.</p>

        </div>
    </div>
    <div class="mt-5">
    <p class="text-primary font-weight-bold">BLOOD DONATION</p>
    </div>
    <div class="row my-3">
        <div class="col-lg-6">
            <p class="text-justify bl-don-content">
                <span class="text-primary font-weight-bold h4 pl-4">M</span>TCT Blood Donors Guild" is a poral initiated by Mother Teresa charitable Trust to lend a helping hand to the chronical ill people. It provides a 360-degree solution to the problem of blood shortage. We work with the objective of saving lives. We act as a channel connecting voluntary donors with those who need blood. We maintain a network with patients, hospitals and donors. Most patients believe that it is their responsibility to organize blood donors to meet the need. In other words, the search for blood begins after the need has arisen. This naturally would put a lot of pressure on the patient."MTCT Blood Donors Guild" volunteers help the patients by providing blood at short notice.
            </p>
        </div>
        <div class="col-lg-6">
            <p class="text-justify bl-don-content">This also compromises on the safety of blood. It is an established fact that a voluntary blood donor is the safest source of blood.Ideally the blood units should be present in the Blood Bank before the patient is admitted. Voluntary blood donation drives at venues convenient to donors can easily ensure that this objective is met. This is reassuring to the patient, easy for the donor, and, more importantly, ensures availability of safe blood.Blood Donation gives a proud feeling of touching someone’s life in such a beautiful way. It is an experience that no words can describe.Let us donate blood – Join MTCT blood Donor’s Guild. Save lives importance of education in a child’s life.</p>
        </div>
    </div>
</div>

<?php include_once("./master/footer.php"); ?>