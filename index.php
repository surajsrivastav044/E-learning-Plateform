<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS Link -->
    <link href="css/bootstrap_css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap JavaScript Link -->
    <script src="js/js/bootstrap.bundle.min.js"></script>
    <!-- Google icons Link -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Font Awesome icons Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- My external css file -->
    <link rel="stylesheet" href="css/style.css">
    
    <title>Cognito School</title>
</head>
<body style="overflow-x:hidden;">

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="col-sm-1"><a class="navbar-brand" href="#"><img src="img/logo1.png" alt="Not Found" width="150px"
     height="40px"></a></div>
    <div class="col-sm-3"><a href="" class="h3 text-white" style="font-family:algerian;text-decoration: none;"><i><b>COGNITO SCHOOL</i></b></a></div>
    <div class="col-sm-7"> 
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="text-white"><i class="fa fa-bars" aria-hidden="true"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php"><b>&nbsp;&nbsp;About Us</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactus.php"><b>&nbsp;&nbsp;Contact-Us</b></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="feedback.php"><b>&nbsp;&nbsp;Feedback</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userlogin.php"><b>&nbsp;&nbsp;USER-LOGIN</b></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="adminlogin.php"><b>&nbsp;&nbsp;ADMIN-LOGIN</b></a>
        </li>
      </ul>
    </div></div>
     
    
  </div>
