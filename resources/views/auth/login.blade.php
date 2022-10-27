@extends('layouts.app')

@section('content')




<section class="mt-48 md:mt-40 pb-20 relative bg-blueGray-100">



    <div class="container mx-auto px-4 pb-6 pt-20">
        <div class="items-center flex flex-wrap">
            <div class="w-full md:w-5/12 ml-auto px-12 md:px-4">
                <div class="md:pr-12">
                    <div
                        class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
                        <i class="fas fa-file-alt text-xl"></i></div>
                    {{-- <h3 class="text-3xl font-semibold">تسجيل الدخول</h3> --}}


                    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
                        <div class="w-full max-w-md space-y-8">
                          <div>
                            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">تسجيل الدخول</h2>
                            {{-- <p class="mt-2 text-center text-sm text-gray-600">
                              Or
                              <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">start your 14-day free trial</a>
                            </p> --}}
                          </div>
                          <form class="mt-8 space-y-6"  method="POST" action="{{ route('login') }}>
                            <input type="hidden" name="remember" value="true">
                            <div class="-space-y-px rounded-md shadow-sm">
                              <div>
                                <label for="email-address" class="sr-only">Email address</label>
                                <input id="email" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email address">
                              </div>
                              <div>
                                <label for="password" class="sr-only">Password</label>
                                <input id="password" name="password" type="password" autocomplete="current-password" required class=" form-control @error('password') is-invalid @enderror relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror



                            </div>
                            </div>


                            <div class="flex items-center justify-between">
                              <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                              </div>

                              <div class="text-sm">
                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                              </div>
                            </div>

                            <div>
                              <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                </span>
                                Sign in {{ __('Login') }}
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>



                    {{-- <div >
                        <div  >
                            <div >


                                <div >
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div  >
                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                            <div >
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div  >
                                            <label for="password"  >{{ __('Password') }}</label>

                                            <div >
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div  >
                                            <div >
                                                <div >
                                                    <input   type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label   for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div  >
                                            <div  >
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Login') }}
                                                </button>

                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
            <div class="w-full md:w-6/12 mr-auto px-4 pt-24 md:pt-0"><img alt="..."
                    class="max-w-full rounded-lg shadow-2xl"
                    src="/img/1.jpeg"
                    style="transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(0deg);"></div>
        </div>
    </div>
    <div class="justify-center text-center flex flex-wrap mt-24">
        <div class="w-full md:w-6/12 px-12 md:px-4">
            <h2 class="font-semibold text-4xl">شركة الأتقان الدائم</h2>
            <p class="text-lg leading-relaxed mt-4 mb-3 text-blueGray-500">شركة ذات مسؤولية محدودة  </p>
            <p class="text-lg leading-relaxed mt-4 mb-3 text-blueGray-500"> مقر الشركة في مدينة خميس مشيط </p>
            <p class="text-lg leading-relaxed mt-4 mb-3 text-blueGray-500"> البريد الالكتروني للشركة  info@test.com</p>
        </div>
    </div>
</section>








@endsection
