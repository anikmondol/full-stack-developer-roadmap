<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cave E-Commerce</title>

    <!-- scroll reveal file link -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- font awesome css links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap');

        :root {
            --font-main: font-family: "Lora", serif;
            --color-primary: #088178;
            --color-dark-1: #222;
            --color-dark-2: #1a1a1a;
            --color-withe-1: #ffffff;
            --color-withe-2: #E3E6F3;
            --color-blue-1: #465b52;
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font-main);
        }

        html {
            font-size: 10px;
            /* 1 rem 10px */
        }


        h1 {
            font-size: 5rem;
            line-height: 6.4rem;
            color: var(--color-dark-1);
        }

        h2 {
            font-size: 4.6rem;
            line-height: 5.4rem;
            color: var(--color-dark-1);
        }

        h4 {
            font-size: 2rem;
            color: var(--color-dark-1);
        }


        h6 {
            font-weight: 700;
            font-size: 1.2rem;
        }

        p {
            font-size: 1.6rem;
            color: var(--color-blue-1);
            margin: 1.5rem 0rem 2rem 0rem;
        }

        .section_p1 {
            padding: 4rem 8rem;
        }

        .section_m1 {
            margin: 4rem 0rem;
        }

        button.normal {
            font-size: 1.4rem;
            font-weight: 600;
            padding: 1.4rem 2.5rem;
            color: var(--color-dark-1);
            background-color: var(--color-withe-1);
            border-radius: 0.4rem;
            cursor: pointer;
            border: none;
            outline: none;
            transition: 0.2s;
        }


        button.white {
            font-size: 1.3rem;
            font-weight: 600;
            padding: 1.1rem 1.8rem;
            color: var(--color-withe-1);
            background-color: transparent;
            border-radius: 0.4rem;
            cursor: pointer;
            border: 0.1rem solid var(--color-withe-1);
            outline: none;
            transition: 0.2s;
        }

        body {
            width: 100%;
        }


        /* header */

        #header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 2rem 8rem;
            background-color: var(--color-withe-2);
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.06);
            z-index: 999;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;

        }

        #navbar {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #navbar li {
            list-style: none;
            padding: 0 2rem;
            position: relative;
        }

        #navbar li a {
            text-decoration: none;
            font-size: 1.6rem;
            font-weight: 600;
            color: var(--color-dark-2);
            transition: 0.3s ease;
        }

        #navbar li a:hover,
        #navbar li a.active {
            color: var(--color-primary);
        }

        #navbar li a.active::after,
        #navbar li a:hover::after {
            content: "";
            width: 30%;
            height: 0.2rem;
            background-color: var(--color-primary);
            position: absolute;
            bottom: -4px;
            left: 2rem;
        }

        #mobile,
        #close {
            display: none;
        }

        /* hero */

        #hero {
            background: url(https://img.freepik.com/free-photo/shopping-cart-with-wooden-elements_23-2148879396.jpg?t=st=1730377182~exp=1730380782~hmac=21e8f7e38e67fb7c389edfa544619a891cf3b72d1d729f7eb592c0f1e975998e&w=1380);
            height: 90vh;
            width: 100%;
            background-position: top 25% right 0;
            background-size: cover;
            padding: 0px 8rem;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin-top: 8rem;
            object-fit: cover;
        }

        #hero h4 {
            padding-bottom: 1.5rem;
        }

        #hero h1 {
            color: var(--color-withe-1);
        }

        #hero button {
            background-image: url("../img/button.png");
            background-color: transparent;
            color: var(--color-primary);
            border: none;
            padding: 1.4rem 8rem 1.4rem 6.5rem;
            background-repeat: no-repeat;
            cursor: pointer;
            font-weight: 700;
            font-size: 1.5rem;
        }


        /* feature */

        #feature {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 1.5rem;
        }

        #feature .fe_box {
            text-align: center;
            padding: 2.5rem 1.5rem;
            box-shadow: 2rem 2rem 3.4rem rgba(0, 0, 0, 0.03);
            border: 0.1rem solid var(--color-withe-2);
            border-radius: 0.4rem;
            margin: 1.5rem 0rem;
            transition: 0.2s ease;
        }

        #feature .fe_box:hover {
            box-shadow: 1rem 1rem 5.4rem rgba(19, 19, 210, 0.1);
        }


        #feature .fe_box img {
            width: 100%;
            margin-bottom: 1rem;
        }

        #feature .fe_box h6 {
            padding: 0.9rem 0.8rem 0.6rem 0.8rem;
            line-height: 1;
            border-radius: 0.4rem;
            color: var(--color-primary);
            background-color: #fddde4;
            display: inline-block;
            text-align: center;
        }

        #feature .fe_box:nth-child(2) h6 {
            background-color: #cdebbc;
        }

        #feature .fe_box:nth-child(3) h6 {
            background-color: #d1e8f2;
        }

        #feature .fe_box:nth-child(4) h6 {
            background-color: #cdd4f8;
        }

        #feature .fe_box:nth-child(5) h6 {
            background-color: #f6dbf6;
        }

        #feature .fe_box:nth-child(6) h6 {
            background-color: #fff2e5;
        }


        /* feature products */

        #product1 {
            text-align: center;
        }

        #product1 .pro_container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1.5rem;
        }

        #product1 .pro {
            padding: 1rem 1.2rem;
            border: 0.1rem solid var(--color-withe-2);
            border-radius: 0.5rem;
            cursor: pointer;
            box-shadow: 2rem 2rem 3rem rgba(0, 0, 0, 0.02);
            margin: 1.5rem 0rem;
            transition: 0.2s ease;
            position: relative;
        }

        #product1 .pro:hover {
            box-shadow: 2rem 2rem 3rem rgba(0, 0, 0, 0.06);
        }

        #product1 .pro img {
            width: 100%;
            border-radius: 0.5rem;
        }

        #product1 .pro .des {
            text-align: start;
            padding: 1rem 0rem;
        }

        #product1 .pro .des span {
            color: #606063;
            font-size: 1.2rem;
            letter-spacing: 0.1rem;
        }

        #product1 .pro .des h5 {
            padding: 1rem 0rem;
            color: var(--color-dark-2);
            font-size: 1.4rem;
        }

        #product1 .pro .des .start i {
            font-size: 1.2rem;
            color: rgb(243, 181, 25);
        }

        #product1 .pro .des h4 {
            padding-top: 0.7rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--color-primary);
            letter-spacing: 0.1rem;
        }

        #product1 .pro .cart {
            width: 4rem;
            height: 4rem;
            line-height: 4rem;
            border-radius: 50%;
            background-color: var(--color-withe-2);
            font-size: 1.5rem;
            color: var(--color-primary);
            border: 0.1rem solid #cce7d0;
            position: absolute;
            bottom: 2rem;
            right: 1rem;
        }


        /* banner */

        #banner {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
            background-image: url("../img/banner/b2.jpg");
            width: 100%;
            height: 40vh;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        #banner h4 {
            color: var(--color-withe-1);
            font-size: 1.6rem;
        }

        #banner h2 {
            color: var(--color-withe-1);
            font-size: 3rem;
            padding: 1rem 0rem;
        }


        #banner h2 span {
            color: #ef3636;
            font-size: 3rem;
            padding: 1rem 0rem;
        }

        #banner button:hover {
            background-color: var(--color-primary);
            color: var(--color-withe-1);
        }

        /* gallery */

        #gallery {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 2rem;
        }



        #gallery .banner_box {
            display: flex;
            justify-content: end;
            align-items: flex-start;
            flex-direction: column;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 0.5rem;
            padding: 0rem 0rem 4rem 4rem;
            width: 100%;
        }

        #gallery .banner_box:hover button {
            background-color: var(--color-primary);
            border: 0.1rem solid var(--color-primary);
        }

        #gallery h4 {
            color: var(--color-withe-1);
            font-size: 2rem;
            font-weight: 300;
        }

        #gallery h2 {
            color: var(--color-withe-1);
            font-size: 2.5rem;
            font-weight: 800;
        }

        #gallery span {
            color: var(--color-withe-1);
            font-size: 1.4rem;
            font-weight: 500;
            padding-bottom: 1.5rem;
        }


        #gallery .banner_box1 {
            background-image: url("../img/banner/b17.jpg");
            grid-column: 1 / span 6;
            grid-row: 1 / span 1;
            height: 35rem;
        }

        #gallery .banner_box2 {
            background-image: url("../img/banner/b10.jpg");
            grid-column: 7 / span 6;
            grid-row: 1 / span 1;
            height: 35rem;
        }


        #gallery .banner_box3 {
            background-image: url("../img/banner/b7.jpg");
            grid-column: 1 / span 4;
            grid-row: 2 / span 1;
            height: 30rem;
            padding: 0rem 0rem 3rem 3rem;
        }

        #gallery .banner_box4 {
            background-image: url("../img/banner/b4.jpg");
            grid-column: 5 / span 4;
            grid-row: 2 / span 1;
            height: 30rem;
            padding: 0rem 0rem 3rem 3rem;
        }

        #gallery .banner_box5 {
            background-image: url("../img/banner/b18.jpg");
            grid-column: 9 / span 4;
            grid-row: 2 / span 1;
            height: 30rem;
            padding: 0rem 0rem 3rem 3rem;
        }


        /* newsletter */

        #newsletter {
            display: flex;
            justify-content: space-between;
            align-content: center;
            flex-wrap: wrap;
            background-image: url("../img/banner/b14.png");
            background-repeat: no-repeat;
            background-position: 20% 30%;
            background-color: #041e42;
            height: 35vh;

        }

        #newsletter h4 {
            font-size: 2.2rem;
            font-weight: 700;
            color: var(--color-withe-1);
        }

        #newsletter p {
            font-size: 1.4rem;
            font-weight: 600;
            color: #818ea0;
        }

        #newsletter p span {
            color: #ffbd27;
        }

        #newsletter .form {
            display: flex;
            align-items: center;
        }

        #newsletter input {
            height: 4.2rem;
            padding: 0 2rem;
            font-size: 1.4rem;
            border: 1px solid transparent;
            border-radius: 0.2rem;
            outline: none;
            border-radius: 0.2rem 0rem 0rem 0.2rem;
        }

        #newsletter button {
            background-color: var(--color-primary);
            color: var(--color-withe-1);
            border-radius: 0rem 0.2rem 0.2rem 0rem;
            font-size: 1.3rem;
        }

        /* footer */


        footer .footer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            border-top: 0.1rem solid var(--color-withe-2);
        }

        footer .footer .col {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-bottom: 2rem;
        }

        footer .footer .logo {
            width: 10rem;
            margin-top: 1rem;
        }

        footer .footer h4 {
            font-size: 1.4rem;
            padding: 1rem 0rem;
        }

        footer .footer p {
            font-size: 1.3rem;
            margin: 0rem 0rem 0.8rem 0rem;
        }

        footer .footer a {
            font-size: 1.3rem;
            text-decoration: none;
            color: var(--color-dark-1);
            margin: 0rem 0rem 0.8rem 0rem;
        }

        footer .footer .follow i {
            padding-right: 0.5rem;
            font-size: 1.5rem;
            cursor: pointer;
        }

        footer .footer .follow i:hover,
        footer .footer a:hover {
            color: var(--color-primary);
        }


        footer .footer .install .row img {
            border: 1px solid var(--color-withe-2);
            margin-right: 0.5rem;
            border-radius: 0.6rem;
        }

        footer .footer .install img {
            margin: 1rem 0rem 1.5rem 0rem;
        }

        footer .copyright {
            border-top: 0.1rem solid var(--color-withe-2);
            text-align: center;
        }


        .VIpgJd-ZVi9od-ORHb-OEVmcd {
            display: none !important;
        }

        .goog-te-gadget-simple {
            background-color: #FFF;
            border-left: 1px solid #D5D5D5;
            border-top: 1px solid #9B9B9B;
            border-bottom: 1px solid #E8E8E8;
            border-right: 1px solid #D5D5D5;
            font-size: 10pt;
            display: inline-block;
            padding: 8px 15px !important;
            cursor: pointer;
        }

        .goog-te-banner-frame.skiptranslate,
        .goog-te-gadget-simple img {
            display: none !important;
        }

        .goog-te-gadget-simple::before {
            content: "Languages";
            font-size: 12px;
            color: #333;
            margin-right: 5px;
        }

        .goog-te-gadget-simple {
            display: flex;
            align-items: center;
        }


        .goog-te-gadget-simple .VIpgJd-ZVi9od-xl07Ob-lTBxed span {
            text-decoration: none;
            display: none !important;
        }



        /* start media query */

        @media (max-width: 799px) {

            /* common */

            h2 {
                font-size: 3rem;
                line-height: 5.4rem;
            }

            button.normal {
                font-size: 1.2rem;
                padding: 1.2rem 2rem;
            }

            .install {
                display: none !important;
            }

            .contact_none {
                display: none;
            }


            #gallery,
            #product1,
            #feature,
            #hero {
                padding: 0rem 1rem;
            }

            /* header */

            #header {
                padding: 1.5rem 1rem;
            }

            #header .logo {
                width: 10rem;
            }

            #page_header {
                margin-top: 6.2rem;
            }

            /* hero */

            #hero {
                height: 70vh;
                width: 100%;
                padding: 0px 1rem;
                margin-top: 6rem;

            }

            /* navbar */

            #navbar {
                display: flex;
                align-items: flex-start;
                flex-direction: column;
                justify-content: flex-start;
                position: fixed;
                top: 0rem;
                right: -30rem;
                width: 30rem;
                height: 100vh;
                background-color: var(--color-withe-2);
                box-shadow: 0 4rem 6rem rgba(0, 0, 0, 0.1);
                padding: 8rem 0rem 0rem 1rem;
                transition: 0.3s;
            }

            #navbar.active {
                right: 0rem;
            }

            #navbar li {
                margin-bottom: 2.5rem;
            }

            #mobile {
                display: flex;
                align-items: center;
            }

            #mobile i {
                color: var(--color-dark-2);
                font-size: 2rem;
                padding-left: 2rem;
            }

            #close {
                position: absolute;
                top: 3rem;
                left: 3rem;
                color: var(--color-dark-1);
                font-size: 1.8rem;
            }

            #close_icons {
                display: none;
            }

            #close {
                display: flex;
            }

            /* feature */

            #feature {
                grid-template-columns: repeat(3, 1fr);
                padding: 2rem 1rem;
            }

            /* feature products  */

            #product1 .pro_container {
                grid-template-columns: repeat(2, 1fr);
                gap: 1.5rem;
            }

            /* gallery */

            #gallery {
                display: flex;
                flex-direction: column;
            }

            #gallery .banner_box {
                height: 35rem;
                padding: 0rem 0rem 3rem 3rem;
            }


            /* news */

            #newsletter {
                padding: 4rem 1rem;
                display: flex;
                align-items: center;
            }

            #newsletter input {
                height: 4rem;
                padding: 0 2rem;
                font-size: 1.4rem;
                border: 1px solid transparent;
                border-radius: 0.2rem;
                outline: none;
                border-radius: 0.2rem 0rem 0rem 0.2rem;
            }

            #input button {
                border-radius: 0rem 0.2rem 0.2rem 0rem;
            }


            /* footer */

            footer .footer {
                padding: 0rem 1rem;
                padding-top: 2rem;
            }

            footer .footer .col {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-bottom: 2rem;
            }

            footer .footer .logo {
                width: 10rem;
                margin-top: 0.5rem;
                padding-left: 2rem;
            }


            /* products details */

            #products_details {
                display: flex;
                flex-direction: column;
                margin-top: 8rem;
                padding: 0rem 1rem;
            }

            #products_details .single_pro_img #mainImage {
                width: 70%;
                border-radius: 0.3rem;
                object-fit: cover;
            }

            #products_details .single_pro_img {
                width: 100%;
                display: flex;
                gap: 2rem;
            }

            .small_img_group {
                display: flex;
                flex-direction: column;
                gap: 2rem;
            }

            .small_img_group img {
                width: 100%;
                border-radius: 0.3rem;
                object-fit: cover;
            }


            #products_details .single_pro_details {
                width: 100%;
                padding-top: 5rem;
                margin-bottom: 1rem;
            }

            /* blog */

            #blog {
                padding: 8rem 1rem;
            }


            /* about */

            #about {
                flex-direction: column;
                padding: 3rem 1rem;
            }

            #about img {
                width: 100%;
                margin-bottom: 2rem;
            }

            #about div {
                padding-left: 0rem;
            }

            /* about video */

            .section_p1 {
                padding: 0rem 0rem;
            }

            #about_app {
                text-align: center;
            }

            #about_app .video {
                width: 100%;
                margin: 3rem auto 0 auto;
            }

            #about_app .video video {
                width: 100%;
                height: 100%;
                border-radius: 0rem;
            }

            /* contact details */

            #contact_details {
                flex-direction: column;
                padding: 0rem 1rem;
                margin-top: 4rem;
                gap: 3rem;
            }

            #contact_details .details {
                width: 100%;
            }

            #contact_details .map {
                width: 100%;
                height: 40rem;
            }

            /* form details start */

            #form_details {
                flex-direction: column;
                border: none;
                margin: 0rem;
                padding: 0rem 1rem;
                gap: 3rem;
                margin-top: 4rem;
            }

            #form_details .form_container {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            #form_details .form_container form {
                width: 100%;
            }

            #form_details .form_container .input_group {
                display: flex;
                justify-content: space-between;
                width: 100%;
            }

            #form_details .form_container .input_group input {
                width: 49%;
            }

            #form_details .people {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                justify-content: center;
                border-top: 0.1rem solid rgba(0, 0, 0, 0.08);
            }

            #form_details .people div {
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 3rem;
                margin-top: 3rem;

            }

            /* cart */

            #cart {
                padding: 0rem 1rem !important;
            }

            /* add cart */

            #cart_add {
                flex-direction: column-reverse;
                padding: 0rem 1rem !important;
                margin-top: 5rem;
            }

            #coupon {
                width: 100%;
                margin-bottom: 3rem;
            }

            #subtotal {
                width: 100%;
                margin-bottom: 3rem;
                border: 0.1rem solid var(--color-withe-2);
                padding: 3rem;
            }

            /* sing up page */

            .auth_container {
                border-bottom: 0.1rem solid var(--color-dark-1);
                margin-top: 5rem;
            }

            .auth_img {
                display: none;
            }

            .auth_content {
                width: 100%;
                padding: 1rem;
                padding-top: 0rem;
                margin: 0rem;
            }

            /* check out */

            .check_out_container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-direction: column;
                width: 100%;
                padding: 0rem 1rem;
                margin-top: 5rem;
                border-bottom: 0.1rem solid var(--color-withe-2);
                padding-bottom: 3rem;
            }

            .check_out_form {
                width: 100%;
            }

            .check_out_content {
                width: 100%;
                margin-top: 3rem;
            }

            .check_out_img_date {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }

            .shi,
            .sub {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                margin-bottom: 3rem;
                border-bottom: 1px solid var(--color-dark-2);
                padding-bottom: 2rem;
            }



        }


        /* mobile */

        @media only screen and (max-width: 767px) {

            /* common */

            h2 {
                font-size: 2rem;
                line-height: 5rem;
            }

            .install {
                display: none !important;
            }

            .none {
                display: block;
            }

            .contact_none {
                display: block;
            }

            .cart_none {
                display: none;
            }



            /* navbar */

            #navbar {
                flex-direction: column;
                width: 20rem;
            }

            /* header */

            #header {
                padding: 1rem 1rem;
            }

            #page_header {
                margin-top: 5.2rem;
            }

            /* hero */

            #hero {
                padding: 2rem 0.8rem;
                margin-top: 5rem;
            }


            #hero h1 {
                display: none;
            }

            #hero h2 {
                color: var(--color-withe-1);
            }

            #hero button {
                color: var(--color-withe-1);
                padding: 1.4rem 8rem 1.4rem 6.5rem;
            }


            /* feature */

            #feature {
                grid-template-columns: repeat(2, 1fr);
                padding: 2rem 1rem;
            }

            /* feature products  */

            #product1 {
                padding: 1rem 1rem;
            }

            #product1 .pro_container {
                grid-template-columns: repeat(1, 1fr);

            }

            /* banner */

            #banner {
                height: 50vh;
            }

            #banner h4 {
                font-size: 1.6rem;
            }

            #banner h2 {
                font-size: 2rem;
                padding: 1.5rem 0rem;
                line-height: 2.5rem;
            }


            #banner h2 span {
                font-size: 2rem;
                padding: 1rem 0rem;
            }

            #banner button:hover {
                background-color: var(--color-primary);
            }

            /* gallery */


            #gallery {
                display: flex;
                flex-direction: column;
            }

            #gallery .banner_box {
                height: 35rem;
                padding: 0rem 0rem 3rem 3rem;
            }

            /* newsletter */

            #newsletter {
                padding: 2rem 1rem;
            }

            #newsletter input {
                height: 3.8rem;
                padding: 0 2rem;
                border-radius: 0.2rem 0rem 0rem 0.2rem;
            }

            #newsletter button {
                border-radius: 0rem 0.2rem 0.2rem 0rem;
                font-size: 1.3rem;
            }


            /* footer */

            footer .footer {
                justify-content: space-between;
                flex-direction: column;
                padding: 0rem 1rem;
                padding-top: 2rem;

            }

            footer .footer .col {
                flex-direction: column;
                margin-bottom: 2rem;
            }

            footer .footer .logo {
                width: 10rem;
                margin-top: 1rem;
            }

            /* pagination */

            #pagination {
                text-align: center;
                padding: 2rem 0rem;
            }


            #pagination a {
                padding: 12px 15px;
                font-size: 1.4rem;
            }

            /* blog */

            #blog {
                padding: 4rem 1rem;
            }


            #blog .blog_box .blog_img {
                width: 100%;
                margin-right: 4rem;
                margin-bottom: 2rem;
            }


            #blog .blog_box .blog_details {
                width: 100%;
            }

            #blog .blog_box {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                position: relative;
                padding-bottom: 9rem;
            }

            #blog .blog_box .blog_img {
                width: 100%;
                margin-right: 0rem;
            }

            #blog img {
                width: 100%;
                height: 30rem;
                object-fit: cover;
                border-radius: 0.4rem;
            }

            .mobile_top {
                padding-top: 4rem;
            }

            #blog .blog_box h1 {
                top: -4.7rem;
                font-size: 5rem;
                font-weight: 600;
            }


            /* about */

            #about {
                flex-direction: column;
                padding: 3rem 1rem;
            }

            #about img {
                width: 100%;
                margin-bottom: 2rem;
            }

            #about div {
                padding-left: 0rem;
            }

            /* about video */

            .section_p1 {
                padding: 0rem 0rem;
            }

            #about_app {
                text-align: center;
            }

            #about_app .video {
                width: 100%;
                margin: 3rem auto 0 auto;
            }

            #about_app .video video {
                width: 100%;
                height: 100%;
                border-radius: 0rem;
            }

            /* contact details */

            contact_details .details h2,
            #form_details form h2 {
                font-size: 2.2rem;
            }

            #form_details .form_container .input_group {
                flex-direction: column;
            }

            #form_details .form_container .input_group input {
                width: 100%;
            }

            #form_details .people {
                grid-template-columns: repeat(1, 1fr);
            }

            #form_details .people div {
                gap: 1.5rem;
            }

            /* cart */


            #cart table {
                width: 100%;
                border-collapse: collapse;
                table-layout: fixed;
                white-space: nowrap;
            }

            #cart table img {
                width: 5rem;
            }


            #cart table td:nth-child(1) {
                width: 5rem;
            }

            #cart table td:nth-child(2) {
                width: 5rem;
            }

            #cart table td:nth-child(3) {
                width: 5rem;
            }

            #cart table td:nth-child(4),
            #cart table td:nth-child(5),
            #cart table td:nth-child(6) {
                width: 1rem;
            }

            #cart table td:nth-child(5) input {
                width: 3rem;
                padding: 0.5rem;
            }


            #cart table thead th {
                font-size: 1rem;
                padding: 1.8rem 0rem;
            }

            #cart table tbody tr td {
                padding-top: 1.5rem;
            }

            #cart table tbody td {
                font-size: 1rem;
            }



            /* cart add */

            #subtotal {
                padding: 1rem;
            }


            /* sing up */


            .auth_container {
                width: 100%;
                display: flex;
                align-items: center;
                height: 70vh;
                margin-top: 5rem;
                padding-bottom: 3rem;
            }

            /* check out */

            .section .section_p1 {
                padding: 0rem 1rem;
            }

            .check_out_container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-direction: column;
                width: 100%;
                border-bottom: 0.1rem solid var(--color-withe-2);
                padding-bottom: 2rem;
            }

            .check_out_form {
                width: 100%;
            }

            .check_out_content {
                width: 100%;
                margin-top: 3rem;
            }

            .check_out_img_date {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }

            .shi,
            .sub,
            .bank_check_with_img {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                margin-bottom: 3rem;
                border-bottom: 1px solid var(--color-dark-2);
                padding-bottom: 2rem;
            }

            .check_out_buttons input {
                padding: 1rem;
                color: var(--color-withe-1);
                margin-right: 1rem;
                outline: none;
                border: none;
                border-radius: 0.4rem;
                background-color: var(--color-withe-2);
                border: 1px solid var(--color-withe-2);
                font-size: 1.2rem;
            }

            .check_out_buttons button {
                padding: 1rem;
                color: var(--color-withe-1);
                background-color: var(--color-primary);
                border: none;
                outline: none;
                border-radius: 0.5rem;
                font-size: 1.2rem;
            }

            .order_btn {
                background-color: var(--color-primary);
                color: var(--color-withe-1);
                padding: 1rem 2rem;
                border: none;
                outline: none;
                border-radius: 0.5rem;
                font-size: 1.2rem;
                margin-bottom: 2rem;
            }

            .check_out_buttons {
                display: flex;
                gap: 1.7rem;
            }

            .sticky {
                position: static;
                top: 0px;
                left: 0px;
                right: 20px;
                z-index: 200;
                box-shadow: 0px 0px 5px 0px var(--color-dark-1);
                background-color: var(--color-withe-2);
            }

            .none {
                display: none;
            }

            .white {
                border: 1px solid var(--color-dark-1);
            }

        }
    </style>

