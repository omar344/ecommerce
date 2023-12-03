<!-- <?php include('header.php') ?>
<?php include('nav.php') ?> -->

<!DOCTYPE html>
<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');

        /* Global Styles */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        html {
            --black: #303030;
            --grey: #909090;
            --off-white: #EDEEE9;
            --code: #D8DBCE;
            position: relative;
            overflow-x: hidden;
            scroll-behavior: smooth;
            font-family: 'Inter', sans-serif;
            background-color: var(--off-white);
        }

        body {
            background-color: var(--off-white);
            color: var(--black);
            font-family: var(--sans-serif);
            min-height: 100vh;
            width: 100%;
            padding: 2.5vh 10vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        h1 {
            font-size: clamp(1rem, 6vw, 10rem);
            /* margin: 15vh 0 2rem; */
        }

        a {
            text-decoration: underline;
            color: var(--black);
        }

        code {
            font-size: 1rem;
            padding: 0 0.5rem;
            background-color: var(--code);
        }

        .explanation {
            width: 100%;
            margin-bottom: 15vh;
        }

        .explanation p {
            font-size: 1rem;
            max-width: 75ch;
            margin: 2rem 0;
        }

        .explanation ul:last-child {
            margin-bottom: 2rem;
        }

        .explanation ul {
            display: flex;
            flex-direction: column;
        }

        .explanation ul li {
            list-style: none;
            position: relative;
            margin: 0.5rem 0;
        }

        .explanation ul li::before {
            content: '👉';
            position: absolute;
            top: -0.25rem;
            left: -2rem;
        }

        .container {
            width: 100%;
            max-width: 768px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem 2rem 1.5rem;
            background-color: var(--code);
        }

        @media (min-width: 768px) {
            .container {
                flex-direction: row;
                align-items: center;
            }
        }

        .cta-form {
            margin-bottom: 2rem;
            text-align: center;
        }

        @media (min-width: 768px) {
            .cta-form {
                margin-bottom: 0;
                margin-right: 2rem;
                text-align: left;
            }
        }

        .cta-form h2 {
            font-size: 1.5rem;
            width: 100%;
            max-width: 25ch;
            margin: 0 auto;
            text-align: center;
        }

        @media (min-width: 768px) {
            .cta-form h2 {
                text-align: left;
                margin: 0;
            }
        }

        .cta-form p {
            margin-top: 1rem;
            font-size: 1rem;
            width: 100%;
            max-width: 24ch;
        }

        .form {
            align-self: center;
        }

        .form__input {
            width: clamp(120px, 50vw, 420px);
            height: 2.5rem;
            padding: 0 1.25rem;
            border: 1px solid var(--black);
            border-radius: 2px;
            margin: 0.625rem auto;
            transition: all 250ms;

            @media (min-width: 768px) {
                width: clamp(120px, 35vw, 420px);
            }

            &:focus {
                outline: none;
                border-top-color: rgba(0, 0, 0, 0.1);
            }

            &:focus+.form__label,
            &:not(:placeholder-shown)+.form__label {
                transform: translateY(-4.50rem) scale(1);
                color: var(--black);
            }

            &::placeholder {
                color: transparent;
                -webkit-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            &:not(:placeholder-shown) {
                border-top-color: rgba(0, 0, 0, 0.5);
            }
        }

        .form__label {
            font-size: 1rem;
            color: var(--grey);
            display: block;
            transform: translate(1.25rem, -2.5rem);
            transform-origin: 0 0;
            transition: all 500ms;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
            pointer-events: none;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button5 {
            background-color: white;
            color: black;
            border: 2px solid #555555;
        }

        .button5:hover {
            background-color: #555555;
            color: white;
        }
    </style>
</head>

<body>
    <!-- <h1>add product</h1> -->
    <div class="container">
        <div class="cta-form">
            <h2>Add product</h2>
            <p>Check out the comments for line by line explanations. Form-related code starts on line 145.</p>
        </div>
        <form class="form" action="insertProduct.php" method="post" enctype="multipart/form-data" novalidate>
            <input type="text" placeholder="serial" class="form__input" id="name" name="serial" required />
            <label for="name" class="form__label">serial</label>
            <input type="text" placeholder="Name" class="form__input" id="subject" name="name" required />
            <label for="subject" class="form__label">Name</label>
            <input type="text" placeholder="brand" class="form__input" id="name" name="brand" required />
            <label for="name" class="form__label">brand</label>
            <input type="email" placeholder="Salary" class="form__input" id="email" name="salary" required />
            <label for="email" class="form__label">Salary</label>
            <input type="text" placeholder="categoryName" class="form__input" id="subject" name="categoryName" required />
            <label for="subject" class="form__label">categoryName</label>
            <input type="text" placeholder="Status" class="form__input" id="subject" name="status" required />
            <label for="subject" class="form__label">status</label>
            <input type="text" placeholder="Offer" class="form__input" id="subject" name="offer" required />
            <label for="subject" class="form__label">Offer</label>
            <input type="file" placeholder="Image" class="form__input" id="email" name="img" required />
            <label for="email" class="form__label">Image</label>
            <button class="button button5" type="submit">add prouct</button>
            <a href="allProducts.php" class="button button5">all products</a>
        </form>
    </div>

</body>

</html>



<!-- <form class="row g-3 needs-validation" action="insertProduct.php" method="post" enctype="multipart/form-data" novalidate>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">serial</label>
        <input type="text" class="form-control" id="validationCustom01" name="serial" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label"> Image</label>
        <input type="file" class="form-control" id="validationCustom02" name="img" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">name</label>
        <input type="text" class="form-control" id="validationCustom02" name="name" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">brand</label>
        <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="brand" required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <label for="password" class="form-label">salary</label>
        <input type="text" class="form-control" id="password" name="salary" required>
        <div class="valid-feedback">
            Looks good!
        </div>
        <div class="col-md-4">
            <label for="password" class="form-label">categoryName</label>
            <input type="text" class="form-control" id="password" name="categoryName" required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <div class="col-md-4">
                <label for="password" class="form-label">status</label>
                <input type="text" class="form-control" id="password" name="status" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="col-md-4">
                    <label for="password" class="form-label">offer</label>
                    <input type="text" class="form-control" id="password" name="offer" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>



                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>
</form> -->

<!-- <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script> -->
<!-- <?php include('footer.php') ?> -->