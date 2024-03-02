<!-- top-section -->
<section>
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class=" col col-md-6 col-12 d-flex  all-justify-content-start pt-1">-->
    <!--                    <a href="mailto:principal.jhargramgmch@gmail.com" class="text-decoration-none pt-2">-->
    <!--                        <p class="text-black m-xs-0"><i class="bi bi-envelope text-lightblue"></i>&nbsp;-->
    <!--                       &nbsp;principal.jhargramgmch@gmail.com</p>-->
    <!--</p>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--                <div class="col col-md-6 col-12 d-flex all-justify-content-end  pt-1">-->
    <!--                    <a href="tel:+910000000000" class="text-decoration-none pt-2">-->
    <!--                        <p class="text-black m-xs-0"><i class="bi bi-telephone-forward text-lightblue"></i>&nbsp;-->
    <!--                            &nbsp;+918017295319-->
    <!--                        </p>-->
    <!--                    </a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--        </div>-->
    <!--    </section>-->
    <!-- top sectione ends -->
    <!-- brand section -->
    <section id="brand-section">
        <div class="container-fluid text-center bg-lightblue">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center p-3 mob-flx-clm">
                    <img src="<?=base_url('front')?>/images/logo/logo.png" class="height-70 me-3 d-none-one">
                    <h3 class="  text-white m-0 mob-text-bold">Jhargram Government Medical College</h3>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- navbar start -->
    <section class="sticky-top bg-l-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white border " id="main_navbar">
            <!----id="main_navbar"-->
            <div class="container p-0  align-items-center">
                <a class="navbar-brand d-none-two" href="#"><img src="assets/images/logo/logo.png"
                        class="height-70"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
  <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