</head>

<body>

    <header>
        <!-- header start -->

        <nav id="header">
            <a href="#"><img src="img/logo.png" class="logo" alt=""></a>
            <div class="nav_container">
                <ul id="navbar">
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li id="close_icons"><a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                    <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                    <div class="navbar-nav mr-sm-2" id="google_translate_element">
                        <div>
                </ul>
            </div>
            <div id="mobile">
                <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
                <i id="bar" class="fa-solid fa-bars"></i>
            </div>
        </nav>

        <!-- header end -->
    </header>

    <main>

        <!-- hero start -->

        <section id="hero">
            <h4>Trade-in-offer</h4>
            <h2>Super value deals</h2>
            <h1>On all products</h1>
            <p>Save more with coupons & up to 70% off!</p>
            <button>Shop Now</button>
        </section>

        <!-- hero end -->

        <!-- feature start -->

        <section id="feature" class="section_p1">
            <div class="fe_box">
                <img src="img/features/f1.png" alt="">
                <h6>Free Shipping</h6>
            </div>
            <div class="fe_box">
                <img src="img/features/f2.png" alt="">
                <h6>Online Order</h6>
            </div>
            <div class="fe_box">
                <img src="img/features/f3.png" alt="">
                <h6>Save Money</h6>
            </div>
            <div class="fe_box">
                <img src="img/features/f4.png" alt="">
                <h6>Promotions</h6>
            </div>
            <div class="fe_box">
                <img src="img/features/f5.png" alt="">
                <h6>Happy Sell</h6>
            </div>
            <div class="fe_box">
                <img src="img/features/f6.png" alt="">
                <h6>F24/7 Support</h6>
            </div>
        </section>

        <!-- feature end -->

        <!-- feature products start -->

        <section id="product1" class="section_p1">
            <h2>Featured Products</h2>
            <p>Summer Collection New Morden Design</p>
            <div class="pro_container">

                <div class="pro">
                    <img src="img/products/f1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$54</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/f2.jpg" alt="">
                    <div class="des">
                        <span>Puma</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/f3.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/f4.jpg" alt="">
                    <div class="des">
                        <span>FILA</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/f5.jpg" alt="">
                    <div class="des">
                        <span>Easy</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$88</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/f6.jpg" alt="">
                    <div class="des">
                        <span>FILA</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$47</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/f7.jpg" alt="">
                    <div class="des">
                        <span>Rebook</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/f8.jpg" alt="">
                    <div class="des">
                        <span>Puma</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$58</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
        </section>

        <!-- feature products end -->

        <!-- banner start -->

        <section id="banner" class="section_m1">
            <h4>Repair Services</h4>
            <h2>Up to <span>70% Off</span> - All t-Shirts & Accessories</h2>
            <button class="normal">Explore More</button>
        </section>
        <!-- banner end -->

        <!-- feature products start -->

        <section id="product1" class="section_p1">
            <h2>New Arrivals</h2>
            <p>Summer Collection New Morden Design</p>
            <div class="pro_container">

                <div class="pro">
                    <img src="img/products/n1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$54</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/n2.jpg" alt="">
                    <div class="des">
                        <span>Puma</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/n3.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/n4.jpg" alt="">
                    <div class="des">
                        <span>FILA</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/n5.jpg" alt="">
                    <div class="des">
                        <span>Easy</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$88</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/n6.jpg" alt="">
                    <div class="des">
                        <span>FILA</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$47</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/n7.jpg" alt="">
                    <div class="des">
                        <span>Rebook</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$78</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro">
                    <img src="img/products/n8.jpg" alt="">
                    <div class="des">
                        <span>Puma</span>
                        <h5>Cartoon Astronaut T-Shirts</h5>
                        <div class="start">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h4>$58</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            </div>
        </section>

        <!-- feature products end -->

        <!-- gallery start -->

        <section id="gallery" class="section_p1">
            <div class="banner_box1 banner_box">
                <h4>crazy deals</h4>
                <h2>Buy 1 Get 1 Free</h2>
                <span>The best classic dress in on sale at care</span>
                <button class="white">Learn More</button>
            </div>
            <div class="banner_box2 banner_box">
                <h4>spring/summer</h4>
                <h2>Upcoming Season</h2>
                <span>The best classic dress in on sale at care</span>
                <button class="white">Collection</button>
            </div>
            <div class="banner_box3 banner_box">
                <h2>Seasonal Sale</h2>
                <span>The best classic dress in on sale at care</span>
                <button class="white">Learn More</button>
            </div>
            <div class="banner_box4 banner_box">
                <h2>NEW FOOTWEAR COLLECTION</h2>
                <span>The best classic dress in on sale at care</span>
                <button class="white">Learn More</button>
            </div>

            <div class="banner_box5 banner_box">
                <h2>T-SHIRTS</h2>
                <span>The best classic dress in on sale at care</span>
                <button class="white">Learn More</button>
            </div>

        </section>

        <!-- gallery end -->


        <!-- newsletter start -->

        <section id="newsletter" class="section_p1 section_m1">
            <div class="news_text">
                <h4>Sing Up For Newsletters </h4>
                <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
            </div>
            <div class="form">
                <input type="text" placeholder="Your email address">
                <button class="normal">Sing Up</button>

            </div>
        </section>

        <!-- newsletter end -->

    </main>

    <footer class="" style="padding-bottom: 0px;">
        <div class="footer section_p1">
            <div class="col">
                <img class="logo" src="img/logo.png" alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong>562 Wellington Road, Street 32, San Francisco</p>
                <p><strong>Hours:</strong>10.00 - 18:00, Mon -Sat </p>
                <div class="follow">
                    <h4>Follow Us</h4>
                    <div class="icons">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-youtube"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>About</h4>
                <a href="about.html">About US</a>
                <a href="404_error.html">Delivery Information</a>
                <a href="404_error.html">Privacy Policy</a>
                <a href="404_error.html">Terms & Conditions</a>
                <a href="contact.html">Contact Us</a>
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="sing_up.html">Sing In</a>
                <a href="404_error.html">My Wishlist</a>
                <a href="404_error.html">Track My Order</a>
                <a href="404_error.html">Help</a>
                <a href="check_out.html">Check Out</a>
            </div>
            <div class="col install">
                <h4>Install App</h4>
                <p>From Store of Google Play</p>
                <div class="row">
                    <img src="img/pay/app.jpg" alt="">
                    <img src="img/pay/play.jpg" alt="">
                </div>
                <p>Secured Payment Gateways</p>
                <img src="img/pay/pay.png" alt="">
            </div>
        </div>
        <div class="copyright">
            <p><i class="fa-regular fa-copyright"></i> 2024, Cave E-Commerce Website</p>
        </div>
    </footer>


    <!-- link js file -->
    {{-- <script src="js/index.js"></script> --}}

    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                defaultLanguage: 'en',
                pageLanguage: 'en',
                includedLanguages: 'bn, de, nl, es,en',
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false,
                multilanguagePage: true
            }, 'google_translate_element');
        }
    </script>
</body>

</html>
