@extends('layouts.main')

@section('login')
    <section>
        <div class="wrapper">
            <span class="icon-close">
                <ion-icon name="close"></ion-icon>
            </span>

            <div class="form-box login">
                <form action="" method="post">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <input type="email" name="email" id="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <input type="password" name="password" id="password" required>
                        <label for="">Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label for=""><input type="checkbox">Remember me</label>
                        <a href="">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn" name="login">Login</button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <form action="" method="post">
                    <h2>Registration</h2>
                    <div class="inputbox">
                        <span class="icon">
                            <ion-icon name="person-circle-outline"></ion-icon>
                        </span>
                        <input type="text" name="username-register" id="username-register" required>
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <span class="icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </span>
                        <input type="email" name="email-register" id="email-register" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <input type="password" name="password-register" id="password-register" required>
                        <label for="">Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label for=""><input type="checkbox">Agree to the terms & conditions</label>
                    </div>
                    <button type="submit" class="btn" name="register">Register</button>
                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