</nav>
        <!-- Navbar section End  -->




        <!-- Hero Section Start -->

        <div class="row">
            <div class="col-sm-12 p-0 m-0 hero_section">
                <div class="container mt-5">
                    <div class="row d-flex justify-content-center align-items-center hero_container">
                        <!-- Hero Left Section Start -->
                        <div class="col-sm-6 hero_content">
                            <h1 class="hero_heading">All things are possible because anything can be learned.</h1>
                            <div class="hero_line"></div>
                            <p class="hero_text">
                                This is one of the best platform for learn a lot of things and at this platform
                                anyone can show your knowledge and choose right pathway for better future.</br>
                                This platform provide you best knowledge and enhance your skill build your better future
                            </p>
                            <button class="hero_read_more_btn d-flex align-items-center justify-content-center">
                                See More
                                <span class="material-symbols-outlined hero_read_more_btn_icon position-relative">
                                    chevron_right
                                </span>
                            </button>

                        </div>
                        <!-- Hero Left Section End -->

                        <!-- Hero Right Section Start -->
                        <div class="col-sm-6 position-relative ">
                            <div class="img_section">
                                <img src="img/edu.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <!-- Hero Right Section End -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero Section End -->



        <!-- Top Tranding Course Heading Start -->

        <div class="row mt-3">
            <div class="col-sm-12 p-0 m-0 category_heading_section">
                    <div class="row">
                        <div class="col-sm-12"><br>
                            <div class="col-sm-12 text-center h1"style="font-family:algerian;"><i><b>SOME TRENDING COURSES</i></b>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Top Tranding Course Heading End -->



        <!-- Tranding Course Starting Section Point-->

        <div class="trend-body">
            <section class="trend-carousel carousel">
                <div class="carousel__slider">
          
                 <div class="trend-car carousel__list" style="padding:6px;gap:10px">         
                
                  <div class="card carousel__item" style="width: 18rem;">
                      <img src="img/js.jpg" class="card-img-top img-fluid" alt="course image">
                      <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;font-size:17px">JavaScript</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b><s>$120</s> FREE*</b> </li>
                      </ul>
                      <div class="card-body">
                        <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;<b>Explore</b></button>              
                      </div>
                    </div>
                    <div class="card carousel__item" style="width: 18rem;">
                      <img src="img/java.png" class="card-img-top img-fluid" alt="course image">
                      <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;font-size:17px">Java</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b><s>$120</s> FREE*</b> </li>
                      </ul>
                      <div class="card-body">
                        <button class="btn btn-outline-success btn-sm"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;<b>Explore</b></button>              
                      </div>
                    </div>
                    <div class="card carousel__item" style="width: 18rem;">
                      <img src="img/react.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;font-size:17px;">React JS</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b><s>$120</s> FREE*</b> </li>
                      </ul>
                      <div class="card-body">
                        
                        <button class="btn btn-outline-success btn-sm"><i class="fas fa-arrow-right"></i><b>Explore</b></button>             
                      </div>
                    </div>
                    <div class="card carousel__item" style="width: 18rem;">
                      <img src="img/node.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title" style="font-weight: bold;font-size:17px">Node JS</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b><s>$120</s> FREE*</b> </li>
                      </ul>
                      <div class="card-body">
                        <button class="btn btn-outline-success btn-sm"><i class="fas fa-arrow-right"></i>&nbsp;&nbsp;<b>Explore</b></button>              
                      </div>
                    </div>          
                 </div>
                </div>
              </section>
            </div>

        <!-- Tranding Course Ending Section Point -->


        <!-- Top Category Heading Text Start -->

        <div class="row">
            <div class="col-sm-12 p-0 m-0 category_heading_section">
                    <div class="row">
                        <div class="col-sm-12 pt-4 pb-3">
                             <div class="col-sm-12 text-center h1"style="font-family:algerian;"><i><b>TOP CATEGORY COURSES</i></b>
                        </div>
                    </div>
            </div>
        </div>

        <!-- Top Category Heading Text End -->


        <!-- Category Card Start From Here -->
        <div class="row"  style="margin-left:12px;">
            <div class="col-sm-12 category_card">
                <div class="container-fluid mt-4 mb-2" style="margin-left:25px;">
                    <div class="row">
                        <div class="col sm-12 pb-3">
                            <div class="card_wrapper d-flex justify-content-start gap-3 flex-wrap">
                                <!-- 1 -->

                                <div class="card anuj-card">
                                    <div class="image">
                                        <span class="material-symbols-outlined icon">
                                            school
                                        </span>
                                    </div>
                                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                        <h1 class="card-title">Development</h1>
                                        <p class="">2,800+ Courses</p>
                                    </div>
                                </div>


                                <div class="card anuj-card">
                                    <div class="image">
                                        <span class="material-symbols-outlined icon">
                                            public
                                        </span>
                                    </div>
                                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                        <h1 class="card-title">IT and Networking</h1>
                                        <p class="d-flex">800+ Courses</p>
                                    </div>
                                </div>

                                <div class="card anuj-card">
                                    <div class="image">
                                        <span class="material-symbols-outlined icon">
                                            database
                                        </span>
                                    </div>
                                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                        <h1 class="card-title">Data Science</h1>
                                        <p class="d-flex">650, Courses</p>
                                    </div>
                                </div>

                                <div class="card anuj-card">
                                    <div class="image">
                                        <span class="material-symbols-outlined icon">
                                            security
                                        </span>
                                    </div>
                                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                        <h1 class="card-title">Cyber Security</h1>
                                        <p class="d-flex">500+ Courses</p>
                                    </div>
                                </div>

                                <div class="card anuj-card">
                                    <div class="image">
                                        <span class="material-symbols-outlined icon">
                                            add_business
                                        </span>
                                    </div>
                                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                        <h1 class="card-title">Marketing</h1>
                                        <p class="d-flex">400+ Courses</p>
                                    </div>
                                </div>

                                <div class="card anuj-card">
                                    <div class="image">
                                        <span class="material-symbols-outlined icon">
                                            cabin
                                        </span>
                                    </div>
                                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                        <h1 class="card-title">Office Productivity</h1>
                                        <p class="d-flex">800+ Courses</p>
                                    </div>
                                </div>

                                <div class="card anuj-card">
                                    <div class="image">
                                        <span class="material-symbols-outlined icon">
                                            insights
                                        </span>
                                    </div>
                                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                        <h1 class="card-title">Business</h1>
                                        <p class="d-flex">200+ Courses</p>
                                    </div>
                                </div>

                                <div class="card anuj-card">
                                    <div class="image">
                                        <span class="material-symbols-outlined icon">
                                            school
                                        </span>
                                    </div>
                                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                        <h1 class="card-title">Lifestyle</h1>
                                        <p class="">2,800+ Courses</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category Card End From Here -->







        <!-- Testimonial Code Start form here -->
        <div class="row mt-5"  style="margin-left:12px">
            <div class="col-sm-12 p-0 m-0 hero_section">
                <div class="container mt-5 mb-5">
                    <div class="row">
                        <div class="col-sm-4 ">
                            <div class="testimonial-title">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                    class="bi bi-quote" viewBox="0 0 16 16">
                                    <path
                                        d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                </svg>
                                <h2 class="fw-bold display-6">What our customers say about us?</h2>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">ANUJ GUPTA</h5>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <h5 class="card-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                            fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                                            <path
                                                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                                        </svg>
                                                        With supporting text below as a natural lead-in to additional
                                                        content
                                                        supporting text below as a natural lead-in to additional content
                                                        supporting text below as
                                                        a natural lead-in to additional content. supporting text below
                                                        as
                                                        content
                                                    </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">ANUJ GUPTA</h5>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <h5 class="card-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                            fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                                            <path
                                                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                                        </svg>
                                                        With supporting text below as a natural lead-in to additional
                                                        content
                                                        supporting text below as a natural lead-in to additional content
                                                        supporting text below as
                                                        a natural lead-in to additional content. supporting text below
                                                        as
                                                        content
                                                    </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Shubham Kolar</h5>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                                                    </svg>
                                                    <h5 class="card-text">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                            fill="currentColor" class="bi bi-quote" viewBox="0 0 16 16">
                                                            <path
                                                                d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1h2Zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054.062-.372.166-.703.31-.992.145-.29.331-.517.559-.683.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992 4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1h2Z" />
                                                        </svg>
                                                        With supporting text below as a natural lead-in to additional
                                                        content
                                                        supporting text below as a natural lead-in to additional content
                                                        supporting text below as
                                                        a natural lead-in to additional content. supporting text below
                                                        as
                                                        content
                                                    </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial Code End form here -->


        <!-- Footer Code Start From Here -->
        <div class="row" style="margin-left:12px">
            <div class="col-sm-12 p-0 m-0">
                <div class="container-fluid mt-3">
                    <div class="row">
                        <div class="container m-0 p-0 ">
                            <div class="row">
                                <div class="col-sm-12 pt-4">
                                    <!-- Footer -->
                                    <!-- Footer -->
                                    <footer class="text-center text-lg-start bg-light text-muted bg-dark">
                                        <!-- Section: Social media -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <section
                                                        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                                                        <!-- Left -->
                                                        <div class="me-5 d-none d-lg-block">
                                                            <span class="h5 text-white">Get connected with us on social networks:</span>
                                                        </div>
                                                        <!-- Left -->

                                                        <!-- Right -->
                                                        <div>
                                                            <a href="#" class="me-4 text-reset h5 text-decoration-none ">
                                                                <i class="fab fa-facebook-f" style="color:#1877F2;"></i>
                                                            </a>
                                                            <a href="#" class="me-4 text-reset h5 text-decoration-none">
                                                                <i class="fab fa-twitter" style="color:#1D9BF0;"></i>
                                                            </a>
                                                            <a href="#" class="me-4 text-reset h5 text-decoration-none">
                                                                <i class="fab fa-google" style="color:#DB4437;"></i>
                                                            </a>
                                                            <a href="#" class="me-4 text-reset h5 text-decoration-none">
                                                                <i class="fab fa-instagram" style="color:#C13584;"></i>
                                                            </a>
                                                            <a href="#" class="me-4 text-reset h5 text-decoration-none">
                                                                <i class="fab fa-linkedin" style="color:#007ba7;"></i>
                                                            </a>
                                                            <a href="#" class="me-4 text-reset h5 text-decoration-none">
                                                                <i class="fab fa-github" style="color:#999999;"></i>
                                                            </a>
                                                        </div>
                                                        <!-- Right -->
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Section: Social media -->

                                        <!-- Section: Links  -->
                                        <section class="">
                                            <div class="container text-center text-md-start mt-5">
                                                <!-- Grid row -->
                                                <div class="row mt-3 text-white">
                                                    <!-- Grid column -->
                                                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                                        <!-- Content -->
                                                        <h6 class="text-uppercase fw-bold mb-4">
                                                            <i class="fas fa-gem me-3"></i>Cognito School
                                                        </h6>
                                                        <p>
                                                            This is one of the best platform for learn a lot of things
                                                            and at this platform anyone can show your knowledge and
                                                            choose right pathway for better future.
                                                            This platform provide you best knowledge and enhance your
                                                            skill build your better future
                                                        </p>
                                                    </div>
                                                    <!-- Grid column -->

                                                    <!-- Grid column -->
                                                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                                        <!-- Links -->
                                                        <h6 class="text-uppercase fw-bold mb-4">
                                                            Relevant Course
                                                        </h6>
                                                        <p>
                                                            <a href="#!" class="text-reset text-decoration-none">JavaScript</a>
                                                        </p>
                                                        <p>
                                                            <a href="#!" class="text-reset text-decoration-none">jQuery</a>
                                                        </p>
                                                        <p>
                                                            <a href="#!" class="text-reset text-decoration-none">JSON</a>
                                                        </p>
                                                        <p>
                                                            <a href="#!" class="text-reset text-decoration-none">C++</a>
                                                        </p>
                                                    </div>
                                                    <!-- Grid column -->

                                                    <!-- Grid column -->
                                                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                                        <!-- Links -->
                                                        <h6 class="text-uppercase fw-bold mb-4">
                                                            Usefull Links
                                                        </h6>
                                                        <p>
                                                            <a href="#!" class="text-reset text-decoration-none">Profile</a>
                                                        </p>
                                                        <p>
                                                            <a href="#!" class="text-reset text-decoration-none">Check Account</a>
                                                        </p>
                                                        <p>
                                                            <a href="#!" class="text-reset text-decoration-none">Eligibility</a>
                                                        </p>
                                                        <p>
                                                            <a href="#!" class="text-reset text-decoration-none">Other</a>
                                                        </p>
                                                    </div>
                                                    <!-- Grid column -->

                                                    <!-- Grid column -->
                                                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                                        <!-- Links -->
                                                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                                        <p><a href="#" class="text-reset text-decoration-none"><i class="fas fa-home me-3"></i>cognitoschool.in/help</a></p>
                                                        <p>
                                                            <a href="#" class="text-reset text-decoration-none"><i class="fas fa-envelope me-3"></i>
                                                                cognitoschool@gmail.com</a>
                                                        </p>
                                                        <p><i class="fas fa-phone me-3"></i> +91-8601246751, +91-9149374942</p>
                                                        <p><a href="" class="text-reset text-decoration-none"><i class="fas fa-print me-3"></i> + 01-234-567-89</a></p>
                                                    </div>
                                                    <!-- Grid column -->
                                                </div>
                                                <!-- Grid row -->
                                            </div>
                                        </section>
                                        <!-- Section: Links  -->

                                        <!-- Copyright -->
                                        <div class="text-center p-4 text-white">
                                            © 2023 Copyright:
                                            <a class="text-reset fw-bold"
                                                href="https://mdbootstrap.com/">www.cognitoschool.in</a>
                                        </div>
                                        <!-- Copyright -->
                                    </footer>
                                    <!-- Footer -->
                                    <!-- Footer -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Code End From Here -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">JavaScript</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="card-body">
                <p class="card-text">JavaScript is a versatile and powerful programming language that allows developers to create dynamic and interactive web applications. With its widespread adoption and support across browsers, JavaScript has become an essential tool in modern web development. Here are some key points about JavaScript:

