@extends('layouts.main')

@section('content')

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="{{ route('index')  }}">Home</a></li>
                    <li class="active">Check out</li>
                </ol>
            </div><!--/breadcrums-->

            <div class="step-one">
                <h2 class="heading">Step 1</h2>
            </div>
            <div class="checkout-options">
                <h3>New User</h3>
                <p>Checkout options</p>
                <ul class="nav">
                    <li>
                        <label><input type="checkbox" > Register Account </label>
{{--                        action="{{ route('register') }}"class="checkbox"--}}
                    </li>
                    <li>
                        <label><input type="checkbox"> Guest Checkout</label>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-times"></i>Cancel</a>
                    </li>
                </ul>
            </div><!--/checkout-options-->

            <div class="register-req">
                <p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
            </div><!--/register-req-->

            <div class="shopper-informations">
                <div class="row">
                    <div class="col-sm-3">
                            <div class="shopper-info">
                            <p>Shopper Information</p>
                            <form>
                                <input type="text" placeholder="Display Name">
                                <input type="text" placeholder= {{auth()->check() ? auth()->user()->name : 'User Name'}}>
                                <input type="password" placeholder="Password">
                                <input type="password" placeholder="Confirm password">
                            </form>
                            <a class="btn btn-primary" href="">Get Quotes</a>
                            <a class="btn btn-primary" href="">Continue</a>
                        </div>
                    </div>
                    <div class="col-sm-5 clearfix">
                        <div class="bill-to">
                            <p>Bill To</p>
                            <div class="form-one">
                                <form>
                                    <input type="text" placeholder="Company Name">
                                    <input type="text" placeholder="{{auth()->check()  ? auth()->user()->email : "Email*"}}">
                                    <input type="text" placeholder="Title">
                                    <input type="text" placeholder={{auth()->check()  ? auth()->user()->name : "First Name*"}}>
                                    <input type="text" placeholder="Middle Name">
                                    <input type="text" placeholder="Last Name *">
                                    <input type="text" placeholder="Address 1 *">
                                    <input type="text" placeholder="Address 2">
                                </form>
                            </div>
                            <div class="form-two">
                                <form>
                                    <input type="text" placeholder="Zip / Postal Code *">
                                    <select>
                                        <option>-- Country --</option>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Ukraine</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>
                                    <select>
                                        <option>-- State / Province / Region --</option>
                                        <option>United States</option>
                                        <option>Bangladesh</option>
                                        <option>UK</option>
                                        <option>India</option>
                                        <option>Pakistan</option>
                                        <option>Ukraine</option>
                                        <option>Canada</option>
                                        <option>Dubai</option>
                                    </select>
                                    <input type="password" placeholder="Confirm password">
                                    <input type="text" placeholder="Phone *">
                                    <input type="text" placeholder="Mobile Phone">
                                    <input type="text" placeholder="Fax">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="order-message">
                            <p>Shipping Order</p>
                            <textarea name="message"  placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                            <label><input type="checkbox"> Shipping to bill address</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="review-payment">
                <h2>Review & Payment</h2>
            </div>

            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($cart as $product_id=>$product)
                        <tr id="trId_{{ $product->id }}">
                            <td class="cart_product">
                                <a href="">
                                    <img width="110" height="110" src="{{ asset($product->image_path) }}" alt="">
                                </a>
                            </td>
                            <td class="cart_description">
                                <h4><a href="">{{ $product->name }}</a></h4>
                                <p>Web ID: {{ $product->id }}</p>
                            </td>
                            <td class="cart_price">
                                <p>UAH {{ $product->price }}</p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" onclick="addToCard('{{ $product->id }}')"> + </a>
                                    <input id="cartValue_{{ $product->id }}" class="cart_quantity_input" type="text" name="quantity" value="{{ $product->qty }}" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" onclick="addToCard('{{ $product->id }}', 'dec')"> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p id="priceId_{{ $product->id }}" class="cart_total_price">
                                    UAH {{ number_format((float)($product->price * $product->qty), 2, '.', '') }}
                                </p>
                            </td>
                            <td class="cart_delete">
                                <a href="#" class="cart_quantity_delete" onclick="cartDelete('{{ $product->id }}')"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    @endforeach

                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Cart Sub Total</td>
                                    <td id="cartSubTotal">
                                        UAH {{ number_format((float)(session()->get('cartTotal.sum')), 2, '.', '') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>Exo Tax</td>
                                    <td>Free</td>
                                </tr>
                                <tr class="shipping-cost">
                                    <td>Shipping Cost</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td id="Total">
                                        <span >
                                            UAH {{ number_format((float)(session()->get('cartTotal.sum')), 2, '.', '') }}
                                        </span>

                                    </td>

                                </tr>
                            </table>
                        </td>
                    </tr>

                    </tbody>

                </table>
            </div>

            <div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
                <span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
                <span>
						<label><input type="checkbox"> Paypal</label>
					</span>


                <div class="col-sm-4">
                    <div class="order-message">
{{--                        <a class="btn btn-primary"  href="{{ route('order.saveOrder')  }}">place an order</a>--}}
{{--                        @dd($cart);--}}
{{--                        @dd(session()->all());--}}
{{--                       @dd(session()->all()->$sum);--}}
                        <span id="cartSubTotal" >
                        <button href="#" class="btn btn-primary" onclick="createInvoice()">
                            place an order now
                        </button>
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </section> <!--/#cart_items-->


   @endsection


@section('script')
    <script src="{{ asset('assets/js/cart.js') }}"></script>
@endsection








