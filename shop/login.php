<!DOCTYPE html>
<html>
<head>
    <title>PDO - Create a Record - PHP CRUD Tutorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
        <form id="signinForm">
            <img class="mb-4" src="https://images.squarespace-cdn.com/content/v1/607f89e638219e13eee71b1e/1684821560422-SD5V37BAG28BURTLIXUQ/michael-sum-LEpfefQf4rU-unsplash.jpg" alt="" width="330" height="220">
            <h1 class="h3 mb-3 fw-normal">Sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email address</label>
                <div class="invalid-feedback">Please enter your email address.</div>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                <div class="invalid-feedback">Please enter your password.</div>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>   
    </main>

    <script>
    document.getElementById('signinForm').addEventListener('submit', function(event) {
        
        event.preventDefault();

       
        const email = document.getElementById('floatingInput');
        const password = document.getElementById('floatingPassword');

        // Regular expression to check for non-whitespace characters
        const hasContent = /\S/;

        
        if (!hasContent.test(email.value)) {
            email.classList.add('is-invalid');
        } else {
            email.classList.remove('is-invalid');
        }

        if (!hasContent.test(password.value)) {
            password.classList.add('is-invalid');
        } else {
            password.classList.remove('is-invalid');
        }

     
        if (hasContent.test(email.value) && hasContent.test(password.value)) {
            alert('Form submitted successfully!');
            
        }
    });
</script>

</body>
<style>
    html, body {
        height: 100%;
    }

    .form-signin {
        max-width: 440px;
        padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
</html>
