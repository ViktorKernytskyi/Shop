@extends('layouts.main')


@section('content')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Item</td>
                    <td class="description">Description</td>
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
                        <a href="#" class="cart_quantity_delete" onclick="cartDelete('{{ $product->id }}')"><i class="fa fa-times">видалити</i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="chose_area">
                    <ul class="user_option">
                        <li>
                            <input class="testClass" type="checkbox">
                            <label>Use Coupon Code</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Use Gift Voucher</label>
                        </li>
                        <li>
                            <input type="checkbox">
                            <label>Estimate Shipping & Taxes</label>
                        </li>
                    </ul>
                    <ul class="user_info">
                        <li class="single_field">
                            <label>Country:</label>
                            <select>
                                <option>United States</option>
                                <option>Bangladesh</option>
                                <option>UK</option>
                                <option>India</option>
                                <option>Pakistan</option>
                                <option>Ucrane</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>

                        </li>
                        <li class="single_field">
                            <label>Region / State:</label>
                            <select>
                                <option>Select</option>
                                <option>Dhaka</option>
                                <option>London</option>
                                <option>Dillih</option>
                                <option>Lahore</option>
                                <option>Alaska</option>
                                <option>Canada</option>
                                <option>Dubai</option>
                            </select>

                        </li>
                        <li class="single_field zip-field">
                            <label>Zip Code:</label>
                            <input type="text">
                        </li>
                    </ul>
                    <a class="btn btn-default update" href="">Get Quotes</a>
                    <a class="btn btn-default check_out" href="">Continue</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="total_area" onclick="">
                    <ul>
                        <li>
                            Cart Sub Total
                            <span id="cartSubTotal">
                                UAH {{ number_format((float)(session()->get('cartTotal.sum')), 2, '.', '') }}
                            </span>
                        </li>
                        <li>
                            count
                            <span id="count">
                                int {{ number_format((float)(session()->get('cartTotal.count')), 2, '.', '') }}</span></li>
{{--                        <li>Shipping Cost <span>Free</span></li>--}}
                        <li>
                            Total
                            <span id = "Total">
                                UAH {{ number_format((float)(session()->get('cartTotal.sum')), 2, '.', '') }}
                            </span>
                        </li>


                    </ul>

                    <a class="btn btn-default update" href=" ">Update</a>
                    <a class="btn btn-default check_out" href="">Check Out</a>

                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->


@endsection
@section('script')
    <script src="{{ asset('assets/js/cart.js') }}"></script>
@endsection

