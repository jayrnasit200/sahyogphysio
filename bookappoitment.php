<?php
include_once 'layouts/header.php';
?>
   
        <div class="bookappoitment-container">
            <div class="book">
                <div class="description">
                    <h1><strong>Book</strong> your Ride</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                        id est laborum.
                    </p>
                    <div class="quote">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                    </div>
                    <ul>
                        <li>Super reliable service</li>
                        <li>24/7 customer srvice</li>
                        <li>GPS tracking and help</li>
                        <li>Wide range vehicle</li>
                    </ul>
                </div>
                <div class="form">
                    <form>
                        <div class="inpbox full">
                            <span class="flaticon-taxi"></span>
                            <select id="cars" name="cars">
                                <option value="">Select type of appoitment</option>
                                <option value="Physio">Physio</option>
                                <option value="Diet">Diet</option>
                            </select>
                        </div>

                        <div class="inpbox full">
                            <span class="flaticon-taxi"></span>
                            <select id="cars" name="cars">
                                <option value="">Select Docter</option>
                                <option value="Afreen">Dr.Afreen Jasani</option>
                                <option value="Nidhi">Dr.Nidhi Pavasiya</option>
                                <option value="Jigna">Dr.Jigna Ahir</option>
                                <option value="Sujita">Dr.Sujita Suvagiya</option>
                            </select>
                        </div>

                        <div class="inpbox">
                            <span class="flaticon-calendar"></span>
                            <input type="date" placeholder="Pickup Date" />
                        </div>
                        <div class="inpbox full1">
                            <span class="flaticon-taxi"></span>
                            <select id="cars" name="cars">
                                <option value="">Select Docter</option>
                                <option value="09:00">9:00</option>
                                <option value="00:30">9:30</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30">10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:30">12.00</option>
                                <option value="01:00">01:00</option>
                                <option value="01:30">01:30</option>
                                <option value="02:00">02:00</option>
                                <option value="02:30">02:30</option>
                                <option value="03:00">03:00</option>
                                <option value="03:30">03:30</option>
                                <option value="04:00">04:00</option>
                                <option value="04:30">04:30</option>
                                <option value="05:00">05:00</option>
                                <option value="05:30">05:30</option>
                                <option value="06:00">06:00</option>
                                <option value="06:30">06:30</option>
                                <option value="07:00">07:00</option>
                                <option value="07:30">07:30</option>
                            </select>
                        </div>
                        <div class="inpbox">
                            <span class="flaticon-user"></span>
                            <input type="text" placeholder="Full Name" />
                        </div>
                        <div class="inpbox">
                            <span class="flaticon-email"></span>
                            <input type="email" placeholder="Email" />
                        </div>

                        <button class="subt">Submit</button>
                        <button class="rst">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end book appoitmnet page -->
        <?php
include_once 'layouts/footer.php';
?>