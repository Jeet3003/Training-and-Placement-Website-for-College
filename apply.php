<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Apply</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

   
  </head>
  <body>
     <div class="above">
     <a href="#instagram"><span class="fab fa-instagram"></span>
      <a href="#facebook"><span class="fab fa-facebook-f"></span>
      <a href="#twitter"><span class="fab fa-twitter"></span>
    </div>
    <div class="header">
      <a href="#default" class="logo">Universal College of Engineering</a>
      <div class="header-right">
        <a class="home" href="index.php">Home</a>
        <a class="seminar" href="seminar.php">Seminar</a>
        <a class="active" href="#apply">Apply</a>
        <a href="index.php#contact">Contact</a>
        <a href="index.php#aboutus">About</a>
      </div>
    </div>
    <section class="text-gray-700 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20">
          <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
            <h1
              class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"
            >
              Apply
            </h1>
            <div class="h-1 w-20 bg-indigo-500 rounded"></div>
          </div>
        </div>
        <div class="flex flex-wrap -m-4">
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/1skillbit.jpg"
                alt="skillbit logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Font End Development
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                SkillBit
              </h2>
              <p class="leading-relaxed text-base">
                SkillBit is a leading staffing and recruitment company engaged
                in talent searching assignments for skilled and talented
                candidates for the industry.
              </p>
              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo1"
                onclick="myFunction1()"
              >
                Apply now
              </button>
              
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/2IIFL.jpg"
                alt="IIFL logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Finance
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                IIFL securities limited
              </h2>
              <p class="leading-relaxed text-base">
                IIFL is a financial services conglomerate that was started by a
                group of passionate entrepreneurs in 1995. The
                <span id="dots2">...</span
                ><span id="more2"
                  >genesis of IIFL lies in the power of dreaming big and
                  believing in your dreams. IIFL was the pioneer in the retail
                  broking industry with its launch of a 5paisa trading platform
                  which offered the lowest brokerage in the industry and the
                  freedom from traditional ways of transacting. Our strength has
                  been to continuously innovate and reinvent ourselves. IIFL's
                  evolution from an entrepreneurial startup in 1995 to a full
                  range diversified financial services group is a story of
                  steady growth by adapting to the dynamic business environment,
                  without losing focus on our core domain of financial
                  services.</span
                >
              </p>
              <button type="button" id="read2" onclick="read2()">
                Read more
              </button>
              <script type="text/javascript">
                var i2 = 0;
                function read2() {
                  if (!i2) {
                    document.getElementById("more2").style.display = "inline";
                    document.getElementById("dots2").style.display = "none";
                    document.getElementById("read2").innerHTML = "Read Less";
                    i2 = 1;
                  } else {
                    document.getElementById("more2").style.display = "none";
                    document.getElementById("dots2").style.display = "inline";
                    document.getElementById("read2").innerHTML = "Read More..";
                    i2 = 0;
                  }
                }
              </script>
              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo2"
                onclick="myFunction2()"
              >
                Apply now
              </button>
              
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/3EarthFirm.jpg"
                alt="EarthFirm logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Architecture/Civil Engineer
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                EarthFirm Architects
              </h2>
              <p class="leading-relaxed text-base">
                Earthfirm Architects is a full-service architecture and interior
                design resource that concentrates on the built
                <span id="dots3">...</span
                ><span id="more3"
                  >narrative - architecture, urban design, and landscape - to
                  make vital, exciting destinations out of clients' tangible and
                  intangible requirements. It is a scalable, modular company,
                  combining the strengths of its own office with a highly
                  talented and experienced network of consulting architects,
                  designers, engineers, and other specialists. In particular,
                  Earthfirm Architects revel in projects that pose unique
                  challenges and require unexpected, innovative, and highly
                  creative solutions.</span
                >
              </p>
              <button type="button" id="read3" onclick="read3()">
                Read more..
              </button>
              <script type="text/javascript">
                var i3 = 0;
                function read3() {
                  if (!i3) {
                    document.getElementById("more3").style.display = "inline";
                    document.getElementById("dots3").style.display = "none";
                    document.getElementById("read3").innerHTML = "Read Less";
                    i3 = 1;
                  } else {
                    document.getElementById("more3").style.display = "none";
                    document.getElementById("dots3").style.display = "inline";
                    document.getElementById("read3").innerHTML = "Read More";
                    i3 = 0;
                  }
                }
              </script>
              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo3"
                onclick="myFunction1()"
              >
                Apply now
              </button>
              <script>
                function myFunction3() {
                  var x3 = document.getElementById("Demo3");
                  if (x3.innerHTML === "Apply now") {
                    x3.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/4timebusiness.jpg"
                alt="Timebusiness logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Graphic Design
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Times Business Solutions
              </h2>
              <p class="leading-relaxed text-base">
                Times Business Solutions (TBS) - a division of Times Internet
                Limited-the-life interactive-arm of the Times Group,<span
                  id="dots4"
                  >...</span
                ><span id="more4">
                  provides global internet users interactive media to provide
                  support, assistance, and guidance throughout their life.</span
                >
              </p>
              <button type="button" id="read4" onclick="read4()">
                Read more
              </button>
              <script type="text/javascript">
                var i4 = 0;
                function read4() {
                  if (!i4) {
                    document.getElementById("more4").style.display = "inline";
                    document.getElementById("dots4").style.display = "none";
                    document.getElementById("read4").innerHTML = "Read Less";
                    i4 = 1;
                  } else {
                    document.getElementById("more4").style.display = "none";
                    document.getElementById("dots4").style.display = "inline";
                    document.getElementById("read4").innerHTML = "Read More";
                    i4 = 0;
                  }
                }
              </script>
              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo4"
                onclick="myFunction4()"
              >
                Apply now
              </button>
              <script>
                function myFunction4() {
                  var x4 = document.getElementById("Demo4");
                  if (x4.innerHTML === "Apply now") {
                    x4.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/5Ayush.jpg"
                alt="Ayush logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Mechanical Engineering
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Ayush Healthcare Private Limited
              </h2>
              <p class="leading-relaxed text-base">
                Ayush Healthcare Private Limited is a product and service
                provider. We have herbal medicines as well as homeopathic<span
                  id="dots5"
                  >...</span
                ><span id="more5">
                  medicines. Our network is connected to PAN India by delivery
                  systems. We deliver our genuine products with a
                  guarantee.</span
                >
              </p>
              <button type="button" id="read5" onclick="read5()">
                Read more
              </button>
              <script type="text/javascript">
                var i5 = 0;
                function read5() {
                  if (!i5) {
                    document.getElementById("more5").style.display = "inline";
                    document.getElementById("dots5").style.display = "none";
                    document.getElementById("read5").innerHTML = "Read Less";
                    i5 = 1;
                  } else {
                    document.getElementById("more5").style.display = "none";
                    document.getElementById("dots5").style.display = "inline";
                    document.getElementById("read5").innerHTML = "Read More";
                    i5 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo5"
                onclick="myFunction5()"
              >
                Apply now
              </button>
              <script>
                function myFunction5() {
                  var x5 = document.getElementById("Demo5");
                  if (x5.innerHTML === "Apply now") {
                    x5.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/6venus.jpg"
                alt="Venus logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Social Media Marketing
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Venus Worldwide Entertainment Private Ltd
              </h2>
              <p class="leading-relaxed text-base">
                Venus was founded in 1985 to set up a record abell in Mumbai.
                The company initially produced non-film<span id="dots6"
                  >...</span
                ><span id="more6">
                  albums and gradually bagged the worldwide rights of Bollywood
                  film music and created a niche for itself in the music world.
                  The company then evolved into producing motion pictures and
                  has become one of the top production house in Bollywood.
                  Venus, today is a market leader in the Entertainment Industry.
                  It has an integrated business model covering the entire value
                  chain from Motion Pictures Production and Record Label to
                  Distribution worldwide. Today , the company has diversified
                  into myriad fields, encompassing different facets of the
                  entertainment industry. Besides record label, motion pictures
                  production and distribution, Venus is actively involved in the
                  production of ad-films, post-production & state-of-the-art
                  music recording studio.</span
                >
              </p>
              <button type="button" id="read6" onclick="read6()">
                Read more
              </button>
              <script type="text/javascript">
                var i6 = 0;
                function read6() {
                  if (!i6) {
                    document.getElementById("more6").style.display = "inline";
                    document.getElementById("dots6").style.display = "none";
                    document.getElementById("read6").innerHTML = "Read Less";
                    i6 = 1;
                  } else {
                    document.getElementById("more6").style.display = "none";
                    document.getElementById("dots6").style.display = "inline";
                    document.getElementById("read6").innerHTML = "Read More";
                    i6 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo6"
                onclick="myFunction6()"
              >
                Apply now
              </button>
              <script>
                function myFunction6() {
                  var x6 = document.getElementById("Demo6");
                  if (x6.innerHTML === "Apply now") {
                    x6.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/7paragraph.jpg"
                alt="Paragraph logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Automobile/Electrical Engineering
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Paragraph Technologies Private Limited
              </h2>
              <p class="leading-relaxed text-base">
                We, at Trueno, have laid down our foundation as an electric
                vehicle startup to take a leap into the future. We are based
                out<span id="dots7">...</span
                ><span id="more7">
                  of Mumbai and have the aim to revolutionize the way people
                  own, travel, and share vehicles, solve their mobility issues
                  and hence, we would be venturing into the micro-mobility
                  market and next-gen future technologies vehicles. We are
                  working on an application development assignment for an
                  electric vehicle startup based out of Mumbai.</span
                >
              </p>
              <button type="button" id="read7" onclick="read7()">
                Read more
              </button>
              <script type="text/javascript">
                var i7 = 0;
                function read7() {
                  if (!i7) {
                    document.getElementById("more7").style.display = "inline";
                    document.getElementById("dots7").style.display = "none";
                    document.getElementById("read7").innerHTML = "Read Less";
                    i7 = 1;
                  } else {
                    document.getElementById("more7").style.display = "none";
                    document.getElementById("dots7").style.display = "inline";
                    document.getElementById("read7").innerHTML = "Read More";
                    i7 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo7"
                onclick="myFunction7()"
              >
                Apply now
              </button>
              <script>
                function myFunction7() {
                  var x7 = document.getElementById("Demo7");
                  if (x7.innerHTML === "Apply now") {
                    x7.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/8CRY.jpg"
                alt="CRY logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Android Development
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                CRY - Child Rights and You
              </h2>
              <p class="leading-relaxed text-base">
                Child Rights and You (CRY) is an agent of change and with your
                involvement ensures that the fundamental rights of
                underprivileged<span id="dots8">...</span
                ><span id="more8">
                  children in India are protected and honoured. Our website is
                  an open book of our work.</span
                >
              </p>
              <button type="button" id="read8" onclick="read8()">
                Read more
              </button>
              <script type="text/javascript">
                var i8 = 0;
                function read8() {
                  if (!i8) {
                    document.getElementById("more8").style.display = "inline";
                    document.getElementById("dots8").style.display = "none";
                    document.getElementById("read8").innerHTML = "Read Less";
                    i8 = 1;
                  } else {
                    document.getElementById("more8").style.display = "none";
                    document.getElementById("dots8").style.display = "inline";
                    document.getElementById("read8").innerHTML = "Read More";
                    i8 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo8"
                onclick="myFunction8()"
              >
                Apply now
              </button>
              <script>
                function myFunction8() {
                  var x8 = document.getElementById("Demo8");
                  if (x8.innerHTML === "Apply now") {
                    x8.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/9NCFlexe.jpg"
                alt="NCFlexe logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                computer vision
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                NCFlexe
              </h2>
              <p class="leading-relaxed text-base">
                National Centre for Flexible Electronics (NCFlexe) was
                established in 2014 through a grant from the Department<span
                  id="dots9"
                  >...</span
                ><span id="more9">
                  of Electronics and Information Technology (DeitY) under ESDM
                  scheme of Electronics Policy, 2012 of Government of India and
                  support from IIT Kanpur. This center functions as a nodal
                  point in India to bring academia, industry and public research
                  organizations under one umbrella for research and development
                  of large area flexible electronics. The center simultaneously
                  supports in research for the academia and develops products
                  with (and also for) the industry.</span
                >
              </p>
              <button type="button" id="read9" onclick="read9()">
                Read more
              </button>
              <script type="text/javascript">
                var i9 = 0;
                function read9() {
                  if (!i9) {
                    document.getElementById("more9").style.display = "inline";
                    document.getElementById("dots9").style.display = "none";
                    document.getElementById("read9").innerHTML = "Read Less";
                    i9 = 1;
                  } else {
                    document.getElementById("more9").style.display = "none";
                    document.getElementById("dots9").style.display = "inline";
                    document.getElementById("read9").innerHTML = "Read More";
                    i9 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo9"
                onclick="myFunction9()"
              >
                Apply now
              </button>
              <script>
                function myFunction9() {
                  var x9 = document.getElementById("Demo9");
                  if (x9.innerHTML === "Apply now") {
                    x9.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/10religare.jpg"
                alt="Religare logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Customer Services
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Religare Health Insurance Company Limited
              </h2>
              <p class="leading-relaxed text-base">
                Religare Health Insurance Company Limited is a specialist health
                insurer engaged in<span id="dots10">...</span
                ><span id="more10">
                  the distribution & servicing of health insurance products. Our
                  shareholders comprise three strong entities: Religare
                  Enterprises Limited, a leading diversified financial services
                  group based out of India, Union Bank of India & Corporation
                  Bank. Religare is promoted by the founders of Fortis
                  Hospitals, which owns or manages 68 hospitals in India; SRL
                  Diagnostics, Asia's largest network of diagnostic labs with
                  over 1100 collection centers and Religare Wellness, a
                  nationwide chain of stores offering pharmacy and wellness
                  products. This association enables us with an in-depth
                  understanding of consumer behavior and healthcare delivery,
                  thus making us capable of superior claims servicing to our
                  customer.</span
                >
              </p>
              <button type="button" id="read10" onclick="read10()">
                Read more
              </button>
              <script type="text/javascript">
                var i10 = 0;
                function read10() {
                  if (!i10) {
                    document.getElementById("more10").style.display = "inline";
                    document.getElementById("dots10").style.display = "none";
                    document.getElementById("read10").innerHTML = "Read Less";
                    i10 = 1;
                  } else {
                    document.getElementById("more10").style.display = "none";
                    document.getElementById("dots10").style.display = "inline";
                    document.getElementById("read10").innerHTML = "Read More";
                    i10 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo10"
                onclick="myFunction10()"
              >
                Apply now
              </button>
              <script>
                function myFunction10() {
                  var x10 = document.getElementById("Demo10");
                  if (x10.innerHTML === "Apply now") {
                    x10.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/11CRY.jpg"
                alt="CRY logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Graphic Design
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                CRY - Child Rights and Yo
              </h2>
              <p class="leading-relaxed text-base">
                Child Rights and You (CRY) is an agent of change and with your
                involvement ensures that the fundamental rights of
                <span id="dots11">...</span
                ><span id="more11"
                  >underprivileged children in India are protected and honoured.
                  Our website is an open book of our work.</span
                >
              </p>
              <button type="button" id="read11" onclick="read11()">
                Read more
              </button>
              <script type="text/javascript">
                var i11 = 0;
                function read11() {
                  if (!i11) {
                    document.getElementById("more11").style.display = "inline";
                    document.getElementById("dots11").style.display = "none";
                    document.getElementById("read11").innerHTML = "Read Less";
                    i11 = 1;
                  } else {
                    document.getElementById("more11").style.display = "none";
                    document.getElementById("dots11").style.display = "inline";
                    document.getElementById("read11").innerHTML = "Read More";
                    i11 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo11"
                onclick="myFunction11()"
              >
                Apply now
              </button>
              <script>
                function myFunction11() {
                  var x11 = document.getElementById("Demo11");
                  if (x11.innerHTML === "Apply now") {
                    x11.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/12codechef.jpg"
                alt="Codechef logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Business Development
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                CodeChef
              </h2>
              <p class="leading-relaxed text-base">
                CodeChef is an educational initiative launched by Directi, and
                currently under the custodianship of the Unacademy group.<span
                  id="dots12"
                  >...</span
                ><span id="more12">
                  Started in 2009, with the aim of improving the problem-solving
                  skills of Indian programmers, it uses algorithmic programming
                  contests to help students and professionals test and improve
                  their coding skills. It has become one of the largest
                  competitive programming platforms. But, we don't stop there.
                  Our vision is for all Indian programmers to be among the best
                  in the globe. To reach there, we are working to change the way
                  programmers learn and solve problems. Building a community of
                  programmers that fosters learning is at the heart of what we
                  do. Our other major initiatives include school outreach,
                  college collaborations, and certifications. With a small
                  passionate team, we have grown exponentially.</span
                >
              </p>
              <button type="button" id="read12" onclick="read12()">
                Read more
              </button>
              <script type="text/javascript">
                var i12 = 0;
                function read12() {
                  if (!i12) {
                    document.getElementById("more12").style.display = "inline";
                    document.getElementById("dots12").style.display = "none";
                    document.getElementById("read12").innerHTML = "Read Less";
                    i12 = 1;
                  } else {
                    document.getElementById("more12").style.display = "none";
                    document.getElementById("dots12").style.display = "inline";
                    document.getElementById("read12").innerHTML = "Read More";
                    i12 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo12"
                onclick="myFunction12()"
              >
                Apply now
              </button>
              <script>
                function myFunction12() {
                  var x12 = document.getElementById("Demo12");
                  if (x12.innerHTML === "Apply now") {
                    x12.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/13IIT.jpg"
                alt="IIT logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Application Development
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                IIT Bombay
              </h2>
              <p class="leading-relaxed text-base">
                The Indian Institute of Technology, Bombay (IITB) is one of the
                fifteen higher institutes of technology in the country<span
                  id="dots13"
                  >...</span
                ><span id="more13">
                  set up with the objective of making facilities available for
                  higher education, research, and training in various fields of
                  science and technology. Prof. Ganesh Ramakrishnan is
                  attempting to facilitate the empowerment of people in rural
                  areas in terms of livelihood, education, and skill generation
                  through Information and Communication Technology (ICT). IIT
                  Bombay has also honored Prof Ganesh's work on "Adaptive
                  framework for end-to-end corrections in Indic OCR".</span
                >
              </p>
              <button type="button" id="read13" onclick="read13()">
                Read more
              </button>
              <script type="text/javascript">
                var i13 = 0;
                function read13() {
                  if (!i13) {
                    document.getElementById("more13").style.display = "inline";
                    document.getElementById("dots13").style.display = "none";
                    document.getElementById("read13").innerHTML = "Read Less";
                    i13 = 1;
                  } else {
                    document.getElementById("more13").style.display = "none";
                    document.getElementById("dots13").style.display = "inline";
                    document.getElementById("read13").innerHTML = "Read More";
                    i13 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo13"
                onclick="myFunction13()"
              >
                Apply now
              </button>
              <script>
                function myFunction13() {
                  var x13 = document.getElementById("Demo13");
                  if (x13.innerHTML === "Apply now") {
                    x13.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/14religare.jpg"
                alt="Religare logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Mobile App development
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Religare Health Insurance Company Ltd
              </h2>
              <p class="leading-relaxed text-base">
                Religare Health Insurance Company Limited is a specialist health
                insurer engaged in the<span id="dots14">...</span
                ><span id="more14">
                  distribution & servicing of health insurance products. Our
                  shareholders comprise three strong entities: Religare
                  Enterprises Limited, a leading diversified financial services
                  group based out of India, Union Bank of India & Corporation
                  Bank. Religare is promoted by the founders of Fortis
                  Hospitals, which owns or manages 68 hospitals in India; SRL
                  Diagnostics, Asia's largest network of diagnostic labs with
                  over 1100 collection centers and Religare Wellness, a
                  nationwide chain of stores offering pharmacy and wellness
                  products. This association enables us with an in-depth
                  understanding of consumer behavior and healthcare delivery,
                  thus making us capable of superior claims servicing to our
                  customer.</span
                >
              </p>
              <button type="button" id="read14" onclick="read14()">
                Read more
              </button>
              <script type="text/javascript">
                var i14 = 0;
                function read14() {
                  if (!i14) {
                    document.getElementById("more14").style.display = "inline";
                    document.getElementById("dots14").style.display = "none";
                    document.getElementById("read14").innerHTML = "Read Less";
                    i14 = 1;
                  } else {
                    document.getElementById("more14").style.display = "none";
                    document.getElementById("dots14").style.display = "inline";
                    document.getElementById("read14").innerHTML = "Read More";
                    i14 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo14"
                onclick="myFunction14()"
              >
                Apply now
              </button>
              <script>
                function myFunction14() {
                  var x14 = document.getElementById("Demo14");
                  if (x14.innerHTML === "Apply now") {
                    x14.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/15EazyDiner.jpg"
                alt="EazyDiner logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Human Resource
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                EazyDiner
              </h2>
              <p class="leading-relaxed text-base">
                Founded in late 2014, by the ex-president of Oberoi Group of
                Hotels - Mr. Kapil Chopra and co founded by India's leading
                <span id="dots15">...</span
                ><span id="more15"
                  >food critic and journalist - Mr. Vir Sanghvi, EazyDiner
                  offers table reservation in top 8000+ restaurants across 100+
                  Indian cities & Dubai with a guaranteed meal offer. We are
                  backed by leading investors such as Deepak Shahdadpuri of DSG
                  Consumer Partners, Saama Capital, Denlow Investment trust,
                  BeeNext, and Yuvraj Singh. The company has grown more than 4X
                  every year since its inception and 10X in the last 2 years. It
                  started with 350 diners in the first month; in four years, the
                  platform has over half a million diners. Certified as a 'Great
                  Place to Work', we are looking for young and enthusiastic
                  candidates to join our team.</span
                >
              </p>
              <button type="button" id="read15" onclick="read15()">
                Read more
              </button>
              <script type="text/javascript">
                var i15 = 0;
                function read15() {
                  if (!i15) {
                    document.getElementById("more15").style.display = "inline";
                    document.getElementById("dots15").style.display = "none";
                    document.getElementById("read15").innerHTML = "Read Less";
                    i15 = 1;
                  } else {
                    document.getElementById("more15").style.display = "none";
                    document.getElementById("dots15").style.display = "inline";
                    document.getElementById("read15").innerHTML = "Read More";
                    i15 = 0;
                  }
                }
              </script>
              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo15"
                onclick="myFunction15()"
              >
                Apply now
              </button>
              <script>
                function myFunction15() {
                  var x15 = document.getElementById("Demo3");
                  if (x15.innerHTML === "Apply now") {
                    x15.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/16timebusiness.jpg"
                alt="Timebusiness logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                video making & edition
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Times Business Solutions
              </h2>
              <p class="leading-relaxed text-base">
                Times Business Solutions (TBS) - a division of Times Internet
                Limited-the-life interactive-arm of the Times<span id="dots16"
                  >...</span
                ><span id="more16">
                  Group, provides global internet users interactive media to
                  provide support, assistance, and guidance throughout their
                  life.</span
                >
              </p>
              <button type="button" id="read16" onclick="read16()">
                Read more
              </button>
              <script type="text/javascript">
                var i16 = 0;
                function read16() {
                  if (!i16) {
                    document.getElementById("more16").style.display = "inline";
                    document.getElementById("dots16").style.display = "none";
                    document.getElementById("read16").innerHTML = "Read Less";
                    i16 = 1;
                  } else {
                    document.getElementById("more16").style.display = "none";
                    document.getElementById("dots16").style.display = "inline";
                    document.getElementById("read16").innerHTML = "Read More";
                    i16 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo16"
                onclick="myFunction16()"
              >
                Apply now
              </button>
              <script>
                function myFunction16() {
                  var x16 = document.getElementById("Demo16");
                  if (x16.innerHTML === "Apply now") {
                    x16.innerHTML = "Applied successfully";
                  }
                }
              </script>
            </div>
          </div>

          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-gray-100 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="img/17timeinternet.jpg"
                alt="Timeinternet logo"
              />
              <h3
                class="tracking-widest text-indigo-500 text-xs font-medium title-font"
              >
                Marketing
              </h3>
              <h2 class="text-lg text-gray-900 font-medium title-font mb-4">
                Times Internet Limited
              </h2>
              <p class="leading-relaxed text-base">
                Times Internet, the digital arm of The Times Group, is India's
                leading digital products company with diversified<span
                  id="dots17"
                  >...</span
                ><span id="more17">
                  businesses and has over 38 brands, with 270 million unique
                  visitors a month and 21.4 billion page views. Established in
                  1999, Times Internet has been instrumental in transforming
                  India's digital landscape & has products that inform,
                  entertain & enable users globally.</span
                >
              </p>
              <button type="button" id="read17" onclick="read17()">
                Read more
              </button>
              <script type="text/javascript">
                var i17 = 0;
                function read17() {
                  if (!i17) {
                    document.getElementById("more17").style.display = "inline";
                    document.getElementById("dots17").style.display = "none";
                    document.getElementById("read17").innerHTML = "Read Less";
                    i17 = 1;
                  } else {
                    document.getElementById("more17").style.display = "none";
                    document.getElementById("dots17").style.display = "inline";
                    document.getElementById("read17").innerHTML = "Read More";
                    i17 = 0;
                  }
                }
              </script>

              <button
                class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
                id="Demo17"
                onclick="myFunction17()"
              >
                Apply now
              </button>
              <script>
                function myFunction17() {
                  var x17 = document.getElementById("Demo7");
                  if (x17.innerHTML === "Apply now") {
                    x17.innerHTML = "Applied successfully";
                  }
                }
              </script>
              <script>
                function myFunction1() {
                   location.replace("https://forms.gle/aFbq71zH6NUXTmi97")
                                    }
                                    function myFunction2() {
                   location.replace("https://forms.gle/seuLfxaNtTvKMbgQ9")
                                    }
                   function myFunction3() {
                   location.replace("https://forms.gle/L9EcAwrs2prBRtB69")
                                    }
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
  This site is created by Universal College
</footer>
  </body>
</html>
