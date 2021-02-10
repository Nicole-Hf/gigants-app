<!DOCTYPE html>
<html lang="en">
    <body>
        <br />
        <div class="container box">
            <h3 align="center">Login</h3>
            <br />
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            <form method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary" value="Login" />
                </div>
            </form>
        </div>
    </body>
</html>

