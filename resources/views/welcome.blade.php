<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    </head>
    <body class="antialiased">
        <div class="navbar-fixed">
            <nav class="white nav-fixed">
                <div class="nav-wrapper container">
                    <a href="/" class="brand-logo center"><img src="../logo.png" height="73px" width="140"/></a>
                </div>
            </nav>
        </div>

        <div id="banner">
            <div class="container" id="banner-content">
                <div class="row">
                    <div class="col s12 m6">
                        <h2><b>Recruitment Made Simple</b></h2>
                        <h2><b>Coming Soon.</b></h2>
                        <br/>
                        <p><b>Get notified when beta launches</b></p>
                        <input type="text" placeholder="Email Adress" id="banner-btn" />
                        <button class="btn" id="banner-btn">Notify Me</button>
                    </div>
                    <div class="col s12 m6">
                        <img src="../banner_image.svg" id="banner-img"/>
                    </div>
                </div>
            </div>
        </div>

        <div id="process">
            <div class="container">
                <h2 class="center"><b>A new generation of recruiting</b></h2>
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs transparent">
                            <li class="tab col s3 m6"><a class="active" href="#employer" >Employer</a></li>
                            <li class="tab col s3 m6"><a href="#candidate">Job Candidate</a></li>
                        </ul>
                    </div>
                    <div id="employer" class="col s12">
                        <p>The average cost of a mishire stands at 30% of first-year annual salary, recruiting done wrong can be very detrimental. Enlistd assists your company make the right hiring choices in the simplest and quickest time-frame, by using a data-driven approach to match your company to candidates that meet your requirements and fit in to your company culture. </p>
                        <div class="timeline">

                            <div class="timeline-event">
                                <div class="card timeline-content">
                                    <div class="card-content">
                                        <p>Create company profile page</p>
                                    </div>
                                </div>
                                <div class="timeline-badge white-text"></div>
                            </div>


                            <div class="timeline-event">
                                <div class="card timeline-content">
                                    <div class="card-content">
                                        <p>Add job posts and Requirements</p>
                                    </div>
                                </div>
                                <div class="timeline-badge white-text"></div>
                            </div>


                            <div class="timeline-event">
                                <div class="card timeline-content">
                                    <div class="card-content">
                                        <p>Review candidate Assessment and Customize</p>
                                    </div>
                                </div>
                                <div class="timeline-badge white-text"></div>
                            </div>




                            <div class="timeline-event">
                                <div class="card timeline-content">
                                    <div class="card-content">
                                        <p>Enlistd, recommends the top candidates by requirements and assessment success, on your company's Enlistd portal</p>
                                    </div>
                                </div>
                                <div class="timeline-badge white-text"></div>
                            </div>


                            <div class="timeline-event">
                                <div class="card timeline-content">

                                    <div class="card-content">
                                        <p>Interview and select your pick</p>
                                    </div>
                                </div>
                                <div class="timeline-badge white-text"></div>
                            </div>
                        </div>
                    </div>
                    <div id="candidate" class="col s12">
                        <div class="timeline">
                            <p>Tired of scrolling through dozens of jobs trying to find what matches your skills, culture and needs, going through duplicate posts and being redirected to different sites for your application. Enlistd does the search for you and allows you to apply directly to companies through company portals on our platform and matches you to companies best suited to you through a careful curation process.</p>
                            <div class="timeline-event">
                                <div class="card timeline-content">
                                    <div class="card-content">
                                        <p>Create Seeker Profile</p>
                                    </div>
                                </div>
                                <div class="timeline-badge white-text"></div>
                            </div>


                            <div class="timeline-event">
                                <div class="card timeline-content">
                                    <div class="card-content">
                                        <p>Answer questions to help us match you with the right companies</p>
                                    </div>
                                </div>
                                <div class="timeline-badge white-text"></div>
                            </div>


                            <div class="timeline-event">
                                <div class="card timeline-content">
                                    <div class="card-content">
                                        <p>See your matched companies and complete assessments</p>
                                    </div>
                                </div>
                                <div class="timeline-badge white-text"></div>
                            </div>




                            <div class="timeline-event">
                                <div class="card timeline-content">
                                    <div class="card-content">
                                        <p>Interview</p>
                                    </div>
                                </div>
                                <div class="timeline-badge white-text"></div>
                            </div>


                            <div class="timeline-event">
                                <div class="card timeline-content">

                                    <div class="card-content">
                                        <p>Congratulations! You are officially enlistd.</p>
                                    </div>
                                </div>
                                <div class="timeline-badge white-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-bottom container">
            <div class="row">
                <div class="col s12 m6"><h2>Ready for the new generation in recruitment?</h2></div>
                <div class="col s12 m6">
                    <p><b>Get notified when beta launches</b></p>
                    <input placeholder="Email Address" id="second-input"/>
                    <button class="btn">Notify Me</button>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m6">
                    <img src="../logo.png" height="70" width="140" />
                    <p><b>A little more about us</b></p>
                    <p>Our mission is to help match the right companies and candidates together in a seamless process.</p>
                </div>
                <div class="col s12 m6">
                    <p><b>Follow us on</b></p>
                    <a href="https://www.linkedin.com/enlistd" id="linkedin"><i class="bi bi-linkedin"></i> Linkedin</a>
                    <br/>
                    <a href="mailto:support@enlistd.com" id="email"><i class="bi bi-envelope-fill"></i> Support@enlistd.com</a>
                </div>
            </div>
            <p class="center">&copy Enlistd 2022</p>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="../init.js"></script>
    </body>
</html>
