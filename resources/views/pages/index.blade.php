<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <title>Document</title>
    </head>
    <body>

        <nav class="navbar navbar-light   head">
            <div class="container-fluid py-3 ">
                <a class="navbar-brand d-flex " href="#">


                    <img src="{{ asset('assets/images/logo-bmc-white-flagship-6c54473310 (1).svg') }}" alt="" width="200%" height="18"
                         class="d-inline-block align-text-top logo ">
                    <p class="text-light nature">Part of Springer Nature</p>

                </a>
                <button type="button" class="btn1  ">Login</button>
            </div>
            <img src="{{ asset('assets/images/genome-biology-logo-cf72c0ec54.svg') }}" class="text" alt="">
        </nav>


        <nav class="navbar navbar-light  ">
            <div class="container-fluid">
                <form class="d-flex Search">
                    <input class="form-control me-1 break" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-dark" type="submit">Search</button>
                </form>

            </div>
        </nav>

        <section id="Datasets">


            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-light pt-5 pb-3">Genome Biology Datasets</h1>
                        <p class="text-light text-capitalize resource pb-3"> Genome Biology Datasets is a new resource
                            that lets you easily gather data from across Genome Biology databases. Find and download
                            gene, transcript, protein and genome sequences, annotation and metadata. </p>
                    </div>
                </div><!--row-->
            </div><!--container-->

        </section><!--#Datasets-->

        <section id="genome">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 py-5">
                        <h1>Genome</h1>
                        <p class="pb-4">Browse and download genome data using our species pages. Genome data includes
                            genome, transcript and protein sequences, genome annotation and metadata.</p>
                        <p class="text-primary">Find a species</p>

                        <input class="form-control " type="search" placeholder="Search" aria-label="Search">

                    </div><!--1-->
                    <div class="col-md-6 right1">
                        <div class="right">
                            <h3 class=" pt-3">Species Browser</h3>
                            <p class="text-muted">View taxonomic relationships and find genome data for closely related
                                species using our interactive species browser.</p>
                            <button type="button" class="btn btn-primary btn-lg ">Browser species</button>
                        </div>
                    </div><!--2-->

                </div><!--row-->

            </div><!--container-->

        </section><!--genome-->


        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">

                        <img src="{{ asset('assets/images/eukaryota.png') }}" width="100%" alt="">
                        <div class=" mariam ">
                            <h3>Eukaryota</h3>
                        </div>
                        <ul class="list">
                            <li>
                                <a href="{{ route('gene', 9) }}">Homo sapiens</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 10) }}">Mus musculus</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 3) }}">Arabidopsis thaliana</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 13) }}">Sus scrofa</a>
                            </li>
                        </ul>
                    </div><!--1-->
                    <div class="col-md-3">

                        <img src="{{ asset('assets/images/bacteria.png') }}" width="100%" alt="">
                        <div class=" mariam">
                            <h3>Bacteria</h3>
                        </div>
                        <ul class="list">
                            <li>
                                <a href="{{ route('gene', 7) }}">Escherichia coli</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 4) }}">Staphylococcus aureus</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 2) }}">Pseudomonas aeruginosa</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 14) }}">Mycobacterium tuberculosis</a>
                            </li>
                        </ul>
                    </div><!--2-->
                    <div class="col-md-3">

                        <img src="{{ asset('assets/images/archaea.png') }}" width="100%" alt="">
                        <div class=" mariam">
                            <h3>Archaea</h3>
                        </div>
                        <ul class="list">
                            <li>
                                <a href="{{ route('gene', 8) }}">Pyrococcus furiosus</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 12) }}">Halobacterium salinarum</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 16) }}">Haloferax volcanii</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 1) }}">Thermoplasma acidophilum</a>
                            </li>
                        </ul>
                    </div><!--3-->
                    <div class="col-md-3">

                        <img src="{{ asset('assets/images/viruses.png') }}" width="100%" alt="">
                        <div class=" mariam">
                            <h3>Viruses</h3>
                        </div>
                        <ul class="list">
                            <li>
                                <a href="{{ route('gene', 15) }}">Human immunodeficiency virus 1</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 5) }}">Influenza A virus</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 6) }}">Hepatitis B virus</a>
                            </li>
                            <li>
                                <a href="{{ route('gene', 11) }}">Rotavirus A</a>
                            </li>
                        </ul>
                    </div><!--4-->

                </div><!--row-->

            </div><!--container-->

        </section>


        <footer>
            <div>
                <h4>Follow Genome Biology </h4>
            </div>

            <div>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-solid fa-rss"></i></a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="footer-nav">
                            <li><a href="#"> support and contact </a></li>
                            <li><a href="#">connect with Genome Biology </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="footer-nav">
                            <li><a href="#">home </a></li>
                            <li>
                                <a href="https://www.google.com/maps/place/8600+Rockville+Pike,+Bethesda,+MD+20894/@38.9959508,-77.101021,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7c95e25765ddb:0x19156f88b27635b8!8m2!3d38.9959508!4d-77.0988323https://www.google.com/maps/place/8600+Rockville+Pike,+Bethesda,+MD+20894/@38.9959508,-77.101021,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7c95e25765ddb:0x19156f88b27635b8!8m2!3d38.9959508!4d-77.0988323">
                                    8600 Rockville Pike, Bethesda, MD 20894،</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="footer-nav">
                            <li><a href="#"> web policies</a></li>
                            <li><a href="#"> FOAI </a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="footer-nav">
                            <li><a href="#">help </a></li>
                            <li><a href="#"> accessibility </a></li>
                            <li><a href="#"> careers </a></li>
                        </ul>
                    </div>

                </div><!-- row -->

                <p>By using this website, you agree to our Terms and Conditions, California Privacy Statement, Privacy
                    statement and Cookies policy. Manage cookies/Do not sell my data we use in the preference
                    centre.</p>
            </div><!-- container -->
        </footer>


        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
    </body>
</html>
