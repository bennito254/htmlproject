<?php
?>

<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Email Application - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="<?php echo base_url('assets/images/ico/apple-icon-120.png')?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/ico/favicon.ico')?>'">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">




    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/vendors.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/editors/quill/katex.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/editors/quill/monokai-sublime.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/editors/quill/quill.snow.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/extensions/toastr.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendors/css/forms/select/select2.min.css')?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Inconsolata&amp;family=Roboto+Slab&amp;family=Slabo+27px&amp;family=Sofia&amp;family=Ubuntu+Mono&amp;display=swap">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-extended.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/colors.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/components.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/dark-layout.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/bordered-layout.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themes/semi-dark-layout.css')?>">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/core/menu/menu-types/vertical-menu.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/plugins/forms/form-quill-editor.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/plugins/extensions/ext-component-toastr.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/pages/app-email.css')?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css')?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<!-- BEGIN: Content-->
<div class=" email-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper">
        <div class="sidebar-left">
            <div class="sidebar">
                <div class="sidebar-content email-app-sidebar">
                    <div class="email-app-menu">
                        <div class="form-group-compose text-center compose-btn">
                            <button type="button" class="compose-email btn btn-primary btn-block" data-backdrop="false" data-toggle="modal" data-target="#compose-mail">
                                Compose
                            </button>
                        </div>
                        <div class="sidebar-menu-list">
                            <div class="list-group list-group-messages">
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action active">
                                    <i data-feather="mail" class="font-medium-3 mr-50"></i>
                                    <span class="align-middle">Inbox</span>
                                    <span class="badge badge-light-primary badge-pill float-right">3</span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                    <i data-feather="send" class="font-medium-3 mr-50"></i>
                                    <span class="align-middle">Sent</span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                    <i data-feather="edit-2" class="font-medium-3 mr-50"></i>
                                    <span class="align-middle">Draft</span>
                                    <span class="badge badge-light-warning badge-pill float-right">2</span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                    <i data-feather="star" class="font-medium-3 mr-50"></i>
                                    <span class="align-middle">Starred</span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                    <i data-feather="info" class="font-medium-3 mr-50"></i>
                                    <span class="align-middle">Spam</span>
                                    <span class="badge badge-light-danger badge-pill float-right">5</span>
                                </a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                                    <i data-feather="trash" class="font-medium-3 mr-50"></i>
                                    <span class="align-middle">Trash</span>
                                </a>
                            </div>
                            <!-- <hr /> -->
                            <h6 class="section-label mt-3 mb-1 px-2">Labels</h6>
                            <div class="list-group list-group-labels">
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-success mr-1"></span>Personal</a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-primary mr-1"></span>Company</a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-warning mr-1"></span>Important</a>
                                <a href="javascript:void(0)" class="list-group-item list-group-item-action"><span class="bullet bullet-sm bullet-danger mr-1"></span>Private</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content-right">
            <div class="content-wrapper">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <div class="body-content-overlay"></div>
                    <!-- Email list Area -->
                    <div class="email-app-list">
                        <!-- Email search starts -->
                        <div class="app-fixed-search d-flex align-items-center">
                            <div class="sidebar-toggle d-block d-lg-none ml-1">
                                <i data-feather="menu" class="font-medium-5"></i>
                            </div>
                            <div class="d-flex align-content-center justify-content-between w-100">
                                <div class="input-group input-group-merge">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="email-search" placeholder="Search email" aria-label="Search..." aria-describedby="email-search" />
                                </div>
                            </div>
                        </div>
                        <!-- Email search ends -->

                        <!-- Email actions starts -->
                        <div class="app-action">
                            <div class="action-left">
                                <div class="custom-control custom-checkbox selectAll">
                                    <input type="checkbox" class="custom-control-input" id="selectAllCheck" />
                                    <label class="custom-control-label font-weight-bolder pl-25" for="selectAllCheck">Select All</label>
                                </div>
                            </div>
                            <div class="action-right">
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" id="folder" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="folder" class="font-medium-2"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="folder">
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                                    <i data-feather="edit-2" class="font-small-4 mr-50"></i>
                                                    <span>Draft</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                                    <i data-feather="info" class="font-small-4 mr-50"></i>
                                                    <span>Spam</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                                    <i data-feather="trash" class="font-small-4 mr-50"></i>
                                                    <span>Trash</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" id="tag" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="tag" class="font-medium-2"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="tag">
                                                <a href="javascript:void(0);" class="dropdown-item"><span class="mr-50 bullet bullet-success bullet-sm"></span>Personal</a>
                                                <a href="javascript:void(0);" class="dropdown-item"><span class="mr-50 bullet bullet-primary bullet-sm"></span>Company</a>
                                                <a href="javascript:void(0);" class="dropdown-item"><span class="mr-50 bullet bullet-warning bullet-sm"></span>Important</a>
                                                <a href="javascript:void(0);" class="dropdown-item"><span class="mr-50 bullet bullet-danger bullet-sm"></span>Private</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item mail-unread">
                                        <span class="action-icon"><i data-feather="mail" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item mail-delete">
                                        <span class="action-icon"><i data-feather="trash-2" class="font-medium-2"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Email actions ends -->

                        <!-- Email list starts -->
                        <div class="email-user-list">
                            <ul class="email-media-list">
                                <li class="media mail-read">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-20.jpg')?>" alt="avatar img holder" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                <label class="custom-control-label" for="customCheck1"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Tonny Deep</h5>
                                                <span class="text-truncate">🎯 Focused impactful open system </span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mr-50 bullet bullet-success bullet-sm"></span>
                                                <span class="mail-date">4:14 AM</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="text-truncate mb-0">
                                                Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders
                                                demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                                fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron
                                                unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited
                                                inblow somewhatly ilioperoneal forrard palfrey Satyrinae outfreeman melebiose
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-17.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2" />
                                                <label class="custom-control-label" for="customCheck2"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Louis Welch</h5>
                                                <span class="text-truncate">Thanks, Let's do it.🤩</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mr-50 bullet bullet-danger bullet-sm"></span>
                                                <span class="mail-date">2:15 AM</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi, Can we connect today? Cheesecake croissant jelly beans. Cake caramels pie chocolate. Muffin jujubes
                                                dragée carrot cake candy icing bonbon. Danish caramels topping oat cake sweet roll liquorice tootsie roll
                                                halvah.Chocolate bar jujubes jelly-o tart tiramisu croissant dragée cupcake jelly.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media mail-read">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-7.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3" />
                                                <label class="custom-control-label" for="customCheck3"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Envato Market</h5>
                                                <span class="text-truncate">👋 You have new comment...</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mr-50 bullet bullet-success bullet-sm"></span>
                                                <span class="mail-date">2:15 AM</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi There, Cotton candy jujubes ice cream candy. Oat cake jelly jelly brownie danish marzipan gummi bears.
                                                Cupcake sweet bonbon tart. Sweet croissant jelly beans dragée chocolate cake gingerbread topping chocolate
                                                bar lemon drops.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media mail-read">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-5.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4" />
                                                <label class="custom-control-label" for="customCheck4"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Sarah Montgomery</h5>
                                                <span class="text-truncate">Your New UI.</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mr-50 bullet bullet-warning bullet-sm"></span>
                                                <span class="mail-date">Yesterday</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="text-truncate mb-0">
                                                Hello, Everything looks good. Pastry marshmallow sugar plum. Gingerbread bonbon fruitcake gummi bears
                                                wafer chocolate cake gummies tart ice cream. Danish topping biscuit dessert donut dessert. Chocolate
                                                jelly-o topping marzipan fruitcake.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-3.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5" />
                                                <label class="custom-control-label" for="customCheck5"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Ardis Balderson</h5>
                                                <span class="text-truncate mb-0">Focused impactful open system</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <i data-feather="paperclip"></i>
                                                <span class="mx-50 bullet bullet-warning bullet-sm"></span>
                                                <span class="mail-date">15 July</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hey John, bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders
                                                demidolmen Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                                fulfillment scientifical Pianokoto CheloniaFreudian sperate unchary hyperneurotic phlogiston duodecahedron
                                                unflown Paguridea catena disrelishable Stygian paleopsychology cantoris phosphoritic disconcord fruited
                                                inblow somewhatly ilioperoneal forrard palfrey
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-8.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6" />
                                                <label class="custom-control-label" for="customCheck6"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Modestine Spat</h5>
                                                <span class="text-truncate mb-0">Profound systemic alliance 🎉</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-primary bullet-sm"></span>
                                                <span class="mail-date">11 July</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hey John, Parthenopean logeion chipwood tonsilitic cockleshell substance Stilbum dismayed tape Alderamin
                                                Phororhacos bridewain zoonomia lujaurite printline extraction weanedness charterless splitmouth bindoree
                                                unfit philological Pythonissa scintillescentcinchonism sabbaton thyrocricoid dissuasively schematograph
                                                immerse pristane stimulability unreligion uncomplemental uteritis nef bavenite Hachiman teleutosorus
                                                anterolateral infirmate Nahani Hyla barile farthing
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media mail-read">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-11.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7" />
                                                <label class="custom-control-label" for="customCheck7"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Eb Begg</h5>
                                                <span class="text-truncate mb-0">Organized value-added model</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-success bullet-sm"></span>
                                                <span class="mail-date">1 July</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hello Sir, Lituola restrengthen bathofloric manciple decaffeinize Debby aciliated eatage proscribe
                                                prejurisdiction buttle quacky hyposecretion indemonstrableness schelling lymphopathy consumptivity
                                                nonappointment filminess spumiform erotogenicity equestrianize boneflower interlardationallocate ponzite
                                                cote guilder tuff strind blamefully cocaine monstrously apocalyptically sublanate cherubimical
                                                oligoplasmia Miltonian hydrazyl unbeset statured Unami Cordeau strouthiocamelian geitjie
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media mail-read">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-10.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8" />
                                                <label class="custom-control-label" for="customCheck8"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Waldemar Mannering</h5>
                                                <span class="text-truncate mb-0">Quality-focused methodical flexibility</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-danger bullet-sm"></span>
                                                <span class="mail-date">19 Jun</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi John, wartproof ketoheptose incomplicate hyomental organal supermaterial monogene sophister nizamate
                                                rightle multifilament phloroglucic overvehement boatloading derelictly probudgeting archantiquary
                                                unknighted pallograph Volcanalia Jacobitiana ethyl neth Jugataenoumenalize irredential energeia
                                                phlebotomist galp dactylitis unparticipated solepiece demure metarhyolite toboggan unpleased perilaryngeal
                                                binoxalate rabbitry atomic duali dihexahedron Pseudogryphus boomboat obelisk
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media mail-read">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-6.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9" />
                                                <label class="custom-control-label" for="customCheck9"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Louetta Esses</h5>
                                                <span class="text-truncate mb-0">Company Report</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-primary bullet-sm"></span>
                                                <span class="mail-date">2 Jun</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton
                                                candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love
                                                carrot cake topping I love. Sweet candy I love
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-9.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10" />
                                                <label class="custom-control-label" for="customCheck10"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Tressa Gass</h5>
                                                <span class="text-truncate mb-0">Theme Update</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-primary bullet-sm"></span>
                                                <span class="mail-date">29 May</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hello John,Chocolate bar chupa chups sweet roll chocolate muffin macaroon liquorice tart. Carrot cake
                                                topping jelly-o cupcake sweet apple pie jelly I love. Chocolate cake I love dessert carrot cake tootsie
                                                roll chocolate I love. Tootsie roll pie marzipan sesame snaps.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-20.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11" />
                                                <label class="custom-control-label" for="customCheck11"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Tommy Sicilia</h5>
                                                <span class="text-truncate mb-0">Thanks, Let's do it.</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-warning bullet-sm"></span>
                                                <span class="mail-date">17 May</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi John,Biscuit lemon drops marshmallow. Cotton candy marshmallow bear claw. Dragée tiramisu cookie cotton
                                                candy. Carrot cake sweet roll I love macaroon wafer jelly soufflé I love dragée. Jujubes jelly I love
                                                carrot cake topping I love. Sweet candy I love.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media mail-read">
                                    <div class="media-left pr-50">
                                        <div class="avatar">
                                            <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-17.jpg')?>" alt="Generic placeholder image" />
                                        </div>
                                        <div class="user-action">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12" />
                                                <label class="custom-control-label" for="customCheck12"></label>
                                            </div>
                                            <span class="email-favorite"><i data-feather="star"></i></span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">Heather Howell</h5>
                                                <span class="text-truncate mb-0">Thanks, Let's do it.</span>
                                            </div>
                                            <div class="mail-meta-item">
                                                <span class="mx-50 bullet bullet-warning bullet-sm"></span>
                                                <span class="mail-date">21 Mar</span>
                                            </div>
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                Hi John,Biscuit lemon drops marshmallow. Marzipan carrot cake soufflé. Toffee tiramisu pudding cotton
                                                candy powder jujubes pie. Topping danish sweet croissant liquorice lemon drops cake oat cake brownie.
                                                Cupcake liquorice tart tootsie roll sugar plum chocolate bar oat cake sweet roll.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="no-results">
                                <h5>No Items Found</h5>
                            </div>
                        </div>
                        <!-- Email list ends -->
                    </div>
                    <!--/ Email list Area -->
                    <!-- Detailed Email View -->
                    <div class="email-app-details">
                        <!-- Detailed Email Header starts -->
                        <div class="email-detail-header">
                            <div class="email-header-left d-flex align-items-center">
                                <span class="go-back mr-1"><i data-feather="chevron-left" class="font-medium-4"></i></span>
                                <h4 class="email-subject mb-0">Focused open system 😃</h4>
                            </div>
                            <div class="email-header-right ml-2 pl-1">
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <span class="action-icon favorite"><i data-feather="star" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="dropdown no-arrow">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="folder" class="font-medium-2"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="folder">
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                                    <i data-feather="edit-2" class="font-medium-3 mr-50"></i>
                                                    <span>Draft</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                                    <i data-feather="info" class="font-medium-3 mr-50"></i>
                                                    <span>Spam</span>
                                                </a>
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:void(0);">
                                                    <i data-feather="trash" class="font-medium-3 mr-50"></i>
                                                    <span>Trash</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="dropdown no-arrow">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i data-feather="tag" class="font-medium-2"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="tag">
                                                <a href="javascript:void(0);" class="dropdown-item"><span class="mr-50 bullet bullet-success bullet-sm"></span>Personal</a>
                                                <a href="javascript:void(0);" class="dropdown-item"><span class="mr-50 bullet bullet-primary bullet-sm"></span>Company</a>
                                                <a href="javascript:void(0);" class="dropdown-item"><span class="mr-50 bullet bullet-warning bullet-sm"></span>Important</a>
                                                <a href="javascript:void(0);" class="dropdown-item"><span class="mr-50 bullet bullet-danger bullet-sm"></span>Private</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="action-icon"><i data-feather="mail" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="action-icon"><i data-feather="trash" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item email-prev">
                                        <span class="action-icon"><i data-feather="chevron-left" class="font-medium-2"></i></span>
                                    </li>
                                    <li class="list-inline-item email-next">
                                        <span class="action-icon"><i data-feather="chevron-right" class="font-medium-2"></i></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Detailed Email Header ends -->

                        <!-- Detailed Email Content starts -->
                        <div class="email-scroll-area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="email-label">
                                        <span class="mail-label badge badge-pill badge-light-primary">Company</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header email-detail-head">
                                            <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="avatar mr-75">
                                                    <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-9.jpg')?>" alt="avatar img holder" width="48" height="48" />
                                                </div>
                                                <div class="mail-items">
                                                    <h5 class="mb-0">Carlos Williamson</h5>
                                                    <div class="email-info-dropup dropdown">
                                                            <span role="button" class="dropdown-toggle font-small-3 text-muted" id="card_top01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                carlos@gmail.com
                                                            </span>
                                                        <div class="dropdown-menu" aria-labelledby="card_top01">
                                                            <table class="table table-sm table-borderless">
                                                                <tbody>
                                                                <tr>
                                                                    <td class="text-right">From:</td>
                                                                    <td>carlos@gmail.com</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-right">To:</td>
                                                                    <td>johndoe@ow.ly</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-right">Date:</td>
                                                                    <td>14:58, 29 Aug 2020</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mail-meta-item d-flex align-items-center">
                                                <small class="mail-date-time text-muted">29 Aug, 2020, 14:58</small>
                                                <div class="dropdown ml-50">
                                                    <div role="button" class="dropdown-toggle hide-arrow" id="email_more" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="more-vertical" class="font-medium-2"></i>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="email_more">
                                                        <div class="dropdown-item"><i data-feather="corner-up-left" class="mr-50"></i>Reply</div>
                                                        <div class="dropdown-item"><i data-feather="corner-up-right" class="mr-50"></i>Forward</div>
                                                        <div class="dropdown-item"><i data-feather="trash-2" class="mr-50"></i>Delete</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body mail-message-wrapper pt-2">
                                            <div class="mail-message">
                                                <p class="card-text">Hey John,</p>
                                                <p class="card-text">
                                                    bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen
                                                    Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                                    fulfillment scientifical Pianokoto Chelonia
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header email-detail-head">
                                            <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="avatar mr-75">
                                                    <img src="<?php echo base_url('assets/images/portrait/small/avatar-s-18.jpg')?>" alt="avatar img holder" width="48" height="48" />
                                                </div>
                                                <div class="mail-items">
                                                    <h5 class="mb-0">Ardis Balderson</h5>
                                                    <div class="email-info-dropup dropdown">
                                                            <span role="button" class="dropdown-toggle font-small-3 text-muted" id="dropdownMenuButton200" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                abaldersong@utexas.edu
                                                            </span>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton200">
                                                            <table class="table table-sm table-borderless">
                                                                <tbody>
                                                                <tr>
                                                                    <td class="text-right">From:</td>
                                                                    <td>abaldersong@utexas.edu</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-right">To:</td>
                                                                    <td>johndoe@ow.ly</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="text-right">Date:</td>
                                                                    <td>4:25 AM 13 Jan 2018</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mail-meta-item d-flex align-items-center">
                                                <small class="mail-date-time text-muted">17 May, 2020, 4:14</small>
                                                <div class="dropdown ml-50">
                                                    <div role="button" class="dropdown-toggle hide-arrow" id="email_more_2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i data-feather="more-vertical" class="font-medium-2"></i>
                                                    </div>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="email_more_2">
                                                        <div class="dropdown-item"><i data-feather="corner-up-left" class="mr-50"></i>Reply</div>
                                                        <div class="dropdown-item"><i data-feather="corner-up-right" class="mr-50"></i>Forward</div>
                                                        <div class="dropdown-item"><i data-feather="trash-2" class="mr-50"></i>Delete</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body mail-message-wrapper pt-2">
                                            <div class="mail-message">
                                                <p class="card-text">Hey John,</p>
                                                <p class="card-text">
                                                    bah kivu decrete epanorthotic unnotched Argyroneta nonius veratrine preimaginary saunders demidolmen
                                                    Chaldaic allusiveness lorriker unworshipping ribaldish tableman hendiadys outwrest unendeavored
                                                    fulfillment scientifical Pianokoto Chelonia
                                                </p>
                                                <p class="card-text">
                                                    Freudian sperate unchary hyperneurotic phlogiston duodecahedron unflown Paguridea catena disrelishable
                                                    Stygian paleopsychology cantoris phosphoritic disconcord fruited inblow somewhatly ilioperoneal forrard
                                                    palfrey Satyrinae outfreeman melebiose
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="mail-attachments">
                                                <div class="d-flex align-items-center mb-1">
                                                    <i data-feather="paperclip" class="font-medium-1 mr-50"></i>
                                                    <h5 class="font-weight-bolder text-body mb-0">2 Attachments</h5>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <a href="javascript:void(0);" class="mb-50">
                                                        <img src="<?php echo base_url('assets/images/icons/doc.png')?>" class="mr-25" alt="png" height="18" />
                                                        <small class="text-muted font-weight-bolder">interdum.docx</small>
                                                    </a>
                                                    <a href="javascript:void(0);">
                                                        <img src="<?php echo base_url('assets/images/icons/jpg.png')?>" class="mr-25" alt="png" height="18" />
                                                        <small class="text-muted font-weight-bolder">image.png</small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="mb-0">
                                                    Click here to
                                                    <a href="javascript:void(0);">Reply</a>
                                                    or
                                                    <a href="javascript:void(0);">Forward</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Detailed Email Content ends -->
                    </div>
                    <!--/ Detailed Email View -->

                    <!-- compose email -->
                    <div class="modal modal-sticky" id="compose-mail">
                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                            <div class="modal-content p-0">
                                <div class="modal-header">
                                    <h5 class="modal-title">Compose Mail</h5>
                                    <div class="modal-actions">
                                        <a href="javascript:void(0);" class="text-body mr-75"><i data-feather="minus"></i></a>
                                        <a href="javascript:void(0);" class="text-body mr-75"><i data-feather="maximize-2"></i></a>
                                        <a class="text-body" href="javascript:void(0);" data-dismiss="modal" aria-label="Close"><i data-feather="x"></i></a>
                                    </div>
                                </div>
                                <div class="modal-body flex-grow-1 p-0">
                                    <form class="compose-form">
                                        <?php echo csrf_field(); ?>
                                        <div class="compose-mail-form-field select2-primary">
                                            <label for="email-to" class="form-label">To: </label>
                                            <div class="flex-grow-1">
                                                <select class="select2 form-control w-100" id="email-to" multiple>
                                                    <option data-avatar="1-small.png')?>" value="Jane Foster">Jane Foster</option>
                                                    <option data-avatar="3-small.png')?>" value="Donna Frank">Donna Frank</option>
                                                    <option data-avatar="5-small.png')?>" value="Gabrielle Robertson">Gabrielle Robertson</option>
                                                    <option data-avatar="7-small.png')?>" value="Lori Spears">Lori Spears</option>
                                                </select>
                                            </div>
                                            <div>
                                                <a class="toggle-cc text-body mr-1" href="javascript:void(0);">Cc</a>
                                                <a class="toggle-bcc text-body" href="javascript:void(0);">Bcc</a>
                                            </div>
                                        </div>
                                        <div class="compose-mail-form-field cc-wrapper">
                                            <label for="emailCC">Cc: </label>
                                            <div class="flex-grow-1">
                                                <!-- <input type="text" id="emailCC" class="form-control" placeholder="CC"/> -->
                                                <select class="select2 form-control w-100" id="emailCC" multiple>
                                                    <option data-avatar="1-small.png')?>" value="Jane Foster">Jane Foster</option>
                                                    <option data-avatar="3-small.png')?>" value="Donna Frank">Donna Frank</option>
                                                    <option data-avatar="5-small.png')?>" value="Gabrielle Robertson">Gabrielle Robertson</option>
                                                    <option data-avatar="7-small.png')?>" value="Lori Spears">Lori Spears</option>
                                                </select>
                                            </div>
                                            <a class="text-body toggle-cc" href="javascript:void(0);"><i data-feather="x"></i></a>
                                        </div>
                                        <div class="compose-mail-form-field bcc-wrapper">
                                            <label for="emailBCC">Bcc: </label>
                                            <div class="flex-grow-1">
                                                <!-- <input type="text" id="emailBCC" class="form-control" placeholder="BCC"/> -->
                                                <select class="select2 form-control w-100" id="emailBCC" multiple>
                                                    <option data-avatar="1-small.png')?>" value="Jane Foster">Jane Foster</option>
                                                    <option data-avatar="3-small.png')?>" value="Donna Frank">Donna Frank</option>
                                                    <option data-avatar="5-small.png')?>" value="Gabrielle Robertson">Gabrielle Robertson</option>
                                                    <option data-avatar="7-small.png')?>" value="Lori Spears">Lori Spears</option>
                                                </select>
                                            </div>
                                            <a class="text-body toggle-bcc" href="javascript:void(0);"><i data-feather="x"></i></a>
                                        </div>
                                        <div class="compose-mail-form-field">
                                            <label for="emailSubject">Subject: </label>
                                            <input type="text" id="emailSubject" class="form-control" placeholder="Subject" name="emailSubject" />
                                        </div>
                                        <div id="message-editor">
                                            <div class="editor" data-placeholder="Type message..."></div>
                                            <div class="compose-editor-toolbar">
                                                    <span class="ql-formats mr-0">
                                                        <select class="ql-font">
                                                            <option selected>Sailec Light</option>
                                                            <option value="sofia">Sofia Pro</option>
                                                            <option value="slabo">Slabo 27px</option>
                                                            <option value="roboto">Roboto Slab</option>
                                                            <option value="inconsolata">Inconsolata</option>
                                                            <option value="ubuntu">Ubuntu Mono</option>
                                                        </select>
                                                    </span>
                                                <span class="ql-formats mr-0">
                                                        <button class="ql-bold"></button>
                                                        <button class="ql-italic"></button>
                                                        <button class="ql-underline"></button>
                                                        <button class="ql-link"></button>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="compose-footer-wrapper">
                                            <div class="btn-wrapper d-flex align-items-center">
                                                <div class="btn-group dropup mr-1">
                                                    <button type="button" class="btn btn-primary">Send</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="javascript:void(0);"> Schedule Send</a>
                                                    </div>
                                                </div>
                                                <!-- add attachment -->
                                                <div class="email-attachement">
                                                    <label for="file-input">
                                                        <i data-feather="paperclip" width="17" height="17" class="ml-50"></i>
                                                    </label>

                                                    <input id="file-input" type="file" class="d-none" />
                                                </div>
                                            </div>
                                            <div class="footer-action d-flex align-items-center">
                                                <div class="dropup d-inline-block">
                                                    <i class="font-medium-2 cursor-pointer mr-50" data-feather="more-vertical" role="button" id="composeActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    </i>
                                                    <div class="dropdown-menu" aria-labelledby="composeActions">
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <span class="align-middle">Add Label</span>
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <span class="align-middle">Plain text mode</span>
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <span class="align-middle">Print</span>
                                                        </a>
                                                        <a class="dropdown-item" href="javascript:void(0);">
                                                            <span class="align-middle">Check Spelling</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <i data-feather="trash" class="font-medium-2 cursor-pointer" data-dismiss="modal"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ compose email -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo base_url('assets/vendors/js/editors/quill/katex.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/js/editors/quill/highlight.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/js/editors/quill/quill.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/js/extensions/toastr.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendors/js/forms/select/select2.full.min.js')?>"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Page JS-->
<script src="<?php echo base_url('assets/js/scripts/pages/app-email.js')?>"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>