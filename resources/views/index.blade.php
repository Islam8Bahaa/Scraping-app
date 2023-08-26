<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindluster Full Stack Task</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css"/>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
            *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;

        }

        body{
            background-color: #f8f8f8;
        }

        header p{
            font-size: larger;
            font-weight: 500;
            color: #2c9376;
        }

        .search .search-bar{
            text-align: center;
        }

        .search .search-bar .form-control{
            display: inline;
            width: 50%;
        }

        .search .search-bar button{
            background-color: #c0e863;
            font-weight: 500;
        }



        .courses .coures-container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }


        .courses .coures-container .box{
            background-color: white;
            flex-basis: 32.333%;
            border-radius: 20px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .courses .coures-container .box .box-head{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .courses .coures-container .box .box-head .icon{
            background-color: #ddfdef;
            padding: 10px;
            border-radius: 10px;
        }

        .courses .coures-container .box .box-head .icon svg{
            font-size: 20px;
            color: #6b9c9c;
        }

        .courses .coures-container .box .box-head p{
            background-color: #f4eecd;
            color: #ceb11cfc;
            padding: 7px;
            border-radius: 10px;
        }


        .courses .coures-container .box p{
            color: #bcbfc1;
            font-weight: 500;
        }

        .courses .coures-container .box .session{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0 ;
        }
        .courses .coures-container .box .session .person{
            flex-basis: 50%;
        }

        .courses .coures-container .box .session .person img{
            width: 20%;
            border-radius: 20px;
            margin-right: 4px;
        }

        .courses .coures-container .box .session  p{
            font-weight: 500;
            font-size: 15px;
            margin: 0;
        }

        .courses .coures-container .box .price{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .courses .coures-container .box .price p>span{
            margin-left: 7px;
            text-decoration: line-through;
        }

        .courses .coures-container .box .price .rate svg{
            color: #ffd023f5;
        }


        .how .proggres .content{
            flex-basis: 80%;
        }

        .how .proggres .content h5{
            margin-bottom: 25px;
        }

        .how .proggres .content .box h5{
            margin: 15px 0;
        }

        .progress-container  {
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        .how .how-container .work button{
            background-color: #c0e863;
            font-weight: 500;
        }

        .proggres{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-basis: 50%;
        }

        .circle {
            width: 40px;
            height: 40px;
            background-color: #ddd;
            color: #333;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
        }

        .circle.active {
            background-color:#2c9789 ;
            color: white;
        }

        .line {
            width: 3px;
            height: 40px;
            background-color: #ddd;

        }

        .circle.active + .line {
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,0) 0%, rgba(0,212,255,0) 0%, rgba(44,151,137,1) 26%);
        }

        .how .how-container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 5% 0;
            padding: 25px;
            border-radius: 15px;
            background-color: white;
        }

        .how .how-container .work{
            flex-basis: 50%;
        }


        @media (max-width: 992px) {
            .courses .coures-container .box{
                flex-basis: 45%;
            }
        }

        @media (max-width: 570px) {
            .courses .coures-container .box{
                flex-basis: 100%;
            }
        }

        @media (max-width: 770px) {
            .how .how-container{
                flex-wrap: wrap;
            }
            .how .how-container .work,
            .how .how-container .proggres{
                flex-basis: 100%;
            }
        }
    </style>
</head>
<body>

    <header class="text-center mt-5">
        <div class="container">
            <p>OUR BEST COURSE</p>
            <h1>Discover a most popular Online Course</h1>
        </div>
    </header>

    <main>
        <section>
            <div class="search mt-5 ">
                <div class="container">
                    <div class="search-bar ">
                        <input class="form-control" type="text" placeholder="Search Course ...">
                        <button class="btn">See more</button>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="courses mt-5">
                <div class="container">
                    <div class="coures-container" id="books-container">
                        {{-- < @foreach ($books as $book)
                        <div class="box">
                            <div class="box-head">
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <p>Best Seller</p>
                            </div>
                            <p>GRAPHICS DESIGN</p>
                            <h5>{{ $book['title'] }}</h5>
                            <div class="session">
                                <div class="person">
                                    <img src="img/1630954028289.jpeg" alt="">
                                    <span>{{ $book['author'] }}</span>
                                </div>
                                <p>12 Sessions</p>
                            </div>
                            <div class="price">
                                <p class="m-0">$18.00<span>$24.00</span></p>
                                <div class="rate">
                                    <i class="fa fa-star"></i>
                                    <span>5.0(50,023)</span>
                                </div>
                            </div>
                        </div>
                        @endforeach --}}
                        {{-- <div class="box">
                            <div class="box-head">
                                <div class="icon">
                                    <i class="fas fa-book "></i>
                                </div>

                            </div>
                            <p>GRAPHICS DESIGN</p>
                            <h5>The Complete Graphic Design Theory for Beginners Course</h5>
                            <div class="session">
                                <div class="person">
                                    <img src="img/1630954028289.jpeg" alt="">
                                    <span>Islam Bahaa</span>
                                </div>
                                <p>12 Sessions</p>
                            </div>
                            <div class="price">
                                <p class="m-0">$18.00<span>$24.00</span></p>
                                <div class="rate">
                                    <i class="fa fa-star"></i>
                                    <span>5.0(50,023)</span>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-head">
                                <div class="icon">
                                    <i class="fas fa-book "></i>
                                </div>
                                <p>Best Seller</p>
                            </div>
                            <p>GRAPHICS DESIGN</p>
                            <h5>The Complete Graphic Design Theory for Beginners Course</h5>
                            <div class="session">
                                <div class="person">
                                    <img src="img/1630954028289.jpeg" alt="">
                                    <span>Islam Bahaa</span>
                                </div>
                                <p>12 Sessions</p>
                            </div>
                            <div class="price">
                                <p class="m-0">$18.00<span>$24.00</span></p>
                                <div class="rate">
                                    <i class="fa fa-star"></i>
                                    <span>5.0(50,023)</span>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-head">
                                <div class="icon">
                                    <i class="fas fa-book "></i>
                                </div>
                                <p>Best Seller</p>
                            </div>
                            <p>GRAPHICS DESIGN</p>
                            <h5>The Complete Graphic Design Theory for Beginners Course</h5>
                            <div class="session">
                                <div class="person">
                                    <img src="img/1630954028289.jpeg" alt="">
                                    <span>Islam Bahaa</span>
                                </div>
                                <p>12 Sessions</p>
                            </div>
                            <div class="price">
                                <p class="m-0">$18.00<span>$24.00</span></p>
                                <div class="rate">
                                    <i class="fa fa-star"></i>
                                    <span>5.0(50,023)</span>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-head">
                                <div class="icon">
                                    <i class="fas fa-book "></i>
                                </div>

                            </div>
                            <p>GRAPHICS DESIGN</p>
                            <h5>The Complete Graphic Design Theory for Beginners Course</h5>
                            <div class="session">
                                <div class="person">
                                    <img src="img/1630954028289.jpeg" alt="">
                                    <span>Islam Bahaa</span>
                                </div>
                                <p>12 Sessions</p>
                            </div>
                            <div class="price">
                                <p class="m-0">$18.00<span>$24.00</span></p>
                                <div class="rate">
                                    <i class="fa fa-star"></i>
                                    <span>5.0(50,023)</span>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="box-head">
                                <div class="icon">
                                    <i class="fas fa-book "></i>
                                </div>
                                <p>Best Seller</p>
                            </div>
                            <p>GRAPHICS DESIGN</p>
                            <h5>The Complete Graphic Design Theory for Beginners Course</h5>
                            <div class="session">
                                <div class="person">
                                    <img src="img/1630954028289.jpeg" alt="">
                                    <span>Islam Bahaa</span>
                                </div>
                                <p>12 Sessions</p>
                            </div>
                            <div class="price">
                                <p class="m-0">$18.00<span>$24.00</span></p>
                                <div class="rate">
                                    <i class="fa fa-star"></i>
                                    <span>5.0(50,023)</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="how">
                <div class="container">
                    <div class="how-container">
                        <div class="work">
                            <h6>HOW IT WORK</h6>
                            <h1>An easy way to start learning and get newskills here</h1>
                            <p>we provides access to educational courses and learning materials
                                through mobile devices or web browsers. These apps have gained
                                immense popularity in recent years due to the convenience they offerin
                                accessing and acquiring knowledge from anywhere at any time.
                            </p>
                            <button class="btn ">Get Started</button>
                        </div>
                        <div class="proggres">
                            <div class="progress-container">
                                <div class="circle active">1</div>
                                <div class="line"></div>
                                <div class="circle">2</div>
                                <div class="line"></div>
                                <div class="circle">3</div>
                                <div class="line"></div>
                                <div class="circle">4</div>
                            </div>
                            <div class="content">
                                <div class="box">
                                    <h5>Explore the course catalog</h5>
                                    <p>Browse through the course catalog or search for specific courses
                                        that you're interested in, The apps usually have various categories
                                        and filters to help you narrow down your options
                                    </p>
                                </div>
                                <h5>Read course descriptions and reviews</h5>
                                <h5>Check the course availability and pricing</h5>
                                <h5>Enroll in the course</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        var loading = false; // To prevent multiple requests

        // AJAX function to initiate scraping
        function performScraping() {
            $.ajax({
                type: 'GET',
                url: '{{ route('scrape') }}',
                success: function(response) {
                    var newBooks = response.data;
                    var booksContainer = $('#books-container');
                    newBooks.forEach(function(book) {
                        var bookHtml = `
                            <div class="box">
                            <div class="box-head">
                                <div class="icon">
                                    <i class="fas fa-book "></i>
                                </div>
                                <p>Best Seller</p>
                            </div>
                            <p>${book.author}</p>
                            <h5>${book.title}</h5>
                            <div class="session">
                                <div class="person">
                                    <img src="img/1630954028289.jpeg" alt="">
                                    <span>Islam Bahaa</span>
                                </div>
                                <p>12 Sessions</p>
                            </div>
                            <div class="price">
                                <p class="m-0">$18.00<span>$24.00</span></p>
                                <div class="rate">
                                    <i class="fa fa-star"></i>
                                    <span>5.0(50,023)</span>
                                </div>
                            </div>
                        </div>
                        `;
                        booksContainer.append(bookHtml);
                    });
                },
                error: function(error) {

                    console.log(error);
                }
            });
        }

        $(document).ready(function() {
            performScraping();
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</body>
</html>
