<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $gene->name }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    </head>

    <body>

        <nav class="navbar navbar-light   head">
            <div class="container-fluid py-3 ">
                <a class="navbar-brand d-flex " href="#">


                    <img src="{{ asset('assets/images/logo-bmc-white-flagship-6c54473310 (1).svg') }}" alt=""
                         width="200%" height="18" class="d-inline-block align-text-top logo ">
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


        <section class="py-3">
            <div class="container">
                <div class="row ">
                    <div class="col-md-8 ">
                        <div class="d-flex">
                            <h1><em>{{ $gene->name }}</em></h1>
                            <i class="fas fa-star pt-3 mx-3 text-warning"></i>
                        </div>
                        <h5 class="py-3 text-secondary">{{ $gene->description }}</h5>

                        <button type="button" class="btnn  text-info  ">Browser taxonomy</button>


                        <dl class=" py-3">

                            <hr class="w-75 my-2">
                            <div class="d-flex">
                                <dt class="text-secondary">Current scientific name</dt>
                                <dd class="mx-lg-auto">{{ $gene->name }}</dd>
                            </div>
                            <hr class="w-75 my-2">


                            <div class="d-flex">
                                <dt class="text-secondary">Taxonomic rank</dt>
                                <dd class="mx-lg-auto">{{ $gene->taxonomic_rank }}</dd>
                            </div>
                            <hr class="w-75 my-2">

                            <div class="d-flex">
                                <dt class="text-secondary"> GB Taxonomic rank</dt>
                                <dd class="mx-lg-auto  ">{{ $gene->ncbi_taxonomy_id  }}</dd>
                            </div>
                            <hr class="w-75 my-2">


                        </dl>

                        <p class="coli">For more details see <a href="" class="text-decoration-none "> GB Taxonomy</a>
                        </p>

                        <hr class="hrr">

                    </div><!-- col-1 -->

                    @if($gene->image)
                        <div class="col-md-4  image">
                            <img src="{{ asset('assets/images/' . $gene->image) }}" class="w-100 h-75 mt-5" alt="">
                        </div>
                    @endif
                </div><!-- row -->
            </div><!-- container -->
        </section>


        <section>
            <div class="container">
                <h3 class="mb-3">Genome</h3>
                <h5><a href="#" class="text-decoration-none"> Reference genome</a></h4>
                    <p">Max-Plank-Institute (2003)</p>


                    <dl class=" pt-2">

                        <hr class="w-25 my-2">
                        <div class="d-flex">
                            <dt class="text-secondary">Genome size</dt>
                            <dd class=" mx-5">{{ $gene->genome_size }} Mb</dd>
                        </div>
                        <hr class="w-25 my-2">


                        <div class="d-flex">
                            <dt class="text-secondary">Contig N50</dt>
                            <dd class=" mx-5">{{ $gene->counting_n50 }} Mb</dd>
                        </div>
                        <hr class="w-25 my-2">

                        <div class="d-flex">
                            <dt class="text-secondary ">Gene count</dt>
                            <dd class=" mx-5">{{ $gene->genes }}</dd>
                        </div>
                        <hr class="w-25 my-2">

                    </dl>

                    <p class="coli">GB Prokaryotic Genome Annotation Pipeline (PGAP)</p>

                    @if ($gene->id != 6 && $gene->id != 11)

                        <a type="button" class="btn btn-primary border-2"
                           href="{{ route('download', $gene->id) }}">Download</a>
                    @endif

            </div><!-- continer -->
        </section>

        <footer class="mt-5">
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
                            <li><a
                                    href="https://www.google.com/maps/place/8600+Rockville+Pike,+Bethesda,+MD+20894/@38.9959508,-77.101021,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7c95e25765ddb:0x19156f88b27635b8!8m2!3d38.9959508!4d-77.0988323https://www.google.com/maps/place/8600+Rockville+Pike,+Bethesda,+MD+20894/@38.9959508,-77.101021,17z/data=!3m1!4b1!4m5!3m4!1s0x89b7c95e25765ddb:0x19156f88b27635b8!8m2!3d38.9959508!4d-77.0988323">
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

    </body>


</html>