Client-Side Interactivity: JavaScript runs on the client-side, meaning it executes in the user's web browser. 
It enables developers to add interactivity, respond to user actions, and manipulate webpage elements in
 real-time. </p>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
    </div>


    <!-- Script -->
    <script>

        function carousel() {
          let carouselSlider = document.querySelector(".carousel__slider");
          let list = document.querySelector(".carousel__list");
          let item = document.querySelectorAll(".carousel__item");
          let list2;
        
          const speed = 1;
        
          const width = list.offsetWidth;
          let x = 0;
          let x2 = width;
        
          function clone() {
            list2 = list.cloneNode(true);
            carouselSlider.appendChild(list2);
            list2.style.left = `${width}px`;
          }
        
          function moveFirst() {
            x -= speed;
        
            if (width >= Math.abs(x)) {
              list.style.left = `${x}px`;
            } else {
              x = width;
            }
          }
        
          function moveSecond() {
            x2 -= speed;
        
            if (list2.offsetWidth >= Math.abs(x2)) {
              list2.style.left = `${x2}px`;
            } else {
              x2 = width;
            }
          }
        
          function hover() {
            clearInterval(a);
            clearInterval(b);
          }
        
          function unhover() {
            a = setInterval(moveFirst, 10);
            b = setInterval(moveSecond, 10);
          }
        
          clone();
        
          let a = setInterval(moveFirst, 10);
          let b = setInterval(moveSecond, 10);
        
          carouselSlider.addEventListener("mouseenter", hover);
          carouselSlider.addEventListener("mouseleave", unhover);
        }
        carousel();
            </script>


</body>

</html>