</svg> -->
                </button>
                <!-- <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button> -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-sm-auto fw-regular fs-5 py-1">
                        <li class="nav-item">
                            <a class="nav-link active px-2" href="<?=base_url()?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="about.php">About</a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hospital
                            </a>
                            <ul class="dropdown-menu dropdown-men" aria-labelledby="navbarDropdown">
                                <!-- <li class="nav-item"><a class="dropdown-item" href="course.php">Courses</a></li> -->
                                <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle text-black" href="#" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Facilities
                                    </a>
                                    <ul class="dropdown-menu drop-shadow" aria-labelledby="navbarDropdown1">
                                        <!--<li class="nav-item"><a class="dropdown-item" href="#">Enrollment students-->
                                        <!--        data</a></li>-->
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="./Assets for JGMCH/OPD_SCHEDULE_OF_JGMCH.pdf">OPD Schedule</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="dept.php?dept=beds">No
                                                of beds</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Quarters</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Clinical
                                                materials</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="https://onlinehmis.wbhealth.gov.in/Login.aspx">OPD ticket
                                                link</a>
                                        </li>

                                        <!--<li class="nav-item"><a class="dropdown-item" href="#">Admission notice</a></li>-->
                                    </ul>
                                </li>


                                <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Information and Services
                                    </a>
                                    <ul class="dropdown-menu drop-shadow" aria-labelledby="navbarDropdown1">
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="./Assets for JGMCH/General_Information_JGMCH.pdf">General
                                                information</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#"> Emergency
                                                service</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="./Assets for JGMCH/OPD SCHEDULE OF JGMCH 19.7.2023.pdf">
                                                Outdoor patient service</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Indoor patient
                                                service</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Critical Care
                                                Service</a>
                                        </li>
                                        <li><a class="dropdown-item" href="daigonostic.php">Diagnostic Service</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Immunization service</a></li>
                                        <li><a class="dropdown-item" href="24x7service.php">24x7 Services</a></li>
                                        <li><a class="dropdown-item" href="#">Responsibility of the user</a></li>

                                    </ul>
                                </li>

                                <!-- <li class="nav-item"><a class="dropdown-item" href="/">Scholarship</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="/">Notice</a></li> -->
                            </ul>
                        </li>
                        <li>





                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administration
                            </a>
                            <ul class="dropdown-menu dropdown-men" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="dropdown-item"
                                        href="https://jgmch.ac.in/principal.php">Principal</a></li>
                                <!-- <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle text-black" href="#" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Emergency Services

                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="admissionprocedure.php">Emergency 24x7</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="assets/images/admission/admission-form.pdf">Blood Bank</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="assets/images/admission/admission-form.pdf">Ambulance</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="assets/images/admission/admission-form.pdf"> Laboratory service</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Admission notice</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Outdoor Patient service
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <li class="nav-item"><a class="dropdown-item" href="results.php">Results</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="assets/images/admission/rankwisemeritlist.pdf">Merit
                                                list</a></li>
                                    </ul>
                                </li> -->
                                <li><a class="dropdown-item" href="https://jgmch.ac.in/msvp.php">MSVP</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="https://jgmch.ac.in/dean.php"> Dean
                                        of students affairs</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="Assets for JGMCH/Administration.pdf">Administrative staff</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">College council</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Rogi kalyan samiti</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Academics
                            </a>
                            <ul class="dropdown-menu dropdown-men" aria-labelledby="navbarDropdown">
                                <!-- <li class="nav-item"><a class="dropdown-item" href="course.php">Courses</a></li> -->
                                <li class="nav-item"><a class="dropdown-item" href="meu.php">MEU (Medical Education
                                        Unit)</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="Assets for JGMCH/DocScanner 23-Nov-2023 6-09 pm.pdf">IEC (Inst. Ethics
                                        committee)</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Skill Lab</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Central Research
                                        Laboratory</a></li>

                                <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle text-black" href="#" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Publications
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <!--<li class="nav-item"><a class="dropdown-item" href="#">Enrollment students-->
                                        <!--        data</a></li>-->
                                        <li class="nav-item"><a class="dropdown-item" href="#">Inst. Publication</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Dept. Publication</a>
                                        </li>
                                        <!--<li class="nav-item"><a class="dropdown-item" href="#">Admission notice</a></li>-->
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Central Library</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">CME & Conferance</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Research</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="">Faculty Login</a></li>

                                <!-- <li class="nav-item"><a class="dropdown-item" href="/">Scholarship</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="/">Notice</a></li> -->
                            </ul>
                        </li>
                        <li>


                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Course
                            </a>
                            <ul class="dropdown-menu dropdown-men" aria-labelledby="navbarDropdown">
                                <!-- <li class="nav-item"><a class="dropdown-item" href="course.php">Courses</a></li> -->
                                <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle text-black" href="#" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Under Graduate Courses
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <!--<li class="nav-item"><a class="dropdown-item" href="#">Enrollment students-->
                                        <!--        data</a></li>-->
                                        <li class="nav-item"><a class="dropdown-item" href="#">MBBS</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Para Medical
                                                Courses</a>
                                        </li>
                                        <!--<li class="nav-item"><a class="dropdown-item" href="#">Admission notice</a></li>-->
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle text-black" href="#" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Post Graduate Courses
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <!--<li class="nav-item"><a class="dropdown-item" href="#">Enrollment students-->
                                        <!--        data</a></li>-->
                                        <li class="nav-item"><a class="dropdown-item" href="#">DNB </a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">MD/MS</a>
                                        </li>
                                        <!--<li class="nav-item"><a class="dropdown-item" href="#">Admission notice</a></li>-->
                                    </ul>
                                </li>
                                <!-- <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Result & Merit list
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <li class="nav-item"><a class="dropdown-item" href="results.php">Results</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="assets/images/admission/rankwisemeritlist.pdf">Merit
                                                list</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li><a class="dropdown-item" href="facilities.php">Facilities</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="/">Scholarship</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="/">Notice</a></li> -->
                            </ul>
                        </li>




                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Students
                            </a>
                            <ul class="dropdown-menu dropdown-men" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="dropdown-item"
                                        href="https://jgmch.ac.in/studentlist.php">Students List (Year wise)</a>
                                </li>
                                <!-- <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle text-black" href="#" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Admission
                                    </a> -->
                                <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <li class="nav-item"><a class="dropdown-item" href="#">Enrollment students
                                               data</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="admissionprocedure.php">Admission
                                                procedure</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="assets/images/admission/admission-form.pdf">Admission form</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Admission notice</a></li>
                                    </ul> -->
                        </li>
                        <!-- <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Result & Merit list
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <li class="nav-item"><a class="dropdown-item" href="results.php">Results</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="assets/images/admission/rankwisemeritlist.pdf">Merit
                                                list</a></li>
                                    </ul>
                                </li> -->
                        <li><a class="dropdown-item" href="result.php">Result</a></li>
                        <li><a class="dropdown-item" href="https://jgmch.ac.in/calender.php">* Academic Calendar</a>
                        </li>
                        <li><a class="dropdown-item" href="#">student notice board</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="#"> Help Desk</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="#">Prospectus</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="facility.php"> Facility</a></li>
                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admission
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li class="nav-item"><a class="dropdown-item"
                                        href="assets/images/admission/Admission_Challan_Copy.pdf">Admission fee</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="assets/images/admission/Check List__2023.pdf">Checklist documents for
                                        admission process,<br> session 23-24</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="assets/images/admission/Information_bulletin_councelling.pdf">Information
                                        bulletin and councelling scheme</a></li>
                                <li class="nav-item"><a class="dropdown-item"
                                        href="assets/images/admission/Notice_cum_bulletin.pdf">Notice cum bulletin
                                        for NEET UG 23 Counseling</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hostel
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li class="nav-item"><a class="dropdown-item"
                                        href="assets/images/admission/About the hostel & Rules of the hostel-1-2.pdf">About
                                        The Hostel </a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="/hostel_forms.php">Forms</a>
                                </li>

                                <li class="nav-item"><a class="dropdown-item"
                                        href="assets/images/admission/About the hostel & Rules of the hostel-3-4.pdf">Rules</a>
                                </li>

                                <li class="nav-item"><a class="dropdown-item"
                                        href="assets/images/admission/Rules regarding the hostel clearance certificate.pdf">Hostel
                                        Clearance Rules.</a>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="contact.php">Contacts </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    </li>




                    <li class="nav-item dropdown">
                        <a class="nav-link px-2 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Citizens Charter
                        </a>
                        <ul class="dropdown-menu dropdown-men" aria-labelledby="navbarDropdown">
                            <li class="nav-item"><a class="dropdown-item" href="General Information.php">General
                                    Information</a></li>
                            <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle text-black" href="#" id="navbarDropdown1"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Emergency Services

                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                    <!--<li class="nav-item"><a class="dropdown-item" href="#">Enrollment students-->
                                    <!--        data</a></li>-->
                                    <li class="nav-item"><a class="dropdown-item" href="#">Emergency 24x7</a></li>
                                    <li class="nav-item"><a class="dropdown-item"
                                            href="assets/images/admission/admission-form.pdf">Blood Bank</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item"
                                            href="assets/images/admission/admission-form.pdf">Ambulance</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item"
                                            href="assets/images/admission/admission-form.pdf"> Laboratory
                                            service</a>
                                    </li>
                                    <!--<li class="nav-item"><a class="dropdown-item" href="#">Admission notice</a></li>-->
                                </ul>
                            </li>
                            <!-- <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Outdoor Patient service
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <li class="nav-item"><a class="dropdown-item" href="results.php">Results</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="assets/images/admission/rankwisemeritlist.pdf">Merit
                                                list</a></li>
                                    </ul>
                                </li> -->
                            <li><a class="dropdown-item"
                                    href="./Assets for JGMCH/OPD SCHEDULE OF JGMCH 19.7.2023.pdf">Outdoor Patient
                                    service</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#"> Indoor Patient service</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="#"> Responsibility Of The User</a>
                            </li>
                        </ul>
                    </li>



                    <!-- <li>
                          
                          <li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Citizens
                            </a>
                            <ul class="dropdown-menu dropdown-men" aria-labelledby="navbarDropdown">
                                <li class="nav-item"><a class="dropdown-item" href="/genarel.php"> General Information</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="/">Blood Bank </a></li>
                                <li class="nav-item"><a class="dropdown-item" href="/">Ambulance</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="/">Labortary Service </a></li>
                                
                            </ul>
                        </li> -->




                    <li class="nav-item dropdown">
                        <a class="nav-link px-2 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Committee
                        </a>
                        <ul class="dropdown-menu dropdown-men" aria-labelledby="navbarDropdown">
                            <li class="nav-item"><a class="dropdown-item"
                                    href="Assets for JGMCH/DocScanner 23-Nov-2023 6-09 pm.pdf"> Ethics committee</a>
                            </li>
                            <!-- <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle text-black" href="#" id="navbarDropdown1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Emergency Services

                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="admissionprocedure.php">Emergency 24x7</a></li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="assets/images/admission/admission-form.pdf">Blood Bank</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="assets/images/admission/admission-form.pdf">Ambulance</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item"
                                                href="assets/images/admission/admission-form.pdf"> Laboratory service</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Admission notice</a></li>
                                    </ul>
                                </li> -->
                            <!-- <li class="dropdown">
                                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Outdoor Patient service
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <li class="nav-item"><a class="dropdown-item" href="results.php">Results</a>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="assets/images/admission/rankwisemeritlist.pdf">Merit
                                                list</a></li>
                                    </ul>
                                </li> -->
                            <li><a class="dropdown-item"
                                    href="committee.php?comt=NMC Inspection And Monitoring Committee">NMC Inspection
                                    and Monitoring Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=curriculum committee">Curriculum Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=anti ragging commitee">Anti Ragging Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=SCIENTIFIC REVIEW COMMITTEE">Scientific Review
                                    Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=library committee">Library Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=Skill Lab Committee">Skill Lab Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=purchase committee">Purchase Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=Tender Committee">Tender Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=hostel committee">Hostel Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item" href="committee.php?">Cultural
                                    Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=college website committee">Website Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=canteen committee">Canteen Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=gender harassment committee">Gender Harassment
                                    Committee</a></li>
                            <li class="nav-item"><a class="dropdown-item"
                                    href="committee.php?comt=Student Grivance Redressal Committee">Student Grivance
                                    Redressal Committee
                                </a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link px-2" href="gallery.php"> Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="Department.php"> Department</a>
                    </li>


                    <!-- <div class="nav-item">
                                <button class="dropdown-toggle nav-dept" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="true">
                                    Department
                                </button> -->
                    <!-- <ul class="dropdown-menu dropdown-menu1">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                            <li class="nav-item"><a class="dropdown-item"
                                                        href="anatomy.php">Anatomy</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="">Academics</a></li>
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="anaesthesiology.php">Anaesthesia</a></li>
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="biochemistry.php">Bio-chemistry</a></li>
                                                        

                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="chestmedicine.php">Chest Medicine</a>
                                                </li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="communitymedicine.php">Community Medicine</a>
                                                </li>
                                                
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="dermatology.php">Dermatology</a></li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="dentistry.php">Dentistry</a>
                                                </li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="emergencymedicine.php">
                                                        Emergency Medicine</a></li>
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="eye.php">Eye</a>
                                                </li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="assets/images/faculty/DOCTOR-LIST.pdf">Faculty Details</a></li>
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="forensimedicine.php"> Forensic Medicine and Toxicology</a></li>
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="generalmedicine.php">General
                                                        Medicine</a></li>
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="generalsurgery.php">General
                                                        Surgery</a></li>
                                               
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="microbiology.php">Microbiology</a></li>
                                               
                                              
                                                
                                               
                                            </div>
                                            <div class="col-md-6 col-12">
                                            
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="">Non Teaching Staff</a></li>
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="orthopedics.php">Orthopaedics</a>
                                                </li>
                                               
                                            <li class="nav-item"><a class="dropdown-item"
                                                        href="otorinolayngology (Ent).php">Otorinolayngology (Ent)</a>
                                                </li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="obstetricsgynaecology.php">Obstetrics & Gynaecology</a>
                                                </li>
                                               
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="paediatricmedicine.php">Paediatric Medicine</a></li>
                                                
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="psychiatry.php">Psychiatry</a>
                                                </li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="pathology.php">Pathology</a>
                                                </li>
                                                
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="pediatrics.php">Pediatrics</a>
                                                </li>
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="physiology.php">Physiology</a>
                                                </li>
                                                <li class="nav-item"><a class="dropdown-item" href="pharmacology.php">
                                                        Pharmacology</a></li>
                                               
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="">Residents</a></li>
                                                
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="radiotherapy.php">Radiotherapy</a></li>
                                                        <li class="nav-item"><a class="dropdown-item"
                                                        href="radiodiganosis.php">Radio-Diagnosis</a>
                                                </li>
                                               
                                               
                                               
                                               
                                                <li class="nav-item"><a class="dropdown-item"
                                                        href="respiratorymedicine.php">Respiratory Medicine</a></li>
                                                
                                               
                                               
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </li> -->


                    <!-- <li class="nav-item">
                            <a class="nav-link px-2" href="publication.php">Publication</a>
                        </li> -->
                    <!-- <li class="nav-item">
                            <a class="nav-link px-2" href="library.php">Library</a>
                        </li> -->

                    <!-- <li class="nav-item">
                            <a class="nav-link px-2" href="events.php">Events</a>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link px-2" href="contact.php">Contacts</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar section ends -->