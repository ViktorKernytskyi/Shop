@extends('layouts.main')

@section('content')



    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Login to your account</h2>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <input type="email"  name="email"  placeholder="Email Address" />
                            <input type="password" name="password" placeholder="Password" />
                            <span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
                            <button type="submit" class="btn btn-default">Login</button>
                            <div class="col">
                                <h2 style="text-align:center">Login with Social Media</h2>
                                <a href="{{ route('github.login')  }}"class="git btn">
                                    <i class="fa fa-github" aria-hidden="true"></i> Login  with GitHub</a>
                            </div>

                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <input type="text" placeholder="Name" name="name"/>
                            <input type="email"  name="email" placeholder="Email Address "/>
                            <input type="password" name="password" placeholder="Password "/>
                            <button type="submit" class="btn btn-default">Signup</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->

    {{--    <button onclick="addToCard('{{ $product->id }}')">Click</button>--}}
@endsection


@section('script')
    <script src="{{ asset('assets/js/cart.js') }}"></script>
@endsection

