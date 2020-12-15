<?php 
    /* Template Name: Register Template */
    get_header(); 
    $query = array();
    parse_str($_SERVER['QUERY_STRING'], $query);
?>

<div class="d-flex text__centered py-3 flex-column">
    <div class="form__submit">
        <div class="d-flex justify-content-center position-relative">
            <img class="text__centered__content__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/world.svg" alt="World">
            <div class="d-flex flex-column align-items-center text-center text__centered__content">
                <h2>REGISTER NOW</h2>
                <p style="width: 61%;">After we receive and review your information, we will contact you about the following procedures.</p>
            </div>
        </div>

        <form id="post-register">
            <div class="d-flex flex-column register__page__content ">
                <input id="siteTitle"   type="text"  name="siteTitle" value="<?= get_permalink((int)$query['id']); ?>" class="d-none">
                <input id="siteUrl"     type="text"  name="siteUrl"   value="<?= get_the_title((int)$query['id']); ?>" class="d-none">
                <input id="firstName"   type="text"  name="firstName"   placeholder="First Name"    required>
                <input id="lastName"    type="text"  name="lastName"    placeholder="Last Name"     required>
                <input id="dateOfBirth" type="date"  name="dateOfBirth" placeholder="Date of Brith" required>
                <input id="phoneNumber" type="tel"   name="phoneNumber" placeholder="Phone Number"  required>
                <input id="email"       type="email" name="email"       placeholder="Email"         required>
            
                <select name="university" id="university">
                    <option>University</option>
                    <option value="Primary School">Primary School</option>
                    <option value="High School">High School</option>
                    <option value="University">University</option>
                </select>
                <input id="department" type="text" name="department" placeholder="Department">
                <div class="d-flex flex-column my-2">
                    <p class="text-center register__page__content__text">In which year you were Registered in the University?</p>
                    <select name="yearOfUni" id="yearOfUni">
                        <option value="2002" selected>2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                    </select>
                </div>
                <div class="d-flex flex-column my-2">
                    <p class="text-center register__page__content__text">Year of Studies</p>
                    <select name="yearOfStudies" id="yearOfStudies">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="d-flex flex-column my-2">
                    <p class="text-center register__page__content__text">Number of Exams Passed</p>
                    <select name="numberOfExams" id="numberOfExams">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="d-flex flex-column my-2">
                    <p class="text-center register__page__content__text">English Level</p>
                    <select name="englishLevel" id="englishLevel">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <input id="avgGrade" type="tel" name="avgGrade" placeholder="Enter your average grade" required>
                
                <div class="d-flex flex-column my-2">
                    <p class="text-center register__page__content__text mb-2">Does your father work?</p>
                    <div class="d-flex justify-content-between">
                        <div class="register__page__content__parents">
                            <input type="radio" id="yes" name="fatherWork" value="Yes" checked>
                            <label class="w-100 text-center" for="male">Yes</label>
                        </div>
                        <div class="register__page__content__parents">
                            <input type="radio" id="no" name="fatherWork" value="No">
                            <label class="w-100 text-center" for="male">No</label>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column my-2">
                    <p class="text-center register__page__content__text mb-2">Does your mother work?</p>
                    <div class="d-flex justify-content-between">
                        <div class="register__page__content__parents">
                            <input type="radio" id="yes" name="motherWork" value="Yes" checked>
                            <label class="w-100 text-center" for="male">Yes</label>
                        </div>
                        <div class="register__page__content__parents">
                            <input type="radio" id="no" name="motherWork" value="No">
                            <label class="w-100 text-center" for="male">No</label>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex flex-column my-2">
                    <p class="text-center register__page__content__text">Where did you hear about Star Work & Travel USA?</p>
                    <select name="starWorkInfo" id="starWorkInfo">
                        <option value="Facebook" selected>Facebook</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Friend">Friend</option>
                    </select>
                </div>
                <button class="apply__button mt-3"> 
                    <input type="submit" value="SUBMIT & APPLY" id="submitvals">
                </button>
            </div>
        </form>
    </div>

    <div class="form__success d-flex flex-column justify-content-center">
        <div class="form__success__title justify-content-center">
            <h3 class="title text-center">Thank you for your application, we will be in touch with you shortly!<br /></h3>
        </div>
        <div class="trigger"></div>
        <svg version="1.1" id="tick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 37" xml:space="preserve"> 
            <path class="circ path" style="fill:none;stroke:#396801;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" d="M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z" />
            <polyline class="tick path" style="fill:none;stroke:#396801;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;" points="11.6,20 15.9,24.2 26.4,13.8 "/>
        </svg>
    </div>

</div>

<?php get_footer(); ?>