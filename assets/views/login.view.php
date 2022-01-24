<h1>User Login</h1>

<div class="container">
    <form method="POST" action="?page=login&action=loginUser" onsubmit="return false">
    <div class="mb-1">
        <label for="user_name" class="form-label">User Name</label>
        <input type="ext" class="form-control" name="user_name" placeholder="Enter your username" required>
    </div>
     <div class="mb-1">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
    </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('form').on('submit', function() {
            axios({
                url: '?page=login&function=login',
                method: 'POST',
                data: $(this).serialize(),
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(function(response) {
                if (response.data.success === true) {
                    window.localStorage.setItem('login', '1')
                    window.location.href = response.data.redirect
                }
            })

        });
    });
</script>