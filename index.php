<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logoi.png">
    <title>
        Profile Website
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body style="margin: 0px; padding:0px; background-color:#000;">
    <?php
    include('navbar.html');
    ?>

    <div class="warp" style="font-family: helvetica;">
        <div class="row mx-2" id="about">
            <div class="col-md-1">

            </div>
            <div class="col-md-5 my-5">
                <p class="h2 fw-bold" style="color: #8B1E1E;">
                    Hi there! I'm
                </p>
                <p class="h1 text-light">
                    Randhi Danar Calvindo, Junior UI/UX Designer, Editing and Website Developer
                </p>
                <p class="h6 text-light mt-4 mb-4">
                    Hello, I'm from Indonesia, and I'm a freelance, I bridge the gap between business goals and human needs,
                    using my curiosity to discover valuable insight while creating extensively thought design experiences.
                    I’m available for new challenging collaborations & projects. Let’s get in contact, I’m happy to help you :)
                </p>
                <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBmXHqDTFgZwlmVFchcGXFwNlbwGXkBfXLFpgMQtjKQxslTSqWvfgTJVJnVMWrNwdgvFBzl" class="btn btn-danger text-dark" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-envelope-plus-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z" />
                        <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-3.5-2a.5.5 0 0 0-.5.5v1h-1a.5.5 0 0 0 0 1h1v1a.5.5 0 0 0 1 0v-1h1a.5.5 0 0 0 0-1h-1v-1a.5.5 0 0 0-.5-.5Z" />
                    </svg>
                    Contact
                </a>
                <icon class="icon px-4">
                    <a href="https://youtube.com/@randhidanar" class="badge link-light mx-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/randhi_danar/" class="badge link-light me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg>
                    </a>
                    <a href="https://wa.me/628315832143" class="badge link-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                    </a>
                </icon>
            </div>
            <div class="col-md-5 my-5">
                <img src="img/logoi.png" class="img-fluid" alt="me">
            </div>
            <div class="col-md-1">

            </div>
        </div>
        <div class="row mx-2" id="experience">
            <div class="col-md-1">

            </div>
            <div class="col-md-6">
                <img src="img/me.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-4 my-5 d-flex justify-content-center flex-column">
                <p class="h2 fw-bold" style="color: #8B1E1E;">
                    My Experience
                </p>
                <p class="h6 text-light">
                    I am a dedicated, organized and methodical individual. I have good interpersonal skills,
                    am an excellent team worker and am keen and very willing to learn and develop new skills.
                    I am reliable and dependable and often seek new responsibilities within a wide range of employment areas.
                    I have an active and dynamic approach to work and getting things done. I am determined and decisive.
                    I identify and develop opportunities.
                </p>
                <div class="col-md-12">
                    <button type="button" class="btn btn-danger text-dark mt-5 me-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                        </svg>
                        Download CV
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content bg-dark text-light">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Curriculum Vitae</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    If you want to view or download my cv please contact me first to reduce the misuse of my personal data.
                                    Please contact me on whatsapp or gmail.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSBmXHqDTFgZwlmVFchcGXFwNlbwGXkBfXLFpgMQtjKQxslTSqWvfgTJVJnVMWrNwdgvFBzl" class="btn btn-danger text-dark">
                                        Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="https://drive.google.com/file/d/1YRLzAKvPDxtH3vIiM-_00mYzFeIg968l/view?usp=share_link" class="btn btn-danger text-dark mt-5" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z" />
                        </svg>
                        Download Portofolio Book
                    </a>
                </div>
            </div>
            <div class="col-md-1">

            </div>
        </div>
        <div class="row mx-2 mt-5" id="porto">
            <div class="col-md-12">
                <p class="h2 fw-bold text-center" style="color: #8B1E1E;">
                    My Portofolio
                </p>
            </div>
        </div>
        <div class="row mx-auto text-center">
            <div class="col-md-3 mt-2">
                <div class="card bg-dark text-light" style="width: auto;">
                    <img src="img/kodomo.jpg" class="card-img-top" width="200px" height="200px" alt="...">
                    <div class="card-body">
                        <p class="h3 text-success">For Sale</p>
                        <p class="card-text">Make logo for brand or company.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card bg-dark text-light" style="width: auto;">
                    <img src="img/jaket.png" class="card-img-top" width="200px" height="200px" alt="...">
                    <div class="card-body">
                        <p class="h3 text-danger">Sold Out</p>
                        <p class="card-text">Mockup Jacket.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card bg-dark text-light" style="width: auto;">
                    <img src="img/ic.png" class="card-img-top" width="200px" height="200px" alt="...">
                    <div class="card-body">
                        <p class="h3 text-danger">Sold Out</p>
                        <p class="card-text">Make Indocukong Crypto Comunity.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card bg-dark text-light" style="width: auto;">
                    <img src="img/box.png" class="card-img-top" width="200px" height="200px" alt="...">
                    <div class="card-body">
                        <p class="h3 text-danger">Sold Out</p>
                        <p class="card-text">Make brand box mockup.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-auto my-5 text-center">
            <div class="col-md-4 mt-2">
                <div class="card bg-dark text-light" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Video Cinematic Portofolio</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tIkNya_Wj-M?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card bg-dark text-light" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Make UI/UX Video</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/c-5U_fQ3U4A?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-2">
                <div class="card bg-dark text-light" style="width: auto;">
                    <div class="card-body">
                        <h5 class="card-title">Video Animation Portofolio</h5>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zBAgY5YW2ys?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('footer.html');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>